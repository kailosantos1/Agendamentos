<?php

include_once('config.php');

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nome = $_POST["nome"];
    $snome = $_POST ["snome"];
    $telefone1 = $_POST ["phone1"];
    $stel = $_POST ["selecttel"];
    $telefone2 = $_POST ["phone2"];
    $stel2 = $_POST ["selecttel2"];
    $email = $_POST ["email"];


$sqlUpdate = "UPDATE contatos SET nome='$nome' , sobre_nome='$snome' , telefone1='$telefone1' , tipo_telefone1='$stel' , telefone2='$telefone2' , tipo_telefone2='$stel2' , email='$email'
WHERE id='$id'";

$result = $conexao->query($sqlUpdate);

}
header('Location: listar_contatos.php');
?>