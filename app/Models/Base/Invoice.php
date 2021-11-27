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
 * Class Invoice
 * 
 * @property int $inv_id
 * @property string $inv_status
 * @property string $inv_type
 * @property Carbon $inv_year
 * @property string $inv_registration_number
 * @property string $inv_number
 * @property string $inv_subject
 * @property Carbon $inv_arrived_date
 * @property string $inv_payment_method
 * @property string|null $inv_bank_card_number
 * @property Carbon|null $inv_fulfillment_date
 * @property Carbon|null $inv_date_of_issue
 * @property Carbon|null $inv_payment_deadline
 * @property Carbon|null $inv_paid_date
 * @property bool $inv_payment_allowed
 * @property string|null $inv_description
 * @property float $inv_net_amount
 * @property float $inv_gross_amount
 * @property float $inv_vat_amount
 * @property float $inv_exchange_rate
 * @property float $inv_net_amount_huf
 * @property float $inv_gross_amount_huf
 * @property float $inv_vat_amount_huf
 * @property Carbon $inv_created
 * @property string $inv_creater
 * @property Carbon $inv_lastupd
 * @property string $inv_modifier
 * @property Carbon|null $inv_del
 * 
 * @property Collection|InvoiceItem[] $invoice_items
 *
 * @package App\Models\Base
 */

/** @OA\Schema( title="Invoice" ) */
class Invoice extends Model
{

	/**
     * @OA\Property(
     * )
     * @var int
     */
	private $inv_id;

	/**
     * @OA\Property(
     * )
     * @var string
     */
	private $inv_status;

	/**
     * @OA\Property(
     * )
     * @var string
     */
	private $inv_type;

	/**
     * @OA\Property(
     *     example="2021-11-26 09:31:41"
     * )
     * @var string
     */
	private $inv_year;

	/**
     * @OA\Property(
     * )
     * @var string
     */
	private $inv_registration_number;

	/**
     * @OA\Property(
     * )
     * @var string
     */
	private $inv_number;

	/**
     * @OA\Property(
     * )
     * @var string
     */
	private $inv_subject;

	/**
     * @OA\Property(
     *     example="2021-11-26 09:31:41"
     * )
     * @var string
     */
	private $inv_arrived_date;

	/**
     * @OA\Property(
     * )
     * @var string
     */
	private $inv_payment_method;

	/**
     * @OA\Property(
     * )
     * @var string|null
     */
	private $inv_bank_card_number;

	/**
     * @OA\Property(
     *     example="2021-11-26 09:31:41"
     * )
     * @var string|null
     */
	private $inv_fulfillment_date;

	/**
     * @OA\Property(
     *     example="2021-11-26 09:31:41"
     * )
     * @var string|null
     */
	private $inv_date_of_issue;

	/**
     * @OA\Property(
     *     example="2021-11-26 09:31:41"
     * )
     * @var string|null
     */
	private $inv_payment_deadline;

	/**
     * @OA\Property(
     *     example="2021-11-26 09:31:41"
     * )
     * @var string|null
     */
	private $inv_paid_date;

	/**
     * @OA\Property(
     * )
     * @var boolean
     */
	private $inv_payment_allowed;

	/**
     * @OA\Property(
     * )
     * @var string|null
     */
	private $inv_description;

	/**
     * @OA\Property(
     * )
     * @var float
     */
	private $inv_net_amount;

	/**
     * @OA\Property(
     * )
     * @var float
     */
	private $inv_gross_amount;

	/**
     * @OA\Property(
     * )
     * @var float
     */
	private $inv_vat_amount;

	/**
     * @OA\Property(
     * )
     * @var float
     */
	private $inv_exchange_rate;

	/**
     * @OA\Property(
     * )
     * @var float
     */
	private $inv_net_amount_huf;

	/**
     * @OA\Property(
     * )
     * @var float
     */
	private $inv_gross_amount_huf;

	/**
     * @OA\Property(
     * )
     * @var float
     */
	private $inv_vat_amount_huf;

	/**
     * @OA\Property(
     *     example="2021-11-26 09:31:41"
     * )
     * @var string
     */
	private $inv_created;

