@extends('layouts.user')
@section('content')

<h1 class="text-center py-3">Add Food Form</h1>

<div class="col-lg-4 offset-lg-4">
	<form action="/addfood" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<input type="text" name="description" class="form-control">
		</div>
		<div class="form-group">
			<label for="price">Price</label>
			<input type="number" name="price" class="form-control">
		</div>
		<div class="form-group">
			<label for="imgPath">Image:</label>
			<input type="file" name="imgPath" class="form-control">
		</div>
		<div class="form-group">
			<label for="category_id">Category</label>
			<select name="category_id" class="form-control">
				@foreach($categories as $indiv_category)
				<option value="{{$indiv_category->id}}">{{$indiv_category->name}}</option>
				@endforeach
			</select>
		</div>
		<div class="col text-center mb-4">
		<button class="btn btn-warning text-center" type="submit">Add Food</button>	
		</div>
	</form>
</div>

@endsection