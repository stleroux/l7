<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;
use Config;
use OwenIt\Auditing\Contracts\Auditable;

class InvoicerInvoiceItem extends Model implements Auditable
{
	use Sortable;
   use \OwenIt\Auditing\Auditable;
   use SoftDeletes;

	protected $table = 'invoicer__invoice_items';
	protected $dates = ['work_date'];

	protected $fillable = [
		'invoice_id',
		'product_id',
		'notes',
		'work_date',
		'quantity',
		'price',
		'total'
	];

	public $sortable = [
		'id',
		'created_at'
	];


	// public function getTotal() {
	// 	return $this->price * $this->quantity;
	// }

//////////////////////////////////////////////////////////////////////////////////////
// RELATIONSHIPS
//////////////////////////////////////////////////////////////////////////////////////
	// An item belongs to an invoice
	public function invoice()
	{
		return $this->belongsTo('App\Models\InvoicerInvoice');
	}

	// A product belongs to an invoice
	public function product()
	{
		return $this->belongsTo('App\Models\InvoicerProduct');
	}


//////////////////////////////////////////////////////////////////////////////////////
// ACCESSORS
//////////////////////////////////////////////////////////////////////////////////////
   public function getCreatedAtAttribute($date)
   {
      if($date){
         $date = new \Carbon\Carbon($date);
         $date = $date->format(Config::get('settings.dateFormat'));
         return $date;
      }
      
      // return 'N/A';
   }

   public function getUpdatedAtAttribute($date)
   {
      if($date){
         $date = new \Carbon\Carbon($date);
         $date = $date->format(Config::get('settings.dateFormat'));
         return $date;
      }
      
      // return 'N/A';
   }

   public function formWorkDateAttribute($date)
   {
      // return Carbon::parse($date)->format('Y-m-d');
      return Carbon::parse($date)->format(Config::get('settings.dateFormat'));
      // return $date->format(Config::get('settings.dateFormat'));
   }

   public function getWorkDateAttribute($date)
   {
      // dd($date);
      if($date){
         $date = new \Carbon\Carbon($date);
         $date = $date->format(Config::get('settings.dateFormat'));
         return $date;
      }
      
      // return 'N/A';
   }


}
