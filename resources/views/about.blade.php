@extends('layouts.main')
@section('container')
<h1>Halaman about</h1>
<h3>{{ $nama }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $gambar }}" alt="{{ $nama }}" width="200">
@endsection