<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Carbon\Carbon;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificationsController extends Controller
{
##################################################################################################################
#  ██████  ██████  ███    ██ ███████ ████████ ██████  ██    ██  ██████ ████████ 
# ██      ██    ██ ████   ██ ██         ██    ██   ██ ██    ██ ██         ██    
# ██      ██    ██ ██ ██  ██ ███████    ██    ██████  ██    ██ ██         ██    
# ██      ██    ██ ██  ██ ██      ██    ██    ██   ██ ██    ██ ██         ██    
#  ██████  ██████  ██   ████ ███████    ██    ██   ██  ██████   ██████    ██    
##################################################################################################################
   public function __construct()
   {
      $this->middleware('auth');
   }


##################################################################################################################
# ██ ███    ██ ██████  ███████ ██   ██ 
# ██ ████   ██ ██   ██ ██       ██ ██  
# ██ ██ ██  ██ ██   ██ █████     ███   
# ██ ██  ██ ██ ██   ██ ██       ██ ██  
# ██ ██   ████ ██████  ███████ ██   ██ 
// Display a list of resources
##################################################################################################################
  
  public function all()
  {
    // Check if user has required permission
    // abort_unless(Gate::allows('bug-manage'), 403);

    $notifications = Auth()->user()->notifications->sortByDesc('created_at');
    // dd($notifications);

    return view('admin.notifications.index', compact('notifications'));
  }


  public function unread()
  {
    // Check if user has required permission
    // abort_unless(Gate::allows('bug-manage'), 403);

    $notifications = Auth()->user()->unreadNotifications->sortByDesc('created_at');
    // dd($notifications);

    return view('admin.notifications.index', compact('notifications'));
  }


  public function read()
  {
    // Check if user has required permission
    // abort_unless(Gate::allows('bug-manage'), 403);

    $notifications = Auth()->user()->readNotifications->sortByDesc('created_at');

    return view('admin.notifications.index', compact('notifications'));
  }


  public function markAsRead($id) {
    
    $notification = DB::table('notifications')
              ->where('id', $id)
              ->update(['read_at' => Carbon::Now()]);

    return redirect()->back();

  }


  public function markAsUnread($id) {
    
    $notification = DB::table('notifications')
              ->where('id', $id)
              ->update(['read_at' => null]);

    return redirect()->back();

  }


  public function markAllAsRead() {
    
    auth()->user()->unreadNotifications->markAsRead();

    return redirect()->back();

  }


  public function markAllAsUnread() {
    
    auth()->user()->readNotifications->markAsUnread();

    return redirect()->back();

  }


  public function destroy($id) {
    
    $notification = DB::table('notifications')
              ->where('id', $id)
              ->delete();

    return redirect()->back();

  }


  public function destroyAll() {
    
    $notifications = Auth()->user()->notifications;

    foreach($notifications as $notification){
      $notification->delete();
    }

    return redirect()->back();

  }


}
