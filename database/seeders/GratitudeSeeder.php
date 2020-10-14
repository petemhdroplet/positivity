<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GratitudeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gratitudes')->insert([
            'name' => 'Digital Ocean',
            'description' => 'Platform as a service saves me time',
        ]);

        DB::table('gratitudes')->insert([
            'name' => 'Vue',
            'description' => 'MVVM is much better than jQuery',
        ]);

        DB::table('gratitudes')->insert([
            'name' => 'Halloween',
            'description' => 'I can finally wear my ghostbuster uniform',
        ]);
    }
}
