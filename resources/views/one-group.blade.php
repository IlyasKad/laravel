@extends('layouts.app')
@section('title-block'){{$group->name}}@endsection
@section('content')
    <h1>Students of {{$group->name}} group</h1>
    <div class="alert alert-info">
        @foreach($group->students as $student)
            <div>
                <a href="{{ route('one-student', $student->id ) }}"><button class="btn btn-warning group-btn">{{ $student->name }}</button></a>
            </div>
        @endforeach
    </div>
@endsection

