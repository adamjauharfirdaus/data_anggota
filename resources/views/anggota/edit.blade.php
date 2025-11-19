@extends('layout')

@section('content')

<h4 class="text-center mb-4">Update Data Anggota</h4>
<form action="{{ route('anggota.update', $anggota->id) }}" method="POST">
    @csrf
    <label>Nama</label>
    <input type="text" name="nama" value="{{ $anggota->nama }}" class="form-control">
    <label>NIA</label>
    <input type="text" name="nia" value="{{ $anggota->nia }}" class="form-control">
    <label>Jurusan</label>
    <input type="text" name="jurusan" value="{{ $anggota->jurusan }}" class="form-control">
    <label>Semester</label>
    <input type="text" name="semester" value="{{ $anggota->semester }}" class="form-control">
    <label>Asal Kota</label>
    <input type="text" name="asal_kota" value="{{ $anggota->asal_kota }}" class="form-control">
    <div class="text-end me-3">

    <button class=" btn btn-primary">Update</button>
    </div>
</form>


@endsection