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

		<h1>Add New Sub Category</h1>
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		@if(session('msg'))
			<div class="alert alert-success">
		        <ul>
		        
		            <li>{{ session('msg') }}</li>
		         
		        </ul>
		    </div>
		@endif
		<form action="{{ url('insert-sub-category') }}" method="POST">
			@csrf
			<div class="form-group">
			  <label for="exampleInputEmail1">Category ID</label>
			  <select class="form-control form-control-lg" name="cat_id">
			  	
			    <option>Select Categgory</option>
			    @foreach($cat as $category)
			    <option value="{{ $category->id }}">{{ $category->name }}</option>
			    @endforeach
			  </select>
			</div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Sub Category Name</label>
		    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Sub Category">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Sub Category Description</label>
		    <input name="description" type="text" class="form-control" id="exampleInputPassword1" placeholder="Category Description">
		  </div>
		  <button type="submit" class="btn btn-primary">Add Sub Category</button>
		</form>
	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>