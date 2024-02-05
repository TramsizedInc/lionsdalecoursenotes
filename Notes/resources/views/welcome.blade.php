@section('content')
@extends('layouts.app')

@foreach (App\Models\Course::all() as $course)
    <h1>Smth</h1>    
@endforeach

@endsection