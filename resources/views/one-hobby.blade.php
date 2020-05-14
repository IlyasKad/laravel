@extends('layouts.app')
@section('title-block'){{$hobby->name}}@endsection
@section('content')
    <h1>Hobby: {{$hobby->name}}</h1>
    <div class="alert alert-info">
        @foreach($hobby->students as $student)
            <a href="{{ route('one-student', $student->id ) }}"><button class="btn btn-warning">{{ $student->name }}</button></a>
        @endforeach
    </div>
@endsection

