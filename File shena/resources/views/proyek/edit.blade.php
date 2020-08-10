@extends('layouts/master')
@section('content')
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Data Proyek</h1>
    </div>
    <form class="user" action="{{ url('/proyek/'.$proyek->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <input type="text" class="form-control form-control-user" placeholder="Masukan Nama proyek" name="nama_proyek" value="{{ $proyek->nama_proyek }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" placeholder="Masukan Deskripsi" name="deskripsi" value="{{ $proyek->deskripsi }}">
        </div>
        <div class="form-group">
            <input type="date" class="form-control form-control-user" placeholder="Masukan Tanngal Mulai" name="tanggal_mulai" value="{{ $proyek->tanggal_mulai }}">
        </div>
        <div class="form-group">
            <input type="date" class="form-control form-control-user" placeholder="Masukan Tanngal Deadline" name="tanggal_deadline" value="{{ $proyek->tanggal_deadline }}">
        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">Input</button>
    </form>
</div>
@endsection

