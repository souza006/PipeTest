<!DOCTYPE html>
<html>
<head>
	<title>DEALS</title>
</head>
<body>
<div>
    <h1>Listagem das categorias:</h1>
 
    @foreach ( $dados as $dado )
      <p>Negócio:<a href="{{route('PipeController.getDeal' , $dado->id)}}"> {{ $dado['title'] }}</p></a>
        
    @endforeach
        
</div>
</body>
</html>