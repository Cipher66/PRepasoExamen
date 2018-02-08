<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Inicio</title>
    </head>
    <body>
        <form action="acceso" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="nombre" />
            <input type="submit" value="Validar" />
        </form>
    </body>
</html>
