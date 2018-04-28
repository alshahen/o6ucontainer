@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Delete Material</div>
                <div class="panel-body">
                    <div class="form-group">
                        @include('layouts.msg') 
                    </div>  
                {{ Form::model($material, ['route' => ['materials.destroy', $material->id],  'method' => 'DELETE', 'files' => true ]) }}
                    <div class="alert alert-warning" role="alert">
                      are you sure you want to delete this material ?
                    </div>
                    <div class="form-group">
                        {{ Form::submit('Delete' ,['class' => 'btn btn-danger']) }}    
                    </div>

                {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