	/**
     * @OA\Property(
     * )
     * @var string
     */
	private $inv_creater;

	/**
     * @OA\Property(
     *     example="2021-11-26 09:31:41"
     * )
     * @var string
     */
	private $inv_lastupd;

	/**
     * @OA\Property(
     * )
     * @var string
     */
	private $inv_modifier;

	/**
     * @OA\Property(
     *     example="2021-11-26 09:31:41"
     * )
     * @var string|null
     */
	private $inv_del;

	/**
     * @OA\Property(
     * )
     * @var \App\Models\Base\InvoiceItem[]
     */
	private $invoice_items;

	const INV_ID = 'inv_id';
	const INV_STATUS = 'inv_status';
	const INV_TYPE = 'inv_type';
	const INV_YEAR = 'inv_year';
	const INV_REGISTRATION_NUMBER = 'inv_registration_number';
	const INV_NUMBER = 'inv_number';
	const INV_SUBJECT = 'inv_subject';
	const INV_ARRIVED_DATE = 'inv_arrived_date';
	const INV_PAYMENT_METHOD = 'inv_payment_method';
	const INV_BANK_CARD_NUMBER = 'inv_bank_card_number';
	const INV_FULFILLMENT_DATE = 'inv_fulfillment_date';
	const INV_DATE_OF_ISSUE = 'inv_date_of_issue';
	const INV_PAYMENT_DEADLINE = 'inv_payment_deadline';
	const INV_PAID_DATE = 'inv_paid_date';
	const INV_PAYMENT_ALLOWED = 'inv_payment_allowed';
	const INV_DESCRIPTION = 'inv_description';
	const INV_NET_AMOUNT = 'inv_net_amount';
	const INV_GROSS_AMOUNT = 'inv_gross_amount';
	const INV_VAT_AMOUNT = 'inv_vat_amount';
	const INV_EXCHANGE_RATE = 'inv_exchange_rate';
	const INV_NET_AMOUNT_HUF = 'inv_net_amount_huf';
	const INV_GROSS_AMOUNT_HUF = 'inv_gross_amount_huf';
	const INV_VAT_AMOUNT_HUF = 'inv_vat_amount_huf';
	const INV_CREATED = 'inv_created';
	const INV_CREATER = 'inv_creater';
	const INV_LASTUPD = 'inv_lastupd';
	const INV_MODIFIER = 'inv_modifier';
	const INV_DEL = 'inv_del';
	protected $table = 'invoice';
	protected $primaryKey = 'inv_id';
	public $timestamps = false;
	protected $dateFormat = 'Y.m.d H:i:s';

	protected $casts = [
		self::INV_ID => 'int',
		self::INV_PAYMENT_ALLOWED => 'bool',
		self::INV_NET_AMOUNT => 'float',
		self::INV_GROSS_AMOUNT => 'float',
		self::INV_VAT_AMOUNT => 'float',
		self::INV_EXCHANGE_RATE => 'float',
		self::INV_NET_AMOUNT_HUF => 'float',
		self::INV_GROSS_AMOUNT_HUF => 'float',
		self::INV_VAT_AMOUNT_HUF => 'float'
	];

	protected $dates = [
		self::INV_YEAR,
		self::INV_ARRIVED_DATE,
		self::INV_FULFILLMENT_DATE,
		self::INV_DATE_OF_ISSUE,
		self::INV_PAYMENT_DEADLINE,
		self::INV_PAID_DATE,
		self::INV_CREATED,
		self::INV_LASTUPD,
		self::INV_DEL
	];

