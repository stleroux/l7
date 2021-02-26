<?php

// namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DartGamesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dart__games')->delete();
        
        \DB::table('dart__games')->insert(array (
            0 => 
            array (
                'created_at' => '2019-12-09 14:48:37',
                'id' => 68,
                'ind_players' => 3,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => '301',
                'updated_at' => '2019-12-10 11:58:58',
            ),
            1 => 
            array (
                'created_at' => '2019-12-09 14:49:22',
                'id' => 69,
                'ind_players' => 0,
                'status' => 'Completed',
                't1_players' => 2,
                't2_players' => 2,
                'type' => '301',
                'updated_at' => '2019-12-10 12:25:29',
            ),
            2 => 
            array (
                'created_at' => '2019-12-09 16:18:32',
                'id' => 70,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => '301',
                'updated_at' => '2019-12-09 18:26:16',
            ),
            3 => 
            array (
                'created_at' => '2019-12-09 21:24:13',
                'id' => 71,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => '301',
                'updated_at' => '2019-12-09 21:32:01',
            ),
            4 => 
            array (
                'created_at' => '2019-12-10 16:24:02',
                'id' => 72,
                'ind_players' => 0,
                'status' => 'In Progress',
                't1_players' => 2,
                't2_players' => 2,
                'type' => '301',
                'updated_at' => '2019-12-10 16:26:42',
            ),
            5 => 
            array (
                'created_at' => '2019-12-10 16:27:39',
                'id' => 73,
                'ind_players' => 0,
                'status' => 'Completed',
                't1_players' => 3,
                't2_players' => 3,
                'type' => '301',
                'updated_at' => '2019-12-10 21:38:04',
            ),
            6 => 
            array (
                'created_at' => '2019-12-10 21:40:11',
                'id' => 74,
                'ind_players' => 2,
                'status' => 'In Progress',
                't1_players' => 0,
                't2_players' => 0,
                'type' => '301',
                'updated_at' => '2019-12-11 02:33:05',
            ),
            7 => 
            array (
                'created_at' => '2019-12-12 01:06:39',
                'id' => 75,
                'ind_players' => 0,
                'status' => 'In Progress',
                't1_players' => 2,
                't2_players' => 2,
                'type' => '301',
                'updated_at' => '2019-12-12 01:07:00',
            ),
            8 => 
            array (
                'created_at' => '2019-12-12 01:13:59',
                'id' => 76,
                'ind_players' => 2,
                'status' => 'In Progress',
                't1_players' => 0,
                't2_players' => 0,
                'type' => '301',
                'updated_at' => '2019-12-12 01:14:20',
            ),
            9 => 
            array (
                'created_at' => '2019-12-31 14:41:46',
                'id' => 77,
                'ind_players' => 2,
                'status' => 'New',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2019-12-31 14:41:49',
            ),
            10 => 
            array (
                'created_at' => '2020-01-05 03:21:09',
                'id' => 79,
                'ind_players' => 0,
                'status' => 'In Progress',
                't1_players' => 3,
                't2_players' => 3,
                'type' => 'cricket',
                'updated_at' => '2020-02-02 01:06:21',
            ),
            11 => 
            array (
                'created_at' => '2020-01-05 03:25:16',
                'id' => 80,
                'ind_players' => 1,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-11-02 16:14:42',
            ),
            12 => 
            array (
                'created_at' => '2020-03-25 18:18:53',
                'id' => 83,
                'ind_players' => 2,
                'status' => 'New',
                't1_players' => 0,
                't2_players' => 0,
                'type' => '301',
                'updated_at' => '2020-03-25 18:18:57',
            ),
            13 => 
            array (
                'created_at' => '2020-03-25 18:20:36',
                'id' => 84,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-03-25 18:43:08',
            ),
            14 => 
            array (
                'created_at' => '2020-03-25 18:44:19',
                'id' => 85,
                'ind_players' => 0,
                'status' => 'Completed',
                't1_players' => 2,
                't2_players' => 2,
                'type' => '501',
                'updated_at' => '2020-03-25 19:04:48',
            ),
            15 => 
            array (
                'created_at' => '2020-03-25 19:06:01',
                'id' => 86,
                'ind_players' => 3,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-03-25 19:32:49',
            ),
            16 => 
            array (
                'created_at' => '2020-03-25 19:33:11',
                'id' => 87,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-03-25 19:48:22',
            ),
            17 => 
            array (
                'created_at' => '2020-03-25 19:49:01',
                'id' => 88,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-03-25 20:06:12',
            ),
            18 => 
            array (
                'created_at' => '2020-03-26 18:02:36',
                'id' => 90,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-03-26 18:26:01',
            ),
            19 => 
            array (
                'created_at' => '2020-03-26 18:26:10',
                'id' => 91,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-03-26 18:35:12',
            ),
            20 => 
            array (
                'created_at' => '2020-03-26 18:35:19',
                'id' => 92,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-03-26 18:49:03',
            ),
            21 => 
            array (
                'created_at' => '2020-03-26 18:49:12',
                'id' => 93,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => '501',
                'updated_at' => '2020-03-26 19:03:21',
            ),
            22 => 
            array (
                'created_at' => '2020-03-26 19:03:29',
                'id' => 94,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => '501',
                'updated_at' => '2020-03-26 19:31:41',
            ),
            23 => 
            array (
                'created_at' => '2020-03-26 19:32:00',
                'id' => 95,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-03-26 19:44:17',
            ),
            24 => 
            array (
                'created_at' => '2020-03-26 19:44:26',
                'id' => 96,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-03-26 19:53:52',
            ),
            25 => 
            array (
                'created_at' => '2020-03-26 19:53:59',
                'id' => 97,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-03-26 20:02:41',
            ),
            26 => 
            array (
                'created_at' => '2020-03-27 21:21:27',
                'id' => 98,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-03-27 21:40:29',
            ),
            27 => 
            array (
                'created_at' => '2020-03-27 21:40:37',
                'id' => 99,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => '501',
                'updated_at' => '2020-03-27 21:57:22',
            ),
            28 => 
            array (
                'created_at' => '2020-03-30 16:57:46',
                'id' => 100,
                'ind_players' => 3,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => '501',
                'updated_at' => '2020-03-30 17:25:21',
            ),
            29 => 
            array (
                'created_at' => '2020-03-30 17:38:09',
                'id' => 104,
                'ind_players' => 3,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => '501',
                'updated_at' => '2020-03-30 17:59:10',
            ),
            30 => 
            array (
                'created_at' => '2020-03-30 17:59:20',
                'id' => 105,
                'ind_players' => 3,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => '501',
                'updated_at' => '2020-03-30 18:37:12',
            ),
            31 => 
            array (
                'created_at' => '2020-03-30 18:37:54',
                'id' => 106,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-03-30 18:50:25',
            ),
            32 => 
            array (
                'created_at' => '2020-03-30 18:51:09',
                'id' => 108,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => '501',
                'updated_at' => '2020-03-30 19:17:52',
            ),
            33 => 
            array (
                'created_at' => '2020-03-30 19:18:00',
                'id' => 109,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-03-30 19:35:14',
            ),
            34 => 
            array (
                'created_at' => '2020-03-30 19:35:21',
                'id' => 110,
                'ind_players' => 3,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-03-30 19:53:49',
            ),
            35 => 
            array (
                'created_at' => '2020-03-30 19:53:55',
                'id' => 111,
                'ind_players' => 3,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-03-30 20:14:23',
            ),
            36 => 
            array (
                'created_at' => '2020-04-01 15:31:27',
                'id' => 113,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-04-01 15:51:07',
            ),
            37 => 
            array (
                'created_at' => '2020-04-01 15:51:14',
                'id' => 114,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-04-01 16:00:00',
            ),
            38 => 
            array (
                'created_at' => '2020-04-01 16:00:07',
                'id' => 115,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => '501',
                'updated_at' => '2020-04-01 16:20:18',
            ),
            39 => 
            array (
                'created_at' => '2020-04-02 00:13:36',
                'id' => 116,
                'ind_players' => 3,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-04-02 00:36:59',
            ),
            40 => 
            array (
                'created_at' => '2020-04-02 00:37:05',
                'id' => 117,
                'ind_players' => 3,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-04-02 00:53:52',
            ),
            41 => 
            array (
                'created_at' => '2020-04-02 00:54:06',
                'id' => 119,
                'ind_players' => 3,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => '701',
                'updated_at' => '2020-04-02 01:16:51',
            ),
            42 => 
            array (
                'created_at' => '2020-04-02 01:19:10',
                'id' => 120,
                'ind_players' => 3,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => '301',
                'updated_at' => '2020-04-02 01:36:54',
            ),
            43 => 
            array (
                'created_at' => '2020-04-03 20:13:20',
                'id' => 121,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-04-03 20:30:38',
            ),
            44 => 
            array (
                'created_at' => '2020-04-03 20:30:47',
                'id' => 122,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-04-03 20:58:40',
            ),
            45 => 
            array (
                'created_at' => '2020-04-03 20:58:46',
                'id' => 123,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-04-03 21:14:57',
            ),
            46 => 
            array (
                'created_at' => '2020-04-03 21:15:37',
                'id' => 124,
                'ind_players' => 0,
                'status' => 'Completed',
                't1_players' => 2,
                't2_players' => 2,
                'type' => '1001',
                'updated_at' => '2020-04-03 21:48:47',
            ),
            47 => 
            array (
                'created_at' => '2020-04-05 00:22:26',
                'id' => 125,
                'ind_players' => 5,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-04-05 01:26:58',
            ),
            48 => 
            array (
                'created_at' => '2020-04-05 01:27:36',
                'id' => 126,
                'ind_players' => 5,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => '501',
                'updated_at' => '2020-04-05 02:09:37',
            ),
            49 => 
            array (
                'created_at' => '2020-05-16 01:34:06',
                'id' => 127,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => '701',
                'updated_at' => '2020-05-16 01:50:22',
            ),
            50 => 
            array (
                'created_at' => '2020-05-16 01:51:17',
                'id' => 128,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-05-16 02:08:11',
            ),
            51 => 
            array (
                'created_at' => '2020-07-28 20:47:14',
                'id' => 129,
                'ind_players' => 0,
                'status' => 'In Progress',
                't1_players' => 2,
                't2_players' => 2,
                'type' => '501',
                'updated_at' => '2020-07-28 20:53:22',
            ),
            52 => 
            array (
                'created_at' => '2020-07-28 21:36:05',
                'id' => 130,
                'ind_players' => 3,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-07-28 22:16:28',
            ),
            53 => 
            array (
                'created_at' => '2020-07-31 16:17:47',
                'id' => 131,
                'ind_players' => 2,
                'status' => 'In Progress',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'cricket',
                'updated_at' => '2020-07-31 16:18:22',
            ),
            54 => 
            array (
                'created_at' => '2020-07-31 16:19:13',
                'id' => 132,
                'ind_players' => 1,
                'status' => 'In Progress',
                't1_players' => 0,
                't2_players' => 0,
                'type' => '501',
                'updated_at' => '2020-07-31 16:20:03',
            ),
            55 => 
            array (
                'created_at' => '2020-09-09 20:58:16',
                'id' => 133,
                'ind_players' => 2,
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'type' => '501',
                'updated_at' => '2020-09-09 21:26:21',
            ),
            56 => 
            array (
                'created_at' => '2020-09-09 21:28:31',
                'id' => 134,
                'ind_players' => 0,
                'status' => 'Completed',
                't1_players' => 2,
                't2_players' => 2,
                'type' => '501',
                'updated_at' => '2020-09-09 21:58:25',
            ),
            57 => 
            array (
                'created_at' => '2020-09-09 22:03:36',
                'id' => 135,
                'ind_players' => 0,
                'status' => 'Completed',
                't1_players' => 2,
                't2_players' => 2,
                'type' => 'cricket',
                'updated_at' => '2020-09-09 22:29:58',
            ),
            58 => 
            array (
                'created_at' => '2020-10-13 21:55:18',
                'id' => 137,
                'ind_players' => 3,
                'status' => 'New',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'around',
                'updated_at' => '2020-10-13 21:55:22',
            ),
            59 => 
            array (
                'created_at' => '2020-10-13 21:56:10',
                'id' => 138,
                'ind_players' => 4,
                'status' => 'New',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'baseball',
                'updated_at' => '2020-10-13 21:56:14',
            ),
            60 => 
            array (
                'created_at' => '2020-10-13 21:57:23',
                'id' => 139,
                'ind_players' => 3,
                'status' => 'New',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'castle',
                'updated_at' => '2020-10-13 21:57:30',
            ),
            61 => 
            array (
                'created_at' => '2020-10-31 21:35:44',
                'id' => 144,
                'ind_players' => 2,
                'status' => 'In Progress',
                't1_players' => 0,
                't2_players' => 0,
                'type' => '301',
                'updated_at' => '2021-01-20 21:02:25',
            ),
            62 => 
            array (
                'created_at' => '2021-01-01 10:30:55',
                'id' => 145,
                'ind_players' => 5,
                'status' => 'New',
                't1_players' => 0,
                't2_players' => 0,
                'type' => 'castle',
                'updated_at' => '2021-01-01 10:31:01',
            ),
        ));
        
        
    }
}