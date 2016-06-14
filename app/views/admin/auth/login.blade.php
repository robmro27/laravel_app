@extends('admin._layouts.default')

@section('main')


<div class='container'>
    <div id='login' class='login'>
        {{ Form::open(['class' => 'form-signin']) }}
            @if ($errors->has('login'))
                <div class='alert alert-error'>{{ $errors->first('login', ':message') }}</div>
            @endif
            <div class='control-group'>
                {{ Form::label('email', 'Email', ['class' => 'sr-only']) }}
                <div class='controls'>
                    {{ Form::text('email',null,['class' => 'form-control', 'placeholder' => 'Email']) }}
                </div>
            </div>

            <div class='control-group'>
                {{ Form::label('password', 'Password', ['class' => 'sr-only']) }}
                <div class='controls'>
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
                </div>
            </div>

            <div class="form-actions">
                {{ Form::submit('Login', array('class' => 'btn btn-lg btn-primary btn-block')) }}
            </div>

        {{ Form::close() }}
    </div>
</div>

@stop