<?php

namespace App\Models;

use App\Models\Base\Invoice as BaseInvoice;

class Invoice extends BaseInvoice
{
	protected $hidden = [
		self::INV_CREATED,
		self::INV_CREATER,
		self::INV_LASTUPD,
		self::INV_MODIFIER,
		self::INV_DEL
	];

    public function __get($key)
    {
        return $this->getAttribute($key);
    }
}
