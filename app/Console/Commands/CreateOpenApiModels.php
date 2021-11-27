<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class CreateOpenApiModels extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:openapi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Open Api models';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->call('code:models');
        $models = scandir(app_path('Models/Base'));
        foreach ($models as $model) {
            if (in_array($model, [".", ".."])) {
                continue;
            }

            $file = $properties = $getterSetters = [];
            $handle = fopen(app_path('Models/Base') . "/" . $model, "rw+");
            if ($handle) {
                $inserted = false;
                while (($line = fgets($handle)) !== false) {
                    $line = str_replace('Carbon', '\Carbon\Carbon', $line);
                    if (preg_match('/@property/', $line)) {
                        $property = preg_split('/ /', $line);
                        $property[5] = substr($property[4], 1);
                        $properties[] = '
	/**
     * @OA\Property(' . (preg_match('/Carbon/', $property[3]) ? '
     *     example="' . date("Y-m-d H:i:s") . '"' : '') . '
     * )
     * @var ' . $this->getOaType(trim($property[3]), $models) . '
     */
	private ' . trim($property[4]) . ';
';
                        $getterSetters[] = '
	/*
     * Getter - '.trim($property[5]).'
     *
	 * @return '.$this->getTypeHintType(trim($property[3])).'
	 */
    public function '.Str::camel('get_' . trim($property[5])).'(): '.$this->getTypeHintType(trim($property[3])).'
    {
        return $this->getAttribute(\''.trim($property[5]).'\');
    }

    /*
     * Setter - '.trim($property[5]).'
     *
     * @param '.trim($property[3]).' $value
     * @return void
     */
    public function '.Str::camel('set_' . trim($property[5])).'('.$this->getTypeHintType(trim($property[3])).' $value): void
    {
        $this->attributes[\''.trim($property[5]).'\'] = $value;
    }
';

                    } else if (preg_match('/^class /', $line)) {
                        $file[] = '
/** @OA\Schema( title="' . substr($model, 0, -4) . '" ) */
';
                    } else if (!$inserted && preg_match('/const /', $line)) {
                        $inserted = true;
                        $file[] = implode('', $properties);
                        $file[] = '
';
                    } else if (preg_match('/^}/', $line)) {
                        $file[] = implode('', $getterSetters);
                        $file[] = '
';
                    }
                    $file[] = $line;
                }
                fseek($handle, SEEK_SET);
                fwrite($handle, implode('', $file));
                fclose($handle);
            }
        }
        $this->info("Open Api documentation finished");
        return Command::SUCCESS;
    }

    /**
     * Calculate Open Api type.
     *
     * @param string $type
     * @param array $models
     * @return string
     */
    private function getOaType($type, $models = [])
    {
        $type = str_replace('bool', 'boolean', $type);
        $type = str_replace('Carbon', 'string', $type);
        $type = str_replace('Collection|', '\\App\\Models\\Base\\', $type);
        if (in_array($type . ".php", $models)) {
            $type = '\\App\\Models\\Base\\' . $type;
        }
        return $type;
    }

    /**
     * Calculate type hint type.
     *
     * @param string $type
     * @return string
     */
    private function getTypeHintType($type)
    {
        if (str_starts_with($type, 'Collection')) {
            $type = 'Collection';
        }

        return $type;
    }
}
