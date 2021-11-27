<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Currency;
use App\Models\Invoice;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class InvoiceItem
 * 
 * @property int $iitem_id
 * @property int $iitem_inv_id
 * @property int $iitem_curr_id
 * @property string $iitem_name
 * @property string|null $iitem_description
 * @property int $iitem_quantity
 * @property string $iitem_unit
 * @property float $iitem_unit_amount
 * @property float $iitem_net_amount
 * @property float $iitem_gross_amount
 * @property float $iitem_vat_amount
 * @property Carbon $iitem_created
 * @property string $iitem_creater
 * @property Carbon $iitem_lastupd
 * @property string $iitem_modifier
 * @property Carbon|null $iitem_del
 * 
 * @property Currency $currency
 * @property Invoice $invoice
 *
 * @package App\Models\Base
 */

/** @OA\Schema( title="InvoiceItem" ) */
class InvoiceItem extends Model
{

	/**
     * @OA\Property(
     * )
     * @var int
     */
	private $iitem_id;

	/**
     * @OA\Property(
     * )
     * @var int
     */
	private $iitem_inv_id;

	/**
     * @OA\Property(
     * )
     * @var int
     */
	private $iitem_curr_id;

	/**
     * @OA\Property(
     * )
     * @var string
     */
	private $iitem_name;

	/**
     * @OA\Property(
     * )
     * @var string|null
     */
	private $iitem_description;

	/**
     * @OA\Property(
     * )
     * @var int
     */
	private $iitem_quantity;

	/**
     * @OA\Property(
     * )
     * @var string
     */
	private $iitem_unit;

	/**
     * @OA\Property(
     * )
     * @var float
     */
	private $iitem_unit_amount;

	/**
     * @OA\Property(
     * )
     * @var float
     */
	private $iitem_net_amount;

	/**
     * @OA\Property(
     * )
     * @var float
     */
	private $iitem_gross_amount;

	/**
     * @OA\Property(
     * )
     * @var float
     */
	private $iitem_vat_amount;

	/**
     * @OA\Property(
     *     example="2021-11-26 09:31:41"
     * )
     * @var string
     */
	private $iitem_created;

	/**
     * @OA\Property(
     * )
     * @var string
     */
	private $iitem_creater;

	/**
     * @OA\Property(
     *     example="2021-11-26 09:31:41"
     * )
     * @var string
     */
	private $iitem_lastupd;

	/**
     * @OA\Property(
     * )
     * @var string
     */
	private $iitem_modifier;

	/**
     * @OA\Property(
     *     example="2021-11-26 09:31:41"
     * )
     * @var string|null
     */
	private $iitem_del;

	/**
     * @OA\Property(
     * )
     * @var \App\Models\Base\Currency
     */
	private $currency;

	/**
     * @OA\Property(
     * )
     * @var \App\Models\Base\Invoice
     */
	private $invoice;

	const IITEM_ID = 'iitem_id';
	const IITEM_INV_ID = 'iitem_inv_id';
	const IITEM_CURR_ID = 'iitem_curr_id';
	const IITEM_NAME = 'iitem_name';
	const IITEM_DESCRIPTION = 'iitem_description';
	const IITEM_QUANTITY = 'iitem_quantity';
	const IITEM_UNIT = 'iitem_unit';
	const IITEM_UNIT_AMOUNT = 'iitem_unit_amount';
	const IITEM_NET_AMOUNT = 'iitem_net_amount';
	const IITEM_GROSS_AMOUNT = 'iitem_gross_amount';
	const IITEM_VAT_AMOUNT = 'iitem_vat_amount';
	const IITEM_CREATED = 'iitem_created';
	const IITEM_CREATER = 'iitem_creater';
	const IITEM_LASTUPD = 'iitem_lastupd';
	const IITEM_MODIFIER = 'iitem_modifier';
	const IITEM_DEL = 'iitem_del';
	protected $table = 'invoice_item';
	protected $primaryKey = 'iitem_id';
	public $timestamps = false;
	protected $dateFormat = 'Y.m.d H:i:s';

