<!DOCTYPE html>
<html>
<head>
	<title>DEALS</title>
</head>
<body>
<div>
    <h1>Listagem das categorias:</h1>
 
    @forelse ( $deals as $deal )
        <p>Nome: {{ $deal->name }}</p>
    @emtpy
        <p>Nenhuma Categoria Cadastrada</p>
    @endforelse
</div>
</body>
</html>