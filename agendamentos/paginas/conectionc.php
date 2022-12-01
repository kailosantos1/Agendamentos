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
$nome = $_POST ["nome"];
$snome = $_POST ["snome"];
$telefone1 = $_POST ["phone1"];
$stel = $_POST ["selecttel"];
$telefone2 = $_POST ["phone2"];
$stel2 = $_POST ["selecttel2"];
$email = $_POST ["email"];

$result = mysqli_query($conexao, "INSERT INTO contatos(nome,sobre_nome,telefone1,tipo_telefone1,telefone2,tipo_telefone2,email) 
VALUES ('$nome', '$snome', '$telefone1', '$stel', '$telefone2', '$stel2', '$email')");

header('Location: listar_contatos.php');
?>

</body>
</html>