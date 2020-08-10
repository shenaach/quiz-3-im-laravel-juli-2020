@extends('layouts/master')
@section('content')
    <ul>
        <li>Nama Proyek : {{ $proyek->nama_proyek }}</li>
        <li>Jabaran : {{ $karyawan->jabatan }}</li>
    </ul>
@endsection

