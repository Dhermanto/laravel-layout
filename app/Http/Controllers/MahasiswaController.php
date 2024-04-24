<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        return view('mahasiswa.index');
    }

    public function create() {
        return view('mahasiswa.create');
    }

    public function store(Request $request) {
        return redirect()->back()->with('error', 'Data mahasiswa gagal disimpan');
        return redirect()->route('mahasiswa.index')->with('error', 'Data mahasiswa berhasil disimpan');
    }
}
