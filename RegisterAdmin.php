<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0, maximun-scale=1.0, minumun-scale=1.0">
    <title>Registrar</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <link rel="stylesheet" href="estilos.css">
    
    
    
</head>
<body>
    
    <header>
        <div class="container">
        <h1>Registro de usuario</h1>
        </div>
    </header>
    
    <!*********Ingresar nombre y apellido******>
    <div class="container">
        <form>
        <div class="form-group">
            <label class="sr-only" for="nombrecompleto">Nombre:</label>
            <input class="form-control" id="Nombre" type="text" placeholder="Nombre(s)">
            </div>
        <div class="form-group">    
            <label class="sr-only" for="apellidopaterno">Apellido paterno:</label>
            <input class="form-control" id="apellidopaterno" type="text" placeholder="apellido paterno">
            </div>
        <div class="form-group">
            <label class="sr-only" for="apellidomaterno">Apellido materno</label>
            <input class="form-control" id="apellidomaterno"  type="text" placeholder="apellidomaterno">
            </div>
        </div>
        </form>

    <!**************Peso y estatura***********>
    <div class="container">
        <form>
        <div class="form-group">
            <label class="sr-only" for="peso">Peso</label>
            <input class="form-control" id="peso" type="text" placeholder="peso">
        </div>
        <div class="form-group">
            <label class="sr-only" for="estatura">Estatura</label>
            <input class="form-control" id="estatura" type="text" placeholder="estatura">
        </div>
        </form>
    </div>    
    
    <!*******Ingresar email********!>
        <div class="container"> 
        <form action="" class="form-inline">
        <div class="form-group">
            <label class="sr-only" for="usuario">Usuario</label>
            <input class="form-control" id="Usuario" type="text" placeholder="Usuario">
            </div>
        <div class="form-group">
            <div class="input-group">
                <label class="sr-only" for="dominio">Dominio</label>
                <div class="input-group-addon">@</div>
                <input class="form-control" id="Dominio" type="text" placeholder="Dominio">
            </div>
            </div>
        </form>    
            
            </div>
    <br>
    <!*********Ingresar password********>
    <div class="container">
        <form>
        <div class="form-group">
            <label class="sr-only" for="password">Password</label>
            <input class="form-control" id="Password" type="password" placeholder="Ingrese su password">
            </div>
        <div class="form-group">
            <label class="sr-only" for="repetir">Repetir</label>
            <input class="form-control" id="Repetir" type="password" placeholder="Reingrese su password">
            </div>
            
            <div class="form-group">
             <button class="btn btn-lg btn-primary">Registrar</button>
            </div>
        </form>
        </div>
        
    </body>
</html>