@extends('admin._layouts.default')

@section('main')
<h2>Create new page</h2>

{{ Notification::showAll() }}

@if ($errors->any())
<div class='alert alert-danger'>
    {{ implode('<br />', $errors->all()) }}
</div>
@endif

{{ Form::model($page, array('method' => 'put' , 'route' => array('admin.pages.update', $page->id))) }}
    <div class='form-group'>
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null, ['class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('body', 'Content') }}
        {{ Form::textarea('body', null, ['class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::submit('Save', array('class' => 'btn btn-success btn-save btn-large')) }}
        <a href='{{ URL::route('admin.pages.index') }}' class='btn btn-large'>Cancel</a>
    </div>

{{ Form::close() }}
@stop