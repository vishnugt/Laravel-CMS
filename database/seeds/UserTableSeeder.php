<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
        	[
        		'name' => "VishnuGt",
        		'email'=> "vishnugt@hotmail.com",
        		'password'=> bcrypt('vishnugt')
        	],
        	[
        		'name' => "VishnuGt",
        		'email'=> "vishnugt@gmail.com",
        		'password'=> bcrypt('vishnugt')
        	]
        ]);

    }
}
