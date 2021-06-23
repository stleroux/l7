<?php

namespace App\Models;

use App\Models\InvoicerInvoice;
use App\Models\InvoicerInvoiceItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;
use OwenIt\Auditing\Contracts\Auditable;

class InvoicerProduct extends Model implements Auditable
{
	use Sortable;
	use \OwenIt\Auditing\Auditable;
	use SoftDeletes;

	protected $table = 'invoicer__products';

	protected $fillable = [
		'code',
		'details'
	];

	public $sortable = [
		'code',
		'details'
	];

//////////////////////////////////////////////////////////////////////////////////////
// RELATIONSHIPS
//////////////////////////////////////////////////////////////////////////////////////
	// A client has many invoices
	// public function invoices() {
	// 	// return $this->hasMany('App\Models\InvoicerInvoice')->orderBy('id','desc');
	// 	return $this->belongsToMany('App\Models\InvoicerInvoice', 'client_id')->orderBy('id', 'desc');
	// }

	public function items() {
		return $this->hasMany(InvoicerInvoiceItem::class);
	}

}
