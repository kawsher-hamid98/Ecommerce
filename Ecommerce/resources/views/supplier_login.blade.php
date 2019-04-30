@extends('layout')
@section('supplierLogin')


<div class="container col-md-2 user_login_panel">
	<h6 class="text-center">supplier Sign In</h6>


	<form action="/supplier_login" method="post">

			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control">
				@if($errors -> has('email')) <p class="user_input_error">{{ $errors -> first('email') }}</p> @endif
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control">
				@if($errors -> has('password')) <p class="user_input_error">{{ $errors -> first('password') }}</p> @endif
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Sign in</button>
			</div>

		</form>

</div>





@endsection