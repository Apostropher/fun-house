<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = new DateTime();

        DB::table('shops')->insert([
            'name' => 'FunHouse',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
    }
}
