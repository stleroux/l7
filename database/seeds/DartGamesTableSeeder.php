<?php

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
                'id' => 68,
                'type' => '301',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 3,
                'created_at' => '2019-12-09 14:48:37',
                'updated_at' => '2019-12-10 11:58:58',
            ),
            1 => 
            array (
                'id' => 69,
                'type' => '301',
                'status' => 'Completed',
                't1_players' => 2,
                't2_players' => 2,
                'ind_players' => 0,
                'created_at' => '2019-12-09 14:49:22',
                'updated_at' => '2019-12-10 12:25:29',
            ),
            2 => 
            array (
                'id' => 70,
                'type' => '301',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2019-12-09 16:18:32',
                'updated_at' => '2019-12-09 18:26:16',
            ),
            3 => 
            array (
                'id' => 71,
                'type' => '301',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2019-12-09 21:24:13',
                'updated_at' => '2019-12-09 21:32:01',
            ),
            4 => 
            array (
                'id' => 72,
                'type' => '301',
                'status' => 'In Progress',
                't1_players' => 2,
                't2_players' => 2,
                'ind_players' => 0,
                'created_at' => '2019-12-10 16:24:02',
                'updated_at' => '2019-12-10 16:26:42',
            ),
            5 => 
            array (
                'id' => 73,
                'type' => '301',
                'status' => 'Completed',
                't1_players' => 3,
                't2_players' => 3,
                'ind_players' => 0,
                'created_at' => '2019-12-10 16:27:39',
                'updated_at' => '2019-12-10 21:38:04',
            ),
            6 => 
            array (
                'id' => 74,
                'type' => '301',
                'status' => 'In Progress',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2019-12-10 21:40:11',
                'updated_at' => '2019-12-11 02:33:05',
            ),
            7 => 
            array (
                'id' => 75,
                'type' => '301',
                'status' => 'In Progress',
                't1_players' => 2,
                't2_players' => 2,
                'ind_players' => 0,
                'created_at' => '2019-12-12 01:06:39',
                'updated_at' => '2019-12-12 01:07:00',
            ),
            8 => 
            array (
                'id' => 76,
                'type' => '301',
                'status' => 'In Progress',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2019-12-12 01:13:59',
                'updated_at' => '2019-12-12 01:14:20',
            ),
            9 => 
            array (
                'id' => 77,
                'type' => 'cricket',
                'status' => 'New',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2019-12-31 14:41:46',
                'updated_at' => '2019-12-31 14:41:49',
            ),
            10 => 
            array (
                'id' => 79,
                'type' => 'cricket',
                'status' => 'In Progress',
                't1_players' => 3,
                't2_players' => 3,
                'ind_players' => 0,
                'created_at' => '2020-01-05 03:21:09',
                'updated_at' => '2020-02-02 01:06:21',
            ),
            11 => 
            array (
                'id' => 80,
                'type' => 'cricket',
                'status' => 'In Progress',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 1,
                'created_at' => '2020-01-05 03:25:16',
                'updated_at' => '2020-02-02 01:04:57',
            ),
            12 => 
            array (
                'id' => 83,
                'type' => '301',
                'status' => 'New',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-03-25 18:18:53',
                'updated_at' => '2020-03-25 18:18:57',
            ),
            13 => 
            array (
                'id' => 84,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-03-25 18:20:36',
                'updated_at' => '2020-03-25 18:43:08',
            ),
            14 => 
            array (
                'id' => 85,
                'type' => '501',
                'status' => 'Completed',
                't1_players' => 2,
                't2_players' => 2,
                'ind_players' => 0,
                'created_at' => '2020-03-25 18:44:19',
                'updated_at' => '2020-03-25 19:04:48',
            ),
            15 => 
            array (
                'id' => 86,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 3,
                'created_at' => '2020-03-25 19:06:01',
                'updated_at' => '2020-03-25 19:32:49',
            ),
            16 => 
            array (
                'id' => 87,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-03-25 19:33:11',
                'updated_at' => '2020-03-25 19:48:22',
            ),
            17 => 
            array (
                'id' => 88,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-03-25 19:49:01',
                'updated_at' => '2020-03-25 20:06:12',
            ),
            18 => 
            array (
                'id' => 90,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-03-26 18:02:36',
                'updated_at' => '2020-03-26 18:26:01',
            ),
            19 => 
            array (
                'id' => 91,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-03-26 18:26:10',
                'updated_at' => '2020-03-26 18:35:12',
            ),
            20 => 
            array (
                'id' => 92,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-03-26 18:35:19',
                'updated_at' => '2020-03-26 18:49:03',
            ),
            21 => 
            array (
                'id' => 93,
                'type' => '501',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-03-26 18:49:12',
                'updated_at' => '2020-03-26 19:03:21',
            ),
            22 => 
            array (
                'id' => 94,
                'type' => '501',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-03-26 19:03:29',
                'updated_at' => '2020-03-26 19:31:41',
            ),
            23 => 
            array (
                'id' => 95,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-03-26 19:32:00',
                'updated_at' => '2020-03-26 19:44:17',
            ),
            24 => 
            array (
                'id' => 96,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-03-26 19:44:26',
                'updated_at' => '2020-03-26 19:53:52',
            ),
            25 => 
            array (
                'id' => 97,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-03-26 19:53:59',
                'updated_at' => '2020-03-26 20:02:41',
            ),
            26 => 
            array (
                'id' => 98,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-03-27 21:21:27',
                'updated_at' => '2020-03-27 21:40:29',
            ),
            27 => 
            array (
                'id' => 99,
                'type' => '501',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-03-27 21:40:37',
                'updated_at' => '2020-03-27 21:57:22',
            ),
            28 => 
            array (
                'id' => 100,
                'type' => '501',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 3,
                'created_at' => '2020-03-30 16:57:46',
                'updated_at' => '2020-03-30 17:25:21',
            ),
            29 => 
            array (
                'id' => 104,
                'type' => '501',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 3,
                'created_at' => '2020-03-30 17:38:09',
                'updated_at' => '2020-03-30 17:59:10',
            ),
            30 => 
            array (
                'id' => 105,
                'type' => '501',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 3,
                'created_at' => '2020-03-30 17:59:20',
                'updated_at' => '2020-03-30 18:37:12',
            ),
            31 => 
            array (
                'id' => 106,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-03-30 18:37:54',
                'updated_at' => '2020-03-30 18:50:25',
            ),
            32 => 
            array (
                'id' => 108,
                'type' => '501',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-03-30 18:51:09',
                'updated_at' => '2020-03-30 19:17:52',
            ),
            33 => 
            array (
                'id' => 109,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-03-30 19:18:00',
                'updated_at' => '2020-03-30 19:35:14',
            ),
            34 => 
            array (
                'id' => 110,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 3,
                'created_at' => '2020-03-30 19:35:21',
                'updated_at' => '2020-03-30 19:53:49',
            ),
            35 => 
            array (
                'id' => 111,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 3,
                'created_at' => '2020-03-30 19:53:55',
                'updated_at' => '2020-03-30 20:14:23',
            ),
            36 => 
            array (
                'id' => 113,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-04-01 15:31:27',
                'updated_at' => '2020-04-01 15:51:07',
            ),
            37 => 
            array (
                'id' => 114,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-04-01 15:51:14',
                'updated_at' => '2020-04-01 16:00:00',
            ),
            38 => 
            array (
                'id' => 115,
                'type' => '501',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-04-01 16:00:07',
                'updated_at' => '2020-04-01 16:20:18',
            ),
            39 => 
            array (
                'id' => 116,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 3,
                'created_at' => '2020-04-02 00:13:36',
                'updated_at' => '2020-04-02 00:36:59',
            ),
            40 => 
            array (
                'id' => 117,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 3,
                'created_at' => '2020-04-02 00:37:05',
                'updated_at' => '2020-04-02 00:53:52',
            ),
            41 => 
            array (
                'id' => 119,
                'type' => '701',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 3,
                'created_at' => '2020-04-02 00:54:06',
                'updated_at' => '2020-04-02 01:16:51',
            ),
            42 => 
            array (
                'id' => 120,
                'type' => '301',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 3,
                'created_at' => '2020-04-02 01:19:10',
                'updated_at' => '2020-04-02 01:36:54',
            ),
            43 => 
            array (
                'id' => 121,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-04-03 20:13:20',
                'updated_at' => '2020-04-03 20:30:38',
            ),
            44 => 
            array (
                'id' => 122,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-04-03 20:30:47',
                'updated_at' => '2020-04-03 20:58:40',
            ),
            45 => 
            array (
                'id' => 123,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-04-03 20:58:46',
                'updated_at' => '2020-04-03 21:14:57',
            ),
            46 => 
            array (
                'id' => 124,
                'type' => '1001',
                'status' => 'Completed',
                't1_players' => 2,
                't2_players' => 2,
                'ind_players' => 0,
                'created_at' => '2020-04-03 21:15:37',
                'updated_at' => '2020-04-03 21:48:47',
            ),
            47 => 
            array (
                'id' => 125,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 5,
                'created_at' => '2020-04-05 00:22:26',
                'updated_at' => '2020-04-05 01:26:58',
            ),
            48 => 
            array (
                'id' => 126,
                'type' => '501',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 5,
                'created_at' => '2020-04-05 01:27:36',
                'updated_at' => '2020-04-05 02:09:37',
            ),
            49 => 
            array (
                'id' => 127,
                'type' => '701',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-05-16 01:34:06',
                'updated_at' => '2020-05-16 01:50:22',
            ),
            50 => 
            array (
                'id' => 128,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-05-16 01:51:17',
                'updated_at' => '2020-05-16 02:08:11',
            ),
            51 => 
            array (
                'id' => 129,
                'type' => '501',
                'status' => 'In Progress',
                't1_players' => 2,
                't2_players' => 2,
                'ind_players' => 0,
                'created_at' => '2020-07-28 20:47:14',
                'updated_at' => '2020-07-28 20:53:22',
            ),
            52 => 
            array (
                'id' => 130,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 3,
                'created_at' => '2020-07-28 21:36:05',
                'updated_at' => '2020-07-28 22:16:28',
            ),
            53 => 
            array (
                'id' => 131,
                'type' => 'cricket',
                'status' => 'In Progress',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-07-31 16:17:47',
                'updated_at' => '2020-07-31 16:18:22',
            ),
            54 => 
            array (
                'id' => 132,
                'type' => '501',
                'status' => 'In Progress',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 1,
                'created_at' => '2020-07-31 16:19:13',
                'updated_at' => '2020-07-31 16:20:03',
            ),
            55 => 
            array (
                'id' => 133,
                'type' => '501',
                'status' => 'Completed',
                't1_players' => 0,
                't2_players' => 0,
                'ind_players' => 2,
                'created_at' => '2020-09-09 20:58:16',
                'updated_at' => '2020-09-09 21:26:21',
            ),
            56 => 
            array (
                'id' => 134,
                'type' => '501',
                'status' => 'Completed',
                't1_players' => 2,
                't2_players' => 2,
                'ind_players' => 0,
                'created_at' => '2020-09-09 21:28:31',
                'updated_at' => '2020-09-09 21:58:25',
            ),
            57 => 
            array (
                'id' => 135,
                'type' => 'cricket',
                'status' => 'Completed',
                't1_players' => 2,
                't2_players' => 2,
                'ind_players' => 0,
                'created_at' => '2020-09-09 22:03:36',
                'updated_at' => '2020-09-09 22:29:58',
            ),
        ));
        
        
    }
}