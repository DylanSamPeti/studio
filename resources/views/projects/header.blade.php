<!DOCTYPE html>
<html>
<head>
	<title>Dylan Peti</title>

	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ elixir('css/all.css') }}">
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>
<body>



@if(Session::has('flash_message'))
   <div>{{ Session::get('flash_message') }}</div>
@endif

<header>
	<div class="container">
	<div class="row">
		<h3 class="header-logo">D Y L A N  &nbsp; P E T i</h3>
	</div>
	</div>
</header>
	@yield('content')