@extends('layouts.app')
@section('title-block','hello23')
@section('content')
    <h1 class="title"> Hobbies </h1>
    <div class="alert alert-info">
        @foreach($data as $hobby)
            <a href="{{ route('one-hobby', $hobby->id ) }}"><button class="btn btn-warning">{{ $hobby->name  }} </button></a>
            @foreach($hobby->students as $student)
                <a href="{{ route('one-student', $student->id ) }}"><button class="btn btn-warning">{{ $student->name }}</button></a>
            @endforeach
            <br><br>
        @endforeach
    </div>
@endsection
