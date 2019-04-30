<!DOCTYPE html>
<html>
<head>
	<title></title>
	@include('others.css_files')
	@include('others.js_files')
</head>
<body>
	@include('others.nav')

	@yield('userSignup')
	@yield('userLogin')
	@yield('home')
	@yield('supplierLogin')
	@yield('supplierDash')
	@yield('sendProduct')
	@yield('getDelivered')

</body>
</html>
