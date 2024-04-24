@extends('layout_bootstrap.master')
@section('title', 'Data Mahasiswa')
@section('css')
@endsection
@section('content')

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Tambah Mahasiswa</h1>
        <a href="{{route('mahasiswa.index')}}" class="btn btn-secondary">Kembali</a>
    </div>
    {{-- form --}}
    <div class="card">
        <div class="card-body">

            {{-- handle session --}}
            @if (session('success'))
                <div class="alert alert-success mt-2">
                    {{session()->get('success')}}
                </div>
            @elseif (session('error'))
                <div class="alert alert-danger mt-2">
                    {{session()->get('error')}}
                </div>
            @endif

            <form action="{{route('mahasiswa.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama Mahasiswa">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nim</label>
                    <input type="text" class="form-control" name="nim" placeholder="Nim Mahasiswa">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                    <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat Mahasiswa"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
@section('js')
@endsection