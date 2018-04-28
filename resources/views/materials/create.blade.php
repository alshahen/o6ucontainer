@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add Material</div>
                <div class="panel-body">
                    <div class="form-group">
                        @include('layouts.msg') 
                    </div>  
                {{ Form::open(['url' => 'materials/', 'files' => true]) }}
                    <div class="form-group">
                        {{ Form::label('Name', null, ['class' => 'control-label']) }}
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('Description', null, ['class' => 'control-label']) }}
                        {{ Form::textarea('desc', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('Course', null, ['class' => 'control-label']) }}
                        {{ Form::select('course', $courses , null , ['class' => 'form-control']) }}    
                    </div>
                    <div class="form-group">
                        {{ Form::label('Instructor', null, ['class' => 'control-label']) }}
                        {{ Form::select('instructor', $instructors , null , ['class' => 'form-control']) }}    
                    </div>
                    <div class="form-group">
                        {{ Form::label('Url- like google drive or dropbox', null, ['class' => 'control-label']) }}
                        {{ Form::text('url', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('File - just .rar and .zip', null, ['class' => 'control-label']) }}
                        {{ Form::file('file', ['class' => 'form-control']) }}    
                    </div>
                    <div class="form-group">
                        {{ Form::submit('Add' ,['class' => 'btn btn-primary']) }}    
                    </div>

                {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
