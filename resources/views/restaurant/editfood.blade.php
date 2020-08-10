@extends('layouts.user')
@section('content')

<h1 class="text-center py-5">Edit Food Form</h1>

<div class="col-lg-4 offset-lg-4">
	<form action="/editfood/{{$food->id}}" method="POST" enctype="multipart/form-data">
		@csrf
		@method('PATCH')
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" class="form-control"
			value={{$food->name}}
			>
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<input type="text" name="description" class="form-control" value={{$food->description}}>
		</div>
		<div class="form-group">
			<label for="price">Price</label>
			<input type="number" name="price" class="form-control" value={{$food->price}}>
		</div>
		<div class="form-group">
			<label for="imgPath">Image:</label>
			<input type="file" name="imgPath" class="form-control">
		</div>
		<div class="form-group">
			<label for="category_id">Category</label>
			<select name="category_id" class="form-control">
				@foreach($categories as $indiv_category)
				<option value="{{$indiv_category->id}}" {{$indiv_category->id == $food->category_id ? "selected" : ""}}>{{$indiv_category->name}}</option>
				@endforeach
			</select>
		</div>
		<button class="btn btn-warning" type="submit">Update</button>
	</form>
</div>

@endsection