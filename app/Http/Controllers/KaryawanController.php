<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = DB::table('karyawan')->get();
        return view('karyawan.index', compact('karyawan'));
    }

    public function detail($id)
    {
        $pk = DB::table('proyek_staff')->where('karyawan_id', $id)->first();
        $proyek = DB::table('proyek')->where('id', $pk->proyek_id)->first();
        $karyawan = DB::table('karyawan')->where('id', $pk->karyawan_id)->first();
        return view('karyawan.detail', compact(['proyek', 'karyawan']));
    }
}

