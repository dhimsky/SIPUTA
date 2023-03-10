<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\mahasiswa;

class DataMahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa = [
            [
            'nim' => '210202031',
            'nama' => 'Dhimas Afrisetiawan',
            'jurusan' => 'Teknik Informatika',
            'semester' => '4',
            'nohp' => '089678762312',
            'alamat' => 'Jalan Melati'
            ],
            [
            'nim' => '210202033',
            'nama' => 'Dito Ardi Pratama',
            'jurusan' => 'Teknik Informatika',
            'semester' => '4',
            'nohp' => '089678762317',
            'alamat' => 'Jalan Bromo'
            ],
            [
            'nim' => '210202035',
            'nama' => 'Fajri Ikmal Ghozali',
            'jurusan' => 'Teknik Informatika',
            'semester' => '4',
            'nohp' => '089678762313',
            'alamat' => 'Jalan Protokol'
            ],
            [
            'nim' => '210202036',
            'nama' => 'Galang Wijonarko',
            'jurusan' => 'Teknik Informatika',
            'semester' => '4',
            'nohp' => '089678762311',
            'alamat' => 'Jalan Singkep'
            ],
            [
            'nim' => '210302041',
            'nama' => 'Masreyvan Ahmad fadhilah',
            'jurusan' => 'Teknik Informatika',
            'semester' => '4',
            'nohp' => '089678762310',
            'alamat' => 'Jalan Jawa'
            ],
            [
            'nim' => '210202044',
            'nama' => 'Rifky Pramudya',
            'jurusan' => 'Teknik Informatika',
            'semester' => '4',
            'nohp' => '089678762316',
            'alamat' => 'Jalan Duwet'
            ],
            [
            'nim' => '210202048',
            'nama' => 'Willy Devin Aufa Amanulloh',
            'jurusan' => 'Teknik Informatika',
            'semester' => '4',
            'nohp' => '089678762345',
            'alamat' => 'Jalan Rusak'
            ],
            [
            'nim' => '210202037',
            'nama' => 'Galuh Trizahranti Purweni',
            'jurusan' => 'Teknik Informatika',
            'semester' => '4',
            'nohp' => '089678762390',
            'alamat' => 'Jalan Kalimantan'
            ],
            [
            'nim' => '210202040',
            'nama' => 'Kirei vetoryma',
            'jurusan' => 'Teknik Informatika',
            'semester' => '4',
            'nohp' => '089678762387',
            'alamat' => 'Jalan Sulawesi'
            ],
            [
            'nim' => '210302029',
            'nama' => 'Budi Utami',
            'jurusan' => 'Teknik Informatika',
            'semester' => '4',
            'nohp' => '089678762355',
            'alamat' => 'Jalan Barat'
            ],
            [
            'nim' => '210302034',
            'nama' => 'Ega Nurriana',
            'jurusan' => 'Teknik Informatika',
            'semester' => '4',
            'nohp' => '089678762323',
            'alamat' => 'Jalan Timur'
            ],
        ];
        foreach($mahasiswa as $key => $value){
            mahasiswa::create($value);
        }
    }
}