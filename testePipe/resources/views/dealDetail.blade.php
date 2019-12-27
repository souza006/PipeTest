<!DOCTYPE html>
<html>
<head>
	<title>DEALS</title>
</head>
<body>
<div>
    <h1>Listagem das categorias:</h1>
 
    @foreach ( $dados as $dado )
       <p>Nome: {{ $dado['user_id']['name'] }}</p>
       <p>Negócio: {{ $dado['title'] }}</p>
        
    @endforeach
        
</div>
</body>
</html>