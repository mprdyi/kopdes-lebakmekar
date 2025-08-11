@extends('layout.app')
@section('title', 'Tambah Jenis Surat')
@section('content')
<div class="container-fluid">
    <div class="card p-3">
        <h3 class="font-weight-bold">Tambah Jenis Surat</h3>
        <div class="from-group">
            <form action="{{ url('tambah-jenis-surat') }}" method="POST">
                @csrf
            <label for="Kode surat" class="from-control"> Kode Surat</label>
            <input type="text" class="form-control" name="kode-surat">
            @error('kode-surat')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="Kode surat" class="from-control"> Jenis Surat</label>
            <input type="text" class="form-control" name="jenis-surat">
            @error('jenis-surat')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="Kode surat" class="from-control"> Nama Surat</label>
            <input type="text" class="form-control" name="nama-surat">
            @error('nama-surat')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary mt-3 mb-3">Simpan</button>
            </form>
            <a href="{{ url('jenis-surat') }}"><< Kembali >></a>
        </div>
    </div>
</div>


@endsection
