@extends('layouts/master')
@section('content')
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Data Proyek</h1>
    </div>
    <form class="user" action="{{ url('/proyek/'.$proyek->id.'/daftarkan-staff') }}" method="POST">
        @csrf
        <div class="form-group">
            <select name="karyawan_id" class="form-control">
                <option disabled selected>Pilih Karyawan</option>
                @foreach ($karyawan as $k)
                <option value="{{ $k->id }}">{{ $k->nama }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">Input</button>
    </form>
</div>
@endsection

