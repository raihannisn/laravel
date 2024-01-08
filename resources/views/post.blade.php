@extends('layouts.main')

@section('container')
  <article>
    <h2>{{ $posts["title"] }}</h2>
    <p>{{ $posts["body"] }}</p>
  </article>
  <a href="/post">Back to Post</a>
@endsection