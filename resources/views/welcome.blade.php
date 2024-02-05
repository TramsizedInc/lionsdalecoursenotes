{{-- 
TODO:Stock video
TODO:Make the website responsive
TODO:Create the about us page
TODO:Create the schools page
TODO:Create the courses page
TODO:Create the page where you can see the course that you clicked on 
    -> if clicked on than set 'seen' to true 
    -> make a 5 question quiz and if thats filled correctly than set completed to true
TODO:Make the dropdown menu funcional
TODO:Dropdown on the right
TODO:Home -> welcome.blade.php
TODO:Lionsdale courses -> about us 
 --}}
@extends('layouts/app')
@section('content')
    <video id="background-video" playsinline autoplay muted poster="#">
        <source src="{{ asset('storage/videos/stock.mp4') }}" type="video/webm">
    </video>
    {{-- content of the welcome page --}}
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 justify-content-center" id="welcomeDiv">
                <div class="card">
                    <div class="card-body" id="welcomeCard">
                        <h4 class="card-title">Welcome to our page</h4>
                        <button type="button" name="submit" class="btn btn-primary">Getting started</button>
                    </div>
                </div>
            </div>
           <div class="col-2"></div>
        </div>      
    </div>
@endsection
{{-- 
    $user->User::with('courses')->get();
    return view('courses.index' ['user' => $user])
    --}}
