<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
            DB::table("mahasiswa")->insert([
            "nama_mahasiswa" => "Marcek",
            "nim_mahasiswa" => 872356463,
            "jurusan" => "Teknik Informatika",
            "created_at" => $timestamp,
            "updated_at" => $timestamp
        ]);
    }
}
