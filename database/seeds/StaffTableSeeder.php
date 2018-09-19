<?php

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{
    const STAFF_1_NAME = 'Black Widow';
    const STAFF_2_NAME = 'Thor';
    const STAFF_3_NAME = 'Wolverine';
    const STAFF_4_NAME = 'Gamora';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = new DateTime();

        DB::table('staff')->insert([
            'first_name' => self::STAFF_1_NAME,
            'surname' => '',
            'shop_id' => 1,
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('staff')->insert([
            'first_name' => self::STAFF_2_NAME,
            'surname' => 'Odinson',
            'shop_id' => 1,
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('staff')->insert([
            'first_name' => self::STAFF_3_NAME,
            'surname' => '',
            'shop_id' => 1,
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('staff')->insert([
            'first_name' => self::STAFF_4_NAME,
            'surname' => '',
            'shop_id' => 1,
            'created_at' => $date,
            'updated_at' => $date,
        ]);
    }
}
