<?php

use Illuminate\Database\Seeder;

class RotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = new DateTime();

        DB::table('rotas')->insert([
            'week_commence_date' => new DateTime('2018-09-17'),
            'shop_id' => 1,
            'created_at' => $date,
            'updated_at' => $date,
        ]);
    }
}
