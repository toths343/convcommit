<?php

namespace App\Models;

use App\Models\Base\Currency as BaseCurrency;

class Currency extends BaseCurrency
{
	protected $hidden = [
		self::CURR_CREATED,
		self::CURR_CREATER,
		self::CURR_LASTUPD,
		self::CURR_MODIFIER,
		self::CURR_DEL
	];
}
