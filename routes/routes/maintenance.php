<?php

//////////////////////////////////////////////////////////////////////////////
// BACKEND ADMIN ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {

   Route::get('maintenance',           'MaintenanceController@index')             ->name('maintenance');
   Route::post('maintenance/clearDartsData', 'MaintenanceController@clearDartsData')->name('maintenance.clearDartsData');
   Route::post('maintenance/clearInvoicerData', 'MaintenanceController@clearInvoicerData')->name('maintenance.clearInvoicerData');
   Route::post('maintenance/clearAuditLogsData', 'MaintenanceController@clearAuditLogsData')->name('maintenance.clearAuditLogsData');
   Route::post('maintenance/clearSystemLogsData', 'MaintenanceController@clearSystemLogsData')->name('maintenance.clearSystemLogsData');
   Route::post('maintenance/clearNotificationsData', 'MaintenanceController@clearNotificationsData')->name('maintenance.clearNotificationsData');
   Route::post('maintenance/clearViewsLogsData', 'MaintenanceController@clearViewsLogsData')->name('maintenance.clearViewsLogsData');
   Route::post('maintenance/clearAllSystemData', 'MaintenanceController@clearAllSystemData')->name('maintenance.clearAllSystemData');

});
