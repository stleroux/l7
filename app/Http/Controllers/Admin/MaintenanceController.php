<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\DartsGame;
use App\Models\DartsPlayer;
use App\Models\DartsScore;
use App\Models\InvoicerActivity;
use App\Models\InvoicerInvoice;
use App\Models\InvoicerInvoiceItem;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class MaintenanceController extends Controller
{

##################################################################################################################
#   ██████╗ ██████╗ ███╗   ██╗███████╗████████╗██████╗ ██╗   ██╗ ██████╗████████╗
#  ██╔════╝██╔═══██╗████╗  ██║██╔════╝╚══██╔══╝██╔══██╗██║   ██║██╔════╝╚══██╔══╝
#  ██║     ██║   ██║██╔██╗ ██║███████╗   ██║   ██████╔╝██║   ██║██║        ██║   
#  ██║     ██║   ██║██║╚██╗██║╚════██║   ██║   ██╔══██╗██║   ██║██║        ██║   
#  ╚██████╗╚██████╔╝██║ ╚████║███████║   ██║   ██║  ██║╚██████╔╝╚██████╗   ██║   
#   ╚═════╝ ╚═════╝ ╚═╝  ╚═══╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝  ╚═════╝   ╚═╝   
##################################################################################################################
   public function __construct()
   {
      $this->middleware('auth');
   }


##################################################################################################################
#  ██╗███╗   ██╗██████╗ ███████╗██╗  ██╗
#  ██║████╗  ██║██╔══██╗██╔════╝╚██╗██╔╝
#  ██║██╔██╗ ██║██║  ██║█████╗   ╚███╔╝ 
#  ██║██║╚██╗██║██║  ██║██╔══╝   ██╔██╗ 
#  ██║██║ ╚████║██████╔╝███████╗██╔╝ ██╗
#  ╚═╝╚═╝  ╚═══╝╚═════╝ ╚══════╝╚═╝  ╚═╝
# Display a list of resources
##################################################################################################################
   public function index()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('admin-maintenance'), 403);

      return view('admin.maintenance.index');
   }

   public function clearDartsData()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('admin-maintenance'), 403);

      DartsGame::truncate();
      DartsPlayer::truncate();
      DartsScore::truncate();

      $notification = [
         'message' => 'All Darts data has been deleted successfully!',
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
   }


   public function clearInvoicerData()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('admin-maintenance'), 403);

      InvoicerActivity::truncate();
      InvoicerInvoice::truncate();
      InvoicerInvoiceItem::truncate();
      // InvoicerClient::truncate();

      $notification = [
         'message' => 'All Invoicer data has been deleted successfully!',
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
   }


   public function clearAuditLogsData()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('admin-maintenance'), 403);

      DB::table('audits')->truncate();

      $notification = [
         'message' => 'All Audits logs have been deleted successfully!',
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
   }


   public function clearSystemLogsData()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('admin-maintenance'), 403);

      DB::table('logs')->truncate();

      $notification = [
         'message' => 'All System logs have been deleted successfully!',
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
   }


   public function clearNotificationsData()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('admin-maintenance'), 403);

      DB::table('notifications')->truncate();

      $notification = [
         'message' => 'All Notifications have been deleted successfully!',
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
   }


   public function clearViewsLogsData()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('admin-maintenance'), 403);

      DB::table('views')->truncate();

      $notification = [
         'message' => 'All Views logs have been deleted successfully!',
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
   }


   public function clearAllSystemData()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('admin-maintenance'), 403);

      DB::table('audits')->truncate();
      DB::table('logs')->truncate();
      DB::table('notifications')->truncate();
      DB::table('views')->truncate();

      $notification = [
         'message' => 'All System logs have been deleted successfully!',
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
   }

}
