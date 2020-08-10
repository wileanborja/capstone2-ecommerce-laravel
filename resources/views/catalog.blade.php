@extends('layouts.user')

@section('content')

<div class="col-lg-12">
	<div class="row w-100">
		@foreach($foods as $indiv_food)
		<div class="col-lg-4 p-3 my-2">
			<div class="card">
				<img class="card-img-top" src="{{asset($indiv_food->imgPath)}}" alt="Nothing" height="400px">
				<div class="card-body">
					<h2 class="card-title">{{$indiv_food->name}}</h2>
					<p class="card-text">{{$indiv_food->description}}</p>
					<p class="card-text">Price: {{$indiv_food->price}}</p>
					<p class="card-text">Category: {{$indiv_food->category->name}}</p>
				</div>

				@auth
				@if(Auth::user()->role_id==1)
				<div class="card-footer d-flex">
					<form action="/deletefood/{{$indiv_food->id}}" method="POST">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger" onclick="addToCart({{$indiv_food->id}})" type="submit">Delete</button>
					</form>
					<a href="/editfood/{{$indiv_food->id}}" class="btn btn-success">Edit</a>
				</div>
				@endif
				@endauth
				<div class="btn btn-primary btn-lg btn-flat">
					<i class="fas fa-cart-plus fa-lg mr-2"></i> 
					<input type="number" name="quantity" class="form-control text-center" value="1" id="quantity_{{$indiv_food->id}}">
					<button class="btn btn-warning" onclick="addToCart({{$indiv_food->id}}, `{{$indiv_food->name}}`)" type="submit" {{$indiv_food->deleted_at != NULL ? "disabled" : ""}}>Add to Cart</button>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>

<script type="text/javascript">

	const addToCart = (id, foodName) =>{
		// console.log(foodName)
		let quantity = document.querySelector("#quantity_"+id).value;
		alert(quantity + " " + foodName + " has been added to cart");

		let data = new FormData;

		data.append("_token", "{{ csrf_token() }}");
		data.append("quantity", quantity);

		fetch("/addtocart/"+id,{
			method: "POST",
			body: data
		}).then(res=>res.text())
		.then(res=>res)
	}

</script>

@endsection