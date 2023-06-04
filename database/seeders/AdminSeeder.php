<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        DB::table('admins')->insert(array(
            0 => array(
                'name' => 'ChatUp',
                'email' => 'admin@chatup.com',
                'password' => bcrypt('12345678'),
                'is_dark' => 0,
                'image' => null
            )
        ));
    }
}
