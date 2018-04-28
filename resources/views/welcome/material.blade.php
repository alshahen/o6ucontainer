@extends('layouts.front')

@section('content')
<br />
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Material</div>
                <div class="panel-body">
                <div class="form-group">
                    {{ Form::label('name:', null, ['class' => 'control-label']) }}
                    {{ $material->name }}
                </div>
                <div class="form-group">
                    {{ Form::label('Description:', null, ['class' => 'control-label']) }}
                    {{ $material->desc }}
                </div>
                <div class="form-group">
                    {{ Form::label('Instructor:', null, ['class' => 'control-label']) }}
                    {{ $material->instructor() }}
                </div>
                <div class="form-group">
                    {{ Form::label('Course:', null, ['class' => 'control-label']) }}
                    {{ $material->course() }}
                </div>
                <div class="form-group">
                    {{ Form::label('Uploader:', null, ['class' => 'control-label']) }}
                    {{ $material->uploader() }}
                </div>
                <div class="form-group">
                    @if($material->url == null)
                        <a href="{{ url("/material/{$material->path}") }}" class="btn btn-primary">Download</a>
                    @else
                        <a href="{{ $material->url }}" class="btn btn-primary">Download</a>
                    @endif
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
