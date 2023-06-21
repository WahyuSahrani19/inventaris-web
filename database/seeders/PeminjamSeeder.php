<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeminjamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
            "nomor_identitas"=>"1615015166",
            "nama"=>"Annasya Syntha Ambira",
            "alamat"=>"Jl.Parapatan",
            "status"=>"Mahasiwa",
            "no_telp"=>"082256328912"
            ],
            [
            "nomor_identitas"=>"1615015169",
            "nama"=>"Alifia Rosita",
            "alamat"=>"Jl.Pramuka No.12",
            "status"=>"Mahasiswa",
            "no_telp"=>"081285234124"
            ],
            [
            "nomor_identitas"=>"1615015172",
            "nama"=>"Wahyu Sahrani",
            "alamat"=>"Jl.Perjuangan 3",
            "status"=>"Mahasiswa",
            "no_telp"=>"082240524376"
            ],
            [
            "nomor_identitas"=>"1615015184",
            "nama"=>"Gandhi Dwi Laksono",
            "alamat"=>"Jl.M.said Gg.Ramania II",
            "status"=>"Mahasiswa",
            "no_telp"=>"089841564123"
            ],
            [
            "nomor_identitas"=>"1615015204",
            "nama"=>"Ranov Gilbert Simamora",
            "alamat"=>"Cipto Mangunkusumo, Perum Bukit Pinang Bahari Blok B5",
            "status"=>"Mahasiswa",
            "no_telp"=>"082155360919"
            ],
            [
            "nomor_identitas"=>"197312292005011002",
            "nama"=>"Awang Harsa Kridalaksana, M. Kom",
            "alamat"=>"Jl.Gunung Kelua",
            "status"=>"Dosen",
            "no_telp"=>"082112341229"
            ],
            [
            "nomor_identitas"=>"198105062005012002",
            "nama"=>"Indah Fitri Astuti, M. Cs",
            "alamat"=>"Jl.Gunung Kelua 2",
            "status"=>"Dosen",
            "no_telp"=>"085250121280"
            ]
        ];
        foreach ($data as $value) {
             DB::table('peminjam')->insert($value);
        }
    }
}
