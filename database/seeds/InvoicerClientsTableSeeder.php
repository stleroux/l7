<?php

// namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InvoicerClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('invoicer__clients')->delete();
        
        \DB::table('invoicer__clients')->insert(array (
            0 => 
            array (
                'address' => '1216 Ste Marie Rd',
                'cell' => '613-402-0275',
                'city' => 'Embrun',
                'company_name' => 'TheWoodBarn.ca',
                'contact_name' => 'Stephane Leroux',
                'created_at' => '2018-10-30 16:44:04',
                'email' => 'stleroux@hotmail.ca',
                'fax' => NULL,
                'id' => 1,
                'notes' => 'Notes 123',
                'state' => 'On',
                'telephone' => '613-370-0275',
                'updated_at' => '2021-01-08 14:28:14',
                'website' => 'thewoodbarn.ca',
                'zip' => 'K0A 1W0',
            ),
            1 => 
            array (
                'address' => '1000 Notre-Dame Street',
                'cell' => '613 456 4566',
                'city' => 'Embrun',
                'company_name' => 'Dan Trim',
                'contact_name' => 'Dan Menard',
                'created_at' => '2018-10-30 16:45:03',
                'email' => 'test2@hotmail.com',
                'fax' => NULL,
                'id' => 2,
                'notes' => NULL,
                'state' => 'On',
                'telephone' => '613 123 4567',
                'updated_at' => '2019-07-25 23:38:10',
                'website' => NULL,
                'zip' => 'K0A 1W0',
            ),
            2 => 
            array (
                'address' => '200 Kent Street',
                'cell' => NULL,
                'city' => 'Ottawa',
                'company_name' => 'DFO',
                'contact_name' => 'Julien Tremblay',
                'created_at' => '2018-10-31 16:23:24',
                'email' => 'test1@test1.com',
                'fax' => NULL,
                'id' => 3,
                'notes' => NULL,
                'state' => 'On',
                'telephone' => '613-444-7878',
                'updated_at' => '2018-10-31 16:23:24',
                'website' => NULL,
                'zip' => 'K1E 2F8',
            ),
            3 => 
            array (
                'address' => NULL,
                'cell' => NULL,
                'city' => NULL,
                'company_name' => NULL,
                'contact_name' => 'Stacie Haynes',
                'created_at' => '2019-07-25 23:28:07',
                'email' => 'stacie.haynes@hotmail.com',
                'fax' => NULL,
                'id' => 5,
                'notes' => NULL,
                'state' => NULL,
                'telephone' => '613-327-4722',
                'updated_at' => '2021-01-11 20:53:55',
                'website' => NULL,
                'zip' => NULL,
            ),
            4 => 
            array (
                'address' => NULL,
                'cell' => NULL,
                'city' => NULL,
                'company_name' => NULL,
                'contact_name' => 'Brenda Haynes',
                'created_at' => '2021-01-12 16:51:32',
                'email' => 'test@test.com',
                'fax' => NULL,
                'id' => 7,
                'notes' => NULL,
                'state' => NULL,
                'telephone' => '613-987-2995',
                'updated_at' => '2021-01-12 16:51:32',
                'website' => NULL,
                'zip' => NULL,
            ),
        ));
        
        
    }
}