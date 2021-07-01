<?php

namespace Database\Seeders;

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
                'id' => 1,
                'company_name' => 'TheWoodBarn.ca',
                'contact_name' => 'Stephane Leroux',
                'address' => '1216 Ste Marie Rd',
                'city' => 'Embrun',
                'state' => 'On',
                'zip' => 'K0A 1W0',
                'telephone' => '613-370-0275',
                'cell' => '613-402-0275',
                'fax' => NULL,
                'email' => 'stleroux@hotmail.ca',
                'website' => 'thewoodbarn.ca',
                'notes' => 'Notes go here',
                'created_at' => '2018-10-30 16:44:04',
                'updated_at' => '2021-02-03 06:01:26',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'company_name' => 'Dan Trim',
                'contact_name' => 'Dan Menard',
                'address' => '1000 Notre-Dame Street',
                'city' => 'Embrun',
                'state' => 'On',
                'zip' => 'K0A 1W0',
                'telephone' => '613 123 4567',
                'cell' => '613 456 4566',
                'fax' => NULL,
                'email' => 'test2@hotmail.com',
                'website' => NULL,
                'notes' => NULL,
                'created_at' => '2018-10-30 16:45:03',
                'updated_at' => '2019-07-25 23:38:10',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'company_name' => 'DFO',
                'contact_name' => 'Julien Tremblay',
                'address' => '200 Kent Street',
                'city' => 'Ottawa',
                'state' => 'On',
                'zip' => 'K1E 2F8',
                'telephone' => '613-444-7878',
                'cell' => NULL,
                'fax' => NULL,
                'email' => 'test1@test.com',
                'website' => NULL,
                'notes' => NULL,
                'created_at' => '2018-10-31 16:23:24',
                'updated_at' => '2021-05-28 13:43:48',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'company_name' => NULL,
                'contact_name' => 'Stacie Haynes',
                'address' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip' => NULL,
                'telephone' => '613-327-4722',
                'cell' => NULL,
                'fax' => NULL,
                'email' => 'stacie.haynes@hotmail.com',
                'website' => NULL,
                'notes' => NULL,
                'created_at' => '2019-07-25 23:28:07',
                'updated_at' => '2021-01-11 20:53:55',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 7,
                'company_name' => NULL,
                'contact_name' => 'Brenda Haynes',
                'address' => '14679 Shane Rd',
                'city' => 'Chrysler',
                'state' => 'Ontario',
                'zip' => NULL,
                'telephone' => '613-987-2995',
                'cell' => NULL,
                'fax' => NULL,
                'email' => 'brendahaynes@example.com',
                'website' => NULL,
                'notes' => NULL,
                'created_at' => '2021-01-12 16:51:32',
                'updated_at' => '2021-05-28 14:09:19',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 9,
                'company_name' => NULL,
                'contact_name' => 'Kyle Duperron-Haynes',
                'address' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip' => NULL,
                'telephone' => '123-456-7890',
                'cell' => NULL,
                'fax' => NULL,
                'email' => 'dupe@uottawa.ca',
                'website' => NULL,
                'notes' => NULL,
                'created_at' => '2021-02-08 22:04:00',
                'updated_at' => '2021-02-08 22:04:00',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 16,
                'company_name' => NULL,
                'contact_name' => 'Stephane Leroux',
                'address' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip' => NULL,
                'telephone' => '6137204618',
                'cell' => NULL,
                'fax' => NULL,
                'email' => 'stephane.leroux@dfo-mpo.gc.ca',
                'website' => NULL,
                'notes' => NULL,
                'created_at' => '2021-02-08 22:56:57',
                'updated_at' => '2021-02-08 22:56:57',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 17,
                'company_name' => NULL,
                'contact_name' => 'Dan Menard',
                'address' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip' => NULL,
                'telephone' => '565656565656565',
                'cell' => NULL,
                'fax' => NULL,
                'email' => 'stleroux@hotmail.ca',
                'website' => NULL,
                'notes' => NULL,
                'created_at' => '2021-02-09 06:29:46',
                'updated_at' => '2021-02-09 06:29:46',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 18,
                'company_name' => NULL,
                'contact_name' => 'Didier Boyayo',
                'address' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip' => NULL,
            'telephone' => '(613) 123-4567',
                'cell' => NULL,
                'fax' => NULL,
                'email' => 'didier.boyayo@test.com',
                'website' => NULL,
                'notes' => NULL,
                'created_at' => '2021-04-23 13:06:27',
                'updated_at' => '2021-04-23 13:06:27',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 22,
                'company_name' => NULL,
                'contact_name' => 'sasasasa',
                'address' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip' => NULL,
                'telephone' => 'ssssss',
                'cell' => NULL,
                'fax' => NULL,
                'email' => 'ssss@ddd.com',
                'website' => NULL,
                'notes' => NULL,
                'created_at' => '2021-06-25 13:48:03',
                'updated_at' => '2021-06-25 13:48:17',
                'deleted_at' => '2021-06-25 13:48:17',
            ),
        ));
        
        
    }
}