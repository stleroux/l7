<?php

return [

   // The name of the Application \ Website
	'appName' => 'TheWoodBarn.ca',

   // The URL of the Application \ Website
   'appURL' => 'http://TheWoodBarn.ca',

   // The number of times a user has to login to the site before the "New User" panel will no longer be shown on the Homepage
	'loginCountWarning' => '500',
   
   // The information to display in Author modal or in tables and grids
   'authorFormat' => 'username',
   // "username", "last_name, first_name", "first_name last_name", ""
   
   // Specify the format of dates for the site
   'dateFormat' => 'M d, Y', // any valid php date format

   // Message to display when no records are found in the database
   'noRecordsFound' => 'No records found',

   // Site version number
   'siteVersionNo' => '2.0',

   // Invoicer version number
   'invoicerVersionNo' => '2.0',
   
   // The number of blog entries to show on the Homepage
   'homepageBlogCount' => '5',

   // The number of popular items to display in each block
   'popularCount' => '5',

   // The number of rows to return by default in Livewire tables
   'perPage' => '15',

   // Visibity settings for frontend modules
   'carvings' => 'visible',
   'projects' => 'visible',
   'recipes' => 'visible',
   'blog' => 'visible',
   'darts' => 'visible',

   // COMPANY INFORMATION
   'address' => '',
   'city' => '',
   'province' => '',
   'postalCode' => '',
   'phone' => '',
   
];