@extends('layouts.front')

@section('content')
<br />
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Course</div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width:40%;">Name</th>
                                <th style="width:20%;">Instructor</th>
                                <th style="width:10%;">Course</th>
                                <th style="width:15%;">Uploader</th>
                                <th style="width:10%;">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($materials as $material)
                            <tr>
                                <td><a href="{{ url("/material/{$material->id}") }}">{{ $material->name }}</a></td>
                                <td>{{ $material->instructor() }}</td>
                                <td>{{ $material->course() }}</td>                                
                                <td>{{ $material->uploader() }}</td>                                
                                <td>{{ $material->created_at }}</td>                                
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
