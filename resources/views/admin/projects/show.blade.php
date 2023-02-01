@extends('layouts.app')

@section('content')
   <h1 class="my-3">Progetto id #{{ $project->id }}</h1>

   <div class="row">
      <div class="col">
         <img src="{{ $project->cover_img }}" alt="..." class="img-fluid">
      </div>
      <div class="col-8">
         <h4>Name: </h4>
         <p>{{ $project->name }}</p>

         <h4>Description: </h4>
         <p>{{ $project->description }}</p>

         <h6 class="text-center">
            <a href="{{ $project->github_link }}">Go check it on github!</a>
         </h6>
      </div>
   </div>
@endsection
