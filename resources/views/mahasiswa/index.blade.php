@extends('layout_bootstrap.master')
@section('title', 'Data Mahasiswa')
@section('css')
@endsection
@section('content')

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Data Mahasiswa</h1>
        <a href="{{route('mahasiswa.create')}}" class="btn btn-dark">Tambah Data</a>
    </div>
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

    <table class="table table-dark table-striped mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
@section('js')
@endsection