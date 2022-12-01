<?php
if(!empty($_GET['id']))
{
    include_once('config.php');
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM agendaa WHERE ID=$id";
    $result = $conexao->query($sqlSelect);
    if($result->num_rows > 0)
    {
        $sqlDelete = "DELETE FROM agendaa WHERE id=$id";
        $resultDelete = $conexao->query($sqlDelete);
    }
}


header('Location:listar_agenda.php');

?>