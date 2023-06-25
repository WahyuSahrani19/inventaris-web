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
            "jumlah"=>30
        ],
        [
            "nama"=>"TV Samsung",
            "jumlah"=>1
        ],
        [
            "nama"=>"Kamera Video Confrence",
            "jumlah"=>1
        ],
        [
            "nama"=>"TV LG",
            "jumlah"=>1
        ],
        [
            "nama"=>"Godox SL60W LED Video Light",
            "jumlah"=>1
        ],
        [
            "nama"=>"Godox Dp600W LED Video Light",
            "jumlah"=>2
        ],
        [
            "nama"=>"FhotoPlus Fhotobox with led 60cm x 60cm studio mini",
            "jumlah"=>2
        ],
        [
            "nama"=>"Keybord Pa 700 Profesional Arrangger",
            "jumlah"=>1
        ],
        [
            "nama"=>"Wacom citiq Pro",
            "jumlah"=>1
        ],
        [
            "nama"=>"Wacom Intous Pro",
            "jumlah"=>25
        ],
        [
            "nama"=>"Intel Nuc i5",
            "jumlah"=>1
        ],
        [
            "nama"=>"Link Backdrop baground kertas 3 bar",
            "jumlah"=>1
        ],
        [
            "nama"=>"Standing background",
            "jumlah"=>1
        ],
        [
            "nama"=>"Kain Wisuda",
            "jumlah"=>2
        ],
        [
            "nama"=>"Gimbal Stangbilizer kamera zhiyun",
            "jumlah"=>1
        ],
        [
            "nama"=>"Scarlet Solo Studio",
            "jumlah"=>1
        ],
        [
            "nama"=>"Ups Apc",
            "jumlah"=>30
        ],
        [
            "nama"=>"Printer Epson L1455",
            "jumlah"=>1
        ],
        [
            "nama"=>"Printer Epson L1455",
            "jumlah"=>1
        ],
        [
            "nama"=>"Printer Epson L485",
            "jumlah"=>1
        ],
        [
            "nama"=>"Kamera Sony",
            "jumlah"=>1
        ],
        [
            "nama"=>"Kamera Nikon",
            "jumlah"=>1
        ],
        [
            "nama"=>"Kamera Gopro Hero 9",
            "jumlah"=>1
        ],
        [
            "nama"=>"Kamera Insta 360",
            "jumlah"=>1
        ],
        [
            "nama"=>"Kamera camcorder sony",
            "jumlah"=>1
        ],
        [
            "nama"=>"Drone Dji Mvic Mini",
            "jumlah"=>2
        ],
        [
            "nama"=>"Drone Dji 4 Pro",
            "jumlah"=>1
        ],
        [
            "nama"=>"Baterai Nikon",
            "jumlah"=>2
        ],
        [
            "nama"=>"Baterai Sony",
            "jumlah"=>2
        ],
        [
            "nama"=>"Baterai Dji 4 Pro",
            "jumlah"=>2
        ],
        [
            "nama"=>"Baterai Dji Mvic Mini",
            "jumlah"=>4
        ],
        [
            "nama"=>"Baterai Camcorder Sony",
            "jumlah"=>3
        ],
        [
            "nama"=>"Lighting Nissin Digital Di600",
            "jumlah"=>1
        ],
        [
            "nama"=>"Lensa Kamera Nikon",
            "jumlah"=>4
        ],
        [
            "nama"=>"Lensa Kamera Sony",
            "jumlah"=>3
        ],
        [
            "nama"=>"Fm Radio Triger",
            "jumlah"=>1
        ],
        [
            "nama"=>"Tripod Beiki",
            "jumlah"=>2
        ],
        [
            "nama"=>"Tripod Manfrotto",
            "jumlah"=>1
        ],
        [
            "nama"=>"Tripod Camcorder Libec",
            "jumlah"=>1
        ],
        [
            "nama"=>'Libec TH-Z S8 Fluid Head, Tripod, 33" Slider & Carry Case Kit',
            "jumlah"=>1
        ],
        [
            "nama"=>"Hub Dlink 28 port",
            "jumlah"=>2
        ],
        [
            "nama"=>"Hub Dlink 24 port",
            "jumlah"=>2
        ],
        [
            "nama"=>"Wifi My Dlink",
            "jumlah"=>1
        ],
        [
            "nama"=>"Tas Kamera",
            "jumlah"=>1
        ],
        [
            "nama"=>"Vr Ocolus",
            "jumlah"=>1
        ],
        [
            "nama"=>"Saramonic",
            "jumlah"=>1
        ],
        [
            "nama"=>"Speaker Aura Studio Harman kardon",
            "jumlah"=>2
        ],
        [
            "nama"=>"Speaker Onyx Studio 5 Harman kardon",
            "jumlah"=>1
        ],
        [
            "nama"=>"Roland Mixer",
            "jumlah"=>1
        ],
        [
            "nama"=>"Thromex Rode Tiang Podcast",
            "jumlah"=>1
        ],
        [
            "nama"=>"Mic Rode",
            "jumlah"=>1
        ],
        [
            "nama"=>"Hendset Audio Tecica",
            "jumlah"=>2
        ],
        [
            "nama"=>"Handy Recorder H6",
            "jumlah"=>1
        ],
        [
            "nama"=>"Lemari dinding jaringan",
            "jumlah"=>1
        ],
        [
            "nama"=>"Jam dinding",
            "jumlah"=>1
        ]
    ];
        foreach ($data as $value) {
             DB::table('barang')->insert($value);
        }
       
    }
}
