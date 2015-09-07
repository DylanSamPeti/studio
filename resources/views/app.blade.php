
<!DOCTYPE html>
<html>
<head>
	<title>Level Lounge</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ elixir('css/all.css') }}">
</head>
<body>



@if(Session::has('flash_message'))
   <div>{{ Session::get('flash_message') }}</div>
@endif
	@yield('content')

