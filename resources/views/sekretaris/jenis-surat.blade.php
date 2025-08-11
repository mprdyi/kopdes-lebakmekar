@extends('layout.app')
@section('title', 'Jenis Surat')
@section('content')
<div class="container-fluid">
    <div class="card p-3 bg-light border-0 bg-light">
        <h3 class="font-weight-bold">Jenis Surat</h3>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <script>
        // Setelah 5 detik, sembunyikan alert
        setTimeout(function() {
            var alert = document.getElementById('success-alert');
            if(alert){
                alert.style.transition = "opacity 0.5s ease";
                alert.style.opacity = '0';
                setTimeout(function(){ alert.remove(); }, 500); // hapus elemen setelah animasi
            }
        }, 5000);
    </script>

        <div class="d-flex justify-content-end mb-3">
            <a href="{{ url('tambah-jenis-surat') }}" class="btn btn-small btn-primary" style="width:150px"> <i class="fa fa-plus"></i> Tambah Surat</a>
        </div>
        <table class="table table-hover">
            <tr>
                <th>No</th>
                <th>Kode Surat</th>
                <th>Jenis Surat</th>
                <th>Nama Surat</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->kode_surat }}</td>
                <td>{{ $item->jenis_surat }}</td>
                <td>{{ $item->nama_surat }}</td>
                <td>
                    <a href="{{ url('edit-jenis-surat/'.$item->id) }}" class="btn btn-small btn-primary"> Edit </a> |
                    <form action="{{ url("delete/$item->id") }}" method="post" style="display: inline;">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
            </tr>
            @endforeach
            </table>
    </div>
</div>

@endsection
