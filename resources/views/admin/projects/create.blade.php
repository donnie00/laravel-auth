@extends('layouts.app')

@section('content')
   <h1 class="my-3">Create new project</h1>

   <form action="{{ route('admin.projects.store') }}" method="POST">
      @csrf

      <label class="form-label">Project name:</label>
      <input type="text" name="name" class="form-control">

      <label class="form-label">Description:</label>
      <textarea name="description" cols="30" rows="5" class="form-control"></textarea>

      <label class="form-label">Cover image:</label>
      <input type="text" name="cover_img" class="form-control">

      <label class="form-label">Github link:</label>
      <input type="text" name="github_link" class="form-control">

      <button type="submit" class="btn btn-success my-3">Create</button>

      <a href="{{ route('admin.projects.index') }}" class="mx-3">Return to projects list</a>

   </form>
@endsection
