<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
</head>
<body>
	<header class="mb-5">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="/projects">Navbar</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="/projects">All Projects</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/projects/create">Add New Project</a>
						</li>
					</ul>
				</div>
			</nav>
	</header>
	<div class="container">
		@yield('content')
	</div>
	
</body>
</html>