@extends('layouts.user')
@section('content')

@if($foods != null)
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Cart</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="/catalog">Home</a></li>
					<li class="breadcrumb-item active">My Cart</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<!-- Main content -->
				<div class="invoice p-3 mb-3">
					<!-- title row -->
					<div class="row">
						<div class="col-12">
							<h4>
								<i class="fas fa-globe"></i> Sakura Inc.
								<small class="float-right">Date: 3/5/2020</small>
							</h4>
						</div>
						<!-- /.col -->
					</div>
					<!-- info row -->
					<div class="row invoice-info">
						<div class="col-sm-4 invoice-col">
							From
							<address>
								<strong>Sakura, Inc.</strong><br>
								399 Sen Gil Puyat, Enzo Bldg.<br>
								Makati, PH 1209<br>
								Phone: +(02) 88558558<br>
								Email: wilean.borja@gmail.com
							</address>
						</div>
						<!-- /.col -->
						<div class="col-sm-4 invoice-col">
							To
							<address>
								<strong>{{ Auth::user()->name }}</strong><br>
								795 Folsom Ave, Suite 600<br>
								San Francisco, CA 94107<br>
								Phone: (555) 539-1037<br>
								Email: wilean.borja@yahoo.com
							</address>
						</div>
						<!-- /.col -->
						<div class="col-sm-4 invoice-col">
							<b>Receipt #007612</b><br>
							<br>
							<b>Order ID:</b> 4F3S8J<br>
							<b>Order Created:</b>
							<b>Account:</b>
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->

					<!-- Table row -->
					<div class="row">
						<div class="col-12 table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Name:</th>
										<th>Price:</th>
										<th>Quantity:</th>
										<th>Subtotal</th>
									</tr>
								</thead>
								<tbody>
									@foreach($foods as $food)
									<tr>
										<td>{{$food->name}}</td>
										<td>{{$food->price}}</td>
										<td>{{$food->quantity}}</td>
										<td>{{$food->subtotal}}</td>
									</tr>
									<tr>
										<form action="/removefood/{{$food->id}}" method="POST">
											@csrf
											@method('DELETE')
											<button class="btn btn-danger" type="submit">Remove from Cart</button>
										</form>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->

					<div class="row">
						<!-- accepted payments column -->
						<div class="col-6">
							<p class="lead">Payment Methods:</p>
							<a href="/checkout"></a><img src="../../dist/img/credit/cod.png" alt="COD">
							<img src="../../dist/img/credit/visa.png" alt="Visa">
							<img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
							<img src="../../dist/img/credit/american-express.png" alt="American Express">
							<img src="../../dist/img/credit/paypal2.png" alt="Paypal">

							<p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
								By placing your order, you agree to Sakura's privacy notice and conditions of use.
							</p>
						</div>
						<!-- /.col -->
						<div class="col-6">
							<p class="lead">Amount Due:</p>

							<div class="table-responsive">
								<table class="table">
									<tr>
										<th style="width:50%">Subtotal:</th>
										<td>{{$total}}</td>
									</tr>
									<tr>
										<form action="/emptycart/" method="POST">
											@csrf
											@method('DELETE')
											<button class="btn btn-danger" type="submit">Empty Cart</button>
										</form>
									</tr>
								</table>
							</div>
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->

					<!-- this row will not appear when printing -->
					<div class="row no-print">
						<div class="col-12">
							<a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
							<button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
								Payment
							</button>
							<button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
								<i class="fas fa-download"></i> Save Receipt
							</button>
						</div>
					</div>
				</div>
				<!-- /.invoice -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</section>
@else
<h2 class="text-center py-5">Cart is empty. Please add food to cart.</h2>
@endif
@endsection