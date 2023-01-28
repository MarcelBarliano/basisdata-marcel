<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
        DB::table("dosen")->insert([
            "nama_dosen" => "Jefry Sunupurwa Asri",
            "kd_dosen" => 987654321,
            "matakuliah" => "Basis data",
            "created_at" => $timestamp,
            "updated_at" => $timestamp
        ]);
    }
}
