<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\InvoiceItem;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Currency
 * 
 * @property int $curr_id
 * @property string $curr_sname
 * @property string $curr_lname
 * @property string $curr_sign
 * @property int $curr_order
 * @property Carbon $curr_created
 * @property string $curr_creater
 * @property Carbon $curr_lastupd
 * @property string $curr_modifier
 * @property Carbon|null $curr_del
 * 
 * @property Collection|InvoiceItem[] $invoice_items
 *
 * @package App\Models\Base
 */

/** @OA\Schema( title="Currency" ) */
class Currency extends Model
{

	/**
     * @OA\Property(
     * )
     * @var int
     */
	private $curr_id;

	/**
     * @OA\Property(
     * )
     * @var string
     */
	private $curr_sname;

	/**
     * @OA\Property(
     * )
     * @var string
     */
	private $curr_lname;

	/**
     * @OA\Property(
     * )
     * @var string
     */
	private $curr_sign;

	/**
     * @OA\Property(
     * )
     * @var int
     */
	private $curr_order;

	/**
     * @OA\Property(
     *     example="2021-11-26 09:31:41"
     * )
     * @var string
     */
	private $curr_created;

	/**
     * @OA\Property(
     * )
     * @var string
     */
	private $curr_creater;

	/**
     * @OA\Property(
     *     example="2021-11-26 09:31:41"
     * )
     * @var string
     */
	private $curr_lastupd;

	/**
     * @OA\Property(
     * )
     * @var string
     */
	private $curr_modifier;

	/**
     * @OA\Property(
     *     example="2021-11-26 09:31:41"
     * )
     * @var string|null
     */
	private $curr_del;

	/**
     * @OA\Property(
     * )
     * @var \App\Models\Base\InvoiceItem[]
     */
	private $invoice_items;

	const CURR_ID = 'curr_id';
	const CURR_SNAME = 'curr_sname';
	const CURR_LNAME = 'curr_lname';
	const CURR_SIGN = 'curr_sign';
	const CURR_ORDER = 'curr_order';
	const CURR_CREATED = 'curr_created';
	const CURR_CREATER = 'curr_creater';
	const CURR_LASTUPD = 'curr_lastupd';
	const CURR_MODIFIER = 'curr_modifier';
	const CURR_DEL = 'curr_del';
	protected $table = 'currency';
	protected $primaryKey = 'curr_id';
	public $timestamps = false;
	protected $dateFormat = 'Y.m.d H:i:s';

	protected $casts = [
		self::CURR_ID => 'int',
		self::CURR_ORDER => 'int'
	];

	protected $dates = [
		self::CURR_CREATED,
		self::CURR_LASTUPD,
		self::CURR_DEL
	];

	protected $fillable = [
		self::CURR_SNAME,
		self::CURR_LNAME,
		self::CURR_SIGN,
		self::CURR_ORDER,
		self::CURR_CREATER,
		self::CURR_MODIFIER,
		self::CURR_DEL
	];

	public function invoice_items()
	{
		return $this->hasMany(InvoiceItem::class, InvoiceItem::IITEM_CURR_ID);
	}

	/*
     * Getter - curr_id
     *
	 * @return int
	 */
    public function getCurrId(): int
    {
        return $this->getAttribute('curr_id');
    }

    /*
     * Setter - curr_id
     *
     * @param int $value
     * @return void
     */
    public function setCurrId(int $value): void
    {
        $this->attributes['curr_id'] = $value;
    }

	/*
     * Getter - curr_sname
     *
	 * @return string
	 */
    public function getCurrSname(): string
    {
        return $this->getAttribute('curr_sname');
    }

    /*
     * Setter - curr_sname
     *
     * @param string $value
     * @return void
     */
    public function setCurrSname(string $value): void
    {
        $this->attributes['curr_sname'] = $value;
    }

	/*
     * Getter - curr_lname
     *
	 * @return string
	 */
    public function getCurrLname(): string
    {
        return $this->getAttribute('curr_lname');
    }

    /*
     * Setter - curr_lname
     *
     * @param string $value
     * @return void
     */
    public function setCurrLname(string $value): void
    {
        $this->attributes['curr_lname'] = $value;
    }

	/*
     * Getter - curr_sign
     *
	 * @return string
	 */
    public function getCurrSign(): string
    {
        return $this->getAttribute('curr_sign');
    }

    /*
     * Setter - curr_sign
     *
     * @param string $value
     * @return void
     */
    public function setCurrSign(string $value): void
    {
        $this->attributes['curr_sign'] = $value;
    }

	/*
     * Getter - curr_order
     *
	 * @return int
	 */
    public function getCurrOrder(): int
    {
        return $this->getAttribute('curr_order');
    }

    /*
     * Setter - curr_order
     *
     * @param int $value
     * @return void
     */
    public function setCurrOrder(int $value): void
    {
        $this->attributes['curr_order'] = $value;
    }

	/*
     * Getter - curr_created
     *
	 * @return Carbon
	 */
    public function getCurrCreated(): Carbon
    {
        return $this->getAttribute('curr_created');
    }

    /*
     * Setter - curr_created
     *
     * @param Carbon $value
     * @return void
     */
    public function setCurrCreated(Carbon $value): void
    {
        $this->attributes['curr_created'] = $value;
    }

	/*
     * Getter - curr_creater
     *
	 * @return string
	 */
    public function getCurrCreater(): string
    {
        return $this->getAttribute('curr_creater');
    }

    /*
     * Setter - curr_creater
     *
     * @param string $value
     * @return void
     */
    public function setCurrCreater(string $value): void
    {
        $this->attributes['curr_creater'] = $value;
    }

	/*
     * Getter - curr_lastupd
     *
	 * @return Carbon
	 */
    public function getCurrLastupd(): Carbon
    {
        return $this->getAttribute('curr_lastupd');
    }

    /*
     * Setter - curr_lastupd
     *
     * @param Carbon $value
     * @return void
     */
    public function setCurrLastupd(Carbon $value): void
    {
        $this->attributes['curr_lastupd'] = $value;
    }

	/*
     * Getter - curr_modifier
     *
	 * @return string
	 */
    public function getCurrModifier(): string
    {
        return $this->getAttribute('curr_modifier');
    }

    /*
     * Setter - curr_modifier
     *
     * @param string $value
     * @return void
     */
    public function setCurrModifier(string $value): void
    {
        $this->attributes['curr_modifier'] = $value;
    }

	/*
     * Getter - curr_del
     *
	 * @return Carbon|null
	 */
    public function getCurrDel(): Carbon|null
    {
        return $this->getAttribute('curr_del');
    }

    /*
     * Setter - curr_del
     *
     * @param Carbon|null $value
     * @return void
     */
    public function setCurrDel(Carbon|null $value): void
    {
        $this->attributes['curr_del'] = $value;
    }

	/*
     * Getter - invoice_items
     *
	 * @return Collection
	 */
    public function getInvoiceItems(): Collection
    {
        return $this->getAttribute('invoice_items');
    }

    /*
     * Setter - invoice_items
     *
     * @param Collection|InvoiceItem[] $value
     * @return void
     */
    public function setInvoiceItems(Collection $value): void
    {
        $this->attributes['invoice_items'] = $value;
    }

}
