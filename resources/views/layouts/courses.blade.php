@extends('layouts/app')
@section('content')   
{{-- content of the courses page --}}
<div class="container">        
    <div class="row">             
            @foreach ($courses as $item)
            <div class="col-4">
                <div class="card courses">
                    <img class="card-img-top courseImage" src="../storage/thumbnails/courses_placeholder.png" alt="Title" />                    
                    <div class="card-body">   
                        <h4 class="card-title">{{$item->name}}</h4>  
                        <p class="card-text">{{$item->level}}</p>             
                        <p class="card-text">{{$item->description}}</p>
                    </div>
                    <button name="submit" type="button"class="btn btn-primary coursesBtn">Visit</button>
                </div>       
            </div>
                                            
            @endforeach
    </div>
</div>

@endsection