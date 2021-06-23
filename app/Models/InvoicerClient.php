<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;
use OwenIt\Auditing\Contracts\Auditable;

class InvoicerClient extends Model implements Auditable
{
   use Sortable;
   use \OwenIt\Auditing\Auditable;
   use SoftDeletes;

   protected $table = 'invoicer__clients';

   protected $fillable = [
      'company_name',
      'contact_name',
      'address',
      'city',
      'state',
      'zip',
      'telephone',
      'cell',
      'fax',
      'email',
      'website'
   ];

   public $sortable = [
      'id',
      'company_name',
      'contact_name',
      'address',
      'city',
      'state',
      'zip',
      'telephone',
      'cell',
      'fax',
      'email',
      'website'
   ];

//////////////////////////////////////////////////////////////////////////////////////
// RELATIONSHIPS
//////////////////////////////////////////////////////////////////////////////////////
   // A client has many invoices
   public function invoices() {
      // return $this->hasMany('App\Models\InvoicerInvoice')->orderBy('id','desc');
      return $this->hasMany('App\Models\InvoicerInvoice', 'client_id')->orderBy('id', 'desc');
   }

   // A client has many invoices
   public function payments() {
      // return $this->hasMany('App\Models\InvoicerInvoice')->orderBy('id','desc');
      return $this->hasMany('App\Models\InvoicerActivity', 'client_id')->where('activity','payment')->orderBy('id', 'desc');
   }  
   // public function user() { 
   //    return $this->belongsTo('App\Models\User');
   // }


//////////////////////////////////////////////////////////////////////////////////////
// ACCESSORS
//////////////////////////////////////////////////////////////////////////////////////
   // public function getCreatedAtAttribute($date)
   // {
   //    if($date){
   //       $date = new \Carbon\Carbon($date);
   //       $date = $date->format(settings('dateFormat'));
   //       return $date;
   //    }
   
      // return 'N/A';
   // }

   // public function getUpdatedAtAttribute($date)
   // {
   //    if($date){
   //       $date = new \Carbon\Carbon($date);
   //       $date = $date->format(settings('dateFormat'));
   //       return $date;
   //    }
   
   //    // return 'N/A';
   // }


}
