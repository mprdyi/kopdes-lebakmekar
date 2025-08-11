@extends('layout.app')
@section('title', 'Edit Jenis Surat')
@section('content')
<div class="container-fluid">
    <div class="card p-3">
        <h3 class="font-weight-bold">Edit Jenis Surat</h3>
        <div class="from-group">
            <form action="{{ url("update-jenis-surat/{$data->id}") }}" method="POST">
            @method('PATCH')
                @csrf
            <label for="Kode surat" class="from-control"> Kode Surat</label>
            <input type="text" class="form-control" name="kode-surat"  value="{{$data->kode_surat}}">

            <label for="Kode surat" class="from-control" > Jenis Surat</label>
            <input type="text" class="form-control" name="jenis-surat" value="{{$data->jenis_surat}}">

            <label for="Kode surat" class="from-control" > Nama Surat</label>
            <input type="text" class="form-control" name="nama-surat"  value="{{$data->nama_surat}}">

            <button type="submit" class="btn btn-primary mt-3 mb-3">Simpan</button>
            </form>
            <a href="{{ url('jenis-surat') }}"><< Kembali >></a>
        </div>
    </div>
</div>


@endsection
