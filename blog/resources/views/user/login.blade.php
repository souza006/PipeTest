<!DOCTYPE html>
<html>
<head>
	<title>Pagina de Login</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/stylesheet.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Mansalva&display=swap" rel="stylesheet">

</head>
<body>
<section id="conteudo-view" class="login">
	<h1> Login Expetacular</h1>
	<h3>Nossa que legal</h3>


	{!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}
	<p>Logar</p>

	<label>
		{!! Form::text('username', null, ['class' => 'input','placeholder' => "Usuário" ] )  !!} </label>
	
	<label>
		{!! Form::password('password', ['placeholder' => 'senha']) !!}
	</label>

	{!!Form::submit('Logou?') !!}
	{!! Form::close() !!}
</section>
</body>
</html>