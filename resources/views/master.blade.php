<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIP @section('titulo') @Show</title>
    <link rel="stylesheet" type="text/css" href="{{ asset ('style/style.css') }}">
    {{ Html::link(asset('style/body.css'))}}
    @section('stiles') @show
</head>
<body>
<table width="100%" border="1">
    <tr>
        <td colspan="2">@include('encabezado') </td>  
        <!-- para la imagen de marvel  -->
    </tr>
    <tr>
        <td width="20%">aqui los enlaces</td>
        <td>@yield('cuerpo')</td>
        
    </tr>
    <tr>
        <td colspan="2">
            @section('pie')
            aqui la informacion de contacto
            @show
        </td>
    </tr>
</table>
</body>
</html>

