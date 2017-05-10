<?php

use Illuminate\Database\Seeder;

class KhachHangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('khachhang')->insert([
            'khachhang_ten' => 'Ngô Anh Khoa',
            'khachhang_email' => 'admin@gmail.com',
            'khachhang_sdt' => '01219187548',
            'khachhang_dia_chi' => '110',
            'user_id' => '1',
        ]);
    }
}
