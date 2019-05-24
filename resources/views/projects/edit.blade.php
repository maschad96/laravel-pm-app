@extends('layout')

@section('content')

<form method="POST" action="/projects/{{ $project->id }}">
	{{ method_field('PATCH') }}
	{{ csrf_field() }}
	<div class="form-group">
		<input class="form-control" type="text" name="title" placeholder="Title" value="{{ $project->title }}">
	</div>
	<div class="form-group">
		<textarea class="form-control" name="description">{{ $project->description }}</textarea>
	</div>
	<div class="form-group">
		<button class="btn btn-success" type="submit">Update Project</button>
	</div>
</form>

<form method="POST" action="/projects/{{ $project->id }}">
	{{	method_field('DELETE') }}
	{{	csrf_field()	}}
	
		<div class="form-group">
			<button class="btn btn-danger" type="submit">Delete Project</button>
		</div>	
</form>

@endsection