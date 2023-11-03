@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{ $post->title }}</h1>
<p>By. Yudha Prasetya in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
{!! $post->body !!}
<br>
<a href="/posts">Back</a>
@endsection