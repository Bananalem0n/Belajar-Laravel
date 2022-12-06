<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function getguru(){

        $user = DB::select('SELECT * FROM guru');

        return response()->json([
            "status" => "success to retrieve data",
            "data" => $user
        ]);

    }

    public function getsiswa(){

        $user = DB::select('SELECT * FROM siswa');

        return response()->json([
            "status" => "success to retrieve data",
            "data" => $user
        ]);

    }

    public function getkelas(){

        $user = DB::select('SELECT * FROM kelas');

        return response()->json([
            "status" => "success to retrieve data",
            "data" => $user
        ]);

    }

    public function getmengajar(){

        $user = DB::select('SELECT * FROM mengajar');

        return response()->json([
            "status" => "success to retrieve data",
            "data" => $user
        ]);

    }

    public function getmapel(){

        $user = DB::select('SELECT * FROM mapel');

        return response()->json([
            "status" => "success to retrieve data",
            "data" => $user
        ]);

    }

    public function getorangtua(){

        $user = DB::select('SELECT * FROM orang_tua');

        return response()->json([
            "status" => "success to retrieve data",
            "data" => $user
        ]);

    }
}
