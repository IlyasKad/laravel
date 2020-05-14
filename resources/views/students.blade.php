@extends('layouts.app')
@section('title-block','Students')
@section('content')
    <h1 class="title"> Students </h1>
    <div class="alert alert-info">
        @foreach($data as $student)
            <a href=" {{  route('one-student', $student->id ) }} ">  {{ $student->name }}  </a>
            <a href="{{ route('one-group', $student->group->id ) }}"><button class="btn btn-warning">  {{ $student->group->name }}  </button></a>
            <br>    <br>
        @endforeach
    </div>
@endsection
