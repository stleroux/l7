<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notifications')->delete();
        
        \DB::table('notifications')->insert(array (
            0 => 
            array (
                'id' => '0d171ef1-3f6a-40e4-ac28-d34c42017dc6',
                'type' => 'App\\Notifications\\Invoicer\\InvoiceCreatedNotification',
                'notifiable_type' => 'App\\Models\\User',
                'notifiable_id' => 2,
                'data' => '{"title":"created","client":2,"client_name":"Leroux","company_name":"TheWoodBarn.ca","invoiceNo":113}',
                'read_at' => NULL,
                'created_at' => '2021-07-01 06:50:20',
                'updated_at' => '2021-07-01 06:50:20',
            ),
            1 => 
            array (
                'id' => '1f5e3ed5-1f79-4a6b-ba71-7215aff6409d',
                'type' => 'App\\Notifications\\Invoicer\\InvoiceCreatedNotification',
                'notifiable_type' => 'App\\Models\\User',
                'notifiable_id' => 3,
                'data' => '{"title":"created","client":2,"client_name":"Leroux","company_name":"TheWoodBarn.ca","invoiceNo":111}',
                'read_at' => NULL,
                'created_at' => '2021-06-30 21:35:41',
                'updated_at' => '2021-06-30 21:35:41',
            ),
            2 => 
            array (
                'id' => '2421227d-e49b-4bc6-9256-58b7ca8de8fd',
                'type' => 'App\\Notifications\\Invoicer\\InvoiceCreatedNotification',
                'notifiable_type' => 'App\\Models\\User',
                'notifiable_id' => 1,
                'data' => '{"title":"created","client":2,"client_name":"Leroux","company_name":"TheWoodBarn.ca","invoiceNo":111}',
                'read_at' => NULL,
                'created_at' => '2021-06-30 21:35:41',
                'updated_at' => '2021-06-30 21:35:41',
            ),
            3 => 
            array (
                'id' => '2d69bd39-a3bb-4983-8e3c-8b0010e9ae42',
                'type' => 'App\\Notifications\\Invoicer\\InvoiceCreatedNotification',
                'notifiable_type' => 'App\\Models\\User',
                'notifiable_id' => 3,
                'data' => '{"title":"created","client":2,"client_name":"Leroux","company_name":"TheWoodBarn.ca","invoiceNo":113}',
                'read_at' => NULL,
                'created_at' => '2021-07-01 06:50:20',
                'updated_at' => '2021-07-01 06:50:20',
            ),
            4 => 
            array (
                'id' => '70e2aeee-bcb0-4293-ba2e-cb897c41419b',
                'type' => 'App\\Notifications\\Invoicer\\InvoiceCreatedNotification',
                'notifiable_type' => 'App\\Models\\User',
                'notifiable_id' => 2,
                'data' => '{"title":"created","client":2,"client_name":"Leroux","company_name":"TheWoodBarn.ca","invoiceNo":112}',
                'read_at' => NULL,
                'created_at' => '2021-06-30 21:40:46',
                'updated_at' => '2021-06-30 21:40:46',
            ),
            5 => 
            array (
                'id' => '7d258a40-46a8-43d2-9b12-87b20b5cc038',
                'type' => 'App\\Notifications\\Invoicer\\InvoiceCreatedNotification',
                'notifiable_type' => 'App\\Models\\User',
                'notifiable_id' => 2,
                'data' => '{"title":"created","client":2,"client_name":"Leroux","company_name":"TheWoodBarn.ca","invoiceNo":110}',
                'read_at' => NULL,
                'created_at' => '2021-06-30 21:27:46',
                'updated_at' => '2021-06-30 21:27:46',
            ),
            6 => 
            array (
                'id' => '803b6f50-c857-4d3a-b97b-645411763d67',
                'type' => 'App\\Notifications\\Invoicer\\InvoiceCreatedNotification',
                'notifiable_type' => 'App\\Models\\User',
                'notifiable_id' => 2,
                'data' => '{"title":"created","client":4,"client_name":"Tremblay","company_name":null,"invoiceNo":104}',
                'read_at' => NULL,
                'created_at' => '2021-06-26 09:45:25',
                'updated_at' => '2021-06-26 09:45:25',
            ),
            7 => 
            array (
                'id' => '9babe3cb-99a6-4194-9c69-7dc9384989d1',
                'type' => 'App\\Notifications\\Invoicer\\InvoiceCreatedNotification',
                'notifiable_type' => 'App\\Models\\User',
                'notifiable_id' => 1,
                'data' => '{"title":"created","client":2,"client_name":"Leroux","company_name":"TheWoodBarn.ca","invoiceNo":110}',
                'read_at' => NULL,
                'created_at' => '2021-06-30 21:27:46',
                'updated_at' => '2021-06-30 21:27:46',
            ),
            8 => 
            array (
                'id' => 'a1ed1dca-1065-4638-b16f-6510a785b9b0',
                'type' => 'App\\Notifications\\Invoicer\\InvoiceCreatedNotification',
                'notifiable_type' => 'App\\Models\\User',
                'notifiable_id' => 3,
                'data' => '{"title":"created","client":4,"client_name":"Tremblay","company_name":null,"invoiceNo":104}',
                'read_at' => NULL,
                'created_at' => '2021-06-26 09:45:25',
                'updated_at' => '2021-06-26 09:45:25',
            ),
            9 => 
            array (
                'id' => 'a6b921ec-8339-4ceb-9fcc-02f8c375b07a',
                'type' => 'App\\Notifications\\Invoicer\\BillableUpdateNotification',
                'notifiable_type' => 'App\\Models\\User',
                'notifiable_id' => 3,
                'data' => '{"title":"billable updated","id":72,"invoiceNo":112,"client":2,"client_name":null,"company_name":"TheWoodBarn.ca","product":"aaaaaaaaaa","quantity":"1","price":"18.00","total":18}',
                'read_at' => NULL,
                'created_at' => '2021-06-30 21:41:29',
                'updated_at' => '2021-06-30 21:41:29',
            ),
            10 => 
            array (
                'id' => 'b85cfa90-2bb5-4269-9d99-da9b536ffdfc',
                'type' => 'App\\Notifications\\Invoicer\\InvoiceCreatedNotification',
                'notifiable_type' => 'App\\Models\\User',
                'notifiable_id' => 2,
                'data' => '{"title":"created","client":2,"client_name":"Leroux","company_name":"TheWoodBarn.ca","invoiceNo":111}',
                'read_at' => NULL,
                'created_at' => '2021-06-30 21:35:41',
                'updated_at' => '2021-06-30 21:35:41',
            ),
            11 => 
            array (
                'id' => 'ba4229da-8e51-4924-9371-0dc7e2dd510d',
                'type' => 'App\\Notifications\\Invoicer\\InvoiceCreatedNotification',
                'notifiable_type' => 'App\\Models\\User',
                'notifiable_id' => 1,
                'data' => '{"title":"created","client":2,"client_name":"Leroux","company_name":"TheWoodBarn.ca","invoiceNo":113}',
                'read_at' => NULL,
                'created_at' => '2021-07-01 06:50:20',
                'updated_at' => '2021-07-01 06:50:20',
            ),
            12 => 
            array (
                'id' => 'c39f6adb-5e21-43a7-bdad-469bd70a0fbd',
                'type' => 'App\\Notifications\\Invoicer\\BillableUpdateNotification',
                'notifiable_type' => 'App\\Models\\User',
                'notifiable_id' => 2,
                'data' => '{"title":"billable updated","id":72,"invoiceNo":112,"client":2,"client_name":null,"company_name":"TheWoodBarn.ca","product":"aaaaaaaaaa","quantity":"1","price":"18.00","total":18}',
                'read_at' => NULL,
                'created_at' => '2021-06-30 21:41:29',
                'updated_at' => '2021-06-30 21:41:29',
            ),
            13 => 
            array (
                'id' => 'c46a6865-619b-416a-b2b3-ce34b8f3e838',
                'type' => 'App\\Notifications\\Invoicer\\InvoiceCreatedNotification',
                'notifiable_type' => 'App\\Models\\User',
                'notifiable_id' => 1,
                'data' => '{"title":"created","client":2,"client_name":"Leroux","company_name":"TheWoodBarn.ca","invoiceNo":112}',
                'read_at' => NULL,
                'created_at' => '2021-06-30 21:40:46',
                'updated_at' => '2021-06-30 21:40:46',
            ),
            14 => 
            array (
                'id' => 'dd64d4b8-0431-4167-9455-ca7b1da29ac2',
                'type' => 'App\\Notifications\\Invoicer\\InvoiceCreatedNotification',
                'notifiable_type' => 'App\\Models\\User',
                'notifiable_id' => 1,
                'data' => '{"title":"created","client":4,"client_name":"Tremblay","company_name":null,"invoiceNo":104}',
                'read_at' => NULL,
                'created_at' => '2021-06-26 09:45:25',
                'updated_at' => '2021-06-26 09:45:25',
            ),
            15 => 
            array (
                'id' => 'df11ab59-d9ed-4419-8a7a-0dfeea0a626d',
                'type' => 'App\\Notifications\\Invoicer\\InvoiceCreatedNotification',
                'notifiable_type' => 'App\\Models\\User',
                'notifiable_id' => 3,
                'data' => '{"title":"created","client":2,"client_name":"Leroux","company_name":"TheWoodBarn.ca","invoiceNo":110}',
                'read_at' => NULL,
                'created_at' => '2021-06-30 21:27:46',
                'updated_at' => '2021-06-30 21:27:46',
            ),
            16 => 
            array (
                'id' => 'ec2b18f0-d9ad-41a5-8ab0-1bb682fbc1c4',
                'type' => 'App\\Notifications\\Invoicer\\BillableUpdateNotification',
                'notifiable_type' => 'App\\Models\\User',
                'notifiable_id' => 1,
                'data' => '{"title":"billable updated","id":72,"invoiceNo":112,"client":2,"client_name":null,"company_name":"TheWoodBarn.ca","product":"aaaaaaaaaa","quantity":"1","price":"18.00","total":18}',
                'read_at' => NULL,
                'created_at' => '2021-06-30 21:41:29',
                'updated_at' => '2021-06-30 21:41:29',
            ),
            17 => 
            array (
                'id' => 'f97707ba-15e6-4abc-90ee-abe6af767d33',
                'type' => 'App\\Notifications\\Invoicer\\InvoiceCreatedNotification',
                'notifiable_type' => 'App\\Models\\User',
                'notifiable_id' => 3,
                'data' => '{"title":"created","client":2,"client_name":"Leroux","company_name":"TheWoodBarn.ca","invoiceNo":112}',
                'read_at' => NULL,
                'created_at' => '2021-06-30 21:40:46',
                'updated_at' => '2021-06-30 21:40:46',
            ),
        ));
        
        
    }
}