@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Add Materials</div>
                <div class="panel-body">
                    <div class="form-group">
                        @include('layouts.msg') 
                    </div>  
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width:50%;">Name</th>
                                <th style="width:30%;">Instructor</th>
                                <th style="width:10%;">Course</th>
                                <th style="width:5%;">Delete</th>
                                <th style="width:5%;">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($materials as $material)
                            <tr>
                                <td>{{ $material->name }}</td>
                                <td>{{ $material->instructor() }}</td>
                                <td>{{ $material->course() }}</td>
                                <td><a href="{{ url("/materials/{$material->id}/delete") }}">Delete</a></td>
                                <td><a href="{{ url("/materials/{$material->id}/edit") }}">Edit</a></td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
