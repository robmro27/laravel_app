@extends('admin._layouts.default')
 
@section('main')
    <h2>Page preview</h2>
 
    <hr>
 
    <h3>{{ $page->title }}</h3>
    <h5>{{ $page->created_at }}</h5>
    {{ $page->body }}
 
    @if ($page->image)
        <hr>
        <figure><img src="{{ Image::resize($page->image, 800, 600) }}" alt=""></figure>
    @endif
@stop