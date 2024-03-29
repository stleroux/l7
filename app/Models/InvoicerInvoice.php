<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Kyslik\ColumnSortable\Sortable;
use Carbon\Carbon;
use Config;
use OwenIt\Auditing\Contracts\Auditable;

class InvoicerInvoice extends Model implements Auditable
{
	// use Sortable;
   use \OwenIt\Auditing\Auditable;
   use SoftDeletes;

	protected $table = 'invoicer__invoices';

	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at',
		'invoiced_at',
      'quoted_at',
		'paid_at',
      'work_date'
	];

	protected $fillable = [
		'user_id',
		'notes',
		'status',
		'amount_charged',
		'hst',
		'sub_total',
		'wsib',
		'income_taxes',
		'total_deductions',
		'total',
		'invoiced_at',
		'paid_at',
      'quoted_at'
	];

	// public $sortable = [
	// 	'id',
	// 	'status',
	// 	'created_at',
	// 	'amount_charged',
	// 	'hst',
	// 	'sub_total',
	// 	'wsib',
	// 	'income_taxes',
	// 	'total_deductions',
	// 	'total',
	// 	'invoiced_at',
	// 	'paid_at'
	// ];


//////////////////////////////////////////////////////////////////////////////////////
// RELATIONSHIPS
//////////////////////////////////////////////////////////////////////////////////////
	// An invoice belongs to a client
	// public function client()
	// {
	// 	return $this->belongsTo('App\Models\InvoicerClient');
	// }
   public function client()
   {
      return $this->belongsTo('App\Models\User','client_id','id');
      // return $this->belongsTo('App/Artist','artist_id','id');
   }

	// An invoice has many items
	public function invoiceItems() {
		return $this->hasMany('App\Models\InvoicerInvoiceItem', 'invoice_id');
	}

   // An invoice has many activities
   public function activities() {
      return $this->hasMany('App\Models\InvoicerActivity', 'invoice_id')->orderBy('id','desc');
   }

   public function items(){
      return $this->hasManyThrough(InvoicerInvoiceItem::class, InvoicerInvoice::class);
   }

//////////////////////////////////////////////////////////////////////////////////////
// SCOPES
//////////////////////////////////////////////////////////////////////////////////////


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
   }

   public function getUpdatedAtAttribute($date)
   {
      if($date){
         $date = new \Carbon\Carbon($date);
         $date = $date->format(Config::get('settings.dateFormat'));
         return $date;
      }
   }

   public function getQuotedAtAttribute($date)
   {
      if($date){
         $date = new \Carbon\Carbon($date);
         $date = $date->format(Config::get('settings.dateFormat'));
         return $date;
      }
   }

   public function getEstimatedAtAttribute($date)
   {
      if($date){
         $date = new \Carbon\Carbon($date);
         $date = $date->format(Config::get('settings.dateFormat'));
         return $date;
      }
   }

   public function getInvoicedAtAttribute($date)
   {
      if($date){
         $date = new \Carbon\Carbon($date);
         $date = $date->format(Config::get('settings.dateFormat'));
         return $date;
      }
   }

   public function getPaidAtAttribute($date)
   {
      if($date){
         $date = new \Carbon\Carbon($date);
         $date = $date->format(Config::get('settings.dateFormat'));
         return $date;
      }
   }

   public function getWorkOrderAtAttribute($date)
   {
      if($date){
         $date = new \Carbon\Carbon($date);
         $date = $date->format(Config::get('settings.dateFormat'));
         return $date;
      }
   }

   public function getCompletedAtAttribute($date)
   {
      if($date){
         $date = new \Carbon\Carbon($date);
         $date = $date->format(Config::get('settings.dateFormat'));
         return $date;
      }
   }

   public function getShippedAtAttribute($date)
   {
      if($date){
         $date = new \Carbon\Carbon($date);
         $date = $date->format(Config::get('settings.dateFormat'));
         return $date;
      }
   }

   public function getPickedUpAtAttribute($date)
   {
      if($date){
         $date = new \Carbon\Carbon($date);
         $date = $date->format(Config::get('settings.dateFormat'));
         return $date;
      }
   }

   public function getCanceledAtAttribute($date)
   {
      if($date){
         $date = new \Carbon\Carbon($date);
         $date = $date->format(Config::get('settings.dateFormat'));
         return $date;
      }
   }

}

// public function getHST() {
// 	return number_format((float)$this->amount_charged * 0.13, 2, '.', ' ');
// }

// public function getTotal() {
// 	$result = DB::table('invoices')->selectRaw('sum(hst)')->get();
// 	return $result;
// }

// public function getWSIB() {
// 	return $this->amount_charged * 0.06;
// }

// public function getIncomeTaxes() {
// 	return $this->amount_charged * 0.26;
// }

// public function getSubTotal() {
// 	return number_format((float)$this->amount_charged + $this->hst, 2, '.', ' ');		
// }

// public function getTotalDeductions() {
// 	return number_format((float)$this->wsib + $this->income_taxes, 2, '.', ' ');

// }

// public function getNetTotal() {
// 	return number_format((float)$this->amount_charged - $this->wsib - $this->income_taxes, 2, '.', ' ');
// }