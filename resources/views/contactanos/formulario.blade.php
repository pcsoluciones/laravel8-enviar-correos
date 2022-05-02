<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contáctanos</title>
</head>
<body class="">
    <h1>Cuerpo para el mensaje BODY</h1>

    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        
        <label for="">
            Nombre:
            <br>
            <input type="text" name="nombre">
        </label>
        @error('nombre')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br>

        <label for="">
            Correo:
            <br>
            <input type="text" name="correo">
        </label>
        @error('correo')
            <p><strong>{{$message}}</strong></p>
        @enderror        
        <br>

        <label for="">
            Mensaje:
            <br>
            <textarea name="mensaje" id="" rows="4"></textarea>
        </label>
        @error('mensaje')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br>

        <button type="submit">Enviar mensaje</button>
    </form>

    @if(session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif

</body>
</html>