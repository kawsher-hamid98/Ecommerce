@extends('layout')
@section('getDelivered')


<div class="container">
	<h6 class="text-center">Delivered Products from supplier</h6>

  <table class="table table-bordered">
    <tr>
      <th>ID</th>
      <th>Supplier Name</th>
      <th>Supplier Email</th>
      <th>Product Name</th>
    </tr>

    @foreach($product as $pro)

    <tr>
      <td>{{ $pro -> id }}</td>
      <td>{{ $pro -> user_name }}</td>
      <td>{{ $pro -> user_email }}</td>
      <td>{{ $pro -> product_name }}</td>
    </tr>

    @endforeach

  </table>

</div>





@endsection
