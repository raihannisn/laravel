@extends('layouts.main')

@section('container')
  <h1>HALAMAN ABOUT</h1>
  <h3>{{ $name }}</h3>
  <p>{{ $nrp }}</p>
  <p>{{ $email }}</p>
  <p>{{ $jurusan }}</p>
  <img src="img/{{ $image }}" alt="{{ $name }}" width="500" height="600">
@endsection