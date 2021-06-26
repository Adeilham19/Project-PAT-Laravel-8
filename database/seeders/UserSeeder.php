<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'nama' => 'ade',
            'alamat' => 'bogor',
            'telpon' => '081234567890',
            'status' => 'aktif',
            'username' => 'ade',
            'password' => bcrypt('123'),
            'akses' => 'admin',
        ]);

        User::insert([
            'nama' => 'ilham',
            'alamat' => 'bogor',
            'telpon' => '081234567891',
            'status' => 'aktif',
            'username' => 'ilham',
            'password' => bcrypt('123'),
            'akses' => 'manager',
        ]);

        User::insert([
            'nama' => 'adeilham',
            'alamat' => 'bogor',
            'telpon' => '081234567891',
            'status' => 'aktif',
            'username' => 'adeilham',
            'password' => bcrypt('123'),
            'akses' => 'kasir',
        ]);

    }
}