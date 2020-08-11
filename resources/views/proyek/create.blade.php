@extends('layouts/master')
@section('content')
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Data Proyek</h1>
    </div>
    <form class="user" action="{{ url('/proyek') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control form-control-user" placeholder="Masukan Nama proyek" name="nama_proyek" value="{{ old('nama_proyek') }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" placeholder="Masukan Deskripsi" name="deskripsi" value="{{ old('deskripsi') }}">
        </div>
        <div class="form-group">
            <input type="date" class="form-control form-control-user" placeholder="Masukan Tanngal Mulai" name="tanggal_mulai" value="{{ old('tanggal_mulai') }}">
        </div>
        <div class="form-group">
            <input type="date" class="form-control form-control-user" placeholder="Masukan Tanngal Deadline" name="tanggal_deadline" value="{{ old('tanggal_deadline') }}">
        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">Input</button>
    </form>
</div>
@endsection


