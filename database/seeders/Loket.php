<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\loket_option;

class Loket extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode_loket'=>'A',
                'loket'=>'Loket A',
                'poli_tujuan'=>'Anak',
                'dokter'=>'senin'
            ],
            [
                'kode_loket'=>'A',
                'loket'=>'Loket A',
                'poli_tujuan'=>'Anak',
                'dokter'=>'selasa'
            ],
            [
                'kode_loket'=>'A',
                'loket'=>'Loket A',
                'poli_tujuan'=>'Imunisasi',
                'dokter'=>'rabu'
            ],
            [
                'kode_loket'=>'A',
                'loket'=>'Loket A',
                'poli_tujuan'=>'Imunisasi',
                'dokter'=>'kamis'
            ],
            [
                'kode_loket'=>'B',
                'loket'=>'Loket B',
                'poli_tujuan'=>'Gigi',
                'dokter'=>'jumat'
            ],
            [
                'kode_loket'=>'B',
                'loket'=>'Loket B',
                'poli_tujuan'=>'Gigi',
                'dokter'=>'Sabtu'
            ],
            [
                'kode_loket'=>'B',
                'loket'=>'Loket B',
                'poli_tujuan'=>'Jantung',
                'dokter'=>'Minggu'
            ],
            [
                'kode_loket'=>'B',
                'loket'=>'Loket B',
                'poli_tujuan'=>'Jantung',
                'dokter'=>'Senin'
            ]
        ];

        foreach($data as $input){
            loket_option::create($input);
        }
    }
}
