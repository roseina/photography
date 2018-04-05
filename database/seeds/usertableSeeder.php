<?php

use Illuminate\Database\Seeder;

class usertableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
              'id' => 1,
              'name'=>'Subodh Ghimire',
              'username'=>'admin',
              'email'=>'fragnance.rose1@gmail.com',
              'password'=> bcrypt('admin123'),
            ]
        ]);
    }
}
