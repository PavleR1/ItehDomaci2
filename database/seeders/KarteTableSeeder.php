<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KarteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kartas')->insert(
            [
                ['ime' => 'Marko', 'prezime' => 'Markic', 'br_osoba' => 2, 'email' => 'markic@gmail.com', 'projekcija_id' => 1]
            ]
        );
    }
}
