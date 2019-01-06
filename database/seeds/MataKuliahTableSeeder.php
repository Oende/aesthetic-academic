<?php

use App\MataKuliah;
use Illuminate\Database\Seeder;

class MataKuliahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matkuls = ['Kalkulus', 'Statistik', 'Skripsi'];

        foreach ($matkuls as $matkul) {
            MataKuliah::create(['name' => $matkul]);
        }
    }
}
