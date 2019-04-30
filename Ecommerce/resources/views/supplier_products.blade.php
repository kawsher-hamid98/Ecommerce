@extends('layout')
@section('sendProduct')


<div class="container">
	<div class="row">
			<div class="col-md-6">

					<h6 class="text-center">This is sendProduct</h6>

					@if(session()->has('proSuccess'))
					    <div class="alert alert-success">
					        {{ session()->get('proSuccess') }}
					    </div>
					@endif

					<label>Add products</label>

					<form method="post" action="/sendProducts">

						<input type="hidden" name="_token" value="{{ csrf_token() }}">


						<input type="text" name="product_name[]">
						<input type="text" name="product_code[]">

						<input type="submit" name="submit" value="Add Product" class="btn btn-sm btn-success">

					</form>

			</div>

			<div class="col-md-6">

				<form method="post" action="/deliverPro">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					
							<table class="table table-bordered">

								<tr>
									<th>Product ID</th>
									<th>Product Name</th>
									<th>Product Code</th>
									<th></th>
								</tr>

								@foreach($products as $pro)

								<tr>
									<td>{{ $pro -> product_id}}</td>
									<td>{{ $pro -> product_name}}</td>
									<td>{{ $pro -> product_code}}</td>
									<td><input type="checkbox" name="product[]" value="{{ $pro -> product_name }}"></td>
								</tr>

								@endforeach

							</table>

							<center>
								<input type="submit" name="submit" class="btn btn-sm btn-success" id="submit" value="Submit">
							</center>

							{{ $products -> links() }}
				</form>

			</div>

	</div>
</div>





@endsection
