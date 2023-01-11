<?php

namespace Database\Seeders;

use App\Models\Jenjang;
use App\Models\Sekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MakeJenjangSekolah extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenjang = [
            'TK',
            'SD',
            'SMP',
            'SMA',
            'SMK',
            'Perguruan Tinggi'
        ];
        foreach ($jenjang as $row) {
            Jenjang::create([
                'nm_jenjang' => $row
            ]);
        }

        $sekolah = [
            [
                'jenjang_id' => 1,
                'kab_id' => 1,
                'prov_id' => 1,
                'npsn' => 122322,
                'no_registrasi' => '122H234',
                'nm_yayasan' => 'SMK Maarif',
                'thn_berdiri' => 2020,
                'telp' => '08234322223',
                'email' => 'smkmaarif@gmail.com',
                'kecamatan' => 'Banyusari',
                'alamat' => 'Jl. Adirasa no.14',
                'bhpnu' => 'no'
            ],
            [
                'jenjang_id' => 2,
                'kab_id' => 1,
                'prov_id' => 1,
                'npsn' => 124322,
                'no_registrasi' => '122J234',
                'nm_yayasan' => 'SMA Maarif',
                'thn_berdiri' => 2020,
                'telp' => '08234322213',
                'email' => 'smamaarif@gmail.com',
                'kecamatan' => 'Grogol',
                'alamat' => 'Jl. Tirta no.12',
                'bhpnu' => 'no'
            ],
        ];
        foreach ($sekolah as $row) {
            Sekolah::create($row);
        }
    }
}
