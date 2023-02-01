<form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
   @csrf
   @method('DELETE')

   <button class="btn btn-danger">Delete</button>

</form>
