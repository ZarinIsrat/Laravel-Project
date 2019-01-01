<!DOCTYPE html>
<html>
<head>
    <title> Search </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
	<div class="container">
		<h1> Search</h1>


		<form method="GET" action="{{ url('home/search') }}">
			<div class="row">
				<div class="col-md-6">
					<input type="text" name="search" class="form-control" placeholder="Search" value="">
				</div>
				<div class="col-md-6">
					<button class="btn btn-success">Search</button>
				</div>
			</div>
		</form>


		<table class="table table-bordered">
			<tr>
				<th>Id</th>
				<th>First Name</th>
				
			</tr>
			@if($users->count())
				@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->First_Name }}</td>
			
				</tr>
				@endforeach
			@else
			<tr>
				<td colspan="3">Result not found.</td>
			</tr>
			@endif
		</table>


	</div>
</body>
</html>