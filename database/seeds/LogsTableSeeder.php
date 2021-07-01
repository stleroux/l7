<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('logs')->delete();
        
        \DB::table('logs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'log_date' => '2021-02-13 22:57:49',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.152 Safari\\/537.36"}',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'log_date' => '2021-02-13 23:01:53',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.152 Safari\\/537.36"}',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'log_date' => '2021-02-13 23:05:39',
                'table_name' => 'bugs',
                'log_type' => 'edit',
                'data' => '{"id":56,"title":"Test bug 123","page_url":null,"description":"<p>Test bug<\\/p>","resolution":null,"status":"New","user_id":2,"created_at":"2021-01-31T12:17:49.000000Z","updated_at":"2021-02-14T04:03:25.000000Z","deleted_at":null}',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'log_date' => '2021-02-13 23:06:52',
                'table_name' => 'bugs',
                'log_type' => 'create',
                'data' => '{"status":"New","title":"My new bug report","page_url":"asasasasa","description":"<p>sasa as as a&nbsp;<\\/p>","user_id":2,"updated_at":"2021-02-14T04:06:52.000000Z","created_at":"2021-02-14T04:06:52.000000Z","id":59}',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 3,
                'log_date' => '2021-02-14 08:15:09',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.152 Safari\\/537.36"}',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 3,
                'log_date' => '2021-02-14 08:15:09',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08T15:22:45.000000Z","updated_at":"2021-02-09T15:25:33.000000Z","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-09 09:35:27","last_login_date":"2021-02-09 10:25:33","login_count":19,"reasonToRegister":""}',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 3,
                'log_date' => '2021-02-14 08:15:09',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08T15:22:45.000000Z","updated_at":"2021-02-14T13:15:09.000000Z","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-09 10:25:33","last_login_date":"2021-02-09 10:25:33","login_count":19,"reasonToRegister":""}',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 2,
                'log_date' => '2021-02-14 08:15:43',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.150 Safari\\/537.36"}',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 2,
                'log_date' => '2021-02-14 08:15:43',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-14T04:01:53.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-13 22:57:49","last_login_date":"2021-02-13 23:01:53","login_count":132,"reasonToRegister":""}',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 2,
                'log_date' => '2021-02-14 08:15:43',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-14T13:15:43.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-13 23:01:53","last_login_date":"2021-02-13 23:01:53","login_count":132,"reasonToRegister":""}',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 3,
                'log_date' => '2021-02-14 08:16:40',
                'table_name' => 'bugs',
                'log_type' => 'edit',
                'data' => '{"id":56,"title":"Test bug","page_url":null,"description":"<p>Test bug<\\/p>","resolution":null,"status":"New","user_id":2,"created_at":"2021-01-31T12:17:49.000000Z","updated_at":"2021-02-14T04:05:39.000000Z","deleted_at":null}',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 3,
                'log_date' => '2021-02-14 08:20:23',
                'table_name' => 'bugs',
                'log_type' => 'edit',
                'data' => '{"id":55,"title":"Newly reported bug","page_url":"this and that","description":"<p>Description of newly reported bug<\\/p>","resolution":null,"status":"New","user_id":2,"created_at":"2021-01-26T16:49:38.000000Z","updated_at":"2021-01-29T01:36:16.000000Z","deleted_at":"2021-01-29T01:36:16.000000Z"}',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 3,
                'log_date' => '2021-02-14 08:21:14',
                'table_name' => 'bugs',
                'log_type' => 'delete',
                'data' => '{"id":58,"title":"Stacie is a big bug only sometimes","page_url":"Right beside me","description":"<p>Description of the big bug<\\/p>","resolution":null,"status":"New","user_id":2,"created_at":"2021-02-03T02:44:41.000000Z","updated_at":"2021-02-14T13:21:14.000000Z","deleted_at":"2021-02-14T13:21:14.000000Z"}',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 3,
                'log_date' => '2021-02-14 08:32:24',
                'table_name' => 'bugs',
                'log_type' => 'edit',
                'data' => '{"id":55,"title":"Newly reported bug","page_url":"this and that","description":"<p>Description of newly reported bug<\\/p>","resolution":null,"status":"New","user_id":2,"created_at":"2021-01-26T16:49:38.000000Z","updated_at":"2021-02-14T13:20:23.000000Z","deleted_at":null}',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 2,
                'log_date' => '2021-02-14 09:35:30',
                'table_name' => 'bugs',
                'log_type' => 'create',
                'data' => '{"status":"New","title":"ssdsadsa","page_url":null,"description":"<p>sadsadsadsad<\\/p>","user_id":2,"updated_at":"2021-02-14T14:35:30.000000Z","created_at":"2021-02-14T14:35:30.000000Z","id":60}',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 2,
                'log_date' => '2021-02-14 09:41:58',
                'table_name' => 'bugs',
                'log_type' => 'edit',
                'data' => '{"id":55,"title":"Newly reported bug","page_url":"this and that qwerty","description":"<p>Description of newly reported bug<\\/p>","resolution":null,"status":"New","user_id":2,"created_at":"2021-01-26T16:49:38.000000Z","updated_at":"2021-02-14T13:32:24.000000Z","deleted_at":null}',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 2,
                'log_date' => '2021-02-14 09:42:37',
                'table_name' => 'bugs',
                'log_type' => 'edit',
                'data' => '{"id":55,"title":"Newly reported bug aaaaa","page_url":"this and that qwerty","description":"<p>Description of newly reported bug<\\/p>","resolution":"<p>sdsadsadsadsa<\\/p>","status":"New","user_id":2,"created_at":"2021-01-26T16:49:38.000000Z","updated_at":"2021-02-14T14:41:58.000000Z","deleted_at":null}',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 2,
                'log_date' => '2021-02-14 20:42:37',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.150 Safari\\/537.36"}',
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 2,
                'log_date' => '2021-02-14 20:42:37',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-14T13:15:43.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-13 23:01:53","last_login_date":"2021-02-14 08:15:43","login_count":133,"reasonToRegister":""}',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 2,
                'log_date' => '2021-02-14 20:42:37',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-15T01:42:37.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-14 08:15:43","last_login_date":"2021-02-14 08:15:43","login_count":133,"reasonToRegister":""}',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 2,
                'log_date' => '2021-02-15 10:58:09',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.152 Safari\\/537.36"}',
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 2,
                'log_date' => '2021-02-15 10:58:09',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-15T01:42:37.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-14 08:15:43","last_login_date":"2021-02-14 20:42:37","login_count":134,"reasonToRegister":""}',
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 2,
                'log_date' => '2021-02-15 10:58:09',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-15T15:58:09.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-14 20:42:37","last_login_date":"2021-02-14 20:42:37","login_count":134,"reasonToRegister":""}',
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 2,
                'log_date' => '2021-02-16 08:08:22',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.152 Safari\\/537.36"}',
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 2,
                'log_date' => '2021-02-16 08:08:22',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-15T15:58:09.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-14 20:42:37","last_login_date":"2021-02-15 10:58:09","login_count":135,"reasonToRegister":""}',
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 2,
                'log_date' => '2021-02-16 08:08:22',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-16T13:08:22.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-15 10:58:09","last_login_date":"2021-02-15 10:58:09","login_count":135,"reasonToRegister":""}',
            ),
            26 => 
            array (
                'id' => 27,
                'user_id' => 2,
                'log_date' => '2021-02-16 11:11:00',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.152 Safari\\/537.36"}',
            ),
            27 => 
            array (
                'id' => 28,
                'user_id' => 2,
                'log_date' => '2021-02-16 11:11:00',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-16T13:08:22.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-15 10:58:09","last_login_date":"2021-02-16 08:08:22","login_count":136,"reasonToRegister":""}',
            ),
            28 => 
            array (
                'id' => 29,
                'user_id' => 2,
                'log_date' => '2021-02-16 11:11:00',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-16T16:11:00.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-16 08:08:22","last_login_date":"2021-02-16 08:08:22","login_count":136,"reasonToRegister":""}',
            ),
            29 => 
            array (
                'id' => 30,
                'user_id' => 2,
                'log_date' => '2021-02-16 14:01:30',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.152 Safari\\/537.36"}',
            ),
            30 => 
            array (
                'id' => 31,
                'user_id' => 2,
                'log_date' => '2021-02-16 14:01:30',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-16T16:11:00.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-16 08:08:22","last_login_date":"2021-02-16 11:11:00","login_count":137,"reasonToRegister":""}',
            ),
            31 => 
            array (
                'id' => 32,
                'user_id' => 2,
                'log_date' => '2021-02-16 14:01:30',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-16T19:01:30.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-16 11:11:00","last_login_date":"2021-02-16 11:11:00","login_count":137,"reasonToRegister":""}',
            ),
            32 => 
            array (
                'id' => 33,
                'user_id' => 2,
                'log_date' => '2021-02-16 19:23:52',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.152 Safari\\/537.36"}',
            ),
            33 => 
            array (
                'id' => 34,
                'user_id' => 2,
                'log_date' => '2021-02-16 19:23:52',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-16T19:01:30.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-16 11:11:00","last_login_date":"2021-02-16 14:01:30","login_count":138,"reasonToRegister":""}',
            ),
            34 => 
            array (
                'id' => 35,
                'user_id' => 2,
                'log_date' => '2021-02-16 19:23:52',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-17T00:23:52.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-16 14:01:30","last_login_date":"2021-02-16 14:01:30","login_count":138,"reasonToRegister":""}',
            ),
            35 => 
            array (
                'id' => 36,
                'user_id' => 2,
                'log_date' => '2021-02-17 09:48:05',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.152 Safari\\/537.36"}',
            ),
            36 => 
            array (
                'id' => 37,
                'user_id' => 2,
                'log_date' => '2021-02-17 09:48:05',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-17T00:23:52.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-16 14:01:30","last_login_date":"2021-02-16 19:23:52","login_count":139,"reasonToRegister":""}',
            ),
            37 => 
            array (
                'id' => 38,
                'user_id' => 2,
                'log_date' => '2021-02-17 09:48:05',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-17T14:48:05.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-16 19:23:52","last_login_date":"2021-02-16 19:23:52","login_count":139,"reasonToRegister":""}',
            ),
            38 => 
            array (
                'id' => 39,
                'user_id' => 2,
                'log_date' => '2021-02-17 10:09:19',
                'table_name' => 'bugs',
                'log_type' => 'edit',
                'data' => '{"id":58,"title":"Stacie is a big bug only sometimes","page_url":"Right beside me","description":"<p>Description of the big bug<\\/p>","resolution":null,"status":"New","user_id":2,"created_at":"2021-02-03T02:44:41.000000Z","updated_at":"2021-02-14T13:21:14.000000Z","deleted_at":"2021-02-14T13:21:14.000000Z"}',
            ),
            39 => 
            array (
                'id' => 40,
                'user_id' => 2,
                'log_date' => '2021-02-17 10:09:27',
                'table_name' => 'bugs',
                'log_type' => 'delete',
                'data' => '{"id":58,"title":"Stacie is a big bug only sometimes","page_url":"Right beside me","description":"<p>Description of the big bug<\\/p>","resolution":null,"status":"New","user_id":2,"created_at":"2021-02-03T02:44:41.000000Z","updated_at":"2021-02-17T15:09:27.000000Z","deleted_at":"2021-02-17T15:09:27.000000Z"}',
            ),
            40 => 
            array (
                'id' => 41,
                'user_id' => 2,
                'log_date' => '2021-02-17 10:09:36',
                'table_name' => 'bugs',
                'log_type' => 'delete',
                'data' => '{"id":58,"title":"Stacie is a big bug only sometimes","page_url":"Right beside me","description":"<p>Description of the big bug<\\/p>","resolution":null,"status":"New","user_id":2,"created_at":"2021-02-03T02:44:41.000000Z","updated_at":"2021-02-17T15:09:27.000000Z","deleted_at":"2021-02-17T15:09:27.000000Z"}',
            ),
            41 => 
            array (
                'id' => 42,
                'user_id' => 2,
                'log_date' => '2021-02-17 10:10:17',
                'table_name' => 'bugs',
                'log_type' => 'delete',
                'data' => '{"id":57,"title":"Test bug 123 456","page_url":"Page URL test not valid","description":"<p>Description of bug goes here.<\\/p>\\r\\n<p>More data can be added here<\\/p>","resolution":null,"status":"Not Reproducible","user_id":2,"created_at":"2021-02-02T17:29:44.000000Z","updated_at":"2021-02-17T15:10:17.000000Z","deleted_at":"2021-02-17T15:10:17.000000Z"}',
            ),
            42 => 
            array (
                'id' => 43,
                'user_id' => 2,
                'log_date' => '2021-02-17 10:10:17',
                'table_name' => 'bugs',
                'log_type' => 'delete',
                'data' => '{"id":60,"title":"ssdsadsa","page_url":null,"description":"<p>sadsadsadsad<\\/p>","resolution":null,"status":"New","user_id":2,"created_at":"2021-02-14T14:35:30.000000Z","updated_at":"2021-02-17T15:10:17.000000Z","deleted_at":"2021-02-17T15:10:17.000000Z"}',
            ),
            43 => 
            array (
                'id' => 44,
                'user_id' => 2,
                'log_date' => '2021-02-17 10:10:27',
                'table_name' => 'bugs',
                'log_type' => 'edit',
                'data' => '{"id":54,"title":"Test bug","page_url":"test url","description":"<p>Test description<\\/p>","resolution":null,"status":"New","user_id":2,"created_at":"2021-01-23T14:42:41.000000Z","updated_at":"2021-01-29T01:36:16.000000Z","deleted_at":"2021-01-29T01:36:16.000000Z"}',
            ),
            44 => 
            array (
                'id' => 45,
                'user_id' => 2,
                'log_date' => '2021-02-17 10:10:27',
                'table_name' => 'bugs',
                'log_type' => 'edit',
                'data' => '{"id":57,"title":"Test bug 123 456","page_url":"Page URL test not valid","description":"<p>Description of bug goes here.<\\/p>\\r\\n<p>More data can be added here<\\/p>","resolution":null,"status":"Not Reproducible","user_id":2,"created_at":"2021-02-02T17:29:44.000000Z","updated_at":"2021-02-17T15:10:17.000000Z","deleted_at":"2021-02-17T15:10:17.000000Z"}',
            ),
            45 => 
            array (
                'id' => 46,
                'user_id' => 2,
                'log_date' => '2021-02-17 11:39:29',
                'table_name' => 'bugs',
                'log_type' => 'delete',
                'data' => '{"id":54,"title":"Test bug","page_url":"test url","description":"<p>Test description<\\/p>","resolution":null,"status":"New","user_id":2,"created_at":"2021-01-23T14:42:41.000000Z","updated_at":"2021-02-17T16:39:29.000000Z","deleted_at":"2021-02-17T16:39:29.000000Z"}',
            ),
            46 => 
            array (
                'id' => 47,
                'user_id' => 2,
                'log_date' => '2021-02-17 11:43:34',
                'table_name' => 'bugs',
                'log_type' => 'create',
                'data' => '{"status":"New","title":"sadsadsad","page_url":null,"description":"<p>dasdsadsadsadsad<\\/p>","user_id":2,"updated_at":"2021-02-17T16:43:34.000000Z","created_at":"2021-02-17T16:43:34.000000Z","id":61}',
            ),
            47 => 
            array (
                'id' => 48,
                'user_id' => 2,
                'log_date' => '2021-02-17 11:43:49',
                'table_name' => 'bugs',
                'log_type' => 'edit',
                'data' => '{"id":61,"title":"sadsadsad","page_url":null,"description":"<p>dasdsadsadsadsad<\\/p>","resolution":null,"status":"New","user_id":2,"created_at":"2021-02-17T16:43:34.000000Z","updated_at":"2021-02-17T16:43:34.000000Z","deleted_at":null}',
            ),
            48 => 
            array (
                'id' => 49,
                'user_id' => 2,
                'log_date' => '2021-02-17 21:54:29',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.152 Safari\\/537.36"}',
            ),
            49 => 
            array (
                'id' => 50,
                'user_id' => 2,
                'log_date' => '2021-02-17 21:54:29',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-17T14:48:05.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-16 19:23:52","last_login_date":"2021-02-17 09:48:05","login_count":140,"reasonToRegister":""}',
            ),
            50 => 
            array (
                'id' => 51,
                'user_id' => 2,
                'log_date' => '2021-02-17 21:54:29',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-18T02:54:29.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-17 09:48:05","last_login_date":"2021-02-17 09:48:05","login_count":140,"reasonToRegister":""}',
            ),
            51 => 
            array (
                'id' => 52,
                'user_id' => 2,
                'log_date' => '2021-02-18 06:39:03',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.152 Safari\\/537.36"}',
            ),
            52 => 
            array (
                'id' => 53,
                'user_id' => 2,
                'log_date' => '2021-02-18 06:39:03',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-18T02:54:29.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-17 09:48:05","last_login_date":"2021-02-17 21:54:29","login_count":141,"reasonToRegister":""}',
            ),
            53 => 
            array (
                'id' => 54,
                'user_id' => 2,
                'log_date' => '2021-02-18 06:39:03',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-18T11:39:03.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-17 21:54:29","last_login_date":"2021-02-17 21:54:29","login_count":141,"reasonToRegister":""}',
            ),
            54 => 
            array (
                'id' => 55,
                'user_id' => 1,
                'log_date' => '2021-02-18 08:32:33',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.152 Safari\\/537.36"}',
            ),
            55 => 
            array (
                'id' => 56,
                'user_id' => 1,
                'log_date' => '2021-02-18 08:32:33',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":1,"username":"admin","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stephaneandstacie@gmail.com","email_verified_at":null,"password":"$2y$10$6mO\\/sENF07xOxKprzD7Cq.eo7GiuvtrxEa\\/3n8bJI5LkM3IqUsBgy","remember_token":null,"created_at":"2020-09-07T12:51:04.000000Z","updated_at":"2021-02-03T18:38:56.000000Z","deleted_at":null,"public_email":0,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":"TheWoodBarn.ca","company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"asasas as asasas","dart_doubleOut":0,"invoicer_client":0,"previous_login_date":"2020-11-10 21:24:17","last_login_date":"2020-11-11 10:44:24","login_count":116,"reasonToRegister":""}',
            ),
            56 => 
            array (
                'id' => 57,
                'user_id' => 1,
                'log_date' => '2021-02-18 08:32:33',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":1,"username":"admin","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stephaneandstacie@gmail.com","email_verified_at":null,"password":"$2y$10$6mO\\/sENF07xOxKprzD7Cq.eo7GiuvtrxEa\\/3n8bJI5LkM3IqUsBgy","remember_token":null,"created_at":"2020-09-07T12:51:04.000000Z","updated_at":"2021-02-18T13:32:33.000000Z","deleted_at":null,"public_email":0,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":"TheWoodBarn.ca","company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"asasas as asasas","dart_doubleOut":0,"invoicer_client":0,"previous_login_date":"2020-11-11 10:44:24","last_login_date":"2020-11-11 10:44:24","login_count":116,"reasonToRegister":""}',
            ),
            57 => 
            array (
                'id' => 58,
                'user_id' => 2,
                'log_date' => '2021-02-18 08:33:06',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.152 Safari\\/537.36"}',
            ),
            58 => 
            array (
                'id' => 59,
                'user_id' => 2,
                'log_date' => '2021-02-18 08:33:06',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-18T11:39:03.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-17 21:54:29","last_login_date":"2021-02-18 06:39:03","login_count":142,"reasonToRegister":""}',
            ),
            59 => 
            array (
                'id' => 60,
                'user_id' => 2,
                'log_date' => '2021-02-18 08:33:06',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-18T13:33:06.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-18 06:39:03","last_login_date":"2021-02-18 06:39:03","login_count":142,"reasonToRegister":""}',
            ),
            60 => 
            array (
                'id' => 61,
                'user_id' => 2,
                'log_date' => '2021-02-18 08:52:49',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":20,"username":"author","first_name":"Author","last_name":"User","account_status":0,"email":"stleroux@hotmail.ca2","email_verified_at":null,"password":"$2y$10$4wRLKlJmly1k\\/hezj8ljOufFhv4wicjYlAYSCHo..tldO3tOUV85K","remember_token":null,"created_at":"2020-06-05T15:54:16.000000Z","updated_at":"2021-02-03T12:16:08.000000Z","deleted_at":null,"public_email":null,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":null,"previous_login_date":"2020-10-04 19:07:41","last_login_date":"2020-10-10 00:12:49","login_count":7,"reasonToRegister":""}',
            ),
            61 => 
            array (
                'id' => 62,
                'user_id' => 2,
                'log_date' => '2021-02-18 08:52:56',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":20,"username":"author","first_name":"Author","last_name":"User","account_status":1,"email":"stleroux@hotmail.ca2","email_verified_at":null,"password":"$2y$10$4wRLKlJmly1k\\/hezj8ljOufFhv4wicjYlAYSCHo..tldO3tOUV85K","remember_token":null,"created_at":"2020-06-05T15:54:16.000000Z","updated_at":"2021-02-18T13:52:49.000000Z","deleted_at":null,"public_email":null,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":null,"previous_login_date":"2020-10-04 19:07:41","last_login_date":"2020-10-10 00:12:49","login_count":7,"reasonToRegister":""}',
            ),
            62 => 
            array (
                'id' => 63,
                'user_id' => 3,
                'log_date' => '2021-02-18 08:59:29',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.182 Safari\\/537.36"}',
            ),
            63 => 
            array (
                'id' => 64,
                'user_id' => 3,
                'log_date' => '2021-02-18 08:59:29',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08T15:22:45.000000Z","updated_at":"2021-02-14T13:15:09.000000Z","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-09 10:25:33","last_login_date":"2021-02-14 08:15:09","login_count":20,"reasonToRegister":""}',
            ),
            64 => 
            array (
                'id' => 65,
                'user_id' => 3,
                'log_date' => '2021-02-18 08:59:29',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08T15:22:45.000000Z","updated_at":"2021-02-18T13:59:29.000000Z","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-14 08:15:09","last_login_date":"2021-02-14 08:15:09","login_count":20,"reasonToRegister":""}',
            ),
            65 => 
            array (
                'id' => 66,
                'user_id' => 2,
                'log_date' => '2021-02-18 09:04:14',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":5,"username":"leveillel","first_name":"Luc","last_name":"Leveille","account_status":1,"email":"leveillel@gmail.com","email_verified_at":"2020-09-08T15:23:54.000000Z","password":"5f4dcc3b5aa765d61d8327deb882cf99","remember_token":null,"created_at":"2020-09-08T15:23:54.000000Z","updated_at":"2020-09-08T15:23:54.000000Z","deleted_at":null,"public_email":1,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":"Leveille Trim","image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":null,"last_login_date":null,"login_count":0,"reasonToRegister":""}',
            ),
            66 => 
            array (
                'id' => 67,
                'user_id' => 2,
                'log_date' => '2021-02-18 09:04:21',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":5,"username":"leveillel","first_name":"Luc","last_name":"Leveille","account_status":0,"email":"leveillel@gmail.com","email_verified_at":"2020-09-08T15:23:54.000000Z","password":"5f4dcc3b5aa765d61d8327deb882cf99","remember_token":null,"created_at":"2020-09-08T15:23:54.000000Z","updated_at":"2021-02-18T14:04:14.000000Z","deleted_at":null,"public_email":1,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":"Leveille Trim","image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":null,"last_login_date":null,"login_count":0,"reasonToRegister":""}',
            ),
            67 => 
            array (
                'id' => 68,
                'user_id' => 2,
                'log_date' => '2021-02-18 22:07:52',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.152 Safari\\/537.36"}',
            ),
            68 => 
            array (
                'id' => 69,
                'user_id' => 2,
                'log_date' => '2021-02-18 22:07:52',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-18T13:33:06.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-18 06:39:03","last_login_date":"2021-02-18 08:33:06","login_count":143,"reasonToRegister":""}',
            ),
            69 => 
            array (
                'id' => 70,
                'user_id' => 2,
                'log_date' => '2021-02-18 22:07:52',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-19T03:07:52.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-18 08:33:06","last_login_date":"2021-02-18 08:33:06","login_count":143,"reasonToRegister":""}',
            ),
            70 => 
            array (
                'id' => 71,
                'user_id' => 2,
                'log_date' => '2021-02-19 05:51:13',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.152 Safari\\/537.36"}',
            ),
            71 => 
            array (
                'id' => 72,
                'user_id' => 2,
                'log_date' => '2021-02-19 05:51:13',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-19T03:07:52.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-18 08:33:06","last_login_date":"2021-02-18 22:07:52","login_count":144,"reasonToRegister":""}',
            ),
            72 => 
            array (
                'id' => 73,
                'user_id' => 2,
                'log_date' => '2021-02-19 05:51:13',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-19T10:51:13.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-18 22:07:52","last_login_date":"2021-02-18 22:07:52","login_count":144,"reasonToRegister":""}',
            ),
            73 => 
            array (
                'id' => 74,
                'user_id' => 2,
                'log_date' => '2021-02-19 07:03:22',
                'table_name' => 'users',
                'log_type' => 'create',
            'data' => '{"dart_doubleOut":"0","first_name":"Test","last_name":"One","email":"test@test.com","account_status":0,"public_email":1,"telephone":"(123) 456-789_","cell":null,"fax":null,"website":null,"company_name":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"invoicer_client":1,"updated_at":"2021-02-19T12:03:22.000000Z","created_at":"2021-02-19T12:03:22.000000Z","id":28}',
            ),
            74 => 
            array (
                'id' => 75,
                'user_id' => 28,
                'log_date' => '2021-02-19 07:05:17',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.182 Safari\\/537.36"}',
            ),
            75 => 
            array (
                'id' => 76,
                'user_id' => 28,
                'log_date' => '2021-02-19 07:05:17',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":28,"username":"","first_name":"Test","last_name":"One","account_status":0,"email":"test@test.com","email_verified_at":null,"password":"$2y$10$s36reM6Bh3oBibCPUUtXsuT3up0xnFDCD8tNxYzfDIkgV7iMXQnZS","remember_token":null,"created_at":"2021-02-19T12:03:22.000000Z","updated_at":"2021-02-19T12:03:22.000000Z","deleted_at":null,"public_email":1,"telephone":"(123) 456-789_","cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":1,"previous_login_date":null,"last_login_date":null,"login_count":0,"reasonToRegister":""}',
            ),
            76 => 
            array (
                'id' => 77,
                'user_id' => 2,
                'log_date' => '2021-02-19 07:11:06',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":28,"username":"","first_name":"Test","last_name":"One","account_status":0,"email":"test@test.com","email_verified_at":null,"password":"$2y$10$s36reM6Bh3oBibCPUUtXsuT3up0xnFDCD8tNxYzfDIkgV7iMXQnZS","remember_token":null,"created_at":"2021-02-19T12:03:22.000000Z","updated_at":"2021-02-19T12:05:17.000000Z","deleted_at":null,"public_email":1,"telephone":"(123) 456-789_","cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":1,"previous_login_date":null,"last_login_date":"2021-02-19 07:05:17","login_count":1,"reasonToRegister":""}',
            ),
            77 => 
            array (
                'id' => 78,
                'user_id' => 28,
                'log_date' => '2021-02-19 07:12:02',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.182 Safari\\/537.36"}',
            ),
            78 => 
            array (
                'id' => 79,
                'user_id' => 28,
                'log_date' => '2021-02-19 07:12:02',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":28,"username":"","first_name":"Test","last_name":"One","account_status":1,"email":"test@test.com","email_verified_at":null,"password":"$2y$10$s36reM6Bh3oBibCPUUtXsuT3up0xnFDCD8tNxYzfDIkgV7iMXQnZS","remember_token":null,"created_at":"2021-02-19T12:03:22.000000Z","updated_at":"2021-02-19T12:11:06.000000Z","deleted_at":null,"public_email":1,"telephone":"(123) 456-789_","cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":1,"previous_login_date":null,"last_login_date":"2021-02-19 07:05:17","login_count":1,"reasonToRegister":""}',
            ),
            79 => 
            array (
                'id' => 80,
                'user_id' => 28,
                'log_date' => '2021-02-19 07:12:02',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":28,"username":"","first_name":"Test","last_name":"One","account_status":1,"email":"test@test.com","email_verified_at":null,"password":"$2y$10$s36reM6Bh3oBibCPUUtXsuT3up0xnFDCD8tNxYzfDIkgV7iMXQnZS","remember_token":null,"created_at":"2021-02-19T12:03:22.000000Z","updated_at":"2021-02-19T12:12:02.000000Z","deleted_at":null,"public_email":1,"telephone":"(123) 456-789_","cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":1,"previous_login_date":"2021-02-19 07:05:17","last_login_date":"2021-02-19 07:05:17","login_count":1,"reasonToRegister":""}',
            ),
            80 => 
            array (
                'id' => 81,
                'user_id' => 2,
                'log_date' => '2021-02-19 07:16:07',
                'table_name' => 'users',
                'log_type' => 'create',
            'data' => '{"dart_doubleOut":"0","first_name":"Test2","last_name":"2Test","email":"test@test.com2","account_status":0,"public_email":1,"telephone":"(123) 456-7890","cell":null,"fax":null,"website":null,"company_name":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"invoicer_client":1,"updated_at":"2021-02-19T12:16:07.000000Z","created_at":"2021-02-19T12:16:07.000000Z","id":29}',
            ),
            81 => 
            array (
                'id' => 82,
                'user_id' => 2,
                'log_date' => '2021-02-19 07:16:17',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":29,"username":"","first_name":"Test2","last_name":"2Test","account_status":0,"email":"test@test.com2","email_verified_at":null,"password":"$2y$10$QWogZGXudkaCcMVtCCHz8uLIiHDzD5XtVhZsakAP3g39jhWjBg24S","remember_token":null,"created_at":"2021-02-19T12:16:07.000000Z","updated_at":"2021-02-19T12:16:07.000000Z","deleted_at":null,"public_email":1,"telephone":"(123) 456-7890","cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":1,"previous_login_date":null,"last_login_date":null,"login_count":0,"reasonToRegister":""}',
            ),
            82 => 
            array (
                'id' => 83,
                'user_id' => 2,
                'log_date' => '2021-02-19 07:16:55',
                'table_name' => 'users',
                'log_type' => 'create',
                'data' => '{"dart_doubleOut":"0","first_name":"3333","last_name":"4444","email":"test3@test.com","account_status":0,"public_email":1,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"invoicer_client":0,"updated_at":"2021-02-19T12:16:55.000000Z","created_at":"2021-02-19T12:16:55.000000Z","id":30}',
            ),
            83 => 
            array (
                'id' => 84,
                'user_id' => 2,
                'log_date' => '2021-02-19 07:17:30',
                'table_name' => 'users',
                'log_type' => 'delete',
            'data' => '{"id":28,"username":"","first_name":"Test","last_name":"One","account_status":1,"email":"test@test.com","email_verified_at":null,"password":"$2y$10$s36reM6Bh3oBibCPUUtXsuT3up0xnFDCD8tNxYzfDIkgV7iMXQnZS","remember_token":null,"created_at":"2021-02-19T12:03:22.000000Z","updated_at":"2021-02-19T12:17:30.000000Z","deleted_at":"2021-02-19T12:17:30.000000Z","public_email":1,"telephone":"(123) 456-789_","cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":1,"previous_login_date":"2021-02-19 07:05:17","last_login_date":"2021-02-19 07:12:02","login_count":2,"reasonToRegister":""}',
            ),
            84 => 
            array (
                'id' => 85,
                'user_id' => 2,
                'log_date' => '2021-02-19 07:17:30',
                'table_name' => 'users',
                'log_type' => 'delete',
            'data' => '{"id":29,"username":"","first_name":"Test2","last_name":"2Test","account_status":1,"email":"test@test.com2","email_verified_at":null,"password":"$2y$10$QWogZGXudkaCcMVtCCHz8uLIiHDzD5XtVhZsakAP3g39jhWjBg24S","remember_token":null,"created_at":"2021-02-19T12:16:07.000000Z","updated_at":"2021-02-19T12:17:30.000000Z","deleted_at":"2021-02-19T12:17:30.000000Z","public_email":1,"telephone":"(123) 456-7890","cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":1,"previous_login_date":null,"last_login_date":null,"login_count":0,"reasonToRegister":""}',
            ),
            85 => 
            array (
                'id' => 86,
                'user_id' => 2,
                'log_date' => '2021-02-19 07:17:30',
                'table_name' => 'users',
                'log_type' => 'delete',
                'data' => '{"id":30,"username":"","first_name":"3333","last_name":"4444","account_status":0,"email":"test3@test.com","email_verified_at":null,"password":"$2y$10$mV6II.emcsV95nJ1NAl.Qe0oF\\/2NLfDhATJJXCN\\/piCFgr59Mn.Ae","remember_token":null,"created_at":"2021-02-19T12:16:55.000000Z","updated_at":"2021-02-19T12:17:30.000000Z","deleted_at":"2021-02-19T12:17:30.000000Z","public_email":1,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":0,"previous_login_date":null,"last_login_date":null,"login_count":0,"reasonToRegister":""}',
            ),
            86 => 
            array (
                'id' => 87,
                'user_id' => 2,
                'log_date' => '2021-02-19 07:17:44',
                'table_name' => 'users',
                'log_type' => 'delete',
            'data' => '{"id":28,"username":"","first_name":"Test","last_name":"One","account_status":1,"email":"test@test.com","email_verified_at":null,"password":"$2y$10$s36reM6Bh3oBibCPUUtXsuT3up0xnFDCD8tNxYzfDIkgV7iMXQnZS","remember_token":null,"created_at":"2021-02-19T12:03:22.000000Z","updated_at":"2021-02-19T12:17:30.000000Z","deleted_at":"2021-02-19T12:17:30.000000Z","public_email":1,"telephone":"(123) 456-789_","cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":1,"previous_login_date":"2021-02-19 07:05:17","last_login_date":"2021-02-19 07:12:02","login_count":2,"reasonToRegister":""}',
            ),
            87 => 
            array (
                'id' => 88,
                'user_id' => 2,
                'log_date' => '2021-02-19 07:17:44',
                'table_name' => 'users',
                'log_type' => 'delete',
            'data' => '{"id":29,"username":"","first_name":"Test2","last_name":"2Test","account_status":1,"email":"test@test.com2","email_verified_at":null,"password":"$2y$10$QWogZGXudkaCcMVtCCHz8uLIiHDzD5XtVhZsakAP3g39jhWjBg24S","remember_token":null,"created_at":"2021-02-19T12:16:07.000000Z","updated_at":"2021-02-19T12:17:30.000000Z","deleted_at":"2021-02-19T12:17:30.000000Z","public_email":1,"telephone":"(123) 456-7890","cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":1,"previous_login_date":null,"last_login_date":null,"login_count":0,"reasonToRegister":""}',
            ),
            88 => 
            array (
                'id' => 89,
                'user_id' => 2,
                'log_date' => '2021-02-19 07:17:44',
                'table_name' => 'users',
                'log_type' => 'delete',
                'data' => '{"id":30,"username":"","first_name":"3333","last_name":"4444","account_status":0,"email":"test3@test.com","email_verified_at":null,"password":"$2y$10$mV6II.emcsV95nJ1NAl.Qe0oF\\/2NLfDhATJJXCN\\/piCFgr59Mn.Ae","remember_token":null,"created_at":"2021-02-19T12:16:55.000000Z","updated_at":"2021-02-19T12:17:30.000000Z","deleted_at":"2021-02-19T12:17:30.000000Z","public_email":1,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":0,"previous_login_date":null,"last_login_date":null,"login_count":0,"reasonToRegister":""}',
            ),
            89 => 
            array (
                'id' => 90,
                'user_id' => 2,
                'log_date' => '2021-02-19 09:24:46',
                'table_name' => 'users',
                'log_type' => 'create',
                'data' => '{"dart_doubleOut":"0","first_name":"Test","last_name":"One","email":"test@test.com","account_status":0,"public_email":1,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"invoicer_client":0,"updated_at":"2021-02-19T14:24:45.000000Z","created_at":"2021-02-19T14:24:45.000000Z","id":31}',
            ),
            90 => 
            array (
                'id' => 91,
                'user_id' => 2,
                'log_date' => '2021-02-19 09:29:30',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":31,"username":"","first_name":"Test","last_name":"One","account_status":0,"email":"test@test.com","email_verified_at":null,"password":"$2y$10$MZnEbYyMk6gM0izH\\/9YHi.msiR0SK06q7BuSVKasZVrfE8\\/cKnYz.","remember_token":null,"created_at":"2021-02-19T14:24:45.000000Z","updated_at":"2021-02-19T14:24:45.000000Z","deleted_at":null,"public_email":1,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":0,"previous_login_date":null,"last_login_date":null,"login_count":0,"reasonToRegister":""}',
            ),
            91 => 
            array (
                'id' => 92,
                'user_id' => 2,
                'log_date' => '2021-02-19 09:29:44',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":31,"username":"","first_name":"Test","last_name":"One","account_status":1,"email":"test@test.com","email_verified_at":null,"password":"$2y$10$MZnEbYyMk6gM0izH\\/9YHi.msiR0SK06q7BuSVKasZVrfE8\\/cKnYz.","remember_token":null,"created_at":"2021-02-19T14:24:45.000000Z","updated_at":"2021-02-19T14:29:30.000000Z","deleted_at":null,"public_email":1,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":0,"previous_login_date":null,"last_login_date":null,"login_count":0,"reasonToRegister":""}',
            ),
            92 => 
            array (
                'id' => 93,
                'user_id' => 2,
                'log_date' => '2021-02-19 09:29:51',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":31,"username":"","first_name":"Test","last_name":"One","account_status":0,"email":"test@test.com","email_verified_at":null,"password":"$2y$10$MZnEbYyMk6gM0izH\\/9YHi.msiR0SK06q7BuSVKasZVrfE8\\/cKnYz.","remember_token":null,"created_at":"2021-02-19T14:24:45.000000Z","updated_at":"2021-02-19T14:29:44.000000Z","deleted_at":null,"public_email":1,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":0,"previous_login_date":null,"last_login_date":null,"login_count":0,"reasonToRegister":""}',
            ),
            93 => 
            array (
                'id' => 94,
                'user_id' => 31,
                'log_date' => '2021-02-19 09:29:57',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.182 Safari\\/537.36"}',
            ),
            94 => 
            array (
                'id' => 95,
                'user_id' => 31,
                'log_date' => '2021-02-19 09:29:57',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":31,"username":"","first_name":"Test","last_name":"One","account_status":1,"email":"test@test.com","email_verified_at":null,"password":"$2y$10$MZnEbYyMk6gM0izH\\/9YHi.msiR0SK06q7BuSVKasZVrfE8\\/cKnYz.","remember_token":null,"created_at":"2021-02-19T14:24:45.000000Z","updated_at":"2021-02-19T14:29:51.000000Z","deleted_at":null,"public_email":1,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":0,"previous_login_date":null,"last_login_date":null,"login_count":0,"reasonToRegister":""}',
            ),
            95 => 
            array (
                'id' => 96,
                'user_id' => 2,
                'log_date' => '2021-02-19 12:06:03',
                'table_name' => 'bugs',
                'log_type' => 'edit',
                'data' => '{"id":55,"title":"Newly reported bug aaaaa","page_url":"this and that qwerty","description":"<p>Description of newly reported bug<\\/p>","resolution":"<p>sdsadsadsadsa<\\/p>","status":"Pending","user_id":2,"created_at":"2021-01-26T16:49:38.000000Z","updated_at":"2021-02-14T14:42:37.000000Z","deleted_at":null}',
            ),
            96 => 
            array (
                'id' => 97,
                'user_id' => 2,
                'log_date' => '2021-02-19 20:35:59',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.152 Safari\\/537.36"}',
            ),
            97 => 
            array (
                'id' => 98,
                'user_id' => 2,
                'log_date' => '2021-02-19 20:35:59',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-19T10:51:13.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-18 22:07:52","last_login_date":"2021-02-19 05:51:13","login_count":145,"reasonToRegister":""}',
            ),
            98 => 
            array (
                'id' => 99,
                'user_id' => 2,
                'log_date' => '2021-02-19 20:35:59',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-20T01:35:59.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-19 05:51:13","last_login_date":"2021-02-19 05:51:13","login_count":145,"reasonToRegister":""}',
            ),
            99 => 
            array (
                'id' => 100,
                'user_id' => 2,
                'log_date' => '2021-02-22 19:22:51',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.152 Safari\\/537.36"}',
            ),
            100 => 
            array (
                'id' => 101,
                'user_id' => 2,
                'log_date' => '2021-02-22 19:22:52',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-20T01:35:59.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-19 05:51:13","last_login_date":"2021-02-19 20:35:59","login_count":146,"reasonToRegister":""}',
            ),
            101 => 
            array (
                'id' => 102,
                'user_id' => 2,
                'log_date' => '2021-02-22 19:22:52',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-23T00:22:51.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-19 20:35:59","last_login_date":"2021-02-19 20:35:59","login_count":146,"reasonToRegister":""}',
            ),
            102 => 
            array (
                'id' => 103,
                'user_id' => 2,
                'log_date' => '2021-02-26 20:37:46',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.192 Safari\\/537.36"}',
            ),
            103 => 
            array (
                'id' => 104,
                'user_id' => 2,
                'log_date' => '2021-02-26 20:37:46',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-23T00:22:52.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-19 20:35:59","last_login_date":"2021-02-22 19:22:52","login_count":147,"reasonToRegister":""}',
            ),
            104 => 
            array (
                'id' => 105,
                'user_id' => 2,
                'log_date' => '2021-02-26 20:37:46',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-27T01:37:46.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-22 19:22:52","last_login_date":"2021-02-22 19:22:52","login_count":147,"reasonToRegister":""}',
            ),
            105 => 
            array (
                'id' => 106,
                'user_id' => 2,
                'log_date' => '2021-02-28 14:08:51',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.192 Safari\\/537.36"}',
            ),
            106 => 
            array (
                'id' => 107,
                'user_id' => 2,
                'log_date' => '2021-02-28 14:08:51',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-27T01:37:46.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-22 19:22:52","last_login_date":"2021-02-26 20:37:46","login_count":148,"reasonToRegister":""}',
            ),
            107 => 
            array (
                'id' => 108,
                'user_id' => 2,
                'log_date' => '2021-02-28 14:08:51',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-28T19:08:51.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-26 20:37:46","last_login_date":"2021-02-26 20:37:46","login_count":148,"reasonToRegister":""}',
            ),
            108 => 
            array (
                'id' => 109,
                'user_id' => 2,
                'log_date' => '2021-03-03 05:56:55',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"::1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.192 Safari\\/537.36"}',
            ),
            109 => 
            array (
                'id' => 110,
                'user_id' => 2,
                'log_date' => '2021-03-03 05:56:55',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-02-28T19:08:51.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-26 20:37:46","last_login_date":"2021-02-28 14:08:51","login_count":149,"reasonToRegister":""}',
            ),
            110 => 
            array (
                'id' => 111,
                'user_id' => 2,
                'log_date' => '2021-03-03 05:56:55',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-03-03T10:56:55.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-28 14:08:51","last_login_date":"2021-02-28 14:08:51","login_count":149,"reasonToRegister":""}',
            ),
            111 => 
            array (
                'id' => 112,
                'user_id' => 2,
                'log_date' => '2021-03-03 08:28:52',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.192 Safari\\/537.36"}',
            ),
            112 => 
            array (
                'id' => 113,
                'user_id' => 2,
                'log_date' => '2021-03-03 08:28:52',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-03-03T10:56:55.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-28 14:08:51","last_login_date":"2021-03-03 05:56:55","login_count":150,"reasonToRegister":""}',
            ),
            113 => 
            array (
                'id' => 114,
                'user_id' => 2,
                'log_date' => '2021-03-03 08:28:52',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-03-03T13:28:52.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-03-03 05:56:55","last_login_date":"2021-03-03 05:56:55","login_count":150,"reasonToRegister":""}',
            ),
            114 => 
            array (
                'id' => 115,
                'user_id' => 2,
                'log_date' => '2021-03-03 22:34:51',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/88.0.4324.192 Safari\\/537.36"}',
            ),
            115 => 
            array (
                'id' => 116,
                'user_id' => 2,
                'log_date' => '2021-03-03 22:34:51',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-03-03T13:28:52.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-03-03 05:56:55","last_login_date":"2021-03-03 08:28:52","login_count":151,"reasonToRegister":""}',
            ),
            116 => 
            array (
                'id' => 117,
                'user_id' => 2,
                'log_date' => '2021-03-03 22:34:51',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-03-04T03:34:51.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-03-03 08:28:52","last_login_date":"2021-03-03 08:28:52","login_count":151,"reasonToRegister":""}',
            ),
            117 => 
            array (
                'id' => 118,
                'user_id' => 2,
                'log_date' => '2021-03-05 20:10:14',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"192.168.0.102","user_agent":"Mozilla\\/5.0 (Windows NT 5.1) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/49.0.2623.112 Safari\\/537.36"}',
            ),
            118 => 
            array (
                'id' => 119,
                'user_id' => 2,
                'log_date' => '2021-03-05 20:10:14',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-03-04T03:34:51.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-03-03 08:28:52","last_login_date":"2021-03-03 22:34:51","login_count":152,"reasonToRegister":""}',
            ),
            119 => 
            array (
                'id' => 120,
                'user_id' => 2,
                'log_date' => '2021-03-05 20:10:14',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-03-06T01:10:14.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-03-03 22:34:51","last_login_date":"2021-03-03 22:34:51","login_count":152,"reasonToRegister":""}',
            ),
            120 => 
            array (
                'id' => 121,
                'user_id' => 2,
                'log_date' => '2021-03-08 10:12:02',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/89.0.4389.72 Safari\\/537.36"}',
            ),
            121 => 
            array (
                'id' => 122,
                'user_id' => 2,
                'log_date' => '2021-03-08 10:12:02',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-03-06T01:10:14.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-03-03 22:34:51","last_login_date":"2021-03-05 20:10:14","login_count":153,"reasonToRegister":""}',
            ),
            122 => 
            array (
                'id' => 123,
                'user_id' => 2,
                'log_date' => '2021-03-08 10:12:02',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-03-08T15:12:02.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-03-05 20:10:14","last_login_date":"2021-03-05 20:10:14","login_count":153,"reasonToRegister":""}',
            ),
            123 => 
            array (
                'id' => 124,
                'user_id' => 2,
                'log_date' => '2021-03-08 19:45:49',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/89.0.4389.72 Safari\\/537.36"}',
            ),
            124 => 
            array (
                'id' => 125,
                'user_id' => 2,
                'log_date' => '2021-03-08 19:45:49',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-03-08T15:12:02.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-03-05 20:10:14","last_login_date":"2021-03-08 10:12:02","login_count":154,"reasonToRegister":""}',
            ),
            125 => 
            array (
                'id' => 126,
                'user_id' => 2,
                'log_date' => '2021-03-08 19:45:49',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-03-09T00:45:49.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-03-08 10:12:02","last_login_date":"2021-03-08 10:12:02","login_count":154,"reasonToRegister":""}',
            ),
            126 => 
            array (
                'id' => 127,
                'user_id' => 2,
                'log_date' => '2021-03-09 07:50:21',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/89.0.4389.72 Safari\\/537.36"}',
            ),
            127 => 
            array (
                'id' => 128,
                'user_id' => 2,
                'log_date' => '2021-03-09 07:50:22',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-03-09T00:45:49.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-03-08 10:12:02","last_login_date":"2021-03-08 19:45:49","login_count":155,"reasonToRegister":""}',
            ),
            128 => 
            array (
                'id' => 129,
                'user_id' => 2,
                'log_date' => '2021-03-09 07:50:22',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-03-09T12:50:21.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-03-08 19:45:49","last_login_date":"2021-03-08 19:45:49","login_count":155,"reasonToRegister":""}',
            ),
            129 => 
            array (
                'id' => 130,
                'user_id' => 2,
                'log_date' => '2021-03-10 08:57:21',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/89.0.4389.72 Safari\\/537.36"}',
            ),
            130 => 
            array (
                'id' => 131,
                'user_id' => 2,
                'log_date' => '2021-03-10 08:57:21',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-03-09T12:50:22.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-03-08 19:45:49","last_login_date":"2021-03-09 07:50:22","login_count":156,"reasonToRegister":""}',
            ),
            131 => 
            array (
                'id' => 132,
                'user_id' => 2,
                'log_date' => '2021-03-10 08:57:21',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-03-10T13:57:21.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-03-09 07:50:22","last_login_date":"2021-03-09 07:50:22","login_count":156,"reasonToRegister":""}',
            ),
            132 => 
            array (
                'id' => 133,
                'user_id' => 2,
                'log_date' => '2021-03-29 20:33:45',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/89.0.4389.90 Safari\\/537.36 Edg\\/89.0.774.63"}',
            ),
            133 => 
            array (
                'id' => 134,
                'user_id' => 2,
                'log_date' => '2021-03-29 20:33:46',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-03-10T13:57:21.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-03-09 07:50:22","last_login_date":"2021-03-10 08:57:21","login_count":157,"reasonToRegister":""}',
            ),
            134 => 
            array (
                'id' => 135,
                'user_id' => 2,
                'log_date' => '2021-03-29 20:33:46',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-03-30T00:33:46.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-03-10 08:57:21","last_login_date":"2021-03-10 08:57:21","login_count":157,"reasonToRegister":""}',
            ),
            135 => 
            array (
                'id' => 136,
                'user_id' => 2,
                'log_date' => '2021-03-30 10:33:32',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/89.0.4389.90 Safari\\/537.36 Edg\\/89.0.774.63"}',
            ),
            136 => 
            array (
                'id' => 137,
                'user_id' => 2,
                'log_date' => '2021-03-30 10:33:32',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-03-30T00:33:46.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-03-10 08:57:21","last_login_date":"2021-03-29 20:33:46","login_count":158,"reasonToRegister":""}',
            ),
            137 => 
            array (
                'id' => 138,
                'user_id' => 2,
                'log_date' => '2021-03-30 10:33:32',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-03-30T14:33:32.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-03-29 20:33:46","last_login_date":"2021-03-29 20:33:46","login_count":158,"reasonToRegister":""}',
            ),
            138 => 
            array (
                'id' => 139,
                'user_id' => 2,
                'log_date' => '2021-03-30 14:31:11',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/89.0.4389.90 Safari\\/537.36 Edg\\/89.0.774.63"}',
            ),
            139 => 
            array (
                'id' => 140,
                'user_id' => 2,
                'log_date' => '2021-03-30 14:31:11',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-03-30T14:33:32.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-03-29 20:33:46","last_login_date":"2021-03-30 10:33:32","login_count":159,"reasonToRegister":""}',
            ),
            140 => 
            array (
                'id' => 141,
                'user_id' => 2,
                'log_date' => '2021-03-30 14:31:11',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-03-30T18:31:11.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-03-30 10:33:32","last_login_date":"2021-03-30 10:33:32","login_count":159,"reasonToRegister":""}',
            ),
            141 => 
            array (
                'id' => 142,
                'user_id' => 2,
                'log_date' => '2021-04-02 20:14:24',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/89.0.4389.114 Safari\\/537.36"}',
            ),
            142 => 
            array (
                'id' => 143,
                'user_id' => 2,
                'log_date' => '2021-04-02 20:14:25',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-03-30T18:31:11.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-03-30 10:33:32","last_login_date":"2021-03-30 14:31:11","login_count":160,"reasonToRegister":""}',
            ),
            143 => 
            array (
                'id' => 144,
                'user_id' => 2,
                'log_date' => '2021-04-02 20:14:25',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-03T00:14:25.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-03-30 14:31:11","last_login_date":"2021-03-30 14:31:11","login_count":160,"reasonToRegister":""}',
            ),
            144 => 
            array (
                'id' => 145,
                'user_id' => 2,
                'log_date' => '2021-04-03 06:40:50',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/89.0.4389.114 Safari\\/537.36"}',
            ),
            145 => 
            array (
                'id' => 146,
                'user_id' => 2,
                'log_date' => '2021-04-03 06:40:50',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-03T00:14:25.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-03-30 14:31:11","last_login_date":"2021-04-02 20:14:25","login_count":161,"reasonToRegister":""}',
            ),
            146 => 
            array (
                'id' => 147,
                'user_id' => 2,
                'log_date' => '2021-04-03 06:40:50',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-03T10:40:50.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-02 20:14:25","last_login_date":"2021-04-02 20:14:25","login_count":161,"reasonToRegister":""}',
            ),
            147 => 
            array (
                'id' => 148,
                'user_id' => 2,
                'log_date' => '2021-04-03 09:32:50',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/89.0.4389.114 Safari\\/537.36"}',
            ),
            148 => 
            array (
                'id' => 149,
                'user_id' => 2,
                'log_date' => '2021-04-03 09:32:50',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-03T10:40:50.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-02 20:14:25","last_login_date":"2021-04-03 06:40:50","login_count":162,"reasonToRegister":""}',
            ),
            149 => 
            array (
                'id' => 150,
                'user_id' => 2,
                'log_date' => '2021-04-03 09:32:50',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-03T13:32:50.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-03 06:40:50","last_login_date":"2021-04-03 06:40:50","login_count":162,"reasonToRegister":""}',
            ),
            150 => 
            array (
                'id' => 151,
                'user_id' => 2,
                'log_date' => '2021-04-03 19:14:59',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/89.0.4389.114 Safari\\/537.36"}',
            ),
            151 => 
            array (
                'id' => 152,
                'user_id' => 2,
                'log_date' => '2021-04-03 19:15:00',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-03T13:32:50.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-03 06:40:50","last_login_date":"2021-04-03 09:32:50","login_count":163,"reasonToRegister":""}',
            ),
            152 => 
            array (
                'id' => 153,
                'user_id' => 2,
                'log_date' => '2021-04-03 19:15:00',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-03T23:14:59.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-03 09:32:50","last_login_date":"2021-04-03 09:32:50","login_count":163,"reasonToRegister":""}',
            ),
            153 => 
            array (
                'id' => 154,
                'user_id' => 2,
                'log_date' => '2021-04-06 12:53:31',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/89.0.4389.114 Safari\\/537.36"}',
            ),
            154 => 
            array (
                'id' => 155,
                'user_id' => 2,
                'log_date' => '2021-04-06 12:53:31',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-03T23:15:00.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-03 09:32:50","last_login_date":"2021-04-03 19:15:00","login_count":164,"reasonToRegister":""}',
            ),
            155 => 
            array (
                'id' => 156,
                'user_id' => 2,
                'log_date' => '2021-04-06 12:53:31',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-06T16:53:31.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-03 19:15:00","last_login_date":"2021-04-03 19:15:00","login_count":164,"reasonToRegister":""}',
            ),
            156 => 
            array (
                'id' => 157,
                'user_id' => 2,
                'log_date' => '2021-04-07 07:33:24',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/89.0.4389.114 Safari\\/537.36"}',
            ),
            157 => 
            array (
                'id' => 158,
                'user_id' => 2,
                'log_date' => '2021-04-07 07:33:24',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-06T16:53:31.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-03 19:15:00","last_login_date":"2021-04-06 12:53:31","login_count":165,"reasonToRegister":""}',
            ),
            158 => 
            array (
                'id' => 159,
                'user_id' => 2,
                'log_date' => '2021-04-07 07:33:24',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-07T11:33:24.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-06 12:53:31","last_login_date":"2021-04-06 12:53:31","login_count":165,"reasonToRegister":""}',
            ),
            159 => 
            array (
                'id' => 160,
                'user_id' => 2,
                'log_date' => '2021-04-07 11:33:59',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/89.0.4389.114 Safari\\/537.36"}',
            ),
            160 => 
            array (
                'id' => 161,
                'user_id' => 2,
                'log_date' => '2021-04-07 11:33:59',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-07T11:33:24.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-06 12:53:31","last_login_date":"2021-04-07 07:33:24","login_count":166,"reasonToRegister":""}',
            ),
            161 => 
            array (
                'id' => 162,
                'user_id' => 2,
                'log_date' => '2021-04-07 11:33:59',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-07T15:33:59.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-07 07:33:24","last_login_date":"2021-04-07 07:33:24","login_count":166,"reasonToRegister":""}',
            ),
            162 => 
            array (
                'id' => 163,
                'user_id' => 2,
                'log_date' => '2021-04-07 15:32:39',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/89.0.4389.114 Safari\\/537.36"}',
            ),
            163 => 
            array (
                'id' => 164,
                'user_id' => 2,
                'log_date' => '2021-04-07 15:32:39',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-07T15:33:59.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-07 07:33:24","last_login_date":"2021-04-07 11:33:59","login_count":167,"reasonToRegister":""}',
            ),
            164 => 
            array (
                'id' => 165,
                'user_id' => 2,
                'log_date' => '2021-04-07 15:32:39',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-07T19:32:39.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-07 11:33:59","last_login_date":"2021-04-07 11:33:59","login_count":167,"reasonToRegister":""}',
            ),
            165 => 
            array (
                'id' => 166,
                'user_id' => 2,
                'log_date' => '2021-04-07 20:53:46',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/89.0.4389.114 Safari\\/537.36"}',
            ),
            166 => 
            array (
                'id' => 167,
                'user_id' => 2,
                'log_date' => '2021-04-07 20:53:46',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-07T19:32:39.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-07 11:33:59","last_login_date":"2021-04-07 15:32:39","login_count":168,"reasonToRegister":""}',
            ),
            167 => 
            array (
                'id' => 168,
                'user_id' => 2,
                'log_date' => '2021-04-07 20:53:46',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-08T00:53:46.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-07 15:32:39","last_login_date":"2021-04-07 15:32:39","login_count":168,"reasonToRegister":""}',
            ),
            168 => 
            array (
                'id' => 169,
                'user_id' => 2,
                'log_date' => '2021-04-08 13:57:07',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/89.0.4389.114 Safari\\/537.36"}',
            ),
            169 => 
            array (
                'id' => 170,
                'user_id' => 2,
                'log_date' => '2021-04-08 13:57:07',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-08T00:53:46.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-07 15:32:39","last_login_date":"2021-04-07 20:53:46","login_count":169,"reasonToRegister":""}',
            ),
            170 => 
            array (
                'id' => 171,
                'user_id' => 2,
                'log_date' => '2021-04-08 13:57:07',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-08T17:57:07.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-07 20:53:46","last_login_date":"2021-04-07 20:53:46","login_count":169,"reasonToRegister":""}',
            ),
            171 => 
            array (
                'id' => 172,
                'user_id' => 2,
                'log_date' => '2021-04-09 21:50:34',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/89.0.4389.114 Safari\\/537.36"}',
            ),
            172 => 
            array (
                'id' => 173,
                'user_id' => 2,
                'log_date' => '2021-04-09 21:50:34',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-08T17:57:07.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-07 20:53:46","last_login_date":"2021-04-08 13:57:07","login_count":170,"reasonToRegister":""}',
            ),
            173 => 
            array (
                'id' => 174,
                'user_id' => 2,
                'log_date' => '2021-04-09 21:50:34',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-10T01:50:34.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-08 13:57:07","last_login_date":"2021-04-08 13:57:07","login_count":170,"reasonToRegister":""}',
            ),
            174 => 
            array (
                'id' => 175,
                'user_id' => 2,
                'log_date' => '2021-04-20 07:55:34',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            175 => 
            array (
                'id' => 176,
                'user_id' => 2,
                'log_date' => '2021-04-20 07:55:35',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-10T01:50:34.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-08 13:57:07","last_login_date":"2021-04-09 21:50:34","login_count":171,"reasonToRegister":""}',
            ),
            176 => 
            array (
                'id' => 177,
                'user_id' => 2,
                'log_date' => '2021-04-20 07:55:35',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-20T11:55:34.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-09 21:50:34","last_login_date":"2021-04-09 21:50:34","login_count":171,"reasonToRegister":""}',
            ),
            177 => 
            array (
                'id' => 178,
                'user_id' => 2,
                'log_date' => '2021-04-21 19:05:18',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            178 => 
            array (
                'id' => 179,
                'user_id' => 2,
                'log_date' => '2021-04-21 19:05:18',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-20T11:55:35.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-09 21:50:34","last_login_date":"2021-04-20 07:55:35","login_count":172,"reasonToRegister":""}',
            ),
            179 => 
            array (
                'id' => 180,
                'user_id' => 2,
                'log_date' => '2021-04-21 19:05:19',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-21T23:05:18.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-20 07:55:35","last_login_date":"2021-04-20 07:55:35","login_count":172,"reasonToRegister":""}',
            ),
            180 => 
            array (
                'id' => 181,
                'user_id' => 2,
                'log_date' => '2021-04-22 06:35:11',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            181 => 
            array (
                'id' => 182,
                'user_id' => 2,
                'log_date' => '2021-04-22 06:35:11',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-21T23:05:19.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-20 07:55:35","last_login_date":"2021-04-21 19:05:18","login_count":173,"reasonToRegister":""}',
            ),
            182 => 
            array (
                'id' => 183,
                'user_id' => 2,
                'log_date' => '2021-04-22 06:35:11',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-22T10:35:11.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-21 19:05:18","last_login_date":"2021-04-21 19:05:18","login_count":173,"reasonToRegister":""}',
            ),
            183 => 
            array (
                'id' => 184,
                'user_id' => 2,
                'log_date' => '2021-04-22 13:27:23',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            184 => 
            array (
                'id' => 185,
                'user_id' => 2,
                'log_date' => '2021-04-22 13:27:23',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-22T10:35:11.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-21 19:05:18","last_login_date":"2021-04-22 06:35:11","login_count":174,"reasonToRegister":""}',
            ),
            185 => 
            array (
                'id' => 186,
                'user_id' => 2,
                'log_date' => '2021-04-22 13:27:23',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-22T17:27:23.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-22 06:35:11","last_login_date":"2021-04-22 06:35:11","login_count":174,"reasonToRegister":""}',
            ),
            186 => 
            array (
                'id' => 187,
                'user_id' => 2,
                'log_date' => '2021-04-23 13:04:21',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            187 => 
            array (
                'id' => 188,
                'user_id' => 2,
                'log_date' => '2021-04-23 13:04:21',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-22T17:27:23.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-22 06:35:11","last_login_date":"2021-04-22 13:27:23","login_count":175,"reasonToRegister":""}',
            ),
            188 => 
            array (
                'id' => 189,
                'user_id' => 2,
                'log_date' => '2021-04-23 13:04:21',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-23T17:04:21.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-22 13:27:23","last_login_date":"2021-04-22 13:27:23","login_count":175,"reasonToRegister":""}',
            ),
            189 => 
            array (
                'id' => 190,
                'user_id' => 2,
                'log_date' => '2021-04-26 06:25:45',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            190 => 
            array (
                'id' => 191,
                'user_id' => 2,
                'log_date' => '2021-04-26 06:25:45',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-23T17:04:21.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-22 13:27:23","last_login_date":"2021-04-23 13:04:21","login_count":176,"reasonToRegister":""}',
            ),
            191 => 
            array (
                'id' => 192,
                'user_id' => 2,
                'log_date' => '2021-04-26 06:25:45',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-26T10:25:45.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-23 13:04:21","last_login_date":"2021-04-23 13:04:21","login_count":176,"reasonToRegister":""}',
            ),
            192 => 
            array (
                'id' => 193,
                'user_id' => 2,
                'log_date' => '2021-04-26 11:41:03',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            193 => 
            array (
                'id' => 194,
                'user_id' => 2,
                'log_date' => '2021-04-26 11:41:03',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-26T10:25:45.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-23 13:04:21","last_login_date":"2021-04-26 06:25:45","login_count":177,"reasonToRegister":""}',
            ),
            194 => 
            array (
                'id' => 195,
                'user_id' => 2,
                'log_date' => '2021-04-26 11:41:03',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-26T15:41:03.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-26 06:25:45","last_login_date":"2021-04-26 06:25:45","login_count":177,"reasonToRegister":""}',
            ),
            195 => 
            array (
                'id' => 196,
                'user_id' => 2,
                'log_date' => '2021-04-27 06:23:44',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            196 => 
            array (
                'id' => 197,
                'user_id' => 2,
                'log_date' => '2021-04-27 06:23:45',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-26T15:41:03.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-26 06:25:45","last_login_date":"2021-04-26 11:41:03","login_count":178,"reasonToRegister":""}',
            ),
            197 => 
            array (
                'id' => 198,
                'user_id' => 2,
                'log_date' => '2021-04-27 06:23:45',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-27T10:23:44.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-26 11:41:03","last_login_date":"2021-04-26 11:41:03","login_count":178,"reasonToRegister":""}',
            ),
            198 => 
            array (
                'id' => 199,
                'user_id' => 2,
                'log_date' => '2021-04-27 13:56:32',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            199 => 
            array (
                'id' => 200,
                'user_id' => 2,
                'log_date' => '2021-04-27 13:56:32',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-27T10:23:45.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-26 11:41:03","last_login_date":"2021-04-27 06:23:45","login_count":179,"reasonToRegister":""}',
            ),
            200 => 
            array (
                'id' => 201,
                'user_id' => 2,
                'log_date' => '2021-04-27 13:56:32',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-27T17:56:32.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-27 06:23:45","last_login_date":"2021-04-27 06:23:45","login_count":179,"reasonToRegister":""}',
            ),
            201 => 
            array (
                'id' => 202,
                'user_id' => 2,
                'log_date' => '2021-04-27 22:30:28',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            202 => 
            array (
                'id' => 203,
                'user_id' => 2,
                'log_date' => '2021-04-27 22:30:29',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-27T17:56:32.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-27 06:23:45","last_login_date":"2021-04-27 13:56:32","login_count":180,"reasonToRegister":""}',
            ),
            203 => 
            array (
                'id' => 204,
                'user_id' => 2,
                'log_date' => '2021-04-27 22:30:29',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-28T02:30:29.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-27 13:56:32","last_login_date":"2021-04-27 13:56:32","login_count":180,"reasonToRegister":""}',
            ),
            204 => 
            array (
                'id' => 205,
                'user_id' => 2,
                'log_date' => '2021-04-28 06:25:10',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            205 => 
            array (
                'id' => 206,
                'user_id' => 2,
                'log_date' => '2021-04-28 06:25:10',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-28T02:30:29.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-27 13:56:32","last_login_date":"2021-04-27 22:30:29","login_count":181,"reasonToRegister":""}',
            ),
            206 => 
            array (
                'id' => 207,
                'user_id' => 2,
                'log_date' => '2021-04-28 06:25:10',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-28T10:25:10.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-27 22:30:29","last_login_date":"2021-04-27 22:30:29","login_count":181,"reasonToRegister":""}',
            ),
            207 => 
            array (
                'id' => 208,
                'user_id' => 2,
                'log_date' => '2021-04-29 10:17:21',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            208 => 
            array (
                'id' => 209,
                'user_id' => 2,
                'log_date' => '2021-04-29 10:17:21',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-28T10:25:10.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-27 22:30:29","last_login_date":"2021-04-28 06:25:10","login_count":182,"reasonToRegister":""}',
            ),
            209 => 
            array (
                'id' => 210,
                'user_id' => 2,
                'log_date' => '2021-04-29 10:17:21',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-29T14:17:21.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-28 06:25:10","last_login_date":"2021-04-28 06:25:10","login_count":182,"reasonToRegister":""}',
            ),
            210 => 
            array (
                'id' => 211,
                'user_id' => 2,
                'log_date' => '2021-04-30 09:10:21',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            211 => 
            array (
                'id' => 212,
                'user_id' => 2,
                'log_date' => '2021-04-30 09:10:21',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-29T14:17:21.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-28 06:25:10","last_login_date":"2021-04-29 10:17:21","login_count":183,"reasonToRegister":""}',
            ),
            212 => 
            array (
                'id' => 213,
                'user_id' => 2,
                'log_date' => '2021-04-30 09:10:21',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-30T13:10:21.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-29 10:17:21","last_login_date":"2021-04-29 10:17:21","login_count":183,"reasonToRegister":""}',
            ),
            213 => 
            array (
                'id' => 214,
                'user_id' => 2,
                'log_date' => '2021-04-30 13:54:15',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            214 => 
            array (
                'id' => 215,
                'user_id' => 2,
                'log_date' => '2021-04-30 13:54:15',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-30T13:10:21.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-29 10:17:21","last_login_date":"2021-04-30 09:10:21","login_count":184,"reasonToRegister":""}',
            ),
            215 => 
            array (
                'id' => 216,
                'user_id' => 2,
                'log_date' => '2021-04-30 13:54:15',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-30T17:54:15.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-30 09:10:21","last_login_date":"2021-04-30 09:10:21","login_count":184,"reasonToRegister":""}',
            ),
            216 => 
            array (
                'id' => 217,
                'user_id' => 2,
                'log_date' => '2021-04-30 22:51:07',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            217 => 
            array (
                'id' => 218,
                'user_id' => 2,
                'log_date' => '2021-04-30 22:51:08',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-04-30T17:54:15.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-30 09:10:21","last_login_date":"2021-04-30 13:54:15","login_count":185,"reasonToRegister":""}',
            ),
            218 => 
            array (
                'id' => 219,
                'user_id' => 2,
                'log_date' => '2021-04-30 22:51:08',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-01T02:51:07.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-30 13:54:15","last_login_date":"2021-04-30 13:54:15","login_count":185,"reasonToRegister":""}',
            ),
            219 => 
            array (
                'id' => 220,
                'user_id' => 2,
                'log_date' => '2021-05-01 09:33:53',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            220 => 
            array (
                'id' => 221,
                'user_id' => 2,
                'log_date' => '2021-05-01 09:33:53',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-01T02:51:08.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-30 13:54:15","last_login_date":"2021-04-30 22:51:08","login_count":186,"reasonToRegister":""}',
            ),
            221 => 
            array (
                'id' => 222,
                'user_id' => 2,
                'log_date' => '2021-05-01 09:33:53',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-01T13:33:53.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-30 22:51:08","last_login_date":"2021-04-30 22:51:08","login_count":186,"reasonToRegister":""}',
            ),
            222 => 
            array (
                'id' => 223,
                'user_id' => 2,
                'log_date' => '2021-05-01 16:22:33',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            223 => 
            array (
                'id' => 224,
                'user_id' => 2,
                'log_date' => '2021-05-01 16:22:33',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-01T13:33:53.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-04-30 22:51:08","last_login_date":"2021-05-01 09:33:53","login_count":187,"reasonToRegister":""}',
            ),
            224 => 
            array (
                'id' => 225,
                'user_id' => 2,
                'log_date' => '2021-05-01 16:22:33',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-01T20:22:33.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-01 09:33:53","last_login_date":"2021-05-01 09:33:53","login_count":187,"reasonToRegister":""}',
            ),
            225 => 
            array (
                'id' => 226,
                'user_id' => 2,
                'log_date' => '2021-05-01 19:41:45',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            226 => 
            array (
                'id' => 227,
                'user_id' => 2,
                'log_date' => '2021-05-01 19:41:46',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-01T20:22:33.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-01 09:33:53","last_login_date":"2021-05-01 16:22:33","login_count":188,"reasonToRegister":""}',
            ),
            227 => 
            array (
                'id' => 228,
                'user_id' => 2,
                'log_date' => '2021-05-01 19:41:46',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-01T23:41:46.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-01 16:22:33","last_login_date":"2021-05-01 16:22:33","login_count":188,"reasonToRegister":""}',
            ),
            228 => 
            array (
                'id' => 229,
                'user_id' => 2,
                'log_date' => '2021-05-01 19:42:02',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            229 => 
            array (
                'id' => 230,
                'user_id' => 2,
                'log_date' => '2021-05-01 19:42:02',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-01T23:41:46.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-01 16:22:33","last_login_date":"2021-05-01 19:41:46","login_count":189,"reasonToRegister":""}',
            ),
            230 => 
            array (
                'id' => 231,
                'user_id' => 2,
                'log_date' => '2021-05-01 19:42:02',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-01T23:42:02.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-01 19:41:46","last_login_date":"2021-05-01 19:41:46","login_count":189,"reasonToRegister":""}',
            ),
            231 => 
            array (
                'id' => 232,
                'user_id' => 2,
                'log_date' => '2021-05-02 21:33:22',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            232 => 
            array (
                'id' => 233,
                'user_id' => 2,
                'log_date' => '2021-05-02 21:33:22',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-01T23:42:02.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-01 19:41:46","last_login_date":"2021-05-01 19:42:02","login_count":190,"reasonToRegister":""}',
            ),
            233 => 
            array (
                'id' => 234,
                'user_id' => 2,
                'log_date' => '2021-05-02 21:33:22',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-03T01:33:22.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-01 19:42:02","last_login_date":"2021-05-01 19:42:02","login_count":190,"reasonToRegister":""}',
            ),
            234 => 
            array (
                'id' => 235,
                'user_id' => 2,
                'log_date' => '2021-05-11 07:06:16',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            235 => 
            array (
                'id' => 236,
                'user_id' => 2,
                'log_date' => '2021-05-11 07:06:16',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-03T01:33:22.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-01 19:42:02","last_login_date":"2021-05-02 21:33:22","login_count":191,"reasonToRegister":""}',
            ),
            236 => 
            array (
                'id' => 237,
                'user_id' => 2,
                'log_date' => '2021-05-11 07:06:16',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-11T11:06:16.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-02 21:33:22","last_login_date":"2021-05-02 21:33:22","login_count":191,"reasonToRegister":""}',
            ),
            237 => 
            array (
                'id' => 238,
                'user_id' => 2,
                'log_date' => '2021-05-11 10:37:56',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            238 => 
            array (
                'id' => 239,
                'user_id' => 2,
                'log_date' => '2021-05-11 10:37:56',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-11T11:06:16.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-02 21:33:22","last_login_date":"2021-05-11 07:06:16","login_count":192,"reasonToRegister":""}',
            ),
            239 => 
            array (
                'id' => 240,
                'user_id' => 2,
                'log_date' => '2021-05-11 10:37:56',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-11T14:37:56.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-11 07:06:16","last_login_date":"2021-05-11 07:06:16","login_count":192,"reasonToRegister":""}',
            ),
            240 => 
            array (
                'id' => 241,
                'user_id' => 2,
                'log_date' => '2021-05-11 21:43:48',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            241 => 
            array (
                'id' => 242,
                'user_id' => 2,
                'log_date' => '2021-05-11 21:43:49',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-11T14:37:56.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-11 07:06:16","last_login_date":"2021-05-11 10:37:56","login_count":193,"reasonToRegister":""}',
            ),
            242 => 
            array (
                'id' => 243,
                'user_id' => 2,
                'log_date' => '2021-05-11 21:43:49',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-12T01:43:49.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-11 10:37:56","last_login_date":"2021-05-11 10:37:56","login_count":193,"reasonToRegister":""}',
            ),
            243 => 
            array (
                'id' => 244,
                'user_id' => 2,
                'log_date' => '2021-05-12 09:58:58',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.72 Safari\\/537.36"}',
            ),
            244 => 
            array (
                'id' => 245,
                'user_id' => 2,
                'log_date' => '2021-05-12 09:58:58',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-12T01:43:49.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-11 10:37:56","last_login_date":"2021-05-11 21:43:49","login_count":194,"reasonToRegister":""}',
            ),
            245 => 
            array (
                'id' => 246,
                'user_id' => 2,
                'log_date' => '2021-05-12 09:58:58',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-12T13:58:58.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-11 21:43:49","last_login_date":"2021-05-11 21:43:49","login_count":194,"reasonToRegister":""}',
            ),
            246 => 
            array (
                'id' => 247,
                'user_id' => 2,
                'log_date' => '2021-05-14 09:23:34',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.93 Safari\\/537.36"}',
            ),
            247 => 
            array (
                'id' => 248,
                'user_id' => 2,
                'log_date' => '2021-05-14 09:23:35',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-12T13:58:58.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-11 21:43:49","last_login_date":"2021-05-12 09:58:58","login_count":195,"reasonToRegister":""}',
            ),
            248 => 
            array (
                'id' => 249,
                'user_id' => 2,
                'log_date' => '2021-05-14 09:23:35',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-14T13:23:34.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-12 09:58:58","last_login_date":"2021-05-12 09:58:58","login_count":195,"reasonToRegister":""}',
            ),
            249 => 
            array (
                'id' => 250,
                'user_id' => 2,
                'log_date' => '2021-05-17 06:26:30',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            250 => 
            array (
                'id' => 251,
                'user_id' => 2,
                'log_date' => '2021-05-17 06:26:31',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-14T13:23:35.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-12 09:58:58","last_login_date":"2021-05-14 09:23:35","login_count":196,"reasonToRegister":""}',
            ),
            251 => 
            array (
                'id' => 252,
                'user_id' => 2,
                'log_date' => '2021-05-17 06:26:31',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-17T10:26:30.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-14 09:23:35","last_login_date":"2021-05-14 09:23:35","login_count":196,"reasonToRegister":""}',
            ),
            252 => 
            array (
                'id' => 253,
                'user_id' => 2,
                'log_date' => '2021-05-17 11:14:45',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            253 => 
            array (
                'id' => 254,
                'user_id' => 2,
                'log_date' => '2021-05-17 11:14:45',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-17T10:26:31.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-14 09:23:35","last_login_date":"2021-05-17 06:26:31","login_count":197,"reasonToRegister":""}',
            ),
            254 => 
            array (
                'id' => 255,
                'user_id' => 2,
                'log_date' => '2021-05-17 11:14:45',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-17T15:14:45.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-17 06:26:31","last_login_date":"2021-05-17 06:26:31","login_count":197,"reasonToRegister":""}',
            ),
            255 => 
            array (
                'id' => 256,
                'user_id' => 2,
                'log_date' => '2021-05-17 20:59:21',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            256 => 
            array (
                'id' => 257,
                'user_id' => 2,
                'log_date' => '2021-05-17 20:59:21',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-17T15:14:45.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-17 06:26:31","last_login_date":"2021-05-17 11:14:45","login_count":198,"reasonToRegister":""}',
            ),
            257 => 
            array (
                'id' => 258,
                'user_id' => 2,
                'log_date' => '2021-05-17 20:59:21',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-18T00:59:21.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-17 11:14:45","last_login_date":"2021-05-17 11:14:45","login_count":198,"reasonToRegister":""}',
            ),
            258 => 
            array (
                'id' => 259,
                'user_id' => 2,
                'log_date' => '2021-05-18 11:41:38',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            259 => 
            array (
                'id' => 260,
                'user_id' => 2,
                'log_date' => '2021-05-18 11:41:38',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-18T00:59:21.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-17 11:14:45","last_login_date":"2021-05-17 20:59:21","login_count":199,"reasonToRegister":""}',
            ),
            260 => 
            array (
                'id' => 261,
                'user_id' => 2,
                'log_date' => '2021-05-18 11:41:38',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-18T15:41:38.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-17 20:59:21","last_login_date":"2021-05-17 20:59:21","login_count":199,"reasonToRegister":""}',
            ),
            261 => 
            array (
                'id' => 262,
                'user_id' => 2,
                'log_date' => '2021-05-18 21:44:06',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            262 => 
            array (
                'id' => 263,
                'user_id' => 2,
                'log_date' => '2021-05-18 21:44:07',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-18T15:41:38.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-17 20:59:21","last_login_date":"2021-05-18 11:41:38","login_count":200,"reasonToRegister":""}',
            ),
            263 => 
            array (
                'id' => 264,
                'user_id' => 2,
                'log_date' => '2021-05-18 21:44:07',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-19T01:44:06.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-18 11:41:38","last_login_date":"2021-05-18 11:41:38","login_count":200,"reasonToRegister":""}',
            ),
            264 => 
            array (
                'id' => 265,
                'user_id' => 2,
                'log_date' => '2021-05-19 08:19:18',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            265 => 
            array (
                'id' => 266,
                'user_id' => 2,
                'log_date' => '2021-05-19 08:19:18',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-19T01:44:07.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-18 11:41:38","last_login_date":"2021-05-18 21:44:07","login_count":201,"reasonToRegister":""}',
            ),
            266 => 
            array (
                'id' => 267,
                'user_id' => 2,
                'log_date' => '2021-05-19 08:19:18',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-19T12:19:18.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-18 21:44:07","last_login_date":"2021-05-18 21:44:07","login_count":201,"reasonToRegister":""}',
            ),
            267 => 
            array (
                'id' => 268,
                'user_id' => 2,
                'log_date' => '2021-05-19 08:27:16',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            268 => 
            array (
                'id' => 269,
                'user_id' => 2,
                'log_date' => '2021-05-19 08:27:16',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-19T12:19:18.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-18 21:44:07","last_login_date":"2021-05-19 08:19:18","login_count":202,"reasonToRegister":""}',
            ),
            269 => 
            array (
                'id' => 270,
                'user_id' => 2,
                'log_date' => '2021-05-19 08:27:16',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-19T12:27:16.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-19 08:19:18","last_login_date":"2021-05-19 08:19:18","login_count":202,"reasonToRegister":""}',
            ),
            270 => 
            array (
                'id' => 271,
                'user_id' => 2,
                'log_date' => '2021-05-19 14:14:06',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            271 => 
            array (
                'id' => 272,
                'user_id' => 2,
                'log_date' => '2021-05-19 14:14:06',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-19T12:27:16.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-19 08:19:18","last_login_date":"2021-05-19 08:27:16","login_count":203,"reasonToRegister":""}',
            ),
            272 => 
            array (
                'id' => 273,
                'user_id' => 2,
                'log_date' => '2021-05-19 14:14:06',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-19T18:14:06.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-19 08:27:16","last_login_date":"2021-05-19 08:27:16","login_count":203,"reasonToRegister":""}',
            ),
            273 => 
            array (
                'id' => 274,
                'user_id' => 2,
                'log_date' => '2021-05-19 20:24:18',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            274 => 
            array (
                'id' => 275,
                'user_id' => 2,
                'log_date' => '2021-05-19 20:24:19',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-19T18:14:06.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-19 08:27:16","last_login_date":"2021-05-19 14:14:06","login_count":204,"reasonToRegister":""}',
            ),
            275 => 
            array (
                'id' => 276,
                'user_id' => 2,
                'log_date' => '2021-05-19 20:24:19',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-20T00:24:18.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-19 14:14:06","last_login_date":"2021-05-19 14:14:06","login_count":204,"reasonToRegister":""}',
            ),
            276 => 
            array (
                'id' => 277,
                'user_id' => 2,
                'log_date' => '2021-05-20 08:07:25',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            277 => 
            array (
                'id' => 278,
                'user_id' => 2,
                'log_date' => '2021-05-20 08:07:25',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-20T00:24:19.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-19 14:14:06","last_login_date":"2021-05-19 20:24:19","login_count":205,"reasonToRegister":""}',
            ),
            278 => 
            array (
                'id' => 279,
                'user_id' => 2,
                'log_date' => '2021-05-20 08:07:25',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-20T12:07:25.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-19 20:24:19","last_login_date":"2021-05-19 20:24:19","login_count":205,"reasonToRegister":""}',
            ),
            279 => 
            array (
                'id' => 280,
                'user_id' => 2,
                'log_date' => '2021-05-20 11:43:36',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            280 => 
            array (
                'id' => 281,
                'user_id' => 2,
                'log_date' => '2021-05-20 11:43:36',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-20T12:07:25.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-19 20:24:19","last_login_date":"2021-05-20 08:07:25","login_count":206,"reasonToRegister":""}',
            ),
            281 => 
            array (
                'id' => 282,
                'user_id' => 2,
                'log_date' => '2021-05-20 11:43:36',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-20T15:43:36.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-20 08:07:25","last_login_date":"2021-05-20 08:07:25","login_count":206,"reasonToRegister":""}',
            ),
            282 => 
            array (
                'id' => 283,
                'user_id' => 2,
                'log_date' => '2021-05-21 09:30:57',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"192.168.0.12","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            283 => 
            array (
                'id' => 284,
                'user_id' => 2,
                'log_date' => '2021-05-21 09:30:57',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-20T15:43:36.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-20 08:07:25","last_login_date":"2021-05-20 11:43:36","login_count":207,"reasonToRegister":""}',
            ),
            284 => 
            array (
                'id' => 285,
                'user_id' => 2,
                'log_date' => '2021-05-21 09:30:57',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-21T13:30:57.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-20 11:43:36","last_login_date":"2021-05-20 11:43:36","login_count":207,"reasonToRegister":""}',
            ),
            285 => 
            array (
                'id' => 286,
                'user_id' => 2,
                'log_date' => '2021-05-21 09:49:46',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            286 => 
            array (
                'id' => 287,
                'user_id' => 2,
                'log_date' => '2021-05-21 09:49:46',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-21T13:30:57.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-20 11:43:36","last_login_date":"2021-05-21 09:30:57","login_count":208,"reasonToRegister":""}',
            ),
            287 => 
            array (
                'id' => 288,
                'user_id' => 2,
                'log_date' => '2021-05-21 09:49:46',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-21T13:49:46.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-21 09:30:57","last_login_date":"2021-05-21 09:30:57","login_count":208,"reasonToRegister":""}',
            ),
            288 => 
            array (
                'id' => 289,
                'user_id' => 2,
                'log_date' => '2021-05-21 21:04:21',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            289 => 
            array (
                'id' => 290,
                'user_id' => 2,
                'log_date' => '2021-05-21 21:04:22',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-21T13:49:46.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-21 09:30:57","last_login_date":"2021-05-21 09:49:46","login_count":209,"reasonToRegister":""}',
            ),
            290 => 
            array (
                'id' => 291,
                'user_id' => 2,
                'log_date' => '2021-05-21 21:04:22',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-22T01:04:21.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-21 09:49:46","last_login_date":"2021-05-21 09:49:46","login_count":209,"reasonToRegister":""}',
            ),
            291 => 
            array (
                'id' => 292,
                'user_id' => 2,
                'log_date' => '2021-05-22 22:52:34',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            292 => 
            array (
                'id' => 293,
                'user_id' => 2,
                'log_date' => '2021-05-22 22:52:34',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-22T01:04:22.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-21 09:49:46","last_login_date":"2021-05-21 21:04:22","login_count":210,"reasonToRegister":""}',
            ),
            293 => 
            array (
                'id' => 294,
                'user_id' => 2,
                'log_date' => '2021-05-22 22:52:34',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-23T02:52:34.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-21 21:04:22","last_login_date":"2021-05-21 21:04:22","login_count":210,"reasonToRegister":""}',
            ),
            294 => 
            array (
                'id' => 295,
                'user_id' => 2,
                'log_date' => '2021-05-23 22:06:07',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            295 => 
            array (
                'id' => 296,
                'user_id' => 2,
                'log_date' => '2021-05-23 22:06:07',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-23T02:52:34.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-21 21:04:22","last_login_date":"2021-05-22 22:52:34","login_count":211,"reasonToRegister":""}',
            ),
            296 => 
            array (
                'id' => 297,
                'user_id' => 2,
                'log_date' => '2021-05-23 22:06:07',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-24T02:06:07.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-22 22:52:34","last_login_date":"2021-05-22 22:52:34","login_count":211,"reasonToRegister":""}',
            ),
            297 => 
            array (
                'id' => 298,
                'user_id' => 2,
                'log_date' => '2021-05-24 07:39:58',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            298 => 
            array (
                'id' => 299,
                'user_id' => 2,
                'log_date' => '2021-05-24 07:39:58',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-24T02:06:07.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-22 22:52:34","last_login_date":"2021-05-23 22:06:07","login_count":212,"reasonToRegister":""}',
            ),
            299 => 
            array (
                'id' => 300,
                'user_id' => 2,
                'log_date' => '2021-05-24 07:39:58',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-24T11:39:58.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-23 22:06:07","last_login_date":"2021-05-23 22:06:07","login_count":212,"reasonToRegister":""}',
            ),
            300 => 
            array (
                'id' => 301,
                'user_id' => 2,
                'log_date' => '2021-05-24 08:41:32',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            301 => 
            array (
                'id' => 302,
                'user_id' => 2,
                'log_date' => '2021-05-24 08:41:32',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-24T11:39:58.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-23 22:06:07","last_login_date":"2021-05-24 07:39:58","login_count":213,"reasonToRegister":""}',
            ),
            302 => 
            array (
                'id' => 303,
                'user_id' => 2,
                'log_date' => '2021-05-24 08:41:32',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-24T12:41:32.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-24 07:39:58","last_login_date":"2021-05-24 07:39:58","login_count":213,"reasonToRegister":""}',
            ),
            303 => 
            array (
                'id' => 304,
                'user_id' => 2,
                'log_date' => '2021-05-26 06:48:22',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            304 => 
            array (
                'id' => 305,
                'user_id' => 2,
                'log_date' => '2021-05-26 06:48:22',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-24T12:41:32.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-24 07:39:58","last_login_date":"2021-05-24 08:41:32","login_count":214,"reasonToRegister":""}',
            ),
            305 => 
            array (
                'id' => 306,
                'user_id' => 2,
                'log_date' => '2021-05-26 06:48:22',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-26T10:48:22.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-24 08:41:32","last_login_date":"2021-05-24 08:41:32","login_count":214,"reasonToRegister":""}',
            ),
            306 => 
            array (
                'id' => 307,
                'user_id' => 2,
                'log_date' => '2021-05-26 08:08:44',
                'table_name' => 'mylinks',
                'log_type' => 'create',
                'data' => '{"name":"12345","page_url":"456","user_id":2,"updated_at":"2021-05-26T12:08:44.000000Z","created_at":"2021-05-26T12:08:44.000000Z","id":4}',
            ),
            307 => 
            array (
                'id' => 308,
                'user_id' => 2,
                'log_date' => '2021-05-26 08:12:35',
                'table_name' => 'mylinks',
                'log_type' => 'create',
                'data' => '{"name":"qwerty","page_url":"page url here","user_id":2,"updated_at":"2021-05-26T12:12:35.000000Z","created_at":"2021-05-26T12:12:35.000000Z","id":5}',
            ),
            308 => 
            array (
                'id' => 309,
                'user_id' => 2,
                'log_date' => '2021-05-26 08:46:22',
                'table_name' => 'mylinks',
                'log_type' => 'create',
                'data' => '{"name":"asdfg","page_url":"azsxdcfvgb","user_id":2,"updated_at":"2021-05-26T12:46:22.000000Z","created_at":"2021-05-26T12:46:22.000000Z","id":6}',
            ),
            309 => 
            array (
                'id' => 310,
                'user_id' => 2,
                'log_date' => '2021-05-26 08:57:54',
                'table_name' => 'mylinks',
                'log_type' => 'edit',
                'data' => '{"id":2,"user_id":2,"name":"dashboard","page_url":"\\/admin\\/dashboard","created_at":"2021-05-24T16:07:15.000000Z","updated_at":"2021-05-24T16:07:15.000000Z"}',
            ),
            310 => 
            array (
                'id' => 311,
                'user_id' => 2,
                'log_date' => '2021-05-26 09:07:25',
                'table_name' => 'mylinks',
                'log_type' => 'delete',
                'data' => '{"id":5,"user_id":2,"name":"qwerty","page_url":"page url here","created_at":"2021-05-26T12:12:35.000000Z","updated_at":"2021-05-26T12:12:35.000000Z"}',
            ),
            311 => 
            array (
                'id' => 312,
                'user_id' => 2,
                'log_date' => '2021-05-26 09:07:35',
                'table_name' => 'mylinks',
                'log_type' => 'delete',
                'data' => '{"id":3,"user_id":2,"name":"test","page_url":"blah blah blah","created_at":"2021-05-26T15:42:34.000000Z","updated_at":"2021-05-26T15:42:34.000000Z"}',
            ),
            312 => 
            array (
                'id' => 313,
                'user_id' => 2,
                'log_date' => '2021-05-26 09:08:48',
                'table_name' => 'mylinks',
                'log_type' => 'delete',
                'data' => '{"id":4,"user_id":2,"name":"12345","page_url":"456","created_at":"2021-05-26T12:08:44.000000Z","updated_at":"2021-05-26T12:08:44.000000Z"}',
            ),
            313 => 
            array (
                'id' => 314,
                'user_id' => 2,
                'log_date' => '2021-05-26 09:08:54',
                'table_name' => 'mylinks',
                'log_type' => 'delete',
                'data' => '{"id":6,"user_id":2,"name":"asdfg","page_url":"azsxdcfvgb","created_at":"2021-05-26T12:46:22.000000Z","updated_at":"2021-05-26T12:46:22.000000Z"}',
            ),
            314 => 
            array (
                'id' => 315,
                'user_id' => 2,
                'log_date' => '2021-05-26 09:09:06',
                'table_name' => 'mylinks',
                'log_type' => 'edit',
                'data' => '{"id":2,"user_id":2,"name":"dashboard123","page_url":"\\/admin\\/dashboard","created_at":"2021-05-24T16:07:15.000000Z","updated_at":"2021-05-26T12:57:54.000000Z"}',
            ),
            315 => 
            array (
                'id' => 316,
                'user_id' => 2,
                'log_date' => '2021-05-26 10:43:31',
                'table_name' => 'mylinks',
                'log_type' => 'create',
                'data' => '{"name":"New invoice","page_url":"\\/admin\\/invoicer\\/invoices\\/create","user_id":2,"updated_at":"2021-05-26T14:43:31.000000Z","created_at":"2021-05-26T14:43:31.000000Z","id":7}',
            ),
            316 => 
            array (
                'id' => 317,
                'user_id' => 2,
                'log_date' => '2021-05-26 14:39:32',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            317 => 
            array (
                'id' => 318,
                'user_id' => 2,
                'log_date' => '2021-05-26 14:39:32',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-26T10:48:22.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-24 08:41:32","last_login_date":"2021-05-26 06:48:22","login_count":215,"reasonToRegister":""}',
            ),
            318 => 
            array (
                'id' => 319,
                'user_id' => 2,
                'log_date' => '2021-05-26 14:39:32',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-26T18:39:32.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-26 06:48:22","last_login_date":"2021-05-26 06:48:22","login_count":215,"reasonToRegister":""}',
            ),
            319 => 
            array (
                'id' => 320,
                'user_id' => 2,
                'log_date' => '2021-05-26 15:11:05',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            320 => 
            array (
                'id' => 321,
                'user_id' => 2,
                'log_date' => '2021-05-26 15:11:05',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-26T18:39:32.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-26 06:48:22","last_login_date":"2021-05-26 14:39:32","login_count":216,"reasonToRegister":""}',
            ),
            321 => 
            array (
                'id' => 322,
                'user_id' => 2,
                'log_date' => '2021-05-26 15:11:05',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-26T19:11:05.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-26 14:39:32","last_login_date":"2021-05-26 14:39:32","login_count":216,"reasonToRegister":""}',
            ),
            322 => 
            array (
                'id' => 323,
                'user_id' => 3,
                'log_date' => '2021-05-26 15:12:01',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            323 => 
            array (
                'id' => 324,
                'user_id' => 3,
                'log_date' => '2021-05-26 15:12:01',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08T15:22:45.000000Z","updated_at":"2021-02-18T13:59:29.000000Z","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-14 08:15:09","last_login_date":"2021-02-18 08:59:29","login_count":21,"reasonToRegister":""}',
            ),
            324 => 
            array (
                'id' => 325,
                'user_id' => 3,
                'log_date' => '2021-05-26 15:12:01',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08T15:22:45.000000Z","updated_at":"2021-05-26T19:12:01.000000Z","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-18 08:59:29","last_login_date":"2021-02-18 08:59:29","login_count":21,"reasonToRegister":""}',
            ),
            325 => 
            array (
                'id' => 326,
                'user_id' => 2,
                'log_date' => '2021-05-26 15:14:48',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            326 => 
            array (
                'id' => 327,
                'user_id' => 2,
                'log_date' => '2021-05-26 15:14:48',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-26T19:11:05.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-26 14:39:32","last_login_date":"2021-05-26 15:11:05","login_count":217,"reasonToRegister":""}',
            ),
            327 => 
            array (
                'id' => 328,
                'user_id' => 2,
                'log_date' => '2021-05-26 15:14:48',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-26T19:14:48.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-26 15:11:05","last_login_date":"2021-05-26 15:11:05","login_count":217,"reasonToRegister":""}',
            ),
            328 => 
            array (
                'id' => 329,
                'user_id' => 2,
                'log_date' => '2021-05-26 21:48:50',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            329 => 
            array (
                'id' => 330,
                'user_id' => 2,
                'log_date' => '2021-05-26 21:48:50',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-26T19:14:48.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-26 15:11:05","last_login_date":"2021-05-26 15:14:48","login_count":218,"reasonToRegister":""}',
            ),
            330 => 
            array (
                'id' => 331,
                'user_id' => 2,
                'log_date' => '2021-05-26 21:48:50',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-27T01:48:50.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-26 15:14:48","last_login_date":"2021-05-26 15:14:48","login_count":218,"reasonToRegister":""}',
            ),
            331 => 
            array (
                'id' => 332,
                'user_id' => 2,
                'log_date' => '2021-05-26 21:49:22',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            332 => 
            array (
                'id' => 333,
                'user_id' => 2,
                'log_date' => '2021-05-26 21:49:22',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-27T01:48:50.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-26 15:14:48","last_login_date":"2021-05-26 21:48:50","login_count":219,"reasonToRegister":""}',
            ),
            333 => 
            array (
                'id' => 334,
                'user_id' => 2,
                'log_date' => '2021-05-26 21:49:22',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-27T01:49:22.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-26 21:48:50","last_login_date":"2021-05-26 21:48:50","login_count":219,"reasonToRegister":""}',
            ),
            334 => 
            array (
                'id' => 335,
                'user_id' => 2,
                'log_date' => '2021-05-27 09:39:33',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            335 => 
            array (
                'id' => 336,
                'user_id' => 2,
                'log_date' => '2021-05-27 09:39:33',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-27T01:49:22.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-26 21:48:50","last_login_date":"2021-05-26 21:49:22","login_count":220,"reasonToRegister":""}',
            ),
            336 => 
            array (
                'id' => 337,
                'user_id' => 2,
                'log_date' => '2021-05-27 09:39:33',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-27T13:39:33.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-26 21:49:22","last_login_date":"2021-05-26 21:49:22","login_count":220,"reasonToRegister":""}',
            ),
            337 => 
            array (
                'id' => 338,
                'user_id' => 2,
                'log_date' => '2021-05-27 09:42:16',
                'table_name' => 'mylinks',
                'log_type' => 'create',
                'data' => '{"name":"Create link","page_url":"\\/mylinks\\/create","user_id":2,"updated_at":"2021-05-27T13:42:16.000000Z","created_at":"2021-05-27T13:42:16.000000Z","id":10}',
            ),
            338 => 
            array (
                'id' => 339,
                'user_id' => 2,
                'log_date' => '2021-05-27 11:05:33',
                'table_name' => 'mylinks',
                'log_type' => 'delete',
                'data' => '{"id":10,"user_id":2,"name":"Create link","page_url":"\\/mylinks\\/create","created_at":"2021-05-27T13:42:16.000000Z","updated_at":"2021-05-27T13:42:16.000000Z"}',
            ),
            339 => 
            array (
                'id' => 340,
                'user_id' => 2,
                'log_date' => '2021-05-27 11:05:40',
                'table_name' => 'mylinks',
                'log_type' => 'delete',
                'data' => '{"id":2,"user_id":2,"name":"dashboard","page_url":"\\/admin\\/dashboard","created_at":"2021-05-24T16:07:15.000000Z","updated_at":"2021-05-26T13:09:06.000000Z"}',
            ),
            340 => 
            array (
                'id' => 341,
                'user_id' => 2,
                'log_date' => '2021-05-27 14:23:42',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            341 => 
            array (
                'id' => 342,
                'user_id' => 2,
                'log_date' => '2021-05-27 14:23:42',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-27T13:39:33.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-26 21:49:22","last_login_date":"2021-05-27 09:39:33","login_count":221,"reasonToRegister":""}',
            ),
            342 => 
            array (
                'id' => 343,
                'user_id' => 2,
                'log_date' => '2021-05-27 14:23:42',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-27T18:23:42.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-27 09:39:33","last_login_date":"2021-05-27 09:39:33","login_count":221,"reasonToRegister":""}',
            ),
            343 => 
            array (
                'id' => 344,
                'user_id' => 2,
                'log_date' => '2021-05-28 08:25:05',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            344 => 
            array (
                'id' => 345,
                'user_id' => 2,
                'log_date' => '2021-05-28 08:25:06',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-27T18:23:42.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-27 09:39:33","last_login_date":"2021-05-27 14:23:42","login_count":222,"reasonToRegister":""}',
            ),
            345 => 
            array (
                'id' => 346,
                'user_id' => 2,
                'log_date' => '2021-05-28 08:25:06',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-28T12:25:05.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-27 14:23:42","last_login_date":"2021-05-27 14:23:42","login_count":222,"reasonToRegister":""}',
            ),
            346 => 
            array (
                'id' => 347,
                'user_id' => 2,
                'log_date' => '2021-05-28 10:12:29',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":7,"username":"haynesb","first_name":"Brenda","last_name":"Haynes","account_status":1,"email":"brendahaynes@example.com","email_verified_at":"2020-09-08T15:24:40.000000Z","password":"$2y$10$2wFWYndWpsbc8VsYQNR9ou6Hlw.Ctk8shv8\\/WtYfqwk1xcVspjfqu","remember_token":null,"created_at":"2020-09-08T15:24:40.000000Z","updated_at":"2020-10-27T13:12:00.000000Z","deleted_at":null,"public_email":0,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":10,"invoicer_client":0,"previous_login_date":"2020-10-26 12:00:11","last_login_date":"2020-10-27 09:12:00","login_count":10,"reasonToRegister":""}',
            ),
            347 => 
            array (
                'id' => 348,
                'user_id' => 2,
                'log_date' => '2021-05-28 10:12:49',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":7,"username":"haynesb","first_name":"Brenda","last_name":"Haynes","account_status":0,"email":"brendahaynes@example.com","email_verified_at":"2020-09-08T15:24:40.000000Z","password":"$2y$10$2wFWYndWpsbc8VsYQNR9ou6Hlw.Ctk8shv8\\/WtYfqwk1xcVspjfqu","remember_token":null,"created_at":"2020-09-08T15:24:40.000000Z","updated_at":"2021-05-28T14:12:29.000000Z","deleted_at":null,"public_email":0,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":10,"invoicer_client":0,"previous_login_date":"2020-10-26 12:00:11","last_login_date":"2020-10-27 09:12:00","login_count":10,"reasonToRegister":""}',
            ),
            348 => 
            array (
                'id' => 349,
                'user_id' => 2,
                'log_date' => '2021-05-28 10:19:03',
                'table_name' => 'users',
                'log_type' => 'create',
                'data' => '{"dart_doubleOut":"0","first_name":"test","last_name":"test","email":"test@test.com","account_status":0,"public_email":1,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"invoicer_client":0,"updated_at":"2021-05-28T14:19:03.000000Z","created_at":"2021-05-28T14:19:03.000000Z","id":32}',
            ),
            349 => 
            array (
                'id' => 350,
                'user_id' => 2,
                'log_date' => '2021-05-28 10:21:38',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":32,"username":"","first_name":"test","last_name":"test","account_status":0,"email":"test@test.com","email_verified_at":null,"password":"$2y$10$NIfSOx2Y3Wy2Vws\\/\\/vXZIepmquOD73dcGqfpxMcYFT54\\/2PbS8G5C","remember_token":null,"created_at":"2021-05-28T14:19:03.000000Z","updated_at":"2021-05-28T14:19:03.000000Z","deleted_at":null,"public_email":1,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":0,"previous_login_date":null,"last_login_date":null,"login_count":0,"reasonToRegister":""}',
            ),
            350 => 
            array (
                'id' => 351,
                'user_id' => 2,
                'log_date' => '2021-05-28 10:22:28',
                'table_name' => 'users',
                'log_type' => 'delete',
                'data' => '{"id":32,"username":"","first_name":"test","last_name":"test","account_status":1,"email":"test@test.com","email_verified_at":null,"password":"$2y$10$NIfSOx2Y3Wy2Vws\\/\\/vXZIepmquOD73dcGqfpxMcYFT54\\/2PbS8G5C","remember_token":null,"created_at":"2021-05-28T14:19:03.000000Z","updated_at":"2021-05-28T14:22:28.000000Z","deleted_at":"2021-05-28T14:22:28.000000Z","public_email":1,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":0,"previous_login_date":null,"last_login_date":null,"login_count":0,"reasonToRegister":""}',
            ),
            351 => 
            array (
                'id' => 352,
                'user_id' => 2,
                'log_date' => '2021-05-28 10:23:14',
                'table_name' => 'users',
                'log_type' => 'delete',
                'data' => '{"id":32,"username":"","first_name":"test","last_name":"test","account_status":1,"email":"test@test.com","email_verified_at":null,"password":"$2y$10$NIfSOx2Y3Wy2Vws\\/\\/vXZIepmquOD73dcGqfpxMcYFT54\\/2PbS8G5C","remember_token":null,"created_at":"2021-05-28T14:19:03.000000Z","updated_at":"2021-05-28T14:22:28.000000Z","deleted_at":"2021-05-28T14:22:28.000000Z","public_email":1,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":0,"previous_login_date":null,"last_login_date":null,"login_count":0,"reasonToRegister":""}',
            ),
            352 => 
            array (
                'id' => 353,
                'user_id' => 2,
                'log_date' => '2021-05-28 11:52:51',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":7,"username":"haynesb","first_name":"Brenda","last_name":"Haynes","account_status":1,"email":"brendahaynes@example.com","email_verified_at":"2020-09-08T15:24:40.000000Z","password":"$2y$10$2wFWYndWpsbc8VsYQNR9ou6Hlw.Ctk8shv8\\/WtYfqwk1xcVspjfqu","remember_token":null,"created_at":"2020-09-08T15:24:40.000000Z","updated_at":"2021-05-28T14:12:49.000000Z","deleted_at":null,"public_email":0,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":10,"invoicer_client":0,"previous_login_date":"2020-10-26 12:00:11","last_login_date":"2020-10-27 09:12:00","login_count":10,"reasonToRegister":""}',
            ),
            353 => 
            array (
                'id' => 354,
                'user_id' => 2,
                'log_date' => '2021-05-28 11:52:59',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":7,"username":"haynesb","first_name":"Brenda","last_name":"Haynes","account_status":0,"email":"brendahaynes@example.com","email_verified_at":"2020-09-08T15:24:40.000000Z","password":"$2y$10$2wFWYndWpsbc8VsYQNR9ou6Hlw.Ctk8shv8\\/WtYfqwk1xcVspjfqu","remember_token":null,"created_at":"2020-09-08T15:24:40.000000Z","updated_at":"2021-05-28T15:52:50.000000Z","deleted_at":null,"public_email":0,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":10,"invoicer_client":0,"previous_login_date":"2020-10-26 12:00:11","last_login_date":"2020-10-27 09:12:00","login_count":10,"reasonToRegister":""}',
            ),
            354 => 
            array (
                'id' => 355,
                'user_id' => 2,
                'log_date' => '2021-05-28 14:33:43',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            355 => 
            array (
                'id' => 356,
                'user_id' => 2,
                'log_date' => '2021-05-28 14:33:43',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-28T12:25:06.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-27 14:23:42","last_login_date":"2021-05-28 08:25:06","login_count":223,"reasonToRegister":""}',
            ),
            356 => 
            array (
                'id' => 357,
                'user_id' => 2,
                'log_date' => '2021-05-28 14:33:43',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-28T18:33:43.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-28 08:25:06","last_login_date":"2021-05-28 08:25:06","login_count":223,"reasonToRegister":""}',
            ),
            357 => 
            array (
                'id' => 358,
                'user_id' => 2,
                'log_date' => '2021-05-28 14:36:28',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            358 => 
            array (
                'id' => 359,
                'user_id' => 2,
                'log_date' => '2021-05-28 14:36:28',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-28T18:33:43.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-28 08:25:06","last_login_date":"2021-05-28 14:33:43","login_count":224,"reasonToRegister":""}',
            ),
            359 => 
            array (
                'id' => 360,
                'user_id' => 2,
                'log_date' => '2021-05-28 14:36:28',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-28T18:36:28.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-28 14:33:43","last_login_date":"2021-05-28 14:33:43","login_count":224,"reasonToRegister":""}',
            ),
            360 => 
            array (
                'id' => 361,
                'user_id' => 2,
                'log_date' => '2021-05-28 21:11:15',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            361 => 
            array (
                'id' => 362,
                'user_id' => 2,
                'log_date' => '2021-05-28 21:11:15',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-28T18:36:28.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-28 14:33:43","last_login_date":"2021-05-28 14:36:28","login_count":225,"reasonToRegister":""}',
            ),
            362 => 
            array (
                'id' => 363,
                'user_id' => 2,
                'log_date' => '2021-05-28 21:11:15',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-29T01:11:15.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-28 14:36:28","last_login_date":"2021-05-28 14:36:28","login_count":225,"reasonToRegister":""}',
            ),
            363 => 
            array (
                'id' => 364,
                'user_id' => 2,
                'log_date' => '2021-05-28 22:33:05',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            364 => 
            array (
                'id' => 365,
                'user_id' => 2,
                'log_date' => '2021-05-28 22:33:05',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-29T01:11:15.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-28 14:36:28","last_login_date":"2021-05-28 21:11:15","login_count":226,"reasonToRegister":""}',
            ),
            365 => 
            array (
                'id' => 366,
                'user_id' => 2,
                'log_date' => '2021-05-28 22:33:05',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-29T02:33:05.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-28 21:11:15","last_login_date":"2021-05-28 21:11:15","login_count":226,"reasonToRegister":""}',
            ),
            366 => 
            array (
                'id' => 367,
                'user_id' => 2,
                'log_date' => '2021-05-29 08:14:19',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            367 => 
            array (
                'id' => 368,
                'user_id' => 2,
                'log_date' => '2021-05-29 08:14:19',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-29T02:33:05.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-28 21:11:15","last_login_date":"2021-05-28 22:33:05","login_count":227,"reasonToRegister":""}',
            ),
            368 => 
            array (
                'id' => 369,
                'user_id' => 2,
                'log_date' => '2021-05-29 08:14:19',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-29T12:14:19.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-28 22:33:05","last_login_date":"2021-05-28 22:33:05","login_count":227,"reasonToRegister":""}',
            ),
            369 => 
            array (
                'id' => 370,
                'user_id' => 2,
                'log_date' => '2021-05-29 12:42:05',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            370 => 
            array (
                'id' => 371,
                'user_id' => 2,
                'log_date' => '2021-05-29 12:42:05',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-29T12:14:19.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-28 22:33:05","last_login_date":"2021-05-29 08:14:19","login_count":228,"reasonToRegister":""}',
            ),
            371 => 
            array (
                'id' => 372,
                'user_id' => 2,
                'log_date' => '2021-05-29 12:42:05',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-29T16:42:05.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-29 08:14:19","last_login_date":"2021-05-29 08:14:19","login_count":228,"reasonToRegister":""}',
            ),
            372 => 
            array (
                'id' => 373,
                'user_id' => 2,
                'log_date' => '2021-05-29 23:44:13',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            373 => 
            array (
                'id' => 374,
                'user_id' => 2,
                'log_date' => '2021-05-29 23:44:14',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-29T16:42:05.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-29 08:14:19","last_login_date":"2021-05-29 12:42:05","login_count":229,"reasonToRegister":""}',
            ),
            374 => 
            array (
                'id' => 375,
                'user_id' => 2,
                'log_date' => '2021-05-29 23:44:14',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-30T03:44:13.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-29 12:42:05","last_login_date":"2021-05-29 12:42:05","login_count":229,"reasonToRegister":""}',
            ),
            375 => 
            array (
                'id' => 376,
                'user_id' => 2,
                'log_date' => '2021-05-30 06:50:22',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            376 => 
            array (
                'id' => 377,
                'user_id' => 2,
                'log_date' => '2021-05-30 06:50:22',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-30T03:44:14.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-29 12:42:05","last_login_date":"2021-05-29 23:44:14","login_count":230,"reasonToRegister":""}',
            ),
            377 => 
            array (
                'id' => 378,
                'user_id' => 2,
                'log_date' => '2021-05-30 06:50:22',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-30T10:50:22.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-29 23:44:14","last_login_date":"2021-05-29 23:44:14","login_count":230,"reasonToRegister":""}',
            ),
            378 => 
            array (
                'id' => 379,
                'user_id' => 2,
                'log_date' => '2021-05-30 10:32:04',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            379 => 
            array (
                'id' => 380,
                'user_id' => 2,
                'log_date' => '2021-05-30 10:32:04',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-30T10:50:22.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-29 23:44:14","last_login_date":"2021-05-30 06:50:22","login_count":231,"reasonToRegister":""}',
            ),
            380 => 
            array (
                'id' => 381,
                'user_id' => 2,
                'log_date' => '2021-05-30 10:32:04',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-30T14:32:04.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-30 06:50:22","last_login_date":"2021-05-30 06:50:22","login_count":231,"reasonToRegister":""}',
            ),
            381 => 
            array (
                'id' => 382,
                'user_id' => 2,
                'log_date' => '2021-05-30 15:32:47',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            382 => 
            array (
                'id' => 383,
                'user_id' => 2,
                'log_date' => '2021-05-30 15:32:47',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-30T14:32:04.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-30 06:50:22","last_login_date":"2021-05-30 10:32:04","login_count":232,"reasonToRegister":""}',
            ),
            383 => 
            array (
                'id' => 384,
                'user_id' => 2,
                'log_date' => '2021-05-30 15:32:47',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-30T19:32:47.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-30 10:32:04","last_login_date":"2021-05-30 10:32:04","login_count":232,"reasonToRegister":""}',
            ),
            384 => 
            array (
                'id' => 385,
                'user_id' => 2,
                'log_date' => '2021-05-30 20:11:22',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            385 => 
            array (
                'id' => 386,
                'user_id' => 2,
                'log_date' => '2021-05-30 20:11:22',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-30T19:32:47.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-30 10:32:04","last_login_date":"2021-05-30 15:32:47","login_count":233,"reasonToRegister":""}',
            ),
            386 => 
            array (
                'id' => 387,
                'user_id' => 2,
                'log_date' => '2021-05-30 20:11:22',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-31T00:11:22.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-30 15:32:47","last_login_date":"2021-05-30 15:32:47","login_count":233,"reasonToRegister":""}',
            ),
            387 => 
            array (
                'id' => 388,
                'user_id' => 2,
                'log_date' => '2021-05-31 07:49:38',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            388 => 
            array (
                'id' => 389,
                'user_id' => 2,
                'log_date' => '2021-05-31 07:49:38',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-31T00:11:22.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-30 15:32:47","last_login_date":"2021-05-30 20:11:22","login_count":234,"reasonToRegister":""}',
            ),
            389 => 
            array (
                'id' => 390,
                'user_id' => 2,
                'log_date' => '2021-05-31 07:49:38',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-31T11:49:38.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-30 20:11:22","last_login_date":"2021-05-30 20:11:22","login_count":234,"reasonToRegister":""}',
            ),
            390 => 
            array (
                'id' => 391,
                'user_id' => 2,
                'log_date' => '2021-05-31 14:23:40',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            391 => 
            array (
                'id' => 392,
                'user_id' => 2,
                'log_date' => '2021-05-31 14:23:40',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-31T11:49:38.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-30 20:11:22","last_login_date":"2021-05-31 07:49:38","login_count":235,"reasonToRegister":""}',
            ),
            392 => 
            array (
                'id' => 393,
                'user_id' => 2,
                'log_date' => '2021-05-31 14:23:40',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-31T18:23:40.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-31 07:49:38","last_login_date":"2021-05-31 07:49:38","login_count":235,"reasonToRegister":""}',
            ),
            393 => 
            array (
                'id' => 394,
                'user_id' => 2,
                'log_date' => '2021-05-31 21:41:36',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            394 => 
            array (
                'id' => 395,
                'user_id' => 2,
                'log_date' => '2021-05-31 21:41:37',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-05-31T18:23:40.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-31 07:49:38","last_login_date":"2021-05-31 14:23:40","login_count":236,"reasonToRegister":""}',
            ),
            395 => 
            array (
                'id' => 396,
                'user_id' => 2,
                'log_date' => '2021-05-31 21:41:37',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-01T01:41:36.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-31 14:23:40","last_login_date":"2021-05-31 14:23:40","login_count":236,"reasonToRegister":""}',
            ),
            396 => 
            array (
                'id' => 397,
                'user_id' => 2,
                'log_date' => '2021-06-01 16:49:11',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            397 => 
            array (
                'id' => 398,
                'user_id' => 2,
                'log_date' => '2021-06-01 16:49:11',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-01T01:41:37.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-31 14:23:40","last_login_date":"2021-05-31 21:41:37","login_count":237,"reasonToRegister":""}',
            ),
            398 => 
            array (
                'id' => 399,
                'user_id' => 2,
                'log_date' => '2021-06-01 16:49:11',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-01T20:49:11.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-31 21:41:37","last_login_date":"2021-05-31 21:41:37","login_count":237,"reasonToRegister":""}',
            ),
            399 => 
            array (
                'id' => 400,
                'user_id' => 2,
                'log_date' => '2021-06-01 20:28:34',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            400 => 
            array (
                'id' => 401,
                'user_id' => 2,
                'log_date' => '2021-06-01 20:28:34',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-01T20:49:11.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-31 21:41:37","last_login_date":"2021-06-01 16:49:11","login_count":238,"reasonToRegister":""}',
            ),
            401 => 
            array (
                'id' => 402,
                'user_id' => 2,
                'log_date' => '2021-06-01 20:28:34',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-02T00:28:34.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-01 16:49:11","last_login_date":"2021-06-01 16:49:11","login_count":238,"reasonToRegister":""}',
            ),
            402 => 
            array (
                'id' => 403,
                'user_id' => 2,
                'log_date' => '2021-06-02 05:28:45',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            403 => 
            array (
                'id' => 404,
                'user_id' => 2,
                'log_date' => '2021-06-02 05:28:45',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-02T00:28:34.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-01 16:49:11","last_login_date":"2021-06-01 20:28:34","login_count":239,"reasonToRegister":""}',
            ),
            404 => 
            array (
                'id' => 405,
                'user_id' => 2,
                'log_date' => '2021-06-02 05:28:45',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-02T09:28:45.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-01 20:28:34","last_login_date":"2021-06-01 20:28:34","login_count":239,"reasonToRegister":""}',
            ),
            405 => 
            array (
                'id' => 406,
                'user_id' => 2,
                'log_date' => '2021-06-02 08:08:03',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            406 => 
            array (
                'id' => 407,
                'user_id' => 2,
                'log_date' => '2021-06-02 08:08:03',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-02T09:28:45.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-01 20:28:34","last_login_date":"2021-06-02 05:28:45","login_count":240,"reasonToRegister":""}',
            ),
            407 => 
            array (
                'id' => 408,
                'user_id' => 2,
                'log_date' => '2021-06-02 08:08:03',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-02T12:08:03.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-02 05:28:45","last_login_date":"2021-06-02 05:28:45","login_count":240,"reasonToRegister":""}',
            ),
            408 => 
            array (
                'id' => 409,
                'user_id' => 2,
                'log_date' => '2021-06-02 10:13:14',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            409 => 
            array (
                'id' => 410,
                'user_id' => 2,
                'log_date' => '2021-06-02 10:13:14',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-02T12:08:03.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-02 05:28:45","last_login_date":"2021-06-02 08:08:03","login_count":241,"reasonToRegister":""}',
            ),
            410 => 
            array (
                'id' => 411,
                'user_id' => 2,
                'log_date' => '2021-06-02 10:13:14',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-02T14:13:14.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-02 08:08:03","last_login_date":"2021-06-02 08:08:03","login_count":241,"reasonToRegister":""}',
            ),
            411 => 
            array (
                'id' => 412,
                'user_id' => 2,
                'log_date' => '2021-06-02 20:52:08',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            412 => 
            array (
                'id' => 413,
                'user_id' => 2,
                'log_date' => '2021-06-02 20:52:09',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-02T14:13:14.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-02 08:08:03","last_login_date":"2021-06-02 10:13:14","login_count":242,"reasonToRegister":""}',
            ),
            413 => 
            array (
                'id' => 414,
                'user_id' => 2,
                'log_date' => '2021-06-02 20:52:09',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-03T00:52:09.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-02 10:13:14","last_login_date":"2021-06-02 10:13:14","login_count":242,"reasonToRegister":""}',
            ),
            414 => 
            array (
                'id' => 415,
                'user_id' => 2,
                'log_date' => '2021-06-03 07:25:02',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            415 => 
            array (
                'id' => 416,
                'user_id' => 2,
                'log_date' => '2021-06-03 07:25:02',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-03T00:52:09.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-02 10:13:14","last_login_date":"2021-06-02 20:52:09","login_count":243,"reasonToRegister":""}',
            ),
            416 => 
            array (
                'id' => 417,
                'user_id' => 2,
                'log_date' => '2021-06-03 07:25:02',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-03T11:25:02.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-02 20:52:09","last_login_date":"2021-06-02 20:52:09","login_count":243,"reasonToRegister":""}',
            ),
            417 => 
            array (
                'id' => 418,
                'user_id' => 2,
                'log_date' => '2021-06-03 22:46:12',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            418 => 
            array (
                'id' => 419,
                'user_id' => 2,
                'log_date' => '2021-06-03 22:46:13',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-03T11:25:02.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-02 20:52:09","last_login_date":"2021-06-03 07:25:02","login_count":244,"reasonToRegister":""}',
            ),
            419 => 
            array (
                'id' => 420,
                'user_id' => 2,
                'log_date' => '2021-06-03 22:46:13',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-04T02:46:13.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-03 07:25:02","last_login_date":"2021-06-03 07:25:02","login_count":244,"reasonToRegister":""}',
            ),
            420 => 
            array (
                'id' => 421,
                'user_id' => 2,
                'log_date' => '2021-06-04 06:16:34',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            421 => 
            array (
                'id' => 422,
                'user_id' => 2,
                'log_date' => '2021-06-04 06:16:34',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-04T02:46:13.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-03 07:25:02","last_login_date":"2021-06-03 22:46:13","login_count":245,"reasonToRegister":""}',
            ),
            422 => 
            array (
                'id' => 423,
                'user_id' => 2,
                'log_date' => '2021-06-04 06:16:34',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-04T10:16:34.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-03 22:46:13","last_login_date":"2021-06-03 22:46:13","login_count":245,"reasonToRegister":""}',
            ),
            423 => 
            array (
                'id' => 424,
                'user_id' => 2,
                'log_date' => '2021-06-04 15:19:12',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            424 => 
            array (
                'id' => 425,
                'user_id' => 2,
                'log_date' => '2021-06-04 15:19:12',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-04T10:16:34.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-03 22:46:13","last_login_date":"2021-06-04 06:16:34","login_count":246,"reasonToRegister":""}',
            ),
            425 => 
            array (
                'id' => 426,
                'user_id' => 2,
                'log_date' => '2021-06-04 15:19:12',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-04T19:19:12.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-04 06:16:34","last_login_date":"2021-06-04 06:16:34","login_count":246,"reasonToRegister":""}',
            ),
            426 => 
            array (
                'id' => 427,
                'user_id' => 2,
                'log_date' => '2021-06-04 22:49:45',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            427 => 
            array (
                'id' => 428,
                'user_id' => 2,
                'log_date' => '2021-06-04 22:49:46',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-04T19:19:12.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-04 06:16:34","last_login_date":"2021-06-04 15:19:12","login_count":247,"reasonToRegister":""}',
            ),
            428 => 
            array (
                'id' => 429,
                'user_id' => 2,
                'log_date' => '2021-06-04 22:49:46',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-05T02:49:45.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-04 15:19:12","last_login_date":"2021-06-04 15:19:12","login_count":247,"reasonToRegister":""}',
            ),
            429 => 
            array (
                'id' => 430,
                'user_id' => 2,
                'log_date' => '2021-06-04 23:10:24',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            430 => 
            array (
                'id' => 431,
                'user_id' => 2,
                'log_date' => '2021-06-04 23:10:24',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-05T02:49:46.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-04 15:19:12","last_login_date":"2021-06-04 22:49:46","login_count":248,"reasonToRegister":""}',
            ),
            431 => 
            array (
                'id' => 432,
                'user_id' => 2,
                'log_date' => '2021-06-04 23:10:24',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-05T03:10:24.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-04 22:49:46","last_login_date":"2021-06-04 22:49:46","login_count":248,"reasonToRegister":""}',
            ),
            432 => 
            array (
                'id' => 433,
                'user_id' => 2,
                'log_date' => '2021-06-05 07:59:56',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            433 => 
            array (
                'id' => 434,
                'user_id' => 2,
                'log_date' => '2021-06-05 07:59:56',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-05T03:10:24.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-04 22:49:46","last_login_date":"2021-06-04 23:10:24","login_count":249,"reasonToRegister":""}',
            ),
            434 => 
            array (
                'id' => 435,
                'user_id' => 2,
                'log_date' => '2021-06-05 07:59:56',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-05T11:59:56.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-04 23:10:24","last_login_date":"2021-06-04 23:10:24","login_count":249,"reasonToRegister":""}',
            ),
            435 => 
            array (
                'id' => 436,
                'user_id' => 2,
                'log_date' => '2021-06-05 20:25:39',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            436 => 
            array (
                'id' => 437,
                'user_id' => 2,
                'log_date' => '2021-06-05 20:25:40',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-05T11:59:56.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-04 23:10:24","last_login_date":"2021-06-05 07:59:56","login_count":250,"reasonToRegister":""}',
            ),
            437 => 
            array (
                'id' => 438,
                'user_id' => 2,
                'log_date' => '2021-06-05 20:25:40',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-06T00:25:39.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-05 07:59:56","last_login_date":"2021-06-05 07:59:56","login_count":250,"reasonToRegister":""}',
            ),
            438 => 
            array (
                'id' => 439,
                'user_id' => 2,
                'log_date' => '2021-06-06 07:24:33',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            439 => 
            array (
                'id' => 440,
                'user_id' => 2,
                'log_date' => '2021-06-06 07:24:33',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-06T00:25:40.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-05 07:59:56","last_login_date":"2021-06-05 20:25:40","login_count":251,"reasonToRegister":""}',
            ),
            440 => 
            array (
                'id' => 441,
                'user_id' => 2,
                'log_date' => '2021-06-06 07:24:33',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-06T11:24:33.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-05 20:25:40","last_login_date":"2021-06-05 20:25:40","login_count":251,"reasonToRegister":""}',
            ),
            441 => 
            array (
                'id' => 442,
                'user_id' => 2,
                'log_date' => '2021-06-06 14:18:00',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            442 => 
            array (
                'id' => 443,
                'user_id' => 2,
                'log_date' => '2021-06-06 14:18:00',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-06T11:24:33.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-05 20:25:40","last_login_date":"2021-06-06 07:24:33","login_count":252,"reasonToRegister":""}',
            ),
            443 => 
            array (
                'id' => 444,
                'user_id' => 2,
                'log_date' => '2021-06-06 14:18:00',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-06T18:18:00.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-06 07:24:33","last_login_date":"2021-06-06 07:24:33","login_count":252,"reasonToRegister":""}',
            ),
            444 => 
            array (
                'id' => 445,
                'user_id' => 2,
                'log_date' => '2021-06-07 10:22:10',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            445 => 
            array (
                'id' => 446,
                'user_id' => 2,
                'log_date' => '2021-06-07 10:22:10',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-06T18:18:00.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-06 07:24:33","last_login_date":"2021-06-06 14:18:00","login_count":253,"reasonToRegister":""}',
            ),
            446 => 
            array (
                'id' => 447,
                'user_id' => 2,
                'log_date' => '2021-06-07 10:22:10',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-07T14:22:10.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-06 14:18:00","last_login_date":"2021-06-06 14:18:00","login_count":253,"reasonToRegister":""}',
            ),
            447 => 
            array (
                'id' => 448,
                'user_id' => 2,
                'log_date' => '2021-06-07 13:58:15',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            448 => 
            array (
                'id' => 449,
                'user_id' => 2,
                'log_date' => '2021-06-07 13:58:15',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-07T14:22:10.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-06 14:18:00","last_login_date":"2021-06-07 10:22:10","login_count":254,"reasonToRegister":""}',
            ),
            449 => 
            array (
                'id' => 450,
                'user_id' => 2,
                'log_date' => '2021-06-07 13:58:15',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-07T17:58:15.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-07 10:22:10","last_login_date":"2021-06-07 10:22:10","login_count":254,"reasonToRegister":""}',
            ),
            450 => 
            array (
                'id' => 451,
                'user_id' => 2,
                'log_date' => '2021-06-07 17:33:53',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            451 => 
            array (
                'id' => 452,
                'user_id' => 2,
                'log_date' => '2021-06-07 17:33:54',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-07T17:58:15.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-07 10:22:10","last_login_date":"2021-06-07 13:58:15","login_count":255,"reasonToRegister":""}',
            ),
            452 => 
            array (
                'id' => 453,
                'user_id' => 2,
                'log_date' => '2021-06-07 17:33:54',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-07T21:33:53.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-07 13:58:15","last_login_date":"2021-06-07 13:58:15","login_count":255,"reasonToRegister":""}',
            ),
            453 => 
            array (
                'id' => 454,
                'user_id' => 2,
                'log_date' => '2021-06-07 22:19:43',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            454 => 
            array (
                'id' => 455,
                'user_id' => 2,
                'log_date' => '2021-06-07 22:19:43',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-07T21:33:54.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-07 13:58:15","last_login_date":"2021-06-07 17:33:54","login_count":256,"reasonToRegister":""}',
            ),
            455 => 
            array (
                'id' => 456,
                'user_id' => 2,
                'log_date' => '2021-06-07 22:19:43',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-08T02:19:43.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-07 17:33:54","last_login_date":"2021-06-07 17:33:54","login_count":256,"reasonToRegister":""}',
            ),
            456 => 
            array (
                'id' => 457,
                'user_id' => 2,
                'log_date' => '2021-06-08 06:46:38',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            457 => 
            array (
                'id' => 458,
                'user_id' => 2,
                'log_date' => '2021-06-08 06:46:38',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-08T02:19:43.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-07 17:33:54","last_login_date":"2021-06-07 22:19:43","login_count":257,"reasonToRegister":""}',
            ),
            458 => 
            array (
                'id' => 459,
                'user_id' => 2,
                'log_date' => '2021-06-08 06:46:38',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-08T10:46:38.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-07 22:19:43","last_login_date":"2021-06-07 22:19:43","login_count":257,"reasonToRegister":""}',
            ),
            459 => 
            array (
                'id' => 460,
                'user_id' => 2,
                'log_date' => '2021-06-08 15:44:27',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            460 => 
            array (
                'id' => 461,
                'user_id' => 2,
                'log_date' => '2021-06-08 15:44:27',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-08T10:46:38.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-07 22:19:43","last_login_date":"2021-06-08 06:46:38","login_count":258,"reasonToRegister":""}',
            ),
            461 => 
            array (
                'id' => 462,
                'user_id' => 2,
                'log_date' => '2021-06-08 15:44:28',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-08T19:44:27.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-08 06:46:38","last_login_date":"2021-06-08 06:46:38","login_count":258,"reasonToRegister":""}',
            ),
            462 => 
            array (
                'id' => 463,
                'user_id' => 2,
                'log_date' => '2021-06-08 21:20:29',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/90.0.4430.212 Safari\\/537.36"}',
            ),
            463 => 
            array (
                'id' => 464,
                'user_id' => 2,
                'log_date' => '2021-06-08 21:20:29',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-08T19:44:28.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-08 06:46:38","last_login_date":"2021-06-08 15:44:27","login_count":259,"reasonToRegister":""}',
            ),
            464 => 
            array (
                'id' => 465,
                'user_id' => 2,
                'log_date' => '2021-06-08 21:20:29',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-09T01:20:29.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-08 15:44:27","last_login_date":"2021-06-08 15:44:27","login_count":259,"reasonToRegister":""}',
            ),
            465 => 
            array (
                'id' => 466,
                'user_id' => 2,
                'log_date' => '2021-06-09 05:57:03',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.77 Safari\\/537.36"}',
            ),
            466 => 
            array (
                'id' => 467,
                'user_id' => 2,
                'log_date' => '2021-06-09 05:57:04',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-09T01:20:29.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-08 15:44:27","last_login_date":"2021-06-08 21:20:29","login_count":260,"reasonToRegister":""}',
            ),
            467 => 
            array (
                'id' => 468,
                'user_id' => 2,
                'log_date' => '2021-06-09 05:57:04',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-09T09:57:03.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-08 21:20:29","last_login_date":"2021-06-08 21:20:29","login_count":260,"reasonToRegister":""}',
            ),
            468 => 
            array (
                'id' => 469,
                'user_id' => 2,
                'log_date' => '2021-06-09 09:48:04',
                'table_name' => 'bugs',
                'log_type' => 'create',
                'data' => '{"status":"New","updated_at":"2021-06-09T13:48:04.000000Z","created_at":"2021-06-09T13:48:04.000000Z","id":62}',
            ),
            469 => 
            array (
                'id' => 470,
                'user_id' => 2,
                'log_date' => '2021-06-09 09:49:41',
                'table_name' => 'bugs',
                'log_type' => 'edit',
                'data' => '{"id":55,"title":"Newly reported bug","page_url":"this and that qwerty","description":"<p>Description of newly reported bug<\\/p>","resolution":"<p>sdsadsadsadsa<\\/p>","status":"Pending","user_id":2,"created_at":"2021-01-26T16:49:38.000000Z","updated_at":"2021-02-19T17:06:03.000000Z","deleted_at":null}',
            ),
            470 => 
            array (
                'id' => 471,
                'user_id' => 2,
                'log_date' => '2021-06-09 09:50:04',
                'table_name' => 'bugs',
                'log_type' => 'edit',
                'data' => '{"id":55,"title":"Newly reported bug","page_url":"this and that qwerty","description":"<p>Description of newly reported bug<\\/p>","resolution":"<p>sdsadsadsadsa<\\/p>","status":"Resolved","user_id":2,"created_at":"2021-01-26T16:49:38.000000Z","updated_at":"2021-06-09T13:49:41.000000Z","deleted_at":null}',
            ),
            471 => 
            array (
                'id' => 472,
                'user_id' => 2,
                'log_date' => '2021-06-09 09:59:48',
                'table_name' => 'bugs',
                'log_type' => 'edit',
                'data' => '{"id":55,"title":"Newly reported bug","page_url":"this and that qwerty","description":"<p>Description of newly reported bug<\\/p>","resolution":"<p>sdsadsadsadsa<\\/p>","status":"New","user_id":2,"created_at":"2021-01-26T16:49:38.000000Z","updated_at":"2021-06-09T13:50:04.000000Z","deleted_at":null}',
            ),
            472 => 
            array (
                'id' => 473,
                'user_id' => 2,
                'log_date' => '2021-06-09 09:59:58',
                'table_name' => 'bugs',
                'log_type' => 'edit',
                'data' => '{"id":57,"title":"Test bug 123 456","page_url":"Page URL test not valid","description":"<p>Description of bug goes here.<\\/p>\\r\\n<p>More data can be added here<\\/p>","resolution":null,"status":"Not Reproducible","user_id":2,"created_at":"2021-02-02T17:29:44.000000Z","updated_at":"2021-02-17T15:10:27.000000Z","deleted_at":null}',
            ),
            473 => 
            array (
                'id' => 474,
                'user_id' => 2,
                'log_date' => '2021-06-09 14:26:55',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.77 Safari\\/537.36"}',
            ),
            474 => 
            array (
                'id' => 475,
                'user_id' => 2,
                'log_date' => '2021-06-09 14:26:56',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-09T09:57:04.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-08 21:20:29","last_login_date":"2021-06-09 05:57:04","login_count":261,"reasonToRegister":""}',
            ),
            475 => 
            array (
                'id' => 476,
                'user_id' => 2,
                'log_date' => '2021-06-09 14:26:56',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-09T18:26:55.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-09 05:57:04","last_login_date":"2021-06-09 05:57:04","login_count":261,"reasonToRegister":""}',
            ),
            476 => 
            array (
                'id' => 477,
                'user_id' => 2,
                'log_date' => '2021-06-09 21:07:16',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.77 Safari\\/537.36"}',
            ),
            477 => 
            array (
                'id' => 478,
                'user_id' => 2,
                'log_date' => '2021-06-09 21:07:16',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-09T18:26:56.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-09 05:57:04","last_login_date":"2021-06-09 14:26:56","login_count":262,"reasonToRegister":""}',
            ),
            478 => 
            array (
                'id' => 479,
                'user_id' => 2,
                'log_date' => '2021-06-09 21:07:16',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-10T01:07:16.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-09 14:26:56","last_login_date":"2021-06-09 14:26:56","login_count":262,"reasonToRegister":""}',
            ),
            479 => 
            array (
                'id' => 480,
                'user_id' => 2,
                'log_date' => '2021-06-10 07:12:50',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.77 Safari\\/537.36"}',
            ),
            480 => 
            array (
                'id' => 481,
                'user_id' => 2,
                'log_date' => '2021-06-10 07:12:50',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-10T01:07:16.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-09 14:26:56","last_login_date":"2021-06-09 21:07:16","login_count":263,"reasonToRegister":""}',
            ),
            481 => 
            array (
                'id' => 482,
                'user_id' => 2,
                'log_date' => '2021-06-10 07:12:50',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-10T11:12:50.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-09 21:07:16","last_login_date":"2021-06-09 21:07:16","login_count":263,"reasonToRegister":""}',
            ),
            482 => 
            array (
                'id' => 483,
                'user_id' => 2,
                'log_date' => '2021-06-10 10:32:29',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.77 Safari\\/537.36"}',
            ),
            483 => 
            array (
                'id' => 484,
                'user_id' => 2,
                'log_date' => '2021-06-10 10:32:29',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-10T11:12:50.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-09 21:07:16","last_login_date":"2021-06-10 07:12:50","login_count":264,"reasonToRegister":""}',
            ),
            484 => 
            array (
                'id' => 485,
                'user_id' => 2,
                'log_date' => '2021-06-10 10:32:29',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-10T14:32:29.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-10 07:12:50","last_login_date":"2021-06-10 07:12:50","login_count":264,"reasonToRegister":""}',
            ),
            485 => 
            array (
                'id' => 486,
                'user_id' => 2,
                'log_date' => '2021-06-10 22:03:32',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.77 Safari\\/537.36"}',
            ),
            486 => 
            array (
                'id' => 487,
                'user_id' => 2,
                'log_date' => '2021-06-10 22:03:32',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-10T14:32:29.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-10 07:12:50","last_login_date":"2021-06-10 10:32:29","login_count":265,"reasonToRegister":""}',
            ),
            487 => 
            array (
                'id' => 488,
                'user_id' => 2,
                'log_date' => '2021-06-10 22:03:32',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-11T02:03:32.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-10 10:32:29","last_login_date":"2021-06-10 10:32:29","login_count":265,"reasonToRegister":""}',
            ),
            488 => 
            array (
                'id' => 489,
                'user_id' => 2,
                'log_date' => '2021-06-11 06:29:03',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.77 Safari\\/537.36"}',
            ),
            489 => 
            array (
                'id' => 490,
                'user_id' => 2,
                'log_date' => '2021-06-11 06:29:03',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-11T02:03:32.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-10 10:32:29","last_login_date":"2021-06-10 22:03:32","login_count":266,"reasonToRegister":""}',
            ),
            490 => 
            array (
                'id' => 491,
                'user_id' => 2,
                'log_date' => '2021-06-11 06:29:03',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-11T10:29:03.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-10 22:03:32","last_login_date":"2021-06-10 22:03:32","login_count":266,"reasonToRegister":""}',
            ),
            491 => 
            array (
                'id' => 492,
                'user_id' => 3,
                'log_date' => '2021-06-11 07:52:17',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.77 Safari\\/537.36"}',
            ),
            492 => 
            array (
                'id' => 493,
                'user_id' => 3,
                'log_date' => '2021-06-11 07:52:17',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08T15:22:45.000000Z","updated_at":"2021-05-26T19:12:01.000000Z","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-02-18 08:59:29","last_login_date":"2021-05-26 15:12:01","login_count":22,"reasonToRegister":""}',
            ),
            493 => 
            array (
                'id' => 494,
                'user_id' => 3,
                'log_date' => '2021-06-11 07:52:17',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08T15:22:45.000000Z","updated_at":"2021-06-11T11:52:17.000000Z","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-26 15:12:01","last_login_date":"2021-05-26 15:12:01","login_count":22,"reasonToRegister":""}',
            ),
            494 => 
            array (
                'id' => 495,
                'user_id' => 2,
                'log_date' => '2021-06-11 08:07:45',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.77 Safari\\/537.36"}',
            ),
            495 => 
            array (
                'id' => 496,
                'user_id' => 2,
                'log_date' => '2021-06-11 08:07:45',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-11T10:29:03.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-10 22:03:32","last_login_date":"2021-06-11 06:29:03","login_count":267,"reasonToRegister":""}',
            ),
            496 => 
            array (
                'id' => 497,
                'user_id' => 2,
                'log_date' => '2021-06-11 08:07:45',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-11T12:07:45.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-11 06:29:03","last_login_date":"2021-06-11 06:29:03","login_count":267,"reasonToRegister":""}',
            ),
            497 => 
            array (
                'id' => 498,
                'user_id' => 2,
                'log_date' => '2021-06-11 23:22:01',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.77 Safari\\/537.36"}',
            ),
            498 => 
            array (
                'id' => 499,
                'user_id' => 2,
                'log_date' => '2021-06-11 23:22:01',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-11T12:07:45.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-11 06:29:03","last_login_date":"2021-06-11 08:07:45","login_count":268,"reasonToRegister":""}',
            ),
            499 => 
            array (
                'id' => 500,
                'user_id' => 2,
                'log_date' => '2021-06-11 23:22:01',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-12T03:22:01.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-11 08:07:45","last_login_date":"2021-06-11 08:07:45","login_count":268,"reasonToRegister":""}',
            ),
        ));
        \DB::table('logs')->insert(array (
            0 => 
            array (
                'id' => 501,
                'user_id' => 2,
                'log_date' => '2021-06-12 06:37:51',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.77 Safari\\/537.36"}',
            ),
            1 => 
            array (
                'id' => 502,
                'user_id' => 2,
                'log_date' => '2021-06-12 06:37:51',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-12T03:22:01.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-11 08:07:45","last_login_date":"2021-06-11 23:22:01","login_count":269,"reasonToRegister":""}',
            ),
            2 => 
            array (
                'id' => 503,
                'user_id' => 2,
                'log_date' => '2021-06-12 06:37:51',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-12T10:37:51.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-11 23:22:01","last_login_date":"2021-06-11 23:22:01","login_count":269,"reasonToRegister":""}',
            ),
            3 => 
            array (
                'id' => 504,
                'user_id' => 2,
                'log_date' => '2021-06-13 09:46:10',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.77 Safari\\/537.36"}',
            ),
            4 => 
            array (
                'id' => 505,
                'user_id' => 2,
                'log_date' => '2021-06-13 09:46:10',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-12T10:37:51.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-11 23:22:01","last_login_date":"2021-06-12 06:37:51","login_count":270,"reasonToRegister":""}',
            ),
            5 => 
            array (
                'id' => 506,
                'user_id' => 2,
                'log_date' => '2021-06-13 09:46:10',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-13T13:46:10.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-12 06:37:51","last_login_date":"2021-06-12 06:37:51","login_count":270,"reasonToRegister":""}',
            ),
            6 => 
            array (
                'id' => 507,
                'user_id' => 2,
                'log_date' => '2021-06-13 21:35:20',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.77 Safari\\/537.36"}',
            ),
            7 => 
            array (
                'id' => 508,
                'user_id' => 2,
                'log_date' => '2021-06-13 21:35:21',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-13T13:46:10.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-12 06:37:51","last_login_date":"2021-06-13 09:46:10","login_count":271,"reasonToRegister":""}',
            ),
            8 => 
            array (
                'id' => 509,
                'user_id' => 2,
                'log_date' => '2021-06-13 21:35:21',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-14T01:35:20.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-13 09:46:10","last_login_date":"2021-06-13 09:46:10","login_count":271,"reasonToRegister":""}',
            ),
            9 => 
            array (
                'id' => 510,
                'user_id' => 2,
                'log_date' => '2021-06-14 05:49:18',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            10 => 
            array (
                'id' => 511,
                'user_id' => 2,
                'log_date' => '2021-06-14 05:49:18',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-14T01:35:21.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-13 09:46:10","last_login_date":"2021-06-13 21:35:21","login_count":272,"reasonToRegister":""}',
            ),
            11 => 
            array (
                'id' => 512,
                'user_id' => 2,
                'log_date' => '2021-06-14 05:49:18',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08T07:34:09.000000Z","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08T07:34:09.000000Z","updated_at":"2021-06-14T09:49:18.000000Z","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-13 21:35:21","last_login_date":"2021-06-13 21:35:21","login_count":272,"reasonToRegister":""}',
            ),
            12 => 
            array (
                'id' => 513,
                'user_id' => 3,
                'log_date' => '2021-06-14 07:42:06',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            13 => 
            array (
                'id' => 514,
                'user_id' => 3,
                'log_date' => '2021-06-14 07:42:06',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08 11:22:45","updated_at":"2021-06-11 07:52:17","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-05-26 15:12:01","last_login_date":"2021-06-11 07:52:17","login_count":23,"reasonToRegister":""}',
            ),
            14 => 
            array (
                'id' => 515,
                'user_id' => 3,
                'log_date' => '2021-06-14 07:42:06',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08 11:22:45","updated_at":"2021-06-14 07:42:06","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-11 07:52:17","last_login_date":"2021-06-11 07:52:17","login_count":23,"reasonToRegister":""}',
            ),
            15 => 
            array (
                'id' => 516,
                'user_id' => 33,
                'log_date' => '2021-06-14 20:46:24',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            16 => 
            array (
                'id' => 517,
                'user_id' => 33,
                'log_date' => '2021-06-14 20:46:24',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"dart_doubleOut":0,"email":"stleroux@hotmail.ca","first_name":"Stephane Leroux","password":"$2y$10$1UM9OlYXTyM64NT7j.ySmO4LX6K2KtI\\/ygD6dsttn\\/9zqcFBGxcH6","updated_at":"2021-06-14 20:46:24","created_at":"2021-06-14 20:46:24","id":33}',
            ),
            17 => 
            array (
                'id' => 518,
                'user_id' => 33,
                'log_date' => '2021-06-14 20:46:24',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"dart_doubleOut":0,"email":"stleroux@hotmail.ca","first_name":"Stephane Leroux","password":"$2y$10$1UM9OlYXTyM64NT7j.ySmO4LX6K2KtI\\/ygD6dsttn\\/9zqcFBGxcH6","updated_at":"2021-06-14 20:46:24","created_at":"2021-06-14 20:46:24","id":33,"previous_login_date":null}',
            ),
            18 => 
            array (
                'id' => 519,
                'user_id' => 33,
                'log_date' => '2021-06-14 20:51:10',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            19 => 
            array (
                'id' => 520,
                'user_id' => 33,
                'log_date' => '2021-06-14 20:51:10',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":33,"username":"","first_name":"Stephane Leroux","last_name":null,"account_status":0,"email":"stleroux@hotmail.ca","email_verified_at":null,"password":"$2y$10$1UM9OlYXTyM64NT7j.ySmO4LX6K2KtI\\/ygD6dsttn\\/9zqcFBGxcH6","remember_token":null,"created_at":"2021-06-14 20:46:24","updated_at":"2021-06-14 20:46:24","deleted_at":null,"public_email":null,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":null,"previous_login_date":null,"last_login_date":"2021-06-14 20:46:24","login_count":1,"reasonToRegister":""}',
            ),
            20 => 
            array (
                'id' => 521,
                'user_id' => 33,
                'log_date' => '2021-06-14 20:51:10',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":33,"username":"","first_name":"Stephane Leroux","last_name":null,"account_status":0,"email":"stleroux@hotmail.ca","email_verified_at":null,"password":"$2y$10$1UM9OlYXTyM64NT7j.ySmO4LX6K2KtI\\/ygD6dsttn\\/9zqcFBGxcH6","remember_token":null,"created_at":"2021-06-14 20:46:24","updated_at":"2021-06-14 20:51:10","deleted_at":null,"public_email":null,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":null,"previous_login_date":"2021-06-14 20:46:24","last_login_date":"2021-06-14 20:46:24","login_count":1,"reasonToRegister":""}',
            ),
            21 => 
            array (
                'id' => 522,
                'user_id' => 33,
                'log_date' => '2021-06-14 20:52:19',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            22 => 
            array (
                'id' => 523,
                'user_id' => 33,
                'log_date' => '2021-06-14 20:52:19',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":33,"username":"","first_name":"Stephane Leroux","last_name":null,"account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":null,"password":"$2y$10$1UM9OlYXTyM64NT7j.ySmO4LX6K2KtI\\/ygD6dsttn\\/9zqcFBGxcH6","remember_token":null,"created_at":"2021-06-14 20:46:24","updated_at":"2021-06-14 20:51:10","deleted_at":null,"public_email":null,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":null,"previous_login_date":"2021-06-14 20:46:24","last_login_date":"2021-06-14 20:51:10","login_count":2,"reasonToRegister":""}',
            ),
            23 => 
            array (
                'id' => 524,
                'user_id' => 33,
                'log_date' => '2021-06-14 20:52:19',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":33,"username":"","first_name":"Stephane Leroux","last_name":null,"account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":null,"password":"$2y$10$1UM9OlYXTyM64NT7j.ySmO4LX6K2KtI\\/ygD6dsttn\\/9zqcFBGxcH6","remember_token":null,"created_at":"2021-06-14 20:46:24","updated_at":"2021-06-14 20:52:19","deleted_at":null,"public_email":null,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":null,"previous_login_date":"2021-06-14 20:51:10","last_login_date":"2021-06-14 20:51:10","login_count":2,"reasonToRegister":""}',
            ),
            24 => 
            array (
                'id' => 525,
                'user_id' => 33,
                'log_date' => '2021-06-14 21:00:52',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            25 => 
            array (
                'id' => 526,
                'user_id' => 33,
                'log_date' => '2021-06-14 21:00:52',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":33,"username":"","first_name":"Stephane Leroux","last_name":null,"account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":null,"password":"$2y$10$1UM9OlYXTyM64NT7j.ySmO4LX6K2KtI\\/ygD6dsttn\\/9zqcFBGxcH6","remember_token":null,"created_at":"2021-06-14 20:46:24","updated_at":"2021-06-14 20:52:19","deleted_at":null,"public_email":null,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":null,"previous_login_date":"2021-06-14 20:51:10","last_login_date":"2021-06-14 20:52:19","login_count":3,"reasonToRegister":""}',
            ),
            26 => 
            array (
                'id' => 527,
                'user_id' => 33,
                'log_date' => '2021-06-14 21:00:52',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":33,"username":"","first_name":"Stephane Leroux","last_name":null,"account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":null,"password":"$2y$10$1UM9OlYXTyM64NT7j.ySmO4LX6K2KtI\\/ygD6dsttn\\/9zqcFBGxcH6","remember_token":null,"created_at":"2021-06-14 20:46:24","updated_at":"2021-06-14 21:00:52","deleted_at":null,"public_email":null,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":null,"previous_login_date":"2021-06-14 20:52:19","last_login_date":"2021-06-14 20:52:19","login_count":3,"reasonToRegister":""}',
            ),
            27 => 
            array (
                'id' => 528,
                'user_id' => 33,
                'log_date' => '2021-06-14 21:24:42',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            28 => 
            array (
                'id' => 529,
                'user_id' => 33,
                'log_date' => '2021-06-14 21:24:42',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":33,"username":"","first_name":"Stephane Leroux","last_name":null,"account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":null,"password":"$2y$10$1UM9OlYXTyM64NT7j.ySmO4LX6K2KtI\\/ygD6dsttn\\/9zqcFBGxcH6","remember_token":null,"created_at":"2021-06-14 20:46:24","updated_at":"2021-06-14 21:00:52","deleted_at":null,"public_email":null,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":null,"previous_login_date":"2021-06-14 20:52:19","last_login_date":"2021-06-14 21:00:52","login_count":4,"reasonToRegister":""}',
            ),
            29 => 
            array (
                'id' => 530,
                'user_id' => 33,
                'log_date' => '2021-06-14 21:24:42',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":33,"username":"","first_name":"Stephane Leroux","last_name":null,"account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":null,"password":"$2y$10$1UM9OlYXTyM64NT7j.ySmO4LX6K2KtI\\/ygD6dsttn\\/9zqcFBGxcH6","remember_token":null,"created_at":"2021-06-14 20:46:24","updated_at":"2021-06-14 21:24:42","deleted_at":null,"public_email":null,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":null,"previous_login_date":"2021-06-14 21:00:52","last_login_date":"2021-06-14 21:00:52","login_count":4,"reasonToRegister":""}',
            ),
            30 => 
            array (
                'id' => 531,
                'user_id' => 2,
                'log_date' => '2021-06-14 21:47:41',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            31 => 
            array (
                'id' => 532,
                'user_id' => 2,
                'log_date' => '2021-06-14 21:47:41',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08 03:34:09","updated_at":"2021-06-14 05:49:18","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-13 21:35:21","last_login_date":"2021-06-14 05:49:18","login_count":273,"reasonToRegister":""}',
            ),
            32 => 
            array (
                'id' => 533,
                'user_id' => 2,
                'log_date' => '2021-06-14 21:47:41',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08 03:34:09","updated_at":"2021-06-14 21:47:41","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-14 05:49:18","last_login_date":"2021-06-14 05:49:18","login_count":273,"reasonToRegister":""}',
            ),
            33 => 
            array (
                'id' => 534,
                'user_id' => 2,
                'log_date' => '2021-06-14 21:49:22',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            34 => 
            array (
                'id' => 535,
                'user_id' => 2,
                'log_date' => '2021-06-14 21:49:22',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08 03:34:09","updated_at":"2021-06-14 21:47:41","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-14 05:49:18","last_login_date":"2021-06-14 21:47:41","login_count":274,"reasonToRegister":""}',
            ),
            35 => 
            array (
                'id' => 536,
                'user_id' => 2,
                'log_date' => '2021-06-14 21:49:22',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08 03:34:09","updated_at":"2021-06-14 21:49:22","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-14 21:47:41","last_login_date":"2021-06-14 21:47:41","login_count":274,"reasonToRegister":""}',
            ),
            36 => 
            array (
                'id' => 537,
                'user_id' => 3,
                'log_date' => '2021-06-14 21:58:30',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            37 => 
            array (
                'id' => 538,
                'user_id' => 3,
                'log_date' => '2021-06-14 21:58:30',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08 11:22:45","updated_at":"2021-06-14 07:42:06","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-11 07:52:17","last_login_date":"2021-06-14 07:42:06","login_count":24,"reasonToRegister":""}',
            ),
            38 => 
            array (
                'id' => 539,
                'user_id' => 3,
                'log_date' => '2021-06-14 21:58:30',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08 11:22:45","updated_at":"2021-06-14 21:58:30","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-14 07:42:06","last_login_date":"2021-06-14 07:42:06","login_count":24,"reasonToRegister":""}',
            ),
            39 => 
            array (
                'id' => 540,
                'user_id' => 35,
                'log_date' => '2021-06-14 21:59:52',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            40 => 
            array (
                'id' => 541,
                'user_id' => 35,
                'log_date' => '2021-06-14 21:59:52',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"dart_doubleOut":0,"username":"qwerty123","email":"qwerty123@hotmail.com","password":"$2y$10$mgAlMBOYcvSu64bqCRsVo.HfN8UlFBEuJGQOW41LI3gjoJTjCdC9a","reasonToRegister":"Why not.","updated_at":"2021-06-14 21:59:49","created_at":"2021-06-14 21:59:49","id":35}',
            ),
            41 => 
            array (
                'id' => 542,
                'user_id' => 35,
                'log_date' => '2021-06-14 21:59:52',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"dart_doubleOut":0,"username":"qwerty123","email":"qwerty123@hotmail.com","password":"$2y$10$mgAlMBOYcvSu64bqCRsVo.HfN8UlFBEuJGQOW41LI3gjoJTjCdC9a","reasonToRegister":"Why not.","updated_at":"2021-06-14 21:59:52","created_at":"2021-06-14 21:59:49","id":35,"previous_login_date":null}',
            ),
            42 => 
            array (
                'id' => 543,
                'user_id' => 2,
                'log_date' => '2021-06-14 22:02:45',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            43 => 
            array (
                'id' => 544,
                'user_id' => 2,
                'log_date' => '2021-06-14 22:02:46',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08 03:34:09","updated_at":"2021-06-14 21:49:22","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-14 21:47:41","last_login_date":"2021-06-14 21:49:22","login_count":275,"reasonToRegister":""}',
            ),
            44 => 
            array (
                'id' => 545,
                'user_id' => 2,
                'log_date' => '2021-06-14 22:02:46',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08 03:34:09","updated_at":"2021-06-14 22:02:45","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-14 21:49:22","last_login_date":"2021-06-14 21:49:22","login_count":275,"reasonToRegister":""}',
            ),
            45 => 
            array (
                'id' => 546,
                'user_id' => 2,
                'log_date' => '2021-06-14 22:03:10',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            46 => 
            array (
                'id' => 547,
                'user_id' => 2,
                'log_date' => '2021-06-14 22:03:10',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08 03:34:09","updated_at":"2021-06-14 22:02:46","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-14 21:49:22","last_login_date":"2021-06-14 22:02:46","login_count":276,"reasonToRegister":""}',
            ),
            47 => 
            array (
                'id' => 548,
                'user_id' => 2,
                'log_date' => '2021-06-14 22:03:10',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08 03:34:09","updated_at":"2021-06-14 22:03:10","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-14 22:02:46","last_login_date":"2021-06-14 22:02:46","login_count":276,"reasonToRegister":""}',
            ),
            48 => 
            array (
                'id' => 549,
                'user_id' => 2,
                'log_date' => '2021-06-14 22:21:28',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":null,"created_at":"2020-09-08 03:34:09","updated_at":"2021-06-14 22:03:10","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-14 22:02:46","last_login_date":"2021-06-14 22:03:10","login_count":277,"reasonToRegister":""}',
            ),
            49 => 
            array (
                'id' => 550,
                'user_id' => 2,
                'log_date' => '2021-06-14 22:21:28',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            50 => 
            array (
                'id' => 551,
                'user_id' => 2,
                'log_date' => '2021-06-14 22:21:28',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"blERkEeRBDM65EiCRFFz6Df1V4WWmrpNBAdZ11xwJp6kL8PSCjavdcnw07ZM","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-14 22:03:10","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-14 22:02:46","last_login_date":"2021-06-14 22:03:10","login_count":277,"reasonToRegister":""}',
            ),
            51 => 
            array (
                'id' => 552,
                'user_id' => 2,
                'log_date' => '2021-06-14 22:21:28',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"blERkEeRBDM65EiCRFFz6Df1V4WWmrpNBAdZ11xwJp6kL8PSCjavdcnw07ZM","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-14 22:21:28","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-14 22:03:10","last_login_date":"2021-06-14 22:03:10","login_count":277,"reasonToRegister":""}',
            ),
            52 => 
            array (
                'id' => 553,
                'user_id' => 2,
                'log_date' => '2021-06-14 22:30:40',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"blERkEeRBDM65EiCRFFz6Df1V4WWmrpNBAdZ11xwJp6kL8PSCjavdcnw07ZM","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-14 22:21:28","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-14 22:03:10","last_login_date":"2021-06-14 22:21:28","login_count":278,"reasonToRegister":""}',
            ),
            53 => 
            array (
                'id' => 554,
                'user_id' => 2,
                'log_date' => '2021-06-14 22:30:49',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            54 => 
            array (
                'id' => 555,
                'user_id' => 2,
                'log_date' => '2021-06-14 22:30:49',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"voHGkCDZbomi9JOujkfUzs0GlHLUPKpqPy5SQ5NFTUh963NoGIOjEIaaMmVx","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-14 22:21:28","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-14 22:03:10","last_login_date":"2021-06-14 22:21:28","login_count":278,"reasonToRegister":""}',
            ),
            55 => 
            array (
                'id' => 556,
                'user_id' => 2,
                'log_date' => '2021-06-14 22:30:49',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"voHGkCDZbomi9JOujkfUzs0GlHLUPKpqPy5SQ5NFTUh963NoGIOjEIaaMmVx","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-14 22:30:49","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-14 22:21:28","last_login_date":"2021-06-14 22:21:28","login_count":278,"reasonToRegister":""}',
            ),
            56 => 
            array (
                'id' => 557,
                'user_id' => 2,
                'log_date' => '2021-06-15 06:43:28',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            57 => 
            array (
                'id' => 558,
                'user_id' => 2,
                'log_date' => '2021-06-15 06:43:29',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"voHGkCDZbomi9JOujkfUzs0GlHLUPKpqPy5SQ5NFTUh963NoGIOjEIaaMmVx","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-14 22:30:49","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-14 22:21:28","last_login_date":"2021-06-14 22:30:49","login_count":279,"reasonToRegister":""}',
            ),
            58 => 
            array (
                'id' => 559,
                'user_id' => 2,
                'log_date' => '2021-06-15 06:43:29',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"voHGkCDZbomi9JOujkfUzs0GlHLUPKpqPy5SQ5NFTUh963NoGIOjEIaaMmVx","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 06:43:28","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-14 22:30:49","last_login_date":"2021-06-14 22:30:49","login_count":279,"reasonToRegister":""}',
            ),
            59 => 
            array (
                'id' => 560,
                'user_id' => 2,
                'log_date' => '2021-06-15 06:43:38',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"voHGkCDZbomi9JOujkfUzs0GlHLUPKpqPy5SQ5NFTUh963NoGIOjEIaaMmVx","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 06:43:29","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-14 22:30:49","last_login_date":"2021-06-15 06:43:29","login_count":280,"reasonToRegister":""}',
            ),
            60 => 
            array (
                'id' => 561,
                'user_id' => 2,
                'log_date' => '2021-06-15 06:43:51',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            61 => 
            array (
                'id' => 562,
                'user_id' => 2,
                'log_date' => '2021-06-15 06:43:51',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"DPleZ61gM2gHAExBUm1t71M5tRRUrzixfuqNIaWaivA02HJKR2fCvZacIDaM","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 06:43:29","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-14 22:30:49","last_login_date":"2021-06-15 06:43:29","login_count":280,"reasonToRegister":""}',
            ),
            62 => 
            array (
                'id' => 563,
                'user_id' => 2,
                'log_date' => '2021-06-15 06:43:51',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"DPleZ61gM2gHAExBUm1t71M5tRRUrzixfuqNIaWaivA02HJKR2fCvZacIDaM","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 06:43:51","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 06:43:29","last_login_date":"2021-06-15 06:43:29","login_count":280,"reasonToRegister":""}',
            ),
            63 => 
            array (
                'id' => 564,
                'user_id' => 2,
                'log_date' => '2021-06-15 06:45:01',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"DPleZ61gM2gHAExBUm1t71M5tRRUrzixfuqNIaWaivA02HJKR2fCvZacIDaM","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 06:43:51","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 06:43:29","last_login_date":"2021-06-15 06:43:51","login_count":281,"reasonToRegister":""}',
            ),
            64 => 
            array (
                'id' => 565,
                'user_id' => 2,
                'log_date' => '2021-06-15 06:45:11',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            65 => 
            array (
                'id' => 566,
                'user_id' => 2,
                'log_date' => '2021-06-15 06:45:11',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"8TzvJZwZS4jO9Q6oTax6dq9dgZA8CYG0PzxbjE4FPZXmuwooAqX6Ff3ygAgJ","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 06:43:51","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 06:43:29","last_login_date":"2021-06-15 06:43:51","login_count":281,"reasonToRegister":""}',
            ),
            66 => 
            array (
                'id' => 567,
                'user_id' => 2,
                'log_date' => '2021-06-15 06:45:11',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"8TzvJZwZS4jO9Q6oTax6dq9dgZA8CYG0PzxbjE4FPZXmuwooAqX6Ff3ygAgJ","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 06:45:11","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 06:43:51","last_login_date":"2021-06-15 06:43:51","login_count":281,"reasonToRegister":""}',
            ),
            67 => 
            array (
                'id' => 568,
                'user_id' => 2,
                'log_date' => '2021-06-15 06:52:48',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"8TzvJZwZS4jO9Q6oTax6dq9dgZA8CYG0PzxbjE4FPZXmuwooAqX6Ff3ygAgJ","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 06:45:11","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 06:43:51","last_login_date":"2021-06-15 06:45:11","login_count":282,"reasonToRegister":""}',
            ),
            68 => 
            array (
                'id' => 569,
                'user_id' => 2,
                'log_date' => '2021-06-15 06:53:01',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            69 => 
            array (
                'id' => 570,
                'user_id' => 2,
                'log_date' => '2021-06-15 06:53:01',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"O28IYbp5lCCBeaKQqg7pv9GIrYTAaqyk7hRELRysOcnlCdurn5I02M7zZRPm","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 06:45:11","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 06:43:51","last_login_date":"2021-06-15 06:45:11","login_count":282,"reasonToRegister":""}',
            ),
            70 => 
            array (
                'id' => 571,
                'user_id' => 2,
                'log_date' => '2021-06-15 06:53:01',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"O28IYbp5lCCBeaKQqg7pv9GIrYTAaqyk7hRELRysOcnlCdurn5I02M7zZRPm","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 06:53:01","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 06:45:11","last_login_date":"2021-06-15 06:45:11","login_count":282,"reasonToRegister":""}',
            ),
            71 => 
            array (
                'id' => 572,
                'user_id' => 2,
                'log_date' => '2021-06-15 08:57:12',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            72 => 
            array (
                'id' => 573,
                'user_id' => 2,
                'log_date' => '2021-06-15 08:57:12',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"O28IYbp5lCCBeaKQqg7pv9GIrYTAaqyk7hRELRysOcnlCdurn5I02M7zZRPm","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 06:53:01","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 06:45:11","last_login_date":"2021-06-15 06:53:01","login_count":283,"reasonToRegister":""}',
            ),
            73 => 
            array (
                'id' => 574,
                'user_id' => 2,
                'log_date' => '2021-06-15 08:57:12',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"O28IYbp5lCCBeaKQqg7pv9GIrYTAaqyk7hRELRysOcnlCdurn5I02M7zZRPm","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 08:57:12","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 06:53:01","last_login_date":"2021-06-15 06:53:01","login_count":283,"reasonToRegister":""}',
            ),
            74 => 
            array (
                'id' => 575,
                'user_id' => 2,
                'log_date' => '2021-06-15 11:17:25',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            75 => 
            array (
                'id' => 576,
                'user_id' => 2,
                'log_date' => '2021-06-15 11:17:25',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"O28IYbp5lCCBeaKQqg7pv9GIrYTAaqyk7hRELRysOcnlCdurn5I02M7zZRPm","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 08:57:12","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 06:53:01","last_login_date":"2021-06-15 08:57:12","login_count":284,"reasonToRegister":""}',
            ),
            76 => 
            array (
                'id' => 577,
                'user_id' => 2,
                'log_date' => '2021-06-15 11:17:25',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"O28IYbp5lCCBeaKQqg7pv9GIrYTAaqyk7hRELRysOcnlCdurn5I02M7zZRPm","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 11:17:25","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 08:57:12","last_login_date":"2021-06-15 08:57:12","login_count":284,"reasonToRegister":""}',
            ),
            77 => 
            array (
                'id' => 578,
                'user_id' => 2,
                'log_date' => '2021-06-15 11:17:36',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"O28IYbp5lCCBeaKQqg7pv9GIrYTAaqyk7hRELRysOcnlCdurn5I02M7zZRPm","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 11:17:25","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 08:57:12","last_login_date":"2021-06-15 11:17:25","login_count":285,"reasonToRegister":""}',
            ),
            78 => 
            array (
                'id' => 579,
                'user_id' => 2,
                'log_date' => '2021-06-15 11:17:54',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            79 => 
            array (
                'id' => 580,
                'user_id' => 2,
                'log_date' => '2021-06-15 11:17:54',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"oHoovG2AAaVV39E8Wb3WV9btSzdQFS0m0HumrQdjxnWLg0SD1hz6a2H2HFHI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 11:17:25","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 08:57:12","last_login_date":"2021-06-15 11:17:25","login_count":285,"reasonToRegister":""}',
            ),
            80 => 
            array (
                'id' => 581,
                'user_id' => 2,
                'log_date' => '2021-06-15 11:17:54',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"oHoovG2AAaVV39E8Wb3WV9btSzdQFS0m0HumrQdjxnWLg0SD1hz6a2H2HFHI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 11:17:54","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 11:17:25","last_login_date":"2021-06-15 11:17:25","login_count":285,"reasonToRegister":""}',
            ),
            81 => 
            array (
                'id' => 582,
                'user_id' => 2,
                'log_date' => '2021-06-15 13:46:10',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            82 => 
            array (
                'id' => 583,
                'user_id' => 2,
                'log_date' => '2021-06-15 13:46:10',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"oHoovG2AAaVV39E8Wb3WV9btSzdQFS0m0HumrQdjxnWLg0SD1hz6a2H2HFHI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 11:17:54","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 11:17:25","last_login_date":"2021-06-15 11:17:54","login_count":286,"reasonToRegister":""}',
            ),
            83 => 
            array (
                'id' => 584,
                'user_id' => 2,
                'log_date' => '2021-06-15 13:46:10',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"oHoovG2AAaVV39E8Wb3WV9btSzdQFS0m0HumrQdjxnWLg0SD1hz6a2H2HFHI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 13:46:10","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 11:17:54","last_login_date":"2021-06-15 11:17:54","login_count":286,"reasonToRegister":""}',
            ),
            84 => 
            array (
                'id' => 585,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:04:27',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"oHoovG2AAaVV39E8Wb3WV9btSzdQFS0m0HumrQdjxnWLg0SD1hz6a2H2HFHI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 13:46:10","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 11:17:54","last_login_date":"2021-06-15 13:46:10","login_count":287,"reasonToRegister":"","redirectAfterLogin":null}',
            ),
            85 => 
            array (
                'id' => 586,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:04:40',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            86 => 
            array (
                'id' => 587,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:04:40',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"nXZtvyVDRB0kPwgIYZXAHcQC0Poc5cWklCknUHoXes1dd2h95n895WzUJJ3L","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 13:46:10","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 11:17:54","last_login_date":"2021-06-15 13:46:10","login_count":287,"reasonToRegister":"","redirectAfterLogin":null}',
            ),
            87 => 
            array (
                'id' => 588,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:04:40',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"nXZtvyVDRB0kPwgIYZXAHcQC0Poc5cWklCknUHoXes1dd2h95n895WzUJJ3L","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:04:40","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 13:46:10","last_login_date":"2021-06-15 13:46:10","login_count":287,"reasonToRegister":"","redirectAfterLogin":null}',
            ),
            88 => 
            array (
                'id' => 589,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:05:22',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            89 => 
            array (
                'id' => 590,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:05:22',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"nXZtvyVDRB0kPwgIYZXAHcQC0Poc5cWklCknUHoXes1dd2h95n895WzUJJ3L","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:04:40","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 13:46:10","last_login_date":"2021-06-15 14:04:40","login_count":288,"reasonToRegister":"","redirectAfterLogin":null}',
            ),
            90 => 
            array (
                'id' => 591,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:05:22',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"nXZtvyVDRB0kPwgIYZXAHcQC0Poc5cWklCknUHoXes1dd2h95n895WzUJJ3L","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:05:22","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:04:40","last_login_date":"2021-06-15 14:04:40","login_count":288,"reasonToRegister":"","redirectAfterLogin":null}',
            ),
            91 => 
            array (
                'id' => 592,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:06:21',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"nXZtvyVDRB0kPwgIYZXAHcQC0Poc5cWklCknUHoXes1dd2h95n895WzUJJ3L","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:05:22","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:04:40","last_login_date":"2021-06-15 14:05:22","login_count":289,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            92 => 
            array (
                'id' => 593,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:06:32',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            93 => 
            array (
                'id' => 594,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:06:32',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5ZOitpSNGCLZlbOAxqNyv80vjRGGxSrqRjoh8c1avTC3OMiRJdLvMZB71XXn","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:05:22","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:04:40","last_login_date":"2021-06-15 14:05:22","login_count":289,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            94 => 
            array (
                'id' => 595,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:06:32',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5ZOitpSNGCLZlbOAxqNyv80vjRGGxSrqRjoh8c1avTC3OMiRJdLvMZB71XXn","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:06:32","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:05:22","last_login_date":"2021-06-15 14:05:22","login_count":289,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            95 => 
            array (
                'id' => 596,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:08:17',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5ZOitpSNGCLZlbOAxqNyv80vjRGGxSrqRjoh8c1avTC3OMiRJdLvMZB71XXn","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:06:32","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:05:22","last_login_date":"2021-06-15 14:06:32","login_count":290,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            96 => 
            array (
                'id' => 597,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:08:27',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            97 => 
            array (
                'id' => 598,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:08:27',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"91U4rxuv6Qf4l9htdwEh58eRuKc56GAsSdzxfVhfwzIJTyFSeO7iTKzcdtnt","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:06:32","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:05:22","last_login_date":"2021-06-15 14:06:32","login_count":290,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            98 => 
            array (
                'id' => 599,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:08:27',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"91U4rxuv6Qf4l9htdwEh58eRuKc56GAsSdzxfVhfwzIJTyFSeO7iTKzcdtnt","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:08:27","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:06:32","last_login_date":"2021-06-15 14:06:32","login_count":290,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            99 => 
            array (
                'id' => 600,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:10:59',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            100 => 
            array (
                'id' => 601,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:10:59',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"91U4rxuv6Qf4l9htdwEh58eRuKc56GAsSdzxfVhfwzIJTyFSeO7iTKzcdtnt","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:08:27","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:06:32","last_login_date":"2021-06-15 14:08:27","login_count":291,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            101 => 
            array (
                'id' => 602,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:10:59',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"91U4rxuv6Qf4l9htdwEh58eRuKc56GAsSdzxfVhfwzIJTyFSeO7iTKzcdtnt","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:10:59","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:08:27","last_login_date":"2021-06-15 14:08:27","login_count":291,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            102 => 
            array (
                'id' => 603,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:11:39',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"91U4rxuv6Qf4l9htdwEh58eRuKc56GAsSdzxfVhfwzIJTyFSeO7iTKzcdtnt","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:10:59","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:08:27","last_login_date":"2021-06-15 14:10:59","login_count":292,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            103 => 
            array (
                'id' => 604,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:11:53',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            104 => 
            array (
                'id' => 605,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:11:53',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"JK6813h1GbeDBFBpkKgstHemVSCn2c3tOp85SQ1CgSsvtHzKMRlPo0CeK0Uk","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:10:59","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:08:27","last_login_date":"2021-06-15 14:10:59","login_count":292,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            105 => 
            array (
                'id' => 606,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:11:53',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"JK6813h1GbeDBFBpkKgstHemVSCn2c3tOp85SQ1CgSsvtHzKMRlPo0CeK0Uk","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:11:53","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:10:59","last_login_date":"2021-06-15 14:10:59","login_count":292,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            106 => 
            array (
                'id' => 607,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:18:35',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"JK6813h1GbeDBFBpkKgstHemVSCn2c3tOp85SQ1CgSsvtHzKMRlPo0CeK0Uk","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:11:53","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:10:59","last_login_date":"2021-06-15 14:11:53","login_count":293,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            107 => 
            array (
                'id' => 608,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:18:46',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            108 => 
            array (
                'id' => 609,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:18:46',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"FxQ1YLJJRakWIi13gpjNV6xTjeehGyPPYQQd3rKnX9mtH1pRC1nq9n0aYat7","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:11:53","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:10:59","last_login_date":"2021-06-15 14:11:53","login_count":293,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            109 => 
            array (
                'id' => 610,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:18:46',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"FxQ1YLJJRakWIi13gpjNV6xTjeehGyPPYQQd3rKnX9mtH1pRC1nq9n0aYat7","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:18:46","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:11:53","last_login_date":"2021-06-15 14:11:53","login_count":293,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            110 => 
            array (
                'id' => 611,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:19:52',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            111 => 
            array (
                'id' => 612,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:19:52',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"FxQ1YLJJRakWIi13gpjNV6xTjeehGyPPYQQd3rKnX9mtH1pRC1nq9n0aYat7","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:18:46","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:11:53","last_login_date":"2021-06-15 14:18:46","login_count":294,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            112 => 
            array (
                'id' => 613,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:19:52',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"FxQ1YLJJRakWIi13gpjNV6xTjeehGyPPYQQd3rKnX9mtH1pRC1nq9n0aYat7","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:19:52","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:18:46","last_login_date":"2021-06-15 14:18:46","login_count":294,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            113 => 
            array (
                'id' => 614,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:21:02',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"FxQ1YLJJRakWIi13gpjNV6xTjeehGyPPYQQd3rKnX9mtH1pRC1nq9n0aYat7","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:19:52","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:18:46","last_login_date":"2021-06-15 14:19:52","login_count":295,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            114 => 
            array (
                'id' => 615,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:21:13',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            115 => 
            array (
                'id' => 616,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:21:13',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"60vsqEUuY8eE6sjQHKKwIdmeBd4LeDZUE1PhVjj5QivBq0Mp6OORn303VnPx","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:19:52","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:18:46","last_login_date":"2021-06-15 14:19:52","login_count":295,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            116 => 
            array (
                'id' => 617,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:21:13',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"60vsqEUuY8eE6sjQHKKwIdmeBd4LeDZUE1PhVjj5QivBq0Mp6OORn303VnPx","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:21:13","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:19:52","last_login_date":"2021-06-15 14:19:52","login_count":295,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            117 => 
            array (
                'id' => 618,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:21:42',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"60vsqEUuY8eE6sjQHKKwIdmeBd4LeDZUE1PhVjj5QivBq0Mp6OORn303VnPx","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:21:13","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:19:52","last_login_date":"2021-06-15 14:21:13","login_count":296,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            118 => 
            array (
                'id' => 619,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:21:53',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            119 => 
            array (
                'id' => 620,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:21:53',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"aq8KNYRKnCGUbK37c2Bp2A69tXHtn0OcxDqIWT9p4zbLhNisnvdnRio2Rlda","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:21:13","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:19:52","last_login_date":"2021-06-15 14:21:13","login_count":296,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            120 => 
            array (
                'id' => 621,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:21:53',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"aq8KNYRKnCGUbK37c2Bp2A69tXHtn0OcxDqIWT9p4zbLhNisnvdnRio2Rlda","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:21:53","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:21:13","last_login_date":"2021-06-15 14:21:13","login_count":296,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            121 => 
            array (
                'id' => 622,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:24:03',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"aq8KNYRKnCGUbK37c2Bp2A69tXHtn0OcxDqIWT9p4zbLhNisnvdnRio2Rlda","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:21:53","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:21:13","last_login_date":"2021-06-15 14:21:53","login_count":297,"reasonToRegister":"","redirectAfterLogin":"dashboard"}',
            ),
            122 => 
            array (
                'id' => 623,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:24:27',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"aq8KNYRKnCGUbK37c2Bp2A69tXHtn0OcxDqIWT9p4zbLhNisnvdnRio2Rlda","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:24:03","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:21:13","last_login_date":"2021-06-15 14:21:53","login_count":297,"reasonToRegister":"","redirectAfterLogin":"invoices"}',
            ),
            123 => 
            array (
                'id' => 624,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:24:38',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            124 => 
            array (
                'id' => 625,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:24:38',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"cK2vyA4Pv22qTYgcAviDwAJrU7VCM5HWzfACCl4hjpKrUhekNHRuPwhBABGQ","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:24:03","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:21:13","last_login_date":"2021-06-15 14:21:53","login_count":297,"reasonToRegister":"","redirectAfterLogin":"invoices"}',
            ),
            125 => 
            array (
                'id' => 626,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:24:38',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"cK2vyA4Pv22qTYgcAviDwAJrU7VCM5HWzfACCl4hjpKrUhekNHRuPwhBABGQ","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:24:38","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:21:53","last_login_date":"2021-06-15 14:21:53","login_count":297,"reasonToRegister":"","redirectAfterLogin":"invoices"}',
            ),
            126 => 
            array (
                'id' => 627,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:30:12',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"cK2vyA4Pv22qTYgcAviDwAJrU7VCM5HWzfACCl4hjpKrUhekNHRuPwhBABGQ","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:24:38","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:21:53","last_login_date":"2021-06-15 14:24:38","login_count":298,"reasonToRegister":"","redirectAfterLogin":"invoices"}',
            ),
            127 => 
            array (
                'id' => 628,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:30:29',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"cK2vyA4Pv22qTYgcAviDwAJrU7VCM5HWzfACCl4hjpKrUhekNHRuPwhBABGQ","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:30:12","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:21:53","last_login_date":"2021-06-15 14:24:38","login_count":298,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/invoicer\\/invoices"}',
            ),
            128 => 
            array (
                'id' => 629,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:30:39',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            129 => 
            array (
                'id' => 630,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:30:40',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"QGRiQjKao167uFFXGbTlpUgxhCDZfwvqE187yLmZudYWH7E7nrZJv5Ub715X","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:30:12","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:21:53","last_login_date":"2021-06-15 14:24:38","login_count":298,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/invoicer\\/invoices"}',
            ),
            130 => 
            array (
                'id' => 631,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:30:40',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"QGRiQjKao167uFFXGbTlpUgxhCDZfwvqE187yLmZudYWH7E7nrZJv5Ub715X","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:30:39","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:24:38","last_login_date":"2021-06-15 14:24:38","login_count":298,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/invoicer\\/invoices"}',
            ),
            131 => 
            array (
                'id' => 632,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:33:41',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"QGRiQjKao167uFFXGbTlpUgxhCDZfwvqE187yLmZudYWH7E7nrZJv5Ub715X","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:30:40","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:24:38","last_login_date":"2021-06-15 14:30:40","login_count":299,"reasonToRegister":"","redirectAfterLogin":""}',
            ),
            132 => 
            array (
                'id' => 633,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:33:52',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            133 => 
            array (
                'id' => 634,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:33:52',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"UlrqZ6nDbVTi5xf78azbp3i4iBVGhrTX1aULKMhaH54N4I7hli6OOe4peOFf","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:30:40","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:24:38","last_login_date":"2021-06-15 14:30:40","login_count":299,"reasonToRegister":"","redirectAfterLogin":""}',
            ),
            134 => 
            array (
                'id' => 635,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:33:52',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"UlrqZ6nDbVTi5xf78azbp3i4iBVGhrTX1aULKMhaH54N4I7hli6OOe4peOFf","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:33:52","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:30:40","last_login_date":"2021-06-15 14:30:40","login_count":299,"reasonToRegister":"","redirectAfterLogin":""}',
            ),
            135 => 
            array (
                'id' => 636,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:34:12',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"UlrqZ6nDbVTi5xf78azbp3i4iBVGhrTX1aULKMhaH54N4I7hli6OOe4peOFf","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:33:52","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:30:40","last_login_date":"2021-06-15 14:33:52","login_count":300,"reasonToRegister":"","redirectAfterLogin":""}',
            ),
            136 => 
            array (
                'id' => 637,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:34:24',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            137 => 
            array (
                'id' => 638,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:34:24',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"iJ8SHUUTDSKzh4fZWxpc1k9vHOKLttlN73JieAfQyfmyGcsrZ4I7Vbui7NvI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:33:52","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:30:40","last_login_date":"2021-06-15 14:33:52","login_count":300,"reasonToRegister":"","redirectAfterLogin":""}',
            ),
            138 => 
            array (
                'id' => 639,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:34:24',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"iJ8SHUUTDSKzh4fZWxpc1k9vHOKLttlN73JieAfQyfmyGcsrZ4I7Vbui7NvI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:34:24","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:33:52","last_login_date":"2021-06-15 14:33:52","login_count":300,"reasonToRegister":"","redirectAfterLogin":""}',
            ),
            139 => 
            array (
                'id' => 640,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:34:49',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"iJ8SHUUTDSKzh4fZWxpc1k9vHOKLttlN73JieAfQyfmyGcsrZ4I7Vbui7NvI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:34:24","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:33:52","last_login_date":"2021-06-15 14:34:24","login_count":301,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            140 => 
            array (
                'id' => 641,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:35:01',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            141 => 
            array (
                'id' => 642,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:35:01',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"UNT8Jh1yZGSFSBymRroOhGhpQ58bKf0Tt6s1ganpFiLOiMSVWwiJ1cGDgXnJ","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:34:24","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:33:52","last_login_date":"2021-06-15 14:34:24","login_count":301,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            142 => 
            array (
                'id' => 643,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:35:01',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"UNT8Jh1yZGSFSBymRroOhGhpQ58bKf0Tt6s1ganpFiLOiMSVWwiJ1cGDgXnJ","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:35:01","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:34:24","last_login_date":"2021-06-15 14:34:24","login_count":301,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            143 => 
            array (
                'id' => 644,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:36:58',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"UNT8Jh1yZGSFSBymRroOhGhpQ58bKf0Tt6s1ganpFiLOiMSVWwiJ1cGDgXnJ","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:35:01","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:34:24","last_login_date":"2021-06-15 14:35:01","login_count":302,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            144 => 
            array (
                'id' => 645,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:37:44',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"UNT8Jh1yZGSFSBymRroOhGhpQ58bKf0Tt6s1ganpFiLOiMSVWwiJ1cGDgXnJ","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:36:58","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:34:24","last_login_date":"2021-06-15 14:35:01","login_count":302,"reasonToRegister":"","redirectAfterLogin":"\\\\admin\\\\dashboard"}',
            ),
            145 => 
            array (
                'id' => 646,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:38:07',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            146 => 
            array (
                'id' => 647,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:38:07',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"gNfgUUg5J93JE721h2CfS1pl9Qe9mKHSWv8NHAC51ALQQ49vtdafKHR8T3ul","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:36:58","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:34:24","last_login_date":"2021-06-15 14:35:01","login_count":302,"reasonToRegister":"","redirectAfterLogin":"\\\\admin\\\\dashboard"}',
            ),
            147 => 
            array (
                'id' => 648,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:38:07',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"gNfgUUg5J93JE721h2CfS1pl9Qe9mKHSWv8NHAC51ALQQ49vtdafKHR8T3ul","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:38:07","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:35:01","last_login_date":"2021-06-15 14:35:01","login_count":302,"reasonToRegister":"","redirectAfterLogin":"\\\\admin\\\\dashboard"}',
            ),
            148 => 
            array (
                'id' => 649,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:39:40',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"gNfgUUg5J93JE721h2CfS1pl9Qe9mKHSWv8NHAC51ALQQ49vtdafKHR8T3ul","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:38:07","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:35:01","last_login_date":"2021-06-15 14:38:07","login_count":303,"reasonToRegister":"","redirectAfterLogin":"\\\\admin\\\\dashboard"}',
            ),
            149 => 
            array (
                'id' => 650,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:39:59',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"gNfgUUg5J93JE721h2CfS1pl9Qe9mKHSWv8NHAC51ALQQ49vtdafKHR8T3ul","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:39:40","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:35:01","last_login_date":"2021-06-15 14:38:07","login_count":303,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            150 => 
            array (
                'id' => 651,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:40:11',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            151 => 
            array (
                'id' => 652,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:40:11',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"LmDYC30ZwIRzcNQSgeQ6ae5hVcEXJl0XstJGeJqvKEk36M0g36LkMPuXASDr","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:39:40","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:35:01","last_login_date":"2021-06-15 14:38:07","login_count":303,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            152 => 
            array (
                'id' => 653,
                'user_id' => 2,
                'log_date' => '2021-06-15 14:40:11',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"LmDYC30ZwIRzcNQSgeQ6ae5hVcEXJl0XstJGeJqvKEk36M0g36LkMPuXASDr","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:40:11","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:38:07","last_login_date":"2021-06-15 14:38:07","login_count":303,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            153 => 
            array (
                'id' => 654,
                'user_id' => 2,
                'log_date' => '2021-06-15 21:09:19',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            154 => 
            array (
                'id' => 655,
                'user_id' => 2,
                'log_date' => '2021-06-15 21:09:19',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"LmDYC30ZwIRzcNQSgeQ6ae5hVcEXJl0XstJGeJqvKEk36M0g36LkMPuXASDr","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 14:40:11","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:38:07","last_login_date":"2021-06-15 14:40:11","login_count":304,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            155 => 
            array (
                'id' => 656,
                'user_id' => 2,
                'log_date' => '2021-06-15 21:09:19',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"LmDYC30ZwIRzcNQSgeQ6ae5hVcEXJl0XstJGeJqvKEk36M0g36LkMPuXASDr","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 21:09:19","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:40:11","last_login_date":"2021-06-15 14:40:11","login_count":304,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            156 => 
            array (
                'id' => 657,
                'user_id' => 2,
                'log_date' => '2021-06-16 05:20:03',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            157 => 
            array (
                'id' => 658,
                'user_id' => 2,
                'log_date' => '2021-06-16 05:20:04',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"LmDYC30ZwIRzcNQSgeQ6ae5hVcEXJl0XstJGeJqvKEk36M0g36LkMPuXASDr","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-15 21:09:19","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 14:40:11","last_login_date":"2021-06-15 21:09:19","login_count":305,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            158 => 
            array (
                'id' => 659,
                'user_id' => 2,
                'log_date' => '2021-06-16 05:20:04',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"LmDYC30ZwIRzcNQSgeQ6ae5hVcEXJl0XstJGeJqvKEk36M0g36LkMPuXASDr","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-16 05:20:03","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 21:09:19","last_login_date":"2021-06-15 21:09:19","login_count":305,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            159 => 
            array (
                'id' => 660,
                'user_id' => 2,
                'log_date' => '2021-06-16 08:37:46',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            160 => 
            array (
                'id' => 661,
                'user_id' => 2,
                'log_date' => '2021-06-16 08:37:46',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"LmDYC30ZwIRzcNQSgeQ6ae5hVcEXJl0XstJGeJqvKEk36M0g36LkMPuXASDr","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-16 05:20:04","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-15 21:09:19","last_login_date":"2021-06-16 05:20:04","login_count":306,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            161 => 
            array (
                'id' => 662,
                'user_id' => 2,
                'log_date' => '2021-06-16 08:37:46',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"LmDYC30ZwIRzcNQSgeQ6ae5hVcEXJl0XstJGeJqvKEk36M0g36LkMPuXASDr","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-16 08:37:46","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 05:20:04","last_login_date":"2021-06-16 05:20:04","login_count":306,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            162 => 
            array (
                'id' => 663,
                'user_id' => 2,
                'log_date' => '2021-06-16 08:38:20',
                'table_name' => 'users',
                'log_type' => 'create',
                'data' => '{"dart_doubleOut":"0","first_name":"123","last_name":"456","email":"123@123.com","account_status":0,"public_email":1,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"invoicer_client":0,"updated_at":"2021-06-16T12:38:20.000000Z","created_at":"2021-06-16T12:38:20.000000Z","id":36}',
            ),
            163 => 
            array (
                'id' => 664,
                'user_id' => 2,
                'log_date' => '2021-06-16 08:43:14',
                'table_name' => 'users',
                'log_type' => 'create',
                'data' => '{"dart_doubleOut":"0","first_name":"234","last_name":"567","email":"234@234.com","account_status":0,"public_email":1,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"invoicer_client":0,"updated_at":"2021-06-16T12:43:14.000000Z","created_at":"2021-06-16T12:43:14.000000Z","id":37}',
            ),
            164 => 
            array (
                'id' => 665,
                'user_id' => 2,
                'log_date' => '2021-06-16 09:36:45',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"LmDYC30ZwIRzcNQSgeQ6ae5hVcEXJl0XstJGeJqvKEk36M0g36LkMPuXASDr","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-16 08:37:46","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 05:20:04","last_login_date":"2021-06-16 08:37:46","login_count":307,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            165 => 
            array (
                'id' => 666,
                'user_id' => 2,
                'log_date' => '2021-06-16 09:36:55',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"LmDYC30ZwIRzcNQSgeQ6ae5hVcEXJl0XstJGeJqvKEk36M0g36LkMPuXASDr","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-16 09:36:45","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 05:20:04","last_login_date":"2021-06-16 08:37:46","login_count":307,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            166 => 
            array (
                'id' => 667,
                'user_id' => 2,
                'log_date' => '2021-06-16 09:37:19',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"","first_name":"Stephane123","last_name":"Leroux123","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"LmDYC30ZwIRzcNQSgeQ6ae5hVcEXJl0XstJGeJqvKEk36M0g36LkMPuXASDr","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-16 09:36:55","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 05:20:04","last_login_date":"2021-06-16 08:37:46","login_count":307,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            167 => 
            array (
                'id' => 668,
                'user_id' => 2,
                'log_date' => '2021-06-16 09:38:16',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"LmDYC30ZwIRzcNQSgeQ6ae5hVcEXJl0XstJGeJqvKEk36M0g36LkMPuXASDr","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-16 09:37:19","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 05:20:04","last_login_date":"2021-06-16 08:37:46","login_count":307,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            168 => 
            array (
                'id' => 669,
                'user_id' => 2,
                'log_date' => '2021-06-16 09:38:49',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"LmDYC30ZwIRzcNQSgeQ6ae5hVcEXJl0XstJGeJqvKEk36M0g36LkMPuXASDr","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-16 09:38:16","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 05:20:04","last_login_date":"2021-06-16 08:37:46","login_count":307,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            169 => 
            array (
                'id' => 670,
                'user_id' => 2,
                'log_date' => '2021-06-16 09:40:10',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"LmDYC30ZwIRzcNQSgeQ6ae5hVcEXJl0XstJGeJqvKEk36M0g36LkMPuXASDr","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-16 09:38:49","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 05:20:04","last_login_date":"2021-06-16 08:37:46","login_count":307,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            170 => 
            array (
                'id' => 671,
                'user_id' => 2,
                'log_date' => '2021-06-16 09:45:27',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"LmDYC30ZwIRzcNQSgeQ6ae5hVcEXJl0XstJGeJqvKEk36M0g36LkMPuXASDr","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-16 09:40:10","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 05:20:04","last_login_date":"2021-06-16 08:37:46","login_count":307,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            171 => 
            array (
                'id' => 672,
                'user_id' => 2,
                'log_date' => '2021-06-16 09:45:34',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"LmDYC30ZwIRzcNQSgeQ6ae5hVcEXJl0XstJGeJqvKEk36M0g36LkMPuXASDr","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-16 09:45:27","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 05:20:04","last_login_date":"2021-06-16 08:37:46","login_count":307,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            172 => 
            array (
                'id' => 673,
                'user_id' => 2,
                'log_date' => '2021-06-16 09:46:38',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"LmDYC30ZwIRzcNQSgeQ6ae5hVcEXJl0XstJGeJqvKEk36M0g36LkMPuXASDr","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-16 09:45:34","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 05:20:04","last_login_date":"2021-06-16 08:37:46","login_count":307,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            173 => 
            array (
                'id' => 674,
                'user_id' => 3,
                'log_date' => '2021-06-16 09:46:53',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            174 => 
            array (
                'id' => 675,
                'user_id' => 3,
                'log_date' => '2021-06-16 09:46:53',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08 11:22:45","updated_at":"2021-06-14 21:58:30","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-14 07:42:06","last_login_date":"2021-06-14 21:58:30","login_count":25,"reasonToRegister":"","redirectAfterLogin":null}',
            ),
            175 => 
            array (
                'id' => 676,
                'user_id' => 3,
                'log_date' => '2021-06-16 09:46:53',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08 11:22:45","updated_at":"2021-06-16 09:46:53","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-14 21:58:30","last_login_date":"2021-06-14 21:58:30","login_count":25,"reasonToRegister":"","redirectAfterLogin":null}',
            ),
            176 => 
            array (
                'id' => 677,
                'user_id' => 3,
                'log_date' => '2021-06-16 09:47:59',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08 11:22:45","updated_at":"2021-06-16 09:46:53","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-14 21:58:30","last_login_date":"2021-06-16 09:46:53","login_count":26,"reasonToRegister":"","redirectAfterLogin":null}',
            ),
            177 => 
            array (
                'id' => 678,
                'user_id' => 3,
                'log_date' => '2021-06-16 10:13:56',
                'table_name' => 'bugs',
                'log_type' => 'create',
                'data' => '{"status":"New","title":"sadadadsa","page_url":null,"description":"<p>sdsadsadsadsad<\\/p>","user_id":3,"updated_at":"2021-06-16T14:13:56.000000Z","created_at":"2021-06-16T14:13:56.000000Z","id":63}',
            ),
            178 => 
            array (
                'id' => 679,
                'user_id' => 2,
                'log_date' => '2021-06-16 10:20:43',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            179 => 
            array (
                'id' => 680,
                'user_id' => 2,
                'log_date' => '2021-06-16 10:20:43',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"UGS1B0wrgukZ2Y7YDDqajVgeMs7bYrVZ5uhAP571v7MJRUykOsNlgoOIEG4q","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-16 09:45:34","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 05:20:04","last_login_date":"2021-06-16 08:37:46","login_count":307,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            180 => 
            array (
                'id' => 681,
                'user_id' => 2,
                'log_date' => '2021-06-16 10:20:43',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"UGS1B0wrgukZ2Y7YDDqajVgeMs7bYrVZ5uhAP571v7MJRUykOsNlgoOIEG4q","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-16 10:20:43","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 08:37:46","last_login_date":"2021-06-16 08:37:46","login_count":307,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            181 => 
            array (
                'id' => 682,
                'user_id' => 3,
                'log_date' => '2021-06-16 10:29:51',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            182 => 
            array (
                'id' => 683,
                'user_id' => 3,
                'log_date' => '2021-06-16 10:29:51',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08 11:22:45","updated_at":"2021-06-16 09:47:59","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-14 21:58:30","last_login_date":"2021-06-16 09:46:53","login_count":26,"reasonToRegister":"","redirectAfterLogin":null}',
            ),
            183 => 
            array (
                'id' => 684,
                'user_id' => 3,
                'log_date' => '2021-06-16 10:29:51',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08 11:22:45","updated_at":"2021-06-16 10:29:51","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 09:46:53","last_login_date":"2021-06-16 09:46:53","login_count":26,"reasonToRegister":"","redirectAfterLogin":null}',
            ),
            184 => 
            array (
                'id' => 685,
                'user_id' => 2,
                'log_date' => '2021-06-16 13:07:55',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            185 => 
            array (
                'id' => 686,
                'user_id' => 2,
                'log_date' => '2021-06-16 13:07:55',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"UGS1B0wrgukZ2Y7YDDqajVgeMs7bYrVZ5uhAP571v7MJRUykOsNlgoOIEG4q","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-16 10:20:43","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 08:37:46","last_login_date":"2021-06-16 10:20:43","login_count":308,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            186 => 
            array (
                'id' => 687,
                'user_id' => 2,
                'log_date' => '2021-06-16 13:07:55',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"UGS1B0wrgukZ2Y7YDDqajVgeMs7bYrVZ5uhAP571v7MJRUykOsNlgoOIEG4q","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-16 13:07:55","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 10:20:43","last_login_date":"2021-06-16 10:20:43","login_count":308,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            187 => 
            array (
                'id' => 688,
                'user_id' => 3,
                'log_date' => '2021-06-16 13:09:28',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            188 => 
            array (
                'id' => 689,
                'user_id' => 3,
                'log_date' => '2021-06-16 13:09:28',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08 11:22:45","updated_at":"2021-06-16 10:29:51","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 09:46:53","last_login_date":"2021-06-16 10:29:51","login_count":27,"reasonToRegister":"","redirectAfterLogin":null}',
            ),
            189 => 
            array (
                'id' => 690,
                'user_id' => 3,
                'log_date' => '2021-06-16 13:09:28',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08 11:22:45","updated_at":"2021-06-16 13:09:28","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 10:29:51","last_login_date":"2021-06-16 10:29:51","login_count":27,"reasonToRegister":"","redirectAfterLogin":null}',
            ),
            190 => 
            array (
                'id' => 691,
                'user_id' => 2,
                'log_date' => '2021-06-16 21:45:28',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            191 => 
            array (
                'id' => 692,
                'user_id' => 2,
                'log_date' => '2021-06-16 21:45:28',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"UGS1B0wrgukZ2Y7YDDqajVgeMs7bYrVZ5uhAP571v7MJRUykOsNlgoOIEG4q","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-16 13:07:55","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 10:20:43","last_login_date":"2021-06-16 13:07:55","login_count":309,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            192 => 
            array (
                'id' => 693,
                'user_id' => 2,
                'log_date' => '2021-06-16 21:45:28',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"UGS1B0wrgukZ2Y7YDDqajVgeMs7bYrVZ5uhAP571v7MJRUykOsNlgoOIEG4q","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-16 21:45:28","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 13:07:55","last_login_date":"2021-06-16 13:07:55","login_count":309,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            193 => 
            array (
                'id' => 694,
                'user_id' => 3,
                'log_date' => '2021-06-16 21:45:48',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            194 => 
            array (
                'id' => 695,
                'user_id' => 3,
                'log_date' => '2021-06-16 21:45:48',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08 11:22:45","updated_at":"2021-06-16 13:09:28","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 10:29:51","last_login_date":"2021-06-16 13:09:28","login_count":28,"reasonToRegister":"","redirectAfterLogin":null}',
            ),
            195 => 
            array (
                'id' => 696,
                'user_id' => 3,
                'log_date' => '2021-06-16 21:45:48',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08 11:22:45","updated_at":"2021-06-16 21:45:48","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 13:09:28","last_login_date":"2021-06-16 13:09:28","login_count":28,"reasonToRegister":"","redirectAfterLogin":null}',
            ),
            196 => 
            array (
                'id' => 697,
                'user_id' => 2,
                'log_date' => '2021-06-17 07:27:32',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            197 => 
            array (
                'id' => 698,
                'user_id' => 2,
                'log_date' => '2021-06-17 07:27:32',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"UGS1B0wrgukZ2Y7YDDqajVgeMs7bYrVZ5uhAP571v7MJRUykOsNlgoOIEG4q","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-16 21:45:28","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 13:07:55","last_login_date":"2021-06-16 21:45:28","login_count":310,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            198 => 
            array (
                'id' => 699,
                'user_id' => 2,
                'log_date' => '2021-06-17 07:27:32',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"UGS1B0wrgukZ2Y7YDDqajVgeMs7bYrVZ5uhAP571v7MJRUykOsNlgoOIEG4q","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-17 07:27:32","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 21:45:28","last_login_date":"2021-06-16 21:45:28","login_count":310,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            199 => 
            array (
                'id' => 700,
                'user_id' => 2,
                'log_date' => '2021-06-17 10:40:41',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"UGS1B0wrgukZ2Y7YDDqajVgeMs7bYrVZ5uhAP571v7MJRUykOsNlgoOIEG4q","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-17 07:27:32","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 21:45:28","last_login_date":"2021-06-17 07:27:32","login_count":311,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            200 => 
            array (
                'id' => 701,
                'user_id' => 2,
                'log_date' => '2021-06-17 10:43:34',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            201 => 
            array (
                'id' => 702,
                'user_id' => 2,
                'log_date' => '2021-06-17 10:43:34',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"Z9pEcvBp7d0IqTiPYlelOzlpw0JTYtUWSoMQxiuZbllmIqAp0OFP0a3sPAO6","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-17 07:27:32","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 21:45:28","last_login_date":"2021-06-17 07:27:32","login_count":311,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            202 => 
            array (
                'id' => 703,
                'user_id' => 2,
                'log_date' => '2021-06-17 10:43:34',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"Z9pEcvBp7d0IqTiPYlelOzlpw0JTYtUWSoMQxiuZbllmIqAp0OFP0a3sPAO6","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-17 10:43:34","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-17 07:27:32","last_login_date":"2021-06-17 07:27:32","login_count":311,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            203 => 
            array (
                'id' => 704,
                'user_id' => 2,
                'log_date' => '2021-06-17 20:11:15',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            204 => 
            array (
                'id' => 705,
                'user_id' => 2,
                'log_date' => '2021-06-17 20:11:15',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"Z9pEcvBp7d0IqTiPYlelOzlpw0JTYtUWSoMQxiuZbllmIqAp0OFP0a3sPAO6","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-17 10:43:34","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-17 07:27:32","last_login_date":"2021-06-17 10:43:34","login_count":312,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            205 => 
            array (
                'id' => 706,
                'user_id' => 2,
                'log_date' => '2021-06-17 20:11:15',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"Z9pEcvBp7d0IqTiPYlelOzlpw0JTYtUWSoMQxiuZbllmIqAp0OFP0a3sPAO6","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-17 20:11:15","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-17 10:43:34","last_login_date":"2021-06-17 10:43:34","login_count":312,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            206 => 
            array (
                'id' => 707,
                'user_id' => 2,
                'log_date' => '2021-06-18 05:34:19',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            207 => 
            array (
                'id' => 708,
                'user_id' => 2,
                'log_date' => '2021-06-18 05:34:20',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"Z9pEcvBp7d0IqTiPYlelOzlpw0JTYtUWSoMQxiuZbllmIqAp0OFP0a3sPAO6","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-17 20:11:15","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-17 10:43:34","last_login_date":"2021-06-17 20:11:15","login_count":313,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            208 => 
            array (
                'id' => 709,
                'user_id' => 2,
                'log_date' => '2021-06-18 05:34:20',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"Z9pEcvBp7d0IqTiPYlelOzlpw0JTYtUWSoMQxiuZbllmIqAp0OFP0a3sPAO6","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-18 05:34:19","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-17 20:11:15","last_login_date":"2021-06-17 20:11:15","login_count":313,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            209 => 
            array (
                'id' => 710,
                'user_id' => 2,
                'log_date' => '2021-06-18 13:18:17',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            210 => 
            array (
                'id' => 711,
                'user_id' => 2,
                'log_date' => '2021-06-18 13:18:17',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"Z9pEcvBp7d0IqTiPYlelOzlpw0JTYtUWSoMQxiuZbllmIqAp0OFP0a3sPAO6","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-18 05:34:20","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-17 20:11:15","last_login_date":"2021-06-18 05:34:20","login_count":314,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            211 => 
            array (
                'id' => 712,
                'user_id' => 2,
                'log_date' => '2021-06-18 13:18:17',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"Z9pEcvBp7d0IqTiPYlelOzlpw0JTYtUWSoMQxiuZbllmIqAp0OFP0a3sPAO6","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-18 13:18:17","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-18 05:34:20","last_login_date":"2021-06-18 05:34:20","login_count":314,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            212 => 
            array (
                'id' => 713,
                'user_id' => 2,
                'log_date' => '2021-06-18 19:14:22',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            213 => 
            array (
                'id' => 714,
                'user_id' => 2,
                'log_date' => '2021-06-18 19:14:23',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"Z9pEcvBp7d0IqTiPYlelOzlpw0JTYtUWSoMQxiuZbllmIqAp0OFP0a3sPAO6","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-18 13:18:17","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-18 05:34:20","last_login_date":"2021-06-18 13:18:17","login_count":315,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            214 => 
            array (
                'id' => 715,
                'user_id' => 2,
                'log_date' => '2021-06-18 19:14:23',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"Z9pEcvBp7d0IqTiPYlelOzlpw0JTYtUWSoMQxiuZbllmIqAp0OFP0a3sPAO6","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-18 19:14:22","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-18 13:18:17","last_login_date":"2021-06-18 13:18:17","login_count":315,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            215 => 
            array (
                'id' => 716,
                'user_id' => 2,
                'log_date' => '2021-06-18 22:25:55',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            216 => 
            array (
                'id' => 717,
                'user_id' => 2,
                'log_date' => '2021-06-18 22:25:55',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"Z9pEcvBp7d0IqTiPYlelOzlpw0JTYtUWSoMQxiuZbllmIqAp0OFP0a3sPAO6","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-18 19:14:23","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-18 13:18:17","last_login_date":"2021-06-18 19:14:23","login_count":316,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            217 => 
            array (
                'id' => 718,
                'user_id' => 2,
                'log_date' => '2021-06-18 22:25:55',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"Z9pEcvBp7d0IqTiPYlelOzlpw0JTYtUWSoMQxiuZbllmIqAp0OFP0a3sPAO6","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-18 22:25:55","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-18 19:14:23","last_login_date":"2021-06-18 19:14:23","login_count":316,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            218 => 
            array (
                'id' => 719,
                'user_id' => 2,
                'log_date' => '2021-06-20 07:52:46',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            219 => 
            array (
                'id' => 720,
                'user_id' => 2,
                'log_date' => '2021-06-20 07:52:47',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"Z9pEcvBp7d0IqTiPYlelOzlpw0JTYtUWSoMQxiuZbllmIqAp0OFP0a3sPAO6","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-18 22:25:55","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-18 19:14:23","last_login_date":"2021-06-18 22:25:55","login_count":317,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            220 => 
            array (
                'id' => 721,
                'user_id' => 2,
                'log_date' => '2021-06-20 07:52:47',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"Z9pEcvBp7d0IqTiPYlelOzlpw0JTYtUWSoMQxiuZbllmIqAp0OFP0a3sPAO6","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-20 07:52:46","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-18 22:25:55","last_login_date":"2021-06-18 22:25:55","login_count":317,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            221 => 
            array (
                'id' => 722,
                'user_id' => 2,
                'log_date' => '2021-06-20 17:08:17',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            222 => 
            array (
                'id' => 723,
                'user_id' => 2,
                'log_date' => '2021-06-20 17:08:17',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"Z9pEcvBp7d0IqTiPYlelOzlpw0JTYtUWSoMQxiuZbllmIqAp0OFP0a3sPAO6","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-20 07:52:47","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-18 22:25:55","last_login_date":"2021-06-20 07:52:47","login_count":318,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            223 => 
            array (
                'id' => 724,
                'user_id' => 2,
                'log_date' => '2021-06-20 17:08:17',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"Z9pEcvBp7d0IqTiPYlelOzlpw0JTYtUWSoMQxiuZbllmIqAp0OFP0a3sPAO6","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-20 17:08:17","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-20 07:52:47","last_login_date":"2021-06-20 07:52:47","login_count":318,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            224 => 
            array (
                'id' => 725,
                'user_id' => 2,
                'log_date' => '2021-06-20 17:09:58',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"Z9pEcvBp7d0IqTiPYlelOzlpw0JTYtUWSoMQxiuZbllmIqAp0OFP0a3sPAO6","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-20 17:08:17","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-20 07:52:47","last_login_date":"2021-06-20 17:08:17","login_count":319,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            225 => 
            array (
                'id' => 726,
                'user_id' => 2,
                'log_date' => '2021-06-20 17:10:23',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            226 => 
            array (
                'id' => 727,
                'user_id' => 2,
                'log_date' => '2021-06-20 17:10:23',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"oaCpUrmfHodTx6MTUyww6isoWoFU3bLwOmT6e61p86Nf9ypabxkZAUjVxSqB","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-20 17:08:17","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-20 07:52:47","last_login_date":"2021-06-20 17:08:17","login_count":319,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            227 => 
            array (
                'id' => 728,
                'user_id' => 2,
                'log_date' => '2021-06-20 17:10:23',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"oaCpUrmfHodTx6MTUyww6isoWoFU3bLwOmT6e61p86Nf9ypabxkZAUjVxSqB","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-20 17:10:23","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-20 17:08:17","last_login_date":"2021-06-20 17:08:17","login_count":319,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            228 => 
            array (
                'id' => 729,
                'user_id' => 2,
                'log_date' => '2021-06-20 20:34:51',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.101 Safari\\/537.36"}',
            ),
            229 => 
            array (
                'id' => 730,
                'user_id' => 2,
                'log_date' => '2021-06-20 20:34:51',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"oaCpUrmfHodTx6MTUyww6isoWoFU3bLwOmT6e61p86Nf9ypabxkZAUjVxSqB","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-20 17:10:23","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-20 17:08:17","last_login_date":"2021-06-20 17:10:23","login_count":320,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            230 => 
            array (
                'id' => 731,
                'user_id' => 2,
                'log_date' => '2021-06-20 20:34:51',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"oaCpUrmfHodTx6MTUyww6isoWoFU3bLwOmT6e61p86Nf9ypabxkZAUjVxSqB","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-20 20:34:51","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-20 17:10:23","last_login_date":"2021-06-20 17:10:23","login_count":320,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            231 => 
            array (
                'id' => 732,
                'user_id' => 2,
                'log_date' => '2021-06-21 07:34:05',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.106 Safari\\/537.36"}',
            ),
            232 => 
            array (
                'id' => 733,
                'user_id' => 2,
                'log_date' => '2021-06-21 07:34:05',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"oaCpUrmfHodTx6MTUyww6isoWoFU3bLwOmT6e61p86Nf9ypabxkZAUjVxSqB","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-20 20:34:51","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-20 17:10:23","last_login_date":"2021-06-20 20:34:51","login_count":321,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            233 => 
            array (
                'id' => 734,
                'user_id' => 2,
                'log_date' => '2021-06-21 07:34:05',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"oaCpUrmfHodTx6MTUyww6isoWoFU3bLwOmT6e61p86Nf9ypabxkZAUjVxSqB","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-21 07:34:05","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-20 20:34:51","last_login_date":"2021-06-20 20:34:51","login_count":321,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            234 => 
            array (
                'id' => 735,
                'user_id' => 3,
                'log_date' => '2021-06-21 11:22:36',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.114 Safari\\/537.36 Edg\\/91.0.864.54"}',
            ),
            235 => 
            array (
                'id' => 736,
                'user_id' => 3,
                'log_date' => '2021-06-21 11:22:36',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08 11:22:45","updated_at":"2021-06-16 21:45:48","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 13:09:28","last_login_date":"2021-06-16 21:45:48","login_count":29,"reasonToRegister":"","redirectAfterLogin":null}',
            ),
            236 => 
            array (
                'id' => 737,
                'user_id' => 3,
                'log_date' => '2021-06-21 11:22:36',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08 11:22:45","updated_at":"2021-06-21 11:22:36","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 21:45:48","last_login_date":"2021-06-16 21:45:48","login_count":29,"reasonToRegister":"","redirectAfterLogin":null}',
            ),
            237 => 
            array (
                'id' => 738,
                'user_id' => 2,
                'log_date' => '2021-06-22 07:02:18',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.106 Safari\\/537.36"}',
            ),
            238 => 
            array (
                'id' => 739,
                'user_id' => 2,
                'log_date' => '2021-06-22 07:02:19',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"oaCpUrmfHodTx6MTUyww6isoWoFU3bLwOmT6e61p86Nf9ypabxkZAUjVxSqB","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-21 07:34:05","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-20 20:34:51","last_login_date":"2021-06-21 07:34:05","login_count":322,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            239 => 
            array (
                'id' => 740,
                'user_id' => 2,
                'log_date' => '2021-06-22 07:02:19',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"oaCpUrmfHodTx6MTUyww6isoWoFU3bLwOmT6e61p86Nf9ypabxkZAUjVxSqB","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-22 07:02:18","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-21 07:34:05","last_login_date":"2021-06-21 07:34:05","login_count":322,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            240 => 
            array (
                'id' => 741,
                'user_id' => 2,
                'log_date' => '2021-06-22 11:00:07',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"oaCpUrmfHodTx6MTUyww6isoWoFU3bLwOmT6e61p86Nf9ypabxkZAUjVxSqB","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-22 07:02:19","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-21 07:34:05","last_login_date":"2021-06-22 07:02:19","login_count":323,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            241 => 
            array (
                'id' => 742,
                'user_id' => 2,
                'log_date' => '2021-06-22 11:01:51',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.106 Safari\\/537.36"}',
            ),
            242 => 
            array (
                'id' => 743,
                'user_id' => 2,
                'log_date' => '2021-06-22 11:01:51',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-22 07:02:19","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-21 07:34:05","last_login_date":"2021-06-22 07:02:19","login_count":323,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            243 => 
            array (
                'id' => 744,
                'user_id' => 2,
                'log_date' => '2021-06-22 11:01:51',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-22 11:01:51","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-22 07:02:19","last_login_date":"2021-06-22 07:02:19","login_count":323,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            244 => 
            array (
                'id' => 745,
                'user_id' => 2,
                'log_date' => '2021-06-22 14:31:14',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.106 Safari\\/537.36"}',
            ),
            245 => 
            array (
                'id' => 746,
                'user_id' => 2,
                'log_date' => '2021-06-22 14:31:14',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-22 11:01:51","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-22 07:02:19","last_login_date":"2021-06-22 11:01:51","login_count":324,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            246 => 
            array (
                'id' => 747,
                'user_id' => 2,
                'log_date' => '2021-06-22 14:31:14',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-22 14:31:14","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-22 11:01:51","last_login_date":"2021-06-22 11:01:51","login_count":324,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            247 => 
            array (
                'id' => 748,
                'user_id' => 2,
                'log_date' => '2021-06-22 20:24:04',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.106 Safari\\/537.36"}',
            ),
            248 => 
            array (
                'id' => 749,
                'user_id' => 2,
                'log_date' => '2021-06-22 20:24:04',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-22 14:31:14","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-22 11:01:51","last_login_date":"2021-06-22 14:31:14","login_count":325,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            249 => 
            array (
                'id' => 750,
                'user_id' => 2,
                'log_date' => '2021-06-22 20:24:04',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-22 20:24:04","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-22 14:31:14","last_login_date":"2021-06-22 14:31:14","login_count":325,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            250 => 
            array (
                'id' => 751,
                'user_id' => 2,
                'log_date' => '2021-06-22 20:50:32',
                'table_name' => 'users',
                'log_type' => 'delete',
                'data' => '{"id":35,"username":"qwerty123","first_name":null,"last_name":null,"account_status":0,"email":"qwerty123@hotmail.com","email_verified_at":null,"password":"$2y$10$mgAlMBOYcvSu64bqCRsVo.HfN8UlFBEuJGQOW41LI3gjoJTjCdC9a","remember_token":null,"created_at":"2021-06-14 21:59:49","updated_at":"2021-06-22 20:50:32","deleted_at":"2021-06-22 20:50:32","public_email":null,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":null,"previous_login_date":null,"last_login_date":"2021-06-14 21:59:52","login_count":1,"reasonToRegister":"Why not.","redirectAfterLogin":null}',
            ),
            251 => 
            array (
                'id' => 752,
                'user_id' => 2,
                'log_date' => '2021-06-22 20:50:32',
                'table_name' => 'users',
                'log_type' => 'delete',
                'data' => '{"id":36,"username":"","first_name":"123","last_name":"456","account_status":0,"email":"123@123.com","email_verified_at":null,"password":"$2y$10$\\/ZV9SZMPtXoPKG02ZL8JeeUgj7vKCwEwQ4u9OkHPrxezS0eZNUFie","remember_token":null,"created_at":"2021-06-16 08:38:20","updated_at":"2021-06-22 20:50:32","deleted_at":"2021-06-22 20:50:32","public_email":1,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":0,"previous_login_date":null,"last_login_date":null,"login_count":0,"reasonToRegister":"","redirectAfterLogin":"homepage"}',
            ),
            252 => 
            array (
                'id' => 753,
                'user_id' => 2,
                'log_date' => '2021-06-22 20:50:32',
                'table_name' => 'users',
                'log_type' => 'delete',
                'data' => '{"id":37,"username":"","first_name":"234","last_name":"567","account_status":0,"email":"234@234.com","email_verified_at":null,"password":"$2y$10$jDz2\\/jMBsmXD\\/9t\\/XyA.KuXhSWh3CpvF7sZbwTwbjFCHVtJ76tMlG","remember_token":null,"created_at":"2021-06-16 08:43:14","updated_at":"2021-06-22 20:50:32","deleted_at":"2021-06-22 20:50:32","public_email":1,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":0,"previous_login_date":null,"last_login_date":null,"login_count":0,"reasonToRegister":"","redirectAfterLogin":null}',
            ),
            253 => 
            array (
                'id' => 754,
                'user_id' => 2,
                'log_date' => '2021-06-22 20:50:50',
                'table_name' => 'users',
                'log_type' => 'delete',
                'data' => '{"id":23,"username":"generic","first_name":"Generic","last_name":"User","account_status":0,"email":"user@user.com","email_verified_at":null,"password":"$2y$10$PvktleuFxX154aoaYcv9dOkqlj4kB0euFVZf.XKQM1yCdrTlRP8QC","remember_token":null,"created_at":"2020-06-05 11:54:16","updated_at":"2020-10-19 07:03:26","deleted_at":"2020-10-19 07:03:26","public_email":null,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":null,"previous_login_date":null,"last_login_date":null,"login_count":0,"reasonToRegister":"","redirectAfterLogin":null}',
            ),
            254 => 
            array (
                'id' => 755,
                'user_id' => 2,
                'log_date' => '2021-06-22 20:50:50',
                'table_name' => 'users',
                'log_type' => 'delete',
                'data' => '{"id":35,"username":"qwerty123","first_name":null,"last_name":null,"account_status":0,"email":"qwerty123@hotmail.com","email_verified_at":null,"password":"$2y$10$mgAlMBOYcvSu64bqCRsVo.HfN8UlFBEuJGQOW41LI3gjoJTjCdC9a","remember_token":null,"created_at":"2021-06-14 21:59:49","updated_at":"2021-06-22 20:50:32","deleted_at":"2021-06-22 20:50:32","public_email":null,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":null,"previous_login_date":null,"last_login_date":"2021-06-14 21:59:52","login_count":1,"reasonToRegister":"Why not.","redirectAfterLogin":null}',
            ),
            255 => 
            array (
                'id' => 756,
                'user_id' => 2,
                'log_date' => '2021-06-22 20:50:50',
                'table_name' => 'users',
                'log_type' => 'delete',
                'data' => '{"id":36,"username":"","first_name":"123","last_name":"456","account_status":0,"email":"123@123.com","email_verified_at":null,"password":"$2y$10$\\/ZV9SZMPtXoPKG02ZL8JeeUgj7vKCwEwQ4u9OkHPrxezS0eZNUFie","remember_token":null,"created_at":"2021-06-16 08:38:20","updated_at":"2021-06-22 20:50:32","deleted_at":"2021-06-22 20:50:32","public_email":1,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":0,"previous_login_date":null,"last_login_date":null,"login_count":0,"reasonToRegister":"","redirectAfterLogin":"homepage"}',
            ),
            256 => 
            array (
                'id' => 757,
                'user_id' => 2,
                'log_date' => '2021-06-22 20:50:50',
                'table_name' => 'users',
                'log_type' => 'delete',
                'data' => '{"id":37,"username":"","first_name":"234","last_name":"567","account_status":0,"email":"234@234.com","email_verified_at":null,"password":"$2y$10$jDz2\\/jMBsmXD\\/9t\\/XyA.KuXhSWh3CpvF7sZbwTwbjFCHVtJ76tMlG","remember_token":null,"created_at":"2021-06-16 08:43:14","updated_at":"2021-06-22 20:50:32","deleted_at":"2021-06-22 20:50:32","public_email":1,"telephone":null,"cell":null,"fax":null,"website":null,"company_name":null,"image":null,"address_1":null,"address_2":null,"city":null,"province":null,"postal_code":null,"notes":null,"dart_doubleOut":0,"invoicer_client":0,"previous_login_date":null,"last_login_date":null,"login_count":0,"reasonToRegister":"","redirectAfterLogin":null}',
            ),
            257 => 
            array (
                'id' => 758,
                'user_id' => 2,
                'log_date' => '2021-06-23 06:31:01',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.106 Safari\\/537.36"}',
            ),
            258 => 
            array (
                'id' => 759,
                'user_id' => 2,
                'log_date' => '2021-06-23 06:31:01',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-22 20:24:04","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-22 14:31:14","last_login_date":"2021-06-22 20:24:04","login_count":326,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            259 => 
            array (
                'id' => 760,
                'user_id' => 2,
                'log_date' => '2021-06-23 06:31:01',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-23 06:31:01","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-22 20:24:04","last_login_date":"2021-06-22 20:24:04","login_count":326,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            260 => 
            array (
                'id' => 761,
                'user_id' => 2,
                'log_date' => '2021-06-23 08:55:51',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.106 Safari\\/537.36"}',
            ),
            261 => 
            array (
                'id' => 762,
                'user_id' => 2,
                'log_date' => '2021-06-23 08:55:51',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-23 06:31:01","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-22 20:24:04","last_login_date":"2021-06-23 06:31:01","login_count":327,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            262 => 
            array (
                'id' => 763,
                'user_id' => 2,
                'log_date' => '2021-06-23 08:55:51',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-23 08:55:51","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-23 06:31:01","last_login_date":"2021-06-23 06:31:01","login_count":327,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            263 => 
            array (
                'id' => 764,
                'user_id' => 2,
                'log_date' => '2021-06-23 17:22:06',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.106 Safari\\/537.36"}',
            ),
            264 => 
            array (
                'id' => 765,
                'user_id' => 2,
                'log_date' => '2021-06-23 17:22:06',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-23 08:55:51","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-23 06:31:01","last_login_date":"2021-06-23 08:55:51","login_count":328,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            265 => 
            array (
                'id' => 766,
                'user_id' => 2,
                'log_date' => '2021-06-23 17:22:06',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-23 17:22:06","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-23 08:55:51","last_login_date":"2021-06-23 08:55:51","login_count":328,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            266 => 
            array (
                'id' => 767,
                'user_id' => 2,
                'log_date' => '2021-06-24 07:02:15',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.106 Safari\\/537.36"}',
            ),
            267 => 
            array (
                'id' => 768,
                'user_id' => 2,
                'log_date' => '2021-06-24 07:02:16',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-23 17:22:06","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-23 08:55:51","last_login_date":"2021-06-23 17:22:06","login_count":329,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            268 => 
            array (
                'id' => 769,
                'user_id' => 2,
                'log_date' => '2021-06-24 07:02:16',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-24 07:02:15","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-23 17:22:06","last_login_date":"2021-06-23 17:22:06","login_count":329,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            269 => 
            array (
                'id' => 770,
                'user_id' => 2,
                'log_date' => '2021-06-24 10:53:27',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.106 Safari\\/537.36"}',
            ),
            270 => 
            array (
                'id' => 771,
                'user_id' => 2,
                'log_date' => '2021-06-24 10:53:27',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-24 07:02:16","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-23 17:22:06","last_login_date":"2021-06-24 07:02:16","login_count":330,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            271 => 
            array (
                'id' => 772,
                'user_id' => 2,
                'log_date' => '2021-06-24 10:53:27',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-24 10:53:27","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-24 07:02:16","last_login_date":"2021-06-24 07:02:16","login_count":330,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            272 => 
            array (
                'id' => 773,
                'user_id' => 2,
                'log_date' => '2021-06-25 11:30:46',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.106 Safari\\/537.36"}',
            ),
            273 => 
            array (
                'id' => 774,
                'user_id' => 2,
                'log_date' => '2021-06-25 11:30:47',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-24 10:53:27","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-24 07:02:16","last_login_date":"2021-06-24 10:53:27","login_count":331,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            274 => 
            array (
                'id' => 775,
                'user_id' => 2,
                'log_date' => '2021-06-25 11:30:47',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-25 11:30:46","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-24 10:53:27","last_login_date":"2021-06-24 10:53:27","login_count":331,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            275 => 
            array (
                'id' => 776,
                'user_id' => 2,
                'log_date' => '2021-06-25 20:44:07',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.106 Safari\\/537.36"}',
            ),
            276 => 
            array (
                'id' => 777,
                'user_id' => 2,
                'log_date' => '2021-06-25 20:44:07',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-25 11:30:47","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-24 10:53:27","last_login_date":"2021-06-25 11:30:47","login_count":332,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            277 => 
            array (
                'id' => 778,
                'user_id' => 2,
                'log_date' => '2021-06-25 20:44:07',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-25 20:44:07","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-25 11:30:47","last_login_date":"2021-06-25 11:30:47","login_count":332,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            278 => 
            array (
                'id' => 779,
                'user_id' => 2,
                'log_date' => '2021-06-26 07:36:01',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.106 Safari\\/537.36"}',
            ),
            279 => 
            array (
                'id' => 780,
                'user_id' => 2,
                'log_date' => '2021-06-26 07:36:02',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-25 20:44:07","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-25 11:30:47","last_login_date":"2021-06-25 20:44:07","login_count":333,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            280 => 
            array (
                'id' => 781,
                'user_id' => 2,
                'log_date' => '2021-06-26 07:36:02',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-26 07:36:02","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-25 20:44:07","last_login_date":"2021-06-25 20:44:07","login_count":333,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            281 => 
            array (
                'id' => 782,
                'user_id' => 2,
                'log_date' => '2021-06-26 17:53:35',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.106 Safari\\/537.36"}',
            ),
            282 => 
            array (
                'id' => 783,
                'user_id' => 2,
                'log_date' => '2021-06-26 17:53:35',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-26 07:36:02","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-25 20:44:07","last_login_date":"2021-06-26 07:36:02","login_count":334,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            283 => 
            array (
                'id' => 784,
                'user_id' => 2,
                'log_date' => '2021-06-26 17:53:35',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-26 17:53:35","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-26 07:36:02","last_login_date":"2021-06-26 07:36:02","login_count":334,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            284 => 
            array (
                'id' => 785,
                'user_id' => 2,
                'log_date' => '2021-06-26 18:43:14',
                'table_name' => 'users',
                'log_type' => 'create',
            'data' => '{"dart_doubleOut":0,"first_name":"Jeffrey","last_name":"Haynes","company_name":"Haynes Underwear","email":"haynes@email.com","telephone":"(123) 456-7890","account_status":1,"updated_at":"2021-06-26T22:43:14.000000Z","created_at":"2021-06-26T22:43:14.000000Z","id":38}',
            ),
            285 => 
            array (
                'id' => 786,
                'user_id' => 2,
                'log_date' => '2021-06-26 19:02:56',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"5KIe7htYJTOpL7Bj1gpjdRUEzRUJpdK7DS1kYZHMvPWjU7ratGGLYZTv7AhI","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-26 17:53:35","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-26 07:36:02","last_login_date":"2021-06-26 17:53:35","login_count":335,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            286 => 
            array (
                'id' => 787,
                'user_id' => 3,
                'log_date' => '2021-06-26 19:03:12',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.106 Safari\\/537.36"}',
            ),
            287 => 
            array (
                'id' => 788,
                'user_id' => 3,
                'log_date' => '2021-06-26 19:03:12',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08 11:22:45","updated_at":"2021-06-21 11:22:36","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-16 21:45:48","last_login_date":"2021-06-21 11:22:36","login_count":30,"reasonToRegister":"","redirectAfterLogin":null}',
            ),
            288 => 
            array (
                'id' => 789,
                'user_id' => 3,
                'log_date' => '2021-06-26 19:03:12',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":3,"username":"hayness","first_name":"Stacie","last_name":"Haynes","account_status":1,"email":"staciehaynes@hotmail.com","email_verified_at":null,"password":"$2y$10$LAOKEiQwZbhw8\\/4cykmmSeSeUAJb4NBXG8bNaQhmwY3TQvKCH92Tm","remember_token":null,"created_at":"2020-09-08 11:22:45","updated_at":"2021-06-26 19:03:12","deleted_at":null,"public_email":0,"telephone":"(613) 327-4722","cell":null,"fax":null,"website":null,"company_name":"Stacie Haynes Inc","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":null,"dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-21 11:22:36","last_login_date":"2021-06-21 11:22:36","login_count":30,"reasonToRegister":"","redirectAfterLogin":null}',
            ),
            289 => 
            array (
                'id' => 790,
                'user_id' => 2,
                'log_date' => '2021-06-26 19:04:36',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.106 Safari\\/537.36"}',
            ),
            290 => 
            array (
                'id' => 791,
                'user_id' => 2,
                'log_date' => '2021-06-26 19:04:36',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"0mgeXxrgHif6uEnYR97gwyx7l6h436JsWm69mLgAucye89od7lid3C9l3Bkz","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-26 17:53:35","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-26 07:36:02","last_login_date":"2021-06-26 17:53:35","login_count":335,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            291 => 
            array (
                'id' => 792,
                'user_id' => 2,
                'log_date' => '2021-06-26 19:04:36',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"0mgeXxrgHif6uEnYR97gwyx7l6h436JsWm69mLgAucye89od7lid3C9l3Bkz","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-26 19:04:36","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-26 17:53:35","last_login_date":"2021-06-26 17:53:35","login_count":335,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            292 => 
            array (
                'id' => 793,
                'user_id' => 2,
                'log_date' => '2021-06-26 21:52:46',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.106 Safari\\/537.36"}',
            ),
            293 => 
            array (
                'id' => 794,
                'user_id' => 2,
                'log_date' => '2021-06-26 21:52:46',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"0mgeXxrgHif6uEnYR97gwyx7l6h436JsWm69mLgAucye89od7lid3C9l3Bkz","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-26 19:04:36","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-26 17:53:35","last_login_date":"2021-06-26 19:04:36","login_count":336,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            294 => 
            array (
                'id' => 795,
                'user_id' => 2,
                'log_date' => '2021-06-26 21:52:46',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"0mgeXxrgHif6uEnYR97gwyx7l6h436JsWm69mLgAucye89od7lid3C9l3Bkz","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-26 21:52:46","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-26 19:04:36","last_login_date":"2021-06-26 19:04:36","login_count":336,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            295 => 
            array (
                'id' => 796,
                'user_id' => 2,
                'log_date' => '2021-06-26 23:55:56',
                'table_name' => 'users',
                'log_type' => 'create',
            'data' => '{"dart_doubleOut":0,"first_name":"Hugues","last_name":"Leroux","company_name":"WadeRedden","email":"hugues@email.com","telephone":"(232) 456-7878","account_status":1,"updated_at":"2021-06-27T03:55:56.000000Z","created_at":"2021-06-27T03:55:56.000000Z","id":39}',
            ),
            296 => 
            array (
                'id' => 797,
                'user_id' => 2,
                'log_date' => '2021-06-26 23:58:41',
                'table_name' => 'users',
                'log_type' => 'create',
            'data' => '{"dart_doubleOut":0,"first_name":"Cailin","last_name":"Beard","company_name":"Henson Haley Traders","email":"micuco@mailinator.com","telephone":"(138) 857-3606","account_status":1,"invoicer_client":1,"updated_at":"2021-06-27T03:58:41.000000Z","created_at":"2021-06-27T03:58:41.000000Z","id":40}',
            ),
            297 => 
            array (
                'id' => 798,
                'user_id' => 2,
                'log_date' => '2021-06-27 07:04:31',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.106 Safari\\/537.36"}',
            ),
            298 => 
            array (
                'id' => 799,
                'user_id' => 2,
                'log_date' => '2021-06-27 07:04:31',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"0mgeXxrgHif6uEnYR97gwyx7l6h436JsWm69mLgAucye89od7lid3C9l3Bkz","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-26 21:52:46","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-26 19:04:36","last_login_date":"2021-06-26 21:52:46","login_count":337,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            299 => 
            array (
                'id' => 800,
                'user_id' => 2,
                'log_date' => '2021-06-27 07:04:31',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"0mgeXxrgHif6uEnYR97gwyx7l6h436JsWm69mLgAucye89od7lid3C9l3Bkz","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-27 07:04:31","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-26 21:52:46","last_login_date":"2021-06-26 21:52:46","login_count":337,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            300 => 
            array (
                'id' => 801,
                'user_id' => 2,
                'log_date' => '2021-06-27 21:01:22',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.106 Safari\\/537.36"}',
            ),
            301 => 
            array (
                'id' => 802,
                'user_id' => 2,
                'log_date' => '2021-06-27 21:01:22',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"0mgeXxrgHif6uEnYR97gwyx7l6h436JsWm69mLgAucye89od7lid3C9l3Bkz","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-27 07:04:31","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-26 21:52:46","last_login_date":"2021-06-27 07:04:31","login_count":338,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            302 => 
            array (
                'id' => 803,
                'user_id' => 2,
                'log_date' => '2021-06-27 21:01:22',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"0mgeXxrgHif6uEnYR97gwyx7l6h436JsWm69mLgAucye89od7lid3C9l3Bkz","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-27 21:01:22","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-27 07:04:31","last_login_date":"2021-06-27 07:04:31","login_count":338,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            303 => 
            array (
                'id' => 804,
                'user_id' => 2,
                'log_date' => '2021-06-28 05:37:29',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.106 Safari\\/537.36"}',
            ),
            304 => 
            array (
                'id' => 805,
                'user_id' => 2,
                'log_date' => '2021-06-28 05:37:29',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"0mgeXxrgHif6uEnYR97gwyx7l6h436JsWm69mLgAucye89od7lid3C9l3Bkz","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-27 21:01:22","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-27 07:04:31","last_login_date":"2021-06-27 21:01:22","login_count":339,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            305 => 
            array (
                'id' => 806,
                'user_id' => 2,
                'log_date' => '2021-06-28 05:37:29',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"0mgeXxrgHif6uEnYR97gwyx7l6h436JsWm69mLgAucye89od7lid3C9l3Bkz","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-28 05:37:29","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-27 21:01:22","last_login_date":"2021-06-27 21:01:22","login_count":339,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            306 => 
            array (
                'id' => 807,
                'user_id' => 2,
                'log_date' => '2021-06-28 07:56:02',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.106 Safari\\/537.36"}',
            ),
            307 => 
            array (
                'id' => 808,
                'user_id' => 2,
                'log_date' => '2021-06-28 07:56:03',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"0mgeXxrgHif6uEnYR97gwyx7l6h436JsWm69mLgAucye89od7lid3C9l3Bkz","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-28 05:37:29","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-27 21:01:22","last_login_date":"2021-06-28 05:37:29","login_count":340,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            308 => 
            array (
                'id' => 809,
                'user_id' => 2,
                'log_date' => '2021-06-28 07:56:03',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"0mgeXxrgHif6uEnYR97gwyx7l6h436JsWm69mLgAucye89od7lid3C9l3Bkz","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-28 07:56:03","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-28 05:37:29","last_login_date":"2021-06-28 05:37:29","login_count":340,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            309 => 
            array (
                'id' => 810,
                'user_id' => 2,
                'log_date' => '2021-06-28 22:16:02',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.106 Safari\\/537.36"}',
            ),
            310 => 
            array (
                'id' => 811,
                'user_id' => 2,
                'log_date' => '2021-06-28 22:16:02',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"0mgeXxrgHif6uEnYR97gwyx7l6h436JsWm69mLgAucye89od7lid3C9l3Bkz","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-28 07:56:03","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-28 05:37:29","last_login_date":"2021-06-28 07:56:03","login_count":341,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            311 => 
            array (
                'id' => 812,
                'user_id' => 2,
                'log_date' => '2021-06-28 22:16:02',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"0mgeXxrgHif6uEnYR97gwyx7l6h436JsWm69mLgAucye89od7lid3C9l3Bkz","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-28 22:16:02","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-28 07:56:03","last_login_date":"2021-06-28 07:56:03","login_count":341,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            312 => 
            array (
                'id' => 813,
                'user_id' => 2,
                'log_date' => '2021-06-30 18:39:10',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.114 Safari\\/537.36"}',
            ),
            313 => 
            array (
                'id' => 814,
                'user_id' => 2,
                'log_date' => '2021-06-30 18:39:10',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"0mgeXxrgHif6uEnYR97gwyx7l6h436JsWm69mLgAucye89od7lid3C9l3Bkz","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-28 22:16:02","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-28 07:56:03","last_login_date":"2021-06-28 22:16:02","login_count":342,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            314 => 
            array (
                'id' => 815,
                'user_id' => 2,
                'log_date' => '2021-06-30 18:39:10',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"0mgeXxrgHif6uEnYR97gwyx7l6h436JsWm69mLgAucye89od7lid3C9l3Bkz","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-30 18:39:10","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-28 22:16:02","last_login_date":"2021-06-28 22:16:02","login_count":342,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            315 => 
            array (
                'id' => 816,
                'user_id' => 2,
                'log_date' => '2021-06-30 18:39:48',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.114 Safari\\/537.36"}',
            ),
            316 => 
            array (
                'id' => 817,
                'user_id' => 2,
                'log_date' => '2021-06-30 18:39:48',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"0mgeXxrgHif6uEnYR97gwyx7l6h436JsWm69mLgAucye89od7lid3C9l3Bkz","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-30 18:39:10","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-28 22:16:02","last_login_date":"2021-06-30 18:39:10","login_count":343,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            317 => 
            array (
                'id' => 818,
                'user_id' => 2,
                'log_date' => '2021-06-30 18:39:48',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"0mgeXxrgHif6uEnYR97gwyx7l6h436JsWm69mLgAucye89od7lid3C9l3Bkz","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-30 18:39:48","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-30 18:39:10","last_login_date":"2021-06-30 18:39:10","login_count":343,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            318 => 
            array (
                'id' => 819,
                'user_id' => 2,
                'log_date' => '2021-06-30 18:40:57',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"0mgeXxrgHif6uEnYR97gwyx7l6h436JsWm69mLgAucye89od7lid3C9l3Bkz","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-30 18:39:48","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-30 18:39:10","last_login_date":"2021-06-30 18:39:48","login_count":344,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            319 => 
            array (
                'id' => 820,
                'user_id' => 2,
                'log_date' => '2021-06-30 18:41:12',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.114 Safari\\/537.36"}',
            ),
            320 => 
            array (
                'id' => 821,
                'user_id' => 2,
                'log_date' => '2021-06-30 18:41:12',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"1mJrOXRN057FmlBuiDlhtkKccd1aAhnrXfHgJqJZXWMbgogSN21V2CoeCTZk","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-30 18:39:48","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-30 18:39:10","last_login_date":"2021-06-30 18:39:48","login_count":344,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            321 => 
            array (
                'id' => 822,
                'user_id' => 2,
                'log_date' => '2021-06-30 18:41:12',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"1mJrOXRN057FmlBuiDlhtkKccd1aAhnrXfHgJqJZXWMbgogSN21V2CoeCTZk","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-30 18:41:12","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-30 18:39:48","last_login_date":"2021-06-30 18:39:48","login_count":344,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            322 => 
            array (
                'id' => 823,
                'user_id' => 2,
                'log_date' => '2021-06-30 18:42:47',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"1mJrOXRN057FmlBuiDlhtkKccd1aAhnrXfHgJqJZXWMbgogSN21V2CoeCTZk","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-30 18:41:12","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-30 18:39:48","last_login_date":"2021-06-30 18:41:12","login_count":345,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            323 => 
            array (
                'id' => 824,
                'user_id' => 2,
                'log_date' => '2021-06-30 18:47:28',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.114 Safari\\/537.36"}',
            ),
            324 => 
            array (
                'id' => 825,
                'user_id' => 2,
                'log_date' => '2021-06-30 18:47:28',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"3QH5VkhSZKIjVEnr4JqgfqoEOxbkEMtRqaCI7d98DVznZJ0GVvnyEeSJ8bAw","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-30 18:41:12","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-30 18:39:48","last_login_date":"2021-06-30 18:41:12","login_count":345,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            325 => 
            array (
                'id' => 826,
                'user_id' => 2,
                'log_date' => '2021-06-30 18:47:28',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"3QH5VkhSZKIjVEnr4JqgfqoEOxbkEMtRqaCI7d98DVznZJ0GVvnyEeSJ8bAw","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-30 18:47:28","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-30 18:41:12","last_login_date":"2021-06-30 18:41:12","login_count":345,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            326 => 
            array (
                'id' => 827,
                'user_id' => 2,
                'log_date' => '2021-06-30 21:01:10',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.114 Safari\\/537.36"}',
            ),
            327 => 
            array (
                'id' => 828,
                'user_id' => 2,
                'log_date' => '2021-06-30 21:01:10',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"3QH5VkhSZKIjVEnr4JqgfqoEOxbkEMtRqaCI7d98DVznZJ0GVvnyEeSJ8bAw","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-30 18:47:28","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-30 18:41:12","last_login_date":"2021-06-30 18:47:28","login_count":346,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            328 => 
            array (
                'id' => 829,
                'user_id' => 2,
                'log_date' => '2021-06-30 21:01:10',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"3QH5VkhSZKIjVEnr4JqgfqoEOxbkEMtRqaCI7d98DVznZJ0GVvnyEeSJ8bAw","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-30 21:01:10","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-30 18:47:28","last_login_date":"2021-06-30 18:47:28","login_count":346,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            329 => 
            array (
                'id' => 830,
                'user_id' => 2,
                'log_date' => '2021-07-01 06:46:01',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.114 Safari\\/537.36"}',
            ),
            330 => 
            array (
                'id' => 831,
                'user_id' => 2,
                'log_date' => '2021-07-01 06:46:01',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"3QH5VkhSZKIjVEnr4JqgfqoEOxbkEMtRqaCI7d98DVznZJ0GVvnyEeSJ8bAw","created_at":"2020-09-08 03:34:09","updated_at":"2021-06-30 21:01:10","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-30 18:47:28","last_login_date":"2021-06-30 21:01:10","login_count":347,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
            331 => 
            array (
                'id' => 832,
                'user_id' => 2,
                'log_date' => '2021-07-01 06:46:01',
                'table_name' => 'users',
                'log_type' => 'edit',
            'data' => '{"id":2,"username":"lerouxs","first_name":"Stephane","last_name":"Leroux","account_status":1,"email":"stleroux@hotmail.ca","email_verified_at":"2020-09-08 03:34:09","password":"$2y$10$a3VOdvKkx9i6yZ3soekk\\/uhxC8mX76Enn9KJeOCilynZhHQvzitFe","remember_token":"3QH5VkhSZKIjVEnr4JqgfqoEOxbkEMtRqaCI7d98DVznZJ0GVvnyEeSJ8bAw","created_at":"2020-09-08 03:34:09","updated_at":"2021-07-01 06:46:01","deleted_at":null,"public_email":1,"telephone":"(613) 370-0275","cell":null,"fax":null,"website":null,"company_name":"TheWoodBarn.ca","image":null,"address_1":"1216 Ste Marie Rd","address_2":null,"city":"Embrun","province":"Ontario","postal_code":"K0A-1W0","notes":"Notes","dart_doubleOut":10,"invoicer_client":1,"previous_login_date":"2021-06-30 21:01:10","last_login_date":"2021-06-30 21:01:10","login_count":347,"reasonToRegister":"","redirectAfterLogin":"\\/admin\\/dashboard"}',
            ),
        ));
        
        
    }
}