	protected $fillable = [
		self::INV_STATUS,
		self::INV_TYPE,
		self::INV_YEAR,
		self::INV_REGISTRATION_NUMBER,
		self::INV_NUMBER,
		self::INV_SUBJECT,
		self::INV_ARRIVED_DATE,
		self::INV_PAYMENT_METHOD,
		self::INV_BANK_CARD_NUMBER,
		self::INV_FULFILLMENT_DATE,
		self::INV_DATE_OF_ISSUE,
		self::INV_PAYMENT_DEADLINE,
		self::INV_PAID_DATE,
		self::INV_PAYMENT_ALLOWED,
		self::INV_DESCRIPTION,
		self::INV_NET_AMOUNT,
		self::INV_GROSS_AMOUNT,
		self::INV_VAT_AMOUNT,
		self::INV_EXCHANGE_RATE,
		self::INV_NET_AMOUNT_HUF,
		self::INV_GROSS_AMOUNT_HUF,
		self::INV_VAT_AMOUNT_HUF,
		self::INV_CREATER,
		self::INV_MODIFIER,
		self::INV_DEL
	];

	public function invoice_items()
	{
		return $this->hasMany(InvoiceItem::class, InvoiceItem::IITEM_INV_ID);
	}

	/*
     * Getter - inv_id
     *
	 * @return int
	 */
    public function getInvId(): int
    {
        return $this->getAttribute('inv_id');
    }

    /*
     * Setter - inv_id
     *
     * @param int $value
     * @return void
     */
    public function setInvId(int $value): void
    {
        $this->attributes['inv_id'] = $value;
    }

	/*
     * Getter - inv_status
     *
	 * @return string
	 */
    public function getInvStatus(): string
    {
        return $this->getAttribute('inv_status');
    }

    /*
     * Setter - inv_status
     *
     * @param string $value
     * @return void
     */
    public function setInvStatus(string $value): void
    {
        $this->attributes['inv_status'] = $value;
    }

	/*
     * Getter - inv_type
     *
	 * @return string
	 */
    public function getInvType(): string
    {
        return $this->getAttribute('inv_type');
    }

    /*
     * Setter - inv_type
     *
     * @param string $value
     * @return void
     */
    public function setInvType(string $value): void
    {
        $this->attributes['inv_type'] = $value;
    }

	/*
     * Getter - inv_year
     *
	 * @return Carbon
	 */
    public function getInvYear(): Carbon
    {
        return $this->getAttribute('inv_year');
    }

    /*
     * Setter - inv_year
     *
     * @param Carbon $value
     * @return void
     */
    public function setInvYear(Carbon $value): void
    {
        $this->attributes['inv_year'] = $value;
    }

	/*
     * Getter - inv_registration_number
     *
	 * @return string
	 */
    public function getInvRegistrationNumber(): string
    {
        return $this->getAttribute('inv_registration_number');
    }

    /*
     * Setter - inv_registration_number
     *
     * @param string $value
     * @return void
     */
    public function setInvRegistrationNumber(string $value): void
    {
        $this->attributes['inv_registration_number'] = $value;
    }

	/*
     * Getter - inv_number
     *
	 * @return string
	 */
    public function getInvNumber(): string
    {
        return $this->getAttribute('inv_number');
    }

    /*
     * Setter - inv_number
     *
     * @param string $value
     * @return void
     */
    public function setInvNumber(string $value): void
    {
        $this->attributes['inv_number'] = $value;
    }

	/*
     * Getter - inv_subject
     *
	 * @return string
	 */
    public function getInvSubject(): string
    {
        return $this->getAttribute('inv_subject');
    }

    /*
     * Setter - inv_subject
     *
     * @param string $value
     * @return void
     */
    public function setInvSubject(string $value): void
    {
        $this->attributes['inv_subject'] = $value;
    }

	/*
     * Getter - inv_arrived_date
     *
	 * @return Carbon
	 */
    public function getInvArrivedDate(): Carbon
    {
        return $this->getAttribute('inv_arrived_date');
    }

    /*
     * Setter - inv_arrived_date
     *
     * @param Carbon $value
     * @return void
     */
    public function setInvArrivedDate(Carbon $value): void
    {
        $this->attributes['inv_arrived_date'] = $value;
    }

	/*
     * Getter - inv_payment_method
     *
	 * @return string
	 */
    public function getInvPaymentMethod(): string
    {
        return $this->getAttribute('inv_payment_method');
    }

    /*
     * Setter - inv_payment_method
     *
     * @param string $value
     * @return void
     */
    public function setInvPaymentMethod(string $value): void
    {
        $this->attributes['inv_payment_method'] = $value;
    }

