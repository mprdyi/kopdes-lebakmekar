@extends('layout.app')
@section('title', 'Surat Undangan')
@section('content')

@foreach ($data as $item)

{{$item->kode_surat}}<br>

@endforeach
@endsection
