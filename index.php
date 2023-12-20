<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"
    <title>Fake SMTP</title>
</head>
<body>
    <div class="container">

    <div class="cuerpo">
        <h1 class="display-1">Formulario para datos de mail</h1>

        <form action="#" enctype="multipart/form/data" class="formulario form">

        <label for="dest">Destinatario :</label>
        <input type="text" name="destino" id="dest" class="form-data"> 

        <label for="asunto">Asunto</label>
        <input type="text" name="asunto" id="asunto" class="form-data">

        <label for="mensaje">mensaje</label>
        <textarea name="mensaje" id="mensaje"></textarea>

        <input type="submit" value="Enviar" class="btn btn-success">

        </form>


    </div>

    </div>
</body>
</html>