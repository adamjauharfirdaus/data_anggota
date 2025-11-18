@extends('layout')

@section('content')

<h4 class="text-center mb-4">Tambah Anggota</h4>
<form action="{{ route('add_submit') }}" method="POST">
    @csrf
    <label>Nama</label>
    <input type="text" name="nama" class="form-control">
    <label>NIA</label>
    <input type="text" name="nia" class="form-control">
    <label>Jurusan</label>
    <input type="text" name="jurusan" class="form-control">
    <label>Semester</label>
    <input type="text" name="semester" class="form-control">
    <label>Asal Kota</label>
    <input type="text" name="asal_kota" class="form-control">
    <div class="text-end me-3">

    <button class=" btn btn-primary">Tambahkan</button>
    </div>
</form>


@endsection