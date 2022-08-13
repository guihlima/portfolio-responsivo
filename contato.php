<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="envio.php" method="post">
        <input type="text" name="nome" placeholder="Nome"> <br>
        <input type="email" name="email" placeholder="Email" >
        <br>
        <textarea name="msg" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>