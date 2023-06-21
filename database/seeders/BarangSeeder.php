<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   

        $data = [
            [
            "nama"=>"Komputer Mac",
            "jumlah"=>"30"
        ],
        [
            "nama"=>"TV Samsung",
            "jumlah"=>"1"
        ],
        [
            "nama"=>"Kamera Video Confrence",
            "jumlah"=>"1"
        ],
        [
            "nama"=>"TV LG",
            "jumlah"=>"1"
        ],
        [
            "nama"=>"Godox SL60W LED Video Light",
            "jumlah"=>"1"
        ],
        [
            "nama"=>"Godox Dp600W LED Video Light",
            "jumlah"=>"2"
        ],
        [
            "nama"=>"FhotoPlus Fhotobox with led 60cm x 60cm studio mini",
            "jumlah"=>"2"
        ],
        [
            "nama"=>"Keybord Pa 700 Profesional Arrangger",
            "jumlah"=>"1"
        ],
        [
            "nama"=>"Wacom citiq Pro",
            "jumlah"=>"1"
        ],
        [
            "nama"=>"Wacom Intous Pro",
            "jumlah"=>"25"
        ],
        [
            "nama"=>"Intel Nuc i5",
            "jumlah"=>"1"
        ],
        [
            "nama"=>"Link Backdrop baground kertas 3 bar",
            "jumlah"=>"1"
        ],
        [
            "nama"=>"Standing background",
            "jumlah"=>"1"
        ],
        [
            "nama"=>"Kai Wisuda",
            "jumlah"=>"2"
        ],
        [
            "nama"=>"Gimbal Stangbilizer kamera zhiyun",
            "jumlah"=>"1"
        ],
        [
            "nama"=>"Scarlet Solo Studio",
            "jumlah"=>"1"
        ],
        [
            "nama"=>"Ups Apc",
            "jumlah"=>"30"
        ],
        [
            "nama"=>"Printer Epson L1455",
            "jumlah"=>"1"
        ],
        [
            "nama"=>"Printer Epson L1455",
            "jumlah"=>"1"
        ],
        [
            "nama"=>"Printer Epson L485",
            "jumlah"=>"1"
        ],
        [
            "nama"=>"Kamera Sony",
            "jumlah"=>"1"
        ],
        [
            "nama"=>"Kamera Nikon",
            "jumlah"=>"1"
        ],
        [
            "nama"=>"Kamera Gopro Hero 9",
            "jumlah"=>"1"
        ],
        [
            "nama"=>"Kamera Insta 360",
            "jumlah"=>"1"
        ],
        [
            "nama"=>"kamera camcorder sony",
            "jumlah"=>"1"
        ],
        [
            "nama"=>"kamera camcorder sony",
            "jumlah"=>"1"
        ],
        [
            "nama"=>"kamera camcorder sony",
            "jumlah"=>"1"
        ],
        [
            "nama"=>"kamera camcorder sony",
            "jumlah"=>"1"
        ],

        ]
        foreach ($data as $value) {
             DB::table('barang')->insert($value);
        }
       
    }
}
