@extends('layout')
@section('userSignup')


<div class="container col-md-2 user_register_panel">
	<h6 class="text-center">Sign Up</h6>

	<form action="/user_signup" method="post">

				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label>First Name</label>
					<input type="text" name="FirstName" class="form-control">
					@if($errors -> has('FirstName')) <p class="user_input_error">{{ $errors -> first('FirstName') }}</p> @endif
				</div>

				<div class="form-group">
					<label>Last Name</label>
					<input type="text" name="LastName" class="form-control">
					@if($errors -> has('LastName')) <p class="user_input_error">{{ $errors -> first('LastName') }}</p> @endif
				</div>

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
					<label>Confirm Password</label>
					<input type="password" name="cpassword" class="form-control">
					@if($errors -> has('cpassword')) <p class="user_input_error">{{ $errors -> first('cpassword') }}</p> @endif
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Sign Up</button>
				</div>

			</form>

</div>





@endsection