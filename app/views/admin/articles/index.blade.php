@extends('admin._layouts.default')

@section('main')

<a href='{{ URL::route('admin.pages.create') }}' class='btn btn-success'>Add new</a>

<table class='table table-stripped'>
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>When</th>
            <th><i class='icon-cog'></i></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <td>{{ $article->id }}</td>
            <td><a href='{{ URL::route('admin.articles.show', $article->id) }}'>{{ $article->title }}</a></td>
            <td>{{ $article->created_at }}</td>
            <td>
                <a href='{{ URL::route('admin.articles.edit', $article->id) }}' class='btn btn-success btn-mini pull-left'>Edit</a>
                {{ Form::open(array('route' => array('admin.articles.destroy', $article->id), 'method' => 'delete', 'data-confirm' => 'Are you sure ?')) }}
                &nbsp;<button type='submit' href='{{ URL::route('admin.articles.destroy', $article->id) }}' class='btn btn-danger btn-mini'>Delete</button> 
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop
