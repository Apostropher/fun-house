<?php

use Illuminate\Database\Seeder;

class ShiftBreaksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shift_breaks')->insert([
            'shift_id' => 6,
            'start_time' => new DateTime('2018-09-20 12:00:00'),
            'end_time' => new DateTime('2018-09-20 13:00:00'),
        ]);

        DB::table('shift_breaks')->insert([
            'shift_id' => 7,
            'start_time' => new DateTime('2018-09-20 14:00:00'),
            'end_time' => new DateTime('2018-09-20 15:00:00'),
        ]);
    }
}
