<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contenido del mensaje</title>
    <style>
        h1{
            color: blue;
        }
    </style>
</head>
<body>
    <h1>Correo electrónico EMAIL</h1>
    <p>Este es mi primer correo enviado con Laravel</p>

    <p><strong>Nombre:</strong> {{$contacto['nombre']}}</p>
    <p><strong>Correo:</strong> {{$contacto['correo']}}</p>
    <p><strong>Mensaje:</strong> {{$contacto['mensaje']}}</p>

    
</body>
</html>