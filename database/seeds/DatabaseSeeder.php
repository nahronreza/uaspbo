<?php

use App\sysuser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        sysuser::insert([
            'uname' => 'reza',
            'namalengkap' => 'nahron reza',
            'email' => 'nahronreza@gmail.com',
            'upass' => sha1('reza123')
        ]);
    }
}
