<?php

namespace Database\Seeders;

use App\Models\Kabupaten;
use App\Models\Provinsi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenerateKabProv extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinsi = [
            'Jawa Timur',
            'Jawa Barat',
            'Jawa Tengah',
            'Jakarta',
            'Kalimantan Timur',
            'Kalimantan Barat'
        ];
        foreach($provinsi as $row) {
            Provinsi::create([
                'nm_prov' => $row
            ]);
        }
        $kabupaten = [
            [
                'prov_id' => 1,
                'kode_kab' => '11',
                'nm_kab' => 'Sumenep',
            ],
            [
                'prov_id' => 1,
                'kode_kab' => '12',
                'nm_kab' => 'Pamekasan',
            ],
            [
                'prov_id' => 2,
                'kode_kab' => '13',
                'nm_kab' => 'Semarang',
            ],
        ];

        foreach($kabupaten as $row) {
            Kabupaten::create($row);
        }
    }
}
