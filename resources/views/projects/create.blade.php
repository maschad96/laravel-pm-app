@extends('layout')

@section('content')
<h1>Create a New Project</h1>

<form method="POST" action="/projects">
	{{	csrf_field()	}}

	@if ($errors->any())
	<div class="alert alert-danger" role="alert">
			@foreach ($errors->all() as $error)
					{{ $error }}
			@endforeach
	</div>
	@endif

	<div class="form-group">
		<input class="form-control" type="text" name="title" placeholder="Project Title" required value="{{ old('title') }}">
	</div>
	<div class="form-group">
		<textarea class="form-control" name="description" id="" cols="30" rows="10" required>{{ old('description') }}</textarea>
	</div>
	<div class="form-group">
		<button class="btn btn-primary" type="submit">Create Project</button>
	</div>
</form>
@endsection