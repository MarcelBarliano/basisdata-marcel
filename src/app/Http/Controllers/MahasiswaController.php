<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Carbon\Carbon;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $koneksi = DB::connection("mysql")->table("mahasiswa")->get();
        return response()->json($koneksi,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
        $this->validate($request,[
            "nama_mahasiswa" => "required",
            "nim_mahasiswa" => "required",
            "jurusan" => "required"
            
        ]);
        $request["created_at"] = $timestamp;
        $request["updated_at"] = $timestamp;
        $koneksi = DB::connection("mysql")->table("mahasiswa")->insert($request->all());
        return response()->json("data berhasil di insert!",200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $koneksi = DB::connection("mysql")->table("mahasiswa")->find($id);
        if ($koneksi == NULL){
            return response()->json("data pada id = $id, tidak ada!",404);
        }else{
            return response()->json($koneksi,200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $koneksi = DB::connection("mysql")->table("mahasiswa")->where("id",$id)->get();
        return response()->json("edit $koneksi",200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $query = DB::connection("mysql")->table("toko")->find($id);
        if ($query == NULL) {
            return response()->json("data yg mau diupdate kosong!", 404);
        } else {
            $timestamp = \Carbon\Carbon::now()->toDateTimeString();
            $request["updated_at"] = $timestamp;
            $query = DB::connection("mysql")->table("toko")->where("id", $id)->update($request->all());
            return response()->json("data berhasil diubah!", 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $koneksi = DB::connection("mysql")->table("mahasiswa")->find($id);
        if ($koneksi == NULL){
            return response()->json("data pada id = $id, memang sudah tidak ada!",404);
        }else{
            $koneksi = DB::connection("mysql")->table("mahasiswa");
            $koneksi->find($id);
            $koneksi->delete($id);
            return response()->json("data pada id = $id, berhasil di delete!",200);
        }
    }
}