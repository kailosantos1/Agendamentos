<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <html>
    </head>
  <body>
    <?php

include_once('config.php');
$titulo = $_POST ["titulo1"];
$data1= $_POST ["data1"];
$hora1 = $_POST ["hora1"];
$data2 = $_POST ["data2"];
$hora_2 = $_POST ["hora_2"];
$local = $_POST ["local_1"];
$description = $_POST ["description"];

$result = mysqli_query($conexao, "INSERT INTO agendaa(titulo,data_inicio,hora_inicio,data_fim,hora_fim,local_1,descricao) 
VALUES ('$titulo', '$data1', '$hora1', '$data2', '$hora_2', '$local', '$description')");

header('Location:listar_agenda.php');
?>

</body>
</html>

