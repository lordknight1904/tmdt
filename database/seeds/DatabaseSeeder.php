<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('ConferSeeder');
        $this->call(TinhTranghdTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}


