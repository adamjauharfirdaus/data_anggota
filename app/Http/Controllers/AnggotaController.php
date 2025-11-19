<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    function index()
    {
        $anggota = Anggota::all();
        
        return view('anggota.index', compact('anggota'));
    }

    function add() {
    return view('anggota.add');
}

    function add_submit(Request $request) {
        $anggota = new Anggota();
        $anggota->nama = $request->nama;
        $anggota->nia = $request->nia;
        $anggota->jurusan = $request->jurusan;
        $anggota->semester = $request->semester;
        $anggota->asal_kota = $request->asal_kota;
        $anggota->save();

        return redirect()->route('anggota.index');
    }

    function edit($id) {
        $anggota = Anggota::find($id);
        return view('anggota.edit', compact('anggota'));
    }
    function update(Request $request, $id) {
        $anggota = Anggota::find($id);
        $anggota->nama = $request->nama;
        $anggota->nia = $request->nia;
        $anggota->jurusan = $request->jurusan;
        $anggota->semester = $request->semester;
        $anggota->asal_kota = $request->asal_kota;
        $anggota->update();

        return redirect()->route('anggota.index');
    }


    function delete(Request $request, $id)    {
        $anggota = Anggota::find($id);
        $anggota->delete();

        return redirect()->route('anggota.index');
    }
}
