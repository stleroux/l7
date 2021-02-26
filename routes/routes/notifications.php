<?php

//////////////////////////////////////////////////////////////////////////////
// BACKEND NOTIFICATIONS ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {

   Route::get('notifications/unread', 'NotificationsController@unread')->name('notifications.unread');
   Route::get('notifications/read', 'NotificationsController@read')->name('notifications.read');
   Route::get('notifications/all', 'NotificationsController@all')->name('notifications.all');

   Route::delete('notifications/{id}', 'NotificationsController@destroy')->name('notifications.destroy');
   Route::get('notifications/destroyAll', 'NotificationsController@destroyAll')->name('notifications.destroyAll');

   Route::get('notifications/markAllAsRead', 'NotificationsController@markAllAsRead')->name('notifications.markAllAsRead');
   Route::get('notifications/markAllAsUnread', 'NotificationsController@markAllAsUnread')->name('notifications.markAllAsUnread');
   
   Route::get('notifications/{id}/markAsRead', 'NotificationsController@markAsRead')->name('notifications.markAsRead');
   Route::get('notifications/{id}/markAsUnread', 'NotificationsController@markAsUnread')->name('notifications.markAsUnread');

});