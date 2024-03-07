<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'berlinderadmin',
            'email' => 'berliner@gmail.com',
            'password' => Hash::make('104Ejvl^B141bZ$'),
        ]);
    }
}