	protected $casts = [
		self::IITEM_ID => 'int',
		self::IITEM_INV_ID => 'int',
		self::IITEM_CURR_ID => 'int',
		self::IITEM_QUANTITY => 'int',
		self::IITEM_UNIT_AMOUNT => 'float',
		self::IITEM_NET_AMOUNT => 'float',
		self::IITEM_GROSS_AMOUNT => 'float',
		self::IITEM_VAT_AMOUNT => 'float'
	];

	protected $dates = [
		self::IITEM_CREATED,
		self::IITEM_LASTUPD,
		self::IITEM_DEL
	];

	protected $fillable = [
		self::IITEM_INV_ID,
		self::IITEM_CURR_ID,
		self::IITEM_NAME,
		self::IITEM_DESCRIPTION,
		self::IITEM_QUANTITY,
		self::IITEM_UNIT,
		self::IITEM_UNIT_AMOUNT,
		self::IITEM_NET_AMOUNT,
		self::IITEM_GROSS_AMOUNT,
		self::IITEM_VAT_AMOUNT,
		self::IITEM_CREATER,
		self::IITEM_MODIFIER,
		self::IITEM_DEL
	];

	public function currency()
	{
		return $this->belongsTo(Currency::class, InvoiceItem::IITEM_CURR_ID);
	}

	public function invoice()
	{
		return $this->belongsTo(Invoice::class, InvoiceItem::IITEM_INV_ID);
	}

	/*
     * Getter - iitem_id
     *
	 * @return int
	 */
    public function getIitemId(): int
    {
        return $this->getAttribute('iitem_id');
    }

    /*
     * Setter - iitem_id
     *
     * @param int $value
     * @return void
     */
    public function setIitemId(int $value): void
    {
        $this->attributes['iitem_id'] = $value;
    }

	/*
     * Getter - iitem_inv_id
     *
	 * @return int
	 */
    public function getIitemInvId(): int
    {
        return $this->getAttribute('iitem_inv_id');
    }

    /*
     * Setter - iitem_inv_id
     *
     * @param int $value
     * @return void
     */
    public function setIitemInvId(int $value): void
    {
        $this->attributes['iitem_inv_id'] = $value;
    }

	/*
     * Getter - iitem_curr_id
     *
	 * @return int
	 */
    public function getIitemCurrId(): int
    {
        return $this->getAttribute('iitem_curr_id');
    }

    /*
     * Setter - iitem_curr_id
     *
     * @param int $value
     * @return void
     */
    public function setIitemCurrId(int $value): void
    {
        $this->attributes['iitem_curr_id'] = $value;
    }

	/*
     * Getter - iitem_name
     *
	 * @return string
	 */
    public function getIitemName(): string
    {
        return $this->getAttribute('iitem_name');
    }

    /*
     * Setter - iitem_name
     *
     * @param string $value
     * @return void
     */
    public function setIitemName(string $value): void
    {
        $this->attributes['iitem_name'] = $value;
    }

	/*
     * Getter - iitem_description
     *
	 * @return string|null
	 */
    public function getIitemDescription(): string|null
    {
        return $this->getAttribute('iitem_description');
    }

    /*
     * Setter - iitem_description
     *
     * @param string|null $value
     * @return void
     */
    public function setIitemDescription(string|null $value): void
    {
        $this->attributes['iitem_description'] = $value;
    }

	/*
     * Getter - iitem_quantity
     *
	 * @return int
	 */
    public function getIitemQuantity(): int
    {
        return $this->getAttribute('iitem_quantity');
    }

    /*
     * Setter - iitem_quantity
     *
     * @param int $value
     * @return void
     */
    public function setIitemQuantity(int $value): void
    {
        $this->attributes['iitem_quantity'] = $value;
    }

	/*
     * Getter - iitem_unit
     *
	 * @return string
	 */
    public function getIitemUnit(): string
    {
        return $this->getAttribute('iitem_unit');
    }

    /*
     * Setter - iitem_unit
     *
     * @param string $value
     * @return void
     */
    public function setIitemUnit(string $value): void
    {
        $this->attributes['iitem_unit'] = $value;
    }

	/*
     * Getter - iitem_unit_amount
     *
	 * @return float
	 */
    public function getIitemUnitAmount(): float
    {
        return $this->getAttribute('iitem_unit_amount');
    }

