@extends('layout')


@section('content')
	<h1 class="title">Projects</h1>
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Project Name</th>
				<th>Project Description</th>
			</tr>
			<tbody>
				@foreach ($projects as $project)
					<tr>
						<td>{{ $project->id }}</td>
						<td><a href="/projects/{{$project->id}}">{{ $project->title }}</a></td>
						<td>{{ $project->description }}</td>
					</tr>
				@endforeach
			</tbody>
		</thead>

	</table>
@endsection
