<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           'name' => 'Alan Dantas',
           'role_id'=> '1',
           'cpf' => '37452565819',
            'email'=> 'admin@mail.com',
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'Angel Dantas',
            'role_id'=> '2',
            'cpf' => '13381423053',
            'email'=> 'angel@mail.com',
            'password' => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'Rita Dantas',
            'role_id'=> '3',
            'cpf' => '978.307.610-86',
            'email'=> 'rita@mail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
