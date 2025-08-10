@extends('layout.app')
@section('title', 'Surat Undangan')
@section('content')
<div class="container-fluid">
    <div class="card p-3 bg-light border-0">
        <h3 class="font-weight-bold">Jenis Surat</h3>
        <div class="d-flex justify-content-end mb-3">
            <a href="" class="btn btn-small btn-primary" style="width:150px"> <i class="fa fa-plus"></i> Tambah Surat</a>
        </div>
        <table class="table table-hover">
            <tr>
                <th>No</th>
                <th>Kode Surat</th>
                <th>Jenis Surat</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->kode_surat }}</td>
                <td>{{ $item->jenis_surat }}</td>
                <td> <a href="" class="btn btn-small btn-primary"> Edit</a> | <a href=""  class="btn btn-small btn-danger text-white"> Hapus</a> </td>
            </tr>
            @endforeach
            </table>
    </div>
</div>

@endsection