    /*
     * Setter - iitem_unit_amount
     *
     * @param float $value
     * @return void
     */
    public function setIitemUnitAmount(float $value): void
    {
        $this->attributes['iitem_unit_amount'] = $value;
    }

	/*
     * Getter - iitem_net_amount
     *
	 * @return float
	 */
    public function getIitemNetAmount(): float
    {
        return $this->getAttribute('iitem_net_amount');
    }

    /*
     * Setter - iitem_net_amount
     *
     * @param float $value
     * @return void
     */
    public function setIitemNetAmount(float $value): void
    {
        $this->attributes['iitem_net_amount'] = $value;
    }

	/*
     * Getter - iitem_gross_amount
     *
	 * @return float
	 */
    public function getIitemGrossAmount(): float
    {
        return $this->getAttribute('iitem_gross_amount');
    }

    /*
     * Setter - iitem_gross_amount
     *
     * @param float $value
     * @return void
     */
    public function setIitemGrossAmount(float $value): void
    {
        $this->attributes['iitem_gross_amount'] = $value;
    }

	/*
     * Getter - iitem_vat_amount
     *
	 * @return float
	 */
    public function getIitemVatAmount(): float
    {
        return $this->getAttribute('iitem_vat_amount');
    }

    /*
     * Setter - iitem_vat_amount
     *
     * @param float $value
     * @return void
     */
    public function setIitemVatAmount(float $value): void
    {
        $this->attributes['iitem_vat_amount'] = $value;
    }

	/*
     * Getter - iitem_created
     *
	 * @return Carbon
	 */
    public function getIitemCreated(): Carbon
    {
        return $this->getAttribute('iitem_created');
    }

    /*
     * Setter - iitem_created
     *
     * @param Carbon $value
     * @return void
     */
    public function setIitemCreated(Carbon $value): void
    {
        $this->attributes['iitem_created'] = $value;
    }

	/*
     * Getter - iitem_creater
     *
	 * @return string
	 */
    public function getIitemCreater(): string
    {
        return $this->getAttribute('iitem_creater');
    }

    /*
     * Setter - iitem_creater
     *
     * @param string $value
     * @return void
     */
    public function setIitemCreater(string $value): void
    {
        $this->attributes['iitem_creater'] = $value;
    }

	/*
     * Getter - iitem_lastupd
     *
	 * @return Carbon
	 */
    public function getIitemLastupd(): Carbon
    {
        return $this->getAttribute('iitem_lastupd');
    }

    /*
     * Setter - iitem_lastupd
     *
     * @param Carbon $value
     * @return void
     */
    public function setIitemLastupd(Carbon $value): void
    {
        $this->attributes['iitem_lastupd'] = $value;
    }

	/*
     * Getter - iitem_modifier
     *
	 * @return string
	 */
    public function getIitemModifier(): string
    {
        return $this->getAttribute('iitem_modifier');
    }

    /*
     * Setter - iitem_modifier
     *
     * @param string $value
     * @return void
     */
    public function setIitemModifier(string $value): void
    {
        $this->attributes['iitem_modifier'] = $value;
    }

	/*
     * Getter - iitem_del
     *
	 * @return Carbon|null
	 */
    public function getIitemDel(): Carbon|null
    {
        return $this->getAttribute('iitem_del');
    }

    /*
     * Setter - iitem_del
     *
     * @param Carbon|null $value
     * @return void
     */
    public function setIitemDel(Carbon|null $value): void
    {
        $this->attributes['iitem_del'] = $value;
    }

	/*
     * Getter - currency
     *
	 * @return Currency
	 */
    public function getCurrency(): Currency
    {
        return $this->getAttribute('currency');
    }

    /*
     * Setter - currency
     *
     * @param Currency $value
     * @return void
     */
    public function setCurrency(Currency $value): void
    {
        $this->attributes['currency'] = $value;
    }

	/*
     * Getter - invoice
     *
	 * @return Invoice
	 */
    public function getInvoice(): Invoice
    {
        return $this->getAttribute('invoice');
    }

    /*
     * Setter - invoice
     *
     * @param Invoice $value
     * @return void
     */
    public function setInvoice(Invoice $value): void
    {
        $this->attributes['invoice'] = $value;
    }

}