	/*
     * Getter - inv_bank_card_number
     *
	 * @return string|null
	 */
    public function getInvBankCardNumber(): string|null
    {
        return $this->getAttribute('inv_bank_card_number');
    }

    /*
     * Setter - inv_bank_card_number
     *
     * @param string|null $value
     * @return void
     */
    public function setInvBankCardNumber(string|null $value): void
    {
        $this->attributes['inv_bank_card_number'] = $value;
    }

	/*
     * Getter - inv_fulfillment_date
     *
	 * @return Carbon|null
	 */
    public function getInvFulfillmentDate(): Carbon|null
    {
        return $this->getAttribute('inv_fulfillment_date');
    }

    /*
     * Setter - inv_fulfillment_date
     *
     * @param Carbon|null $value
     * @return void
     */
    public function setInvFulfillmentDate(Carbon|null $value): void
    {
        $this->attributes['inv_fulfillment_date'] = $value;
    }

	/*
     * Getter - inv_date_of_issue
     *
	 * @return Carbon|null
	 */
    public function getInvDateOfIssue(): Carbon|null
    {
        return $this->getAttribute('inv_date_of_issue');
    }

    /*
     * Setter - inv_date_of_issue
     *
     * @param Carbon|null $value
     * @return void
     */
    public function setInvDateOfIssue(Carbon|null $value): void
    {
        $this->attributes['inv_date_of_issue'] = $value;
    }

	/*
     * Getter - inv_payment_deadline
     *
	 * @return Carbon|null
	 */
    public function getInvPaymentDeadline(): Carbon|null
    {
        return $this->getAttribute('inv_payment_deadline');
    }

    /*
     * Setter - inv_payment_deadline
     *
     * @param Carbon|null $value
     * @return void
     */
    public function setInvPaymentDeadline(Carbon|null $value): void
    {
        $this->attributes['inv_payment_deadline'] = $value;
    }

	/*
     * Getter - inv_paid_date
     *
	 * @return Carbon|null
	 */
    public function getInvPaidDate(): Carbon|null
    {
        return $this->getAttribute('inv_paid_date');
    }

    /*
     * Setter - inv_paid_date
     *
     * @param Carbon|null $value
     * @return void
     */
    public function setInvPaidDate(Carbon|null $value): void
    {
        $this->attributes['inv_paid_date'] = $value;
    }

	/*
     * Getter - inv_payment_allowed
     *
	 * @return bool
	 */
    public function getInvPaymentAllowed(): bool
    {
        return $this->getAttribute('inv_payment_allowed');
    }

    /*
     * Setter - inv_payment_allowed
     *
     * @param bool $value
     * @return void
     */
    public function setInvPaymentAllowed(bool $value): void
    {
        $this->attributes['inv_payment_allowed'] = $value;
    }

	/*
     * Getter - inv_description
     *
	 * @return string|null
	 */
    public function getInvDescription(): string|null
    {
        return $this->getAttribute('inv_description');
    }

    /*
     * Setter - inv_description
     *
     * @param string|null $value
     * @return void
     */
    public function setInvDescription(string|null $value): void
    {
        $this->attributes['inv_description'] = $value;
    }

	/*
     * Getter - inv_net_amount
     *
	 * @return float
	 */
    public function getInvNetAmount(): float
    {
        return $this->getAttribute('inv_net_amount');
    }

    /*
     * Setter - inv_net_amount
     *
     * @param float $value
     * @return void
     */
    public function setInvNetAmount(float $value): void
    {
        $this->attributes['inv_net_amount'] = $value;
    }

	/*
     * Getter - inv_gross_amount
     *
	 * @return float
	 */
    public function getInvGrossAmount(): float
    {
        return $this->getAttribute('inv_gross_amount');
    }

    /*
     * Setter - inv_gross_amount
     *
     * @param float $value
     * @return void
     */
    public function setInvGrossAmount(float $value): void
    {
        $this->attributes['inv_gross_amount'] = $value;
    }

	/*
     * Getter - inv_vat_amount
     *
	 * @return float
	 */
    public function getInvVatAmount(): float
    {
        return $this->getAttribute('inv_vat_amount');
    }

    /*
     * Setter - inv_vat_amount
     *
     * @param float $value
     * @return void
     */
    public function setInvVatAmount(float $value): void
    {
        $this->attributes['inv_vat_amount'] = $value;
    }

	/*
     * Getter - inv_exchange_rate
     *
	 * @return float
	 */
    public function getInvExchangeRate(): float
    {
        return $this->getAttribute('inv_exchange_rate');
    }

    /*
     * Setter - inv_exchange_rate
     *
     * @param float $value
     * @return void
     */
    public function setInvExchangeRate(float $value): void
    {
        $this->attributes['inv_exchange_rate'] = $value;
    }

	/*
     * Getter - inv_net_amount_huf
     *
	 * @return float
	 */
    public function getInvNetAmountHuf(): float
    {
        return $this->getAttribute('inv_net_amount_huf');
    }

    /*
     * Setter - inv_net_amount_huf
     *
     * @param float $value
     * @return void
     */
    public function setInvNetAmountHuf(float $value): void
    {
        $this->attributes['inv_net_amount_huf'] = $value;
    }

	/*
     * Getter - inv_gross_amount_huf
     *
	 * @return float
	 */
    public function getInvGrossAmountHuf(): float
    {
        return $this->getAttribute('inv_gross_amount_huf');
    }

    /*
     * Setter - inv_gross_amount_huf
     *
     * @param float $value
     * @return void
     */
    public function setInvGrossAmountHuf(float $value): void
    {
        $this->attributes['inv_gross_amount_huf'] = $value;
    }

	/*
     * Getter - inv_vat_amount_huf
     *
	 * @return float
	 */
    public function getInvVatAmountHuf(): float
    {
        return $this->getAttribute('inv_vat_amount_huf');
    }

    /*
     * Setter - inv_vat_amount_huf
     *
     * @param float $value
     * @return void
     */
    public function setInvVatAmountHuf(float $value): void
    {
        $this->attributes['inv_vat_amount_huf'] = $value;
    }

	/*
     * Getter - inv_created
     *
	 * @return Carbon
	 */
    public function getInvCreated(): Carbon
    {
        return $this->getAttribute('inv_created');
    }

    /*
     * Setter - inv_created
     *
     * @param Carbon $value
     * @return void
     */
    public function setInvCreated(Carbon $value): void
    {
        $this->attributes['inv_created'] = $value;
    }

	/*
     * Getter - inv_creater
     *
	 * @return string
	 */
    public function getInvCreater(): string
    {
        return $this->getAttribute('inv_creater');
    }

    /*
     * Setter - inv_creater
     *
     * @param string $value
     * @return void
     */
    public function setInvCreater(string $value): void
    {
        $this->attributes['inv_creater'] = $value;
    }

	/*
     * Getter - inv_lastupd
     *
	 * @return Carbon
	 */
    public function getInvLastupd(): Carbon
    {
        return $this->getAttribute('inv_lastupd');
    }

    /*
     * Setter - inv_lastupd
     *
     * @param Carbon $value
     * @return void
     */
    public function setInvLastupd(Carbon $value): void
    {
        $this->attributes['inv_lastupd'] = $value;
    }

	/*
     * Getter - inv_modifier
     *
	 * @return string
	 */
    public function getInvModifier(): string
    {
        return $this->getAttribute('inv_modifier');
    }

    /*
     * Setter - inv_modifier
     *
     * @param string $value
     * @return void
     */
    public function setInvModifier(string $value): void
    {
        $this->attributes['inv_modifier'] = $value;
    }

	/*
     * Getter - inv_del
     *
	 * @return Carbon|null
	 */
    public function getInvDel(): Carbon|null
    {
        return $this->getAttribute('inv_del');
    }

    /*
     * Setter - inv_del
     *
     * @param Carbon|null $value
     * @return void
     */
    public function setInvDel(Carbon|null $value): void
    {
        $this->attributes['inv_del'] = $value;
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
