@extends('layouts.app')

@section('content')

<div class="container-fluid p-4">
    <div class="row mb-1">
        <div class="col-6"><h2>Batches</h2></div>
        <div class="col-6">
            <a class="float-right btn btn-info" href="/batches/create">Add</a>
        </div>
    </div>
    <div class="table-responsive-md">
        <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Batch</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($batches as $batch)
            <tr>
                <th scope="row">{{$loop->index + 1}}</th>
                <td>{{$batch->batch}}</td>
                <td><a href="/batches/{{$batch->id}}/edit">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>
@endsection
