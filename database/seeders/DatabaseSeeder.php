<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'id'            =>  rand(1,20),
            'name'          =>  'bedrijfsnaam',
            'email'         =>  'bedrijfsemail',
            'address'       =>  'bedrijfsadres',
            'created_at'    =>  now(),
            'updated_at'    =>  now()
        ]);
    }
}
