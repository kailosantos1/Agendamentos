<?php

include_once('config.php');

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $titulo = $_POST['titulo1'];
    $data1= $_POST['data1'];
    $hora1 = $_POST['hora1'];
    $data2 = $_POST['data2'];
    $hora2 = $_POST['hora_2'];
    $local = $_POST['local_1'];
    $description = $_POST['description'];

$sqlUpdate = "UPDATE agendaa SET titulo='$titulo' ,data_inicio='$data1' ,hora_inicio='$hora1' ,data_fim='$data2',hora_fim = '$hora2' ,local_1='$local' ,descricao='$description'
WHERE id='$id'";

$result = $conexao->query($sqlUpdate);

}
header('Location: listar_agenda.php');
?>