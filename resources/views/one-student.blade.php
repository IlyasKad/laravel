@extends('layouts.app')
@section('title-block'){{$student->name}}@endsection
@section('content')
    <h1>{{$student->name}}</h1>
    <div class="alert alert-info one-student">
        Group: <a href="{{ route('one-group', $student->group->id ) }}"><button class="btn btn-warning">  {{ $student->group->name }}  </button></a>
        Hobbies:
        @foreach($student->hobbies as $hobby)
            <a href="{{ route('one-hobby', $hobby->id ) }}"><button class="btn btn-warning">{{ $hobby->name }}</button></a>
        @endforeach
    </div>
@endsection

