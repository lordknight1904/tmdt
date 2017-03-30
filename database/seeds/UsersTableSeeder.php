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
            'name' => 'admin',
            'email' => 'lordknight1904@gmail.com',
            'password' => '$2y$10$EdsgGQ71cORotRt6y49RY.a6tD8T0EUUP5P4HV4P/.6YSTsRFWno6',
            'loainguoidung_id' => '1',
            'visa' => '123456789',
        ]);
    }
}
