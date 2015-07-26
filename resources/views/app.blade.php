
<!DOCTYPE html>
<html>
<head>
	<title>Bow WoW</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ elixir('css/all.css') }}">
</head>
<body>
<div class="container">

@if(Session::has('flash_message'))
   <div>{{ Session::get('flash_message') }}</div>
@endif
	@yield('content')
</div>
</body>
</html>