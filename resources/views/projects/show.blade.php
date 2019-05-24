@extends('layout')

@section('content')
<div class="row">

<div class="col-md-6"><h1>{{ $project->title }}</h1>
<p>{{ $project->description }}</p>

<a href="/projects/{{ $project->id }}/edit" class="btn">Edit</a>
</div>
	<div class="col-md-6">
		@if ( $project->tasks->count() )
		<h3>Tasks</h3>
		@foreach ($project->tasks as $task)
		<div>
			<form method="POST" action="/completed-tasks/{{ $task->id }}">
				@csrf
				@if ($task->completed)
					@method('DELETE')
				@endif()
			
				<div class="custom-control custom-checkbox">
					<input 
						id="task{{ $task->id }}" 
						type="checkbox" 
						class="custom-control-input" 
						name="completed" 
						onChange="this.form.submit();" {{ $task->completed ? 'checked' : '' }}>
				
					<label for="task{{ $task->id }}" class="custom-control-label">
						{{ $task->description }}
					</label>
				</div>
			
			</form>
			</div>
			@endforeach
			@endif
			
			<h4>Add Tasks</h4>

			<form action="/projects/{{ $project->id }}/tasks" method="POST" class="form">
			@csrf

			<div class="form-group">
				<input 
					type="hidden" 
					name="project_id" 
					value="{{ $project->id }}"
				>
				<input 
					type="text" 
					class="form-control" 
					name="description" 
					placeholder="Task Description" 
					required>
			</div>
			@if ( $errors->all() )
				<div class="alert alert-danger" role="alert">
					@foreach ($errors as $error)
						{{ error }}
					@endforeach
				</div>
			@endif
		</form>
	</div>
</div>

@endsection