<!DOCTYPE html>
<html>
<head>
	<title>DEALS</title>
</head>
<body>
<div>
    <h1>Listagem das categorias:</h1>
 
    @foreach ( $dados as $dado )
      <p>Negócio:{{ $dado['title'] }}</p>
      <p><a href="{{route('PipeController.getDeal' , $dado['id'])}}">{{$dado['id']}}</a></p>

        
    @endforeach
        
</div>
</body>
</html>