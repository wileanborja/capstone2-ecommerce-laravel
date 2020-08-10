@extends('layouts.user')

@section('content')

<h1 class="text-center py-5">Cart</h1>

<div class="container">
	<div class="row">
		<div class="col-lg-10 offset-lg-1">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Order ID</th>
						<th>Order Date</th>
						<th>Order Details</th>
						<th>Order Total</th>
						<th>Customer Name</th>
						<th>Status</th>
						<th>Payment</th>
						<th>Actions</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($orders as $order)
					<tr>
						<td>{{$order->created_at->format('U')}}-{{$order->id}}</td>
						<td>{{$order->created_at->diffForHumans()}}</td>
						<td>
							@foreach($order->foods as $foods)
								Name: {{$food->name}} <br>
								Qty: {{$Food->pivot->quantity}} <br>
							@endforeach
						</td>
						<td>{{$order->total}}</td>
						<td>{{$order->user->name}}</td>
						<td>{{$order->status->name}}</td>
						<td>{{$order->payment->name}}</td>
						<td>
							<a href="/cancelorder/{{$order->id}}" class="btn btn-danger btn-sm{{$order->status_id == 4 || $order->status_id == 3 ? "disabled" : ""}}">Cancel</a>
						</td>
						<td></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection