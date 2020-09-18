<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class InvoicerProduct extends Model
{
	use Sortable;

	protected $table = 'invoicer__products';

	protected $fillable = [
		'code',
		'details'
	];

	public $sortable = [
		'code',
		'details'
	];

}
