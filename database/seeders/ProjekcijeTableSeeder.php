<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjekcijeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projekcijas')->insert(
            [
                ['vreme' => '2021-02-17', 'sala' => 'sala b103', 'cena' => 120, 'film_id' => '1'],
                ['vreme' => '2021-02-10', 'sala' => 'sala 015', 'cena' => 320, 'film_id' => '2']
            ]
        );
    }
}
