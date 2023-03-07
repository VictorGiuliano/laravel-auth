@extends('layouts.app')
@section('title','Projects')
    
@section ('content')
<h1>Projects</h1>
<div class=" bkg-b">
    <div class="card-container">
        @foreach ($projects as $project)
          <div class="project-card">
            <img src='{{$project['image']}}' alt="{{$project['title']}}">
            <h4>Title: {{$project['title']}}</h4>
            <div class="container d-flex justify-content-center">
                <a href="{{route('admin.projects.show', $project->id)}}" class="btn mx-1 small btn-primary"><i class="fa-solid fa-eye"></i></a>
                <button class="btn small btn-danger">Delete</button>
            </div>
        </div>  
        @endforeach
    </div>
</div>
@endsection