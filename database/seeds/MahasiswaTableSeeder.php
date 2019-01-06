<?php

use App\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matkuls = array(
            [
                'name' => 'Richie Permana',
                'email' => 'richie@oende.me',
                'password' => bcrypt('ngehebos123'),
            ],
            [
                'name' => 'Andika Putra Dinata',
                'email' => 'andik@oende.me',
                'password' => bcrypt('hellodita123'),
            ],
            [
                'name' => 'Ary Radityzzxxx',
                'email' => 'ary@oende.me',
                'password' => bcrypt('aryraditz123'),
            ]
        );

        foreach ($matkuls as $matkul) {
            Mahasiswa::create(['name' => $matkul['name'], 'email' => $matkul['email'], 'password' => $matkul['password']]);
        }
    }
}
