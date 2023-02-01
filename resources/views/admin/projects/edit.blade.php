@extends('layouts.app')

@section('content')
   <h1>Edit project# {{ $project->id }}</h1>

   <form action="{{ route('admin.projects.update', $project) }}" method="POST">
      @csrf
      @method('PATCH')

      <label class="form-label">Project name:</label>
      <input type="text" name="name" class="form-control" value="{{ $project->name }}">

      <label class="form-label">Description:</label>
      <textarea name="description" cols="30" rows="5" class="form-control">{{ $project->description }}</textarea>

      <label class="form-label">Cover image:</label>
      <input type="text" name="cover_img" class="form-control" value="{{ $project->cover_img }}">

      <label class="form-label">Github link:</label>
      <input type="text" name="github_link" class="form-control" value="{{ $project->github_link }}">

      <button type="submit" class="btn btn-warning my-3">Edit</button>

      <a href="{{ route('admin.projects.index') }}" class="mx-3">Return to projects list</a>
      <a href="{{ route('admin.projects.show', $project->id) }}" class="mx-3">Return to this projects page</a>

   </form>
@endsection
