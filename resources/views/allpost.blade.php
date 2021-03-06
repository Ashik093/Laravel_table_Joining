<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<a href="{{ URL::to('/') }}" class="btn btn-sm btn-primary">Home</a>
		<h1>All Posts</h1>

		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">Title</th>
		      <th scope="col">Category Name</th>
		      <th scope="col">Sub Category Name</th>
		      <th scope="col">Description</th>
		    </tr>
		  </thead>
		  <tbody>
		    @foreach($post as $p)
		    	<tr>
		    	  <td>{{ $p->id }}</td>
		    	  <td>{{ $p->title }}</td>
		    	  <td>{{ $p->catName }}</td>
		    	  <td>{{ $p->subName }}</td>
		    	  <td>{{ $p->description }}</td>
		    	</tr>
		    @endforeach
		    
		  </tbody>
		</table>
	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>