<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProyekController extends Controller
{
    public function index()
    {
        $proyek = DB::table('proyek')->get();
        return view('proyek.index', compact('proyek'));
    }

    public function create()
    {
        return view('proyek.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_proyek' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_deadline' => 'required|date',
        ]);
        DB::table('proyek')->insert([
            'nama_proyek' => $request->nama_proyek,
            'deskripsi' => $request->deskripsi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_deadline' => $request->tanggal_deadline,
            'status' => 0,
        ]);
        return redirect(url('/proyek'))->with('status', 'Data Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $karyawan = DB::table('karyawan')->get();
        $proyek = DB::table('proyek')->where('id', $id)->first();
        return view('proyek.show', compact(['proyek', 'karyawan']));
    }

    public function inputstaff(Request $request, $id)
    {
        DB::table('proyek_staff')->insert([
            'proyek_id' => $id,
            'karyawan_id' => $request->karyawan_id
        ]);
        return redirect(url('/proyek'))->with('status', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $proyek = DB::table('proyek')->where('id', $id)->first();
        return view('proyek.edit', compact('proyek'));
    }

    public function update(Request $request, $id)
    {
        DB::table('proyek')->where('id', $id)->update([
            'nama_proyek' => $request->nama_proyek,
            'deskripsi' => $request->deskripsi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_deadline' => $request->tanggal_deadline,
        ]);
        return redirect(url('/proyek'))->with('status', 'Data Berhasil Dihperbaharui');
    }

    public function destroy($id)
    {
        DB::table('proyek')->where('id', $id)->delete();
        return redirect(url('/proyek'))->with('status', 'Data Berhasil Dihapus');
    }
}

