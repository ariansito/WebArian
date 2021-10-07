<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesPHP.css">
	<title>WebArian</title>
</head>
<body>
    <form method="post" action="enviar2.php">
        <div class="formulario">
            <h1>consulta</h1>
            <input type="email" name="email" placeholder="Email" size="30" ><br>
            <textarea name="mensaje" placeholder="Mensaje" class="mensaje"></textarea>
            <br>
        </div>
        <br>
        <div >
            <input type="submit" name="ingresar" class="ingresar">
        </div>
    </form>
</body>
</html>
