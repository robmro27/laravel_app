@extends('admin._layouts.default')

@section('main')
<h2>Create new article</h2>
{{ Form::open(array( 'files' => true , 'route' => 'admin.articles.store')) }}
    <div class='form-group'>
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null, ['class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('body', 'Content') }}
        {{ Form::textarea('body', null, ['class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        
        {{ Form::file('image') }}
        
    </div>

    <div class='form-group'>
        {{ Form::submit('Save', array('class' => 'btn btn-success btn-save btn-large')) }}
        <a href='{{ URL::route('admin.articles.index') }}' class='btn btn-large'>Cancel</a>
    </div>

{{ Form::close() }}
@stop