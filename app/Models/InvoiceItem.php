<?php

namespace App\Models;

use App\Models\Base\InvoiceItem as BaseInvoiceItem;

class InvoiceItem extends BaseInvoiceItem
{
	protected $hidden = [
		self::IITEM_CREATED,
		self::IITEM_CREATER,
		self::IITEM_LASTUPD,
		self::IITEM_MODIFIER,
		self::IITEM_DEL
	];
}
