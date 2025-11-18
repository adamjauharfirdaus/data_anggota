@extends('layout')


@section('content')

<h4 class="text-center mb-4">Daftar Anggota</h4>
<table class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIA</th>
        <th>Jurusan</th>
        <th>Semester</th>
        <th>Asal Kota</th>
    </tr>

    @foreach ($anggota as $no=>$data)
        <tr>
           <td>{{ $no+1 }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->nia }}</td>
            <td>{{ $data->jurusan }}</td>
            <td>{{ $data->semester }}</td>
            <td>{{ $data->asal_kota }}</td>
        </tr>

    @endforeach
</table>

<div class="text-end">
    <a class="btn btn-success" href="{{ route('anggota.add') }}">Tambah Anggota</a>
</div>

@endsection