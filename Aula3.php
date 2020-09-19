<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula3.php</title>
</head>
<body>
    <fom action="Aula4.php">
        <input type="text" name="nome"/><br>
        <input type="text" name="idade"/><br>
        <input type="submit" value="enviar"/>
    </fom>
    <?php
        $nome=$_GET["nome"];
        $idade=$_GET["idade"];
        echo "Nome: ".$nome."idade: ".$idade;
    ?>
</body>
</html>