<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use OwenIt\Auditing\Contracts\Auditable;

class InvoicerProduct extends Model implements Auditable
{
	use Sortable;
	use \OwenIt\Auditing\Auditable;

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
