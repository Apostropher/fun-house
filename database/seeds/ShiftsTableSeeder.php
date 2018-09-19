<?php

use Illuminate\Database\Seeder;

class ShiftsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = new DateTime();

        DB::table('shifts')->insert([
            'staff_id' => App\Staff::where('first_name', StaffTableSeeder::STAFF_1_NAME)->first()->id,
            'rota_id' => 1,
            'start_time' => new DateTime('2018-09-17 09:00:00'),
            'end_time' => new DateTime('2018-09-17 17:00:00'),
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('shifts')->insert([
            'staff_id' => App\Staff::where('first_name', StaffTableSeeder::STAFF_1_NAME)->first()->id,
            'rota_id' => 1,
            'start_time' => new DateTime('2018-09-18 09:00:00'),
            'end_time' => new DateTime('2018-09-18 13:00:00'),
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('shifts')->insert([
            'staff_id' => App\Staff::where('first_name', StaffTableSeeder::STAFF_2_NAME)->first()->id,
            'rota_id' => 1,
            'start_time' => new DateTime('2018-09-18 13:00:00'),
            'end_time' => new DateTime('2018-09-18 17:00:00'),
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('shifts')->insert([
            'staff_id' => App\Staff::where('first_name', StaffTableSeeder::STAFF_3_NAME)->first()->id,
            'rota_id' => 1,
            'start_time' => new DateTime('2018-09-19 09:00:00'),
            'end_time' => new DateTime('2018-09-19 14:00:00'),
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('shifts')->insert([
            'staff_id' => App\Staff::where('first_name', StaffTableSeeder::STAFF_4_NAME)->first()->id,
            'rota_id' => 1,
            'start_time' => new DateTime('2018-09-19 12:00:00'),
            'end_time' => new DateTime('2018-09-19 17:00:00'),
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('shifts')->insert([
            'staff_id' => App\Staff::where('first_name', StaffTableSeeder::STAFF_3_NAME)->first()->id,
            'rota_id' => 1,
            'start_time' => new DateTime('2018-09-20 09:00:00'),
            'end_time' => new DateTime('2018-09-20 17:00:00'),
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('shifts')->insert([
            'staff_id' => App\Staff::where('first_name', StaffTableSeeder::STAFF_4_NAME)->first()->id,
            'rota_id' => 1,
            'start_time' => new DateTime('2018-09-20 09:00:00'),
            'end_time' => new DateTime('2018-09-20 17:00:00'),
            'created_at' => $date,
            'updated_at' => $date,
        ]);
    }
}
