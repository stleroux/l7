<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Config;
// use OwenIt\Auditing\Contracts\Auditable;

class InvoicerActivity extends Model
 // implements Auditable
{
   use SoftDeletes;
	use Sortable;
   // use \OwenIt\Auditing\Auditable;

	protected $table = 'invoicer__activities';

	protected $fillable = [
		'id',
		'invoice_id',
		'activity',
		'amount',
	];

	public $sortable = [
		'id',
      'activity',
		'created_at'
	];


   // Set the default value for the status field to 0
   protected $attributes = [
      'activity' => 0,
   ];

   public function getActivityAttribute($attribute)
   {
      return $this->activitiesOptions()[$attribute];
   }

   public function activitiesOptions()
   {
      return [
         // 0 => 'Select One',
         // 1 => 'Payment',
         // 2 => 'Discount',
         // 3 => 'Deposit',
         0 => 'Select One',
         'paymentAdd'      => 'Payment',
         'discountAdd'     => 'Discount',
         'depositAdd'      => 'Deposit',
         'paymentRemove'   => 'Remove Payment',
         'discountRemove'  => 'Remove Discount',
         'depositRemove'   => 'Remove Deposit',
      ];
   }

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
