 <?php

include_once('config.php');

if(!empty($_GET['search']))
{ 
  $data = $_GET['search'];

    $sql = "SELECT * FROM contatos WHERE nome LIKE '%$data%' or sobre_nome LIKE '%$data%'  or telefone1 LIKE '%$data%' or tipo_telefone1 LIKE '%$data%' or telefone2 LIKE '%$data%' or tipo_telefone2 LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";

}else 
{ 
  $sql = "SELECT * FROM contatos ORDER BY id DESC";

}

$resultado = $conexao -> query($sql);
// print_r($result);
?>  
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <html>
    <title>Sis Agenda</title>
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
 <style>
 body{
  font-family: "Arial", Helvetica, sans-serif;
font-size: medium;
}
.inputBox{

  width: 100%; 
    margin-left: 0px;
    margin-right: 0px;
   padding-left: 5px;

}
#buscar{
  margin-left: 10px; 
}
#cads{
margin-left: 10px;
}
#serachr1{
  display: inline-block;
  width: 30%;
}
#exampleFormControlSelect2{
  width:30%;
  float:left;
  margin-right: 15px;
}
#table{
  width:100%;

}
fieldset{
  margin-left: 30px;
}
</style>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="http://localhost/trabalho_tai/paginas/index.php">Sis Agenda</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/trabalho_tai/paginas/index.php">Inicio </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/trabalho_tai/paginas/listar_agenda.php">Minha Agenda</a>
      </li>
     <li class="nav-item active">
        <a class="nav-link" href="http://localhost/trabalho_tai/paginas/listar_contatos.php">Meus Contatos<span class="sr-only">(página atual)</span></a>
       </li>
       <li class="nav-item">
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Ação</a>
          <a class="dropdown-item" href="#">Outra ação</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Algo mais aqui</a>
        </div>
      </li>
      </div>  
    </nav>
    <div class="box">
    <div class="inputBox">
    <fieldset>  
    <legend><b>Listagem de Contatos</b></legend>
         <br>
         </fieldset>
       
         <div class="serch1">
         
    
         <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" id="serachr1" aria-label="Pesquisar">
   
         <select id="exampleFormControlSelect2" class="form-control"> 
<option disabled> Escolher...</option>    
<option>Nome</option>
    <option>Sobrenome</option>
    <option>Telefone 1</option>
    <option>Telefone 2</option>
    <option>Email</option>
  </select>

<button class="btn btn-success btn-md " id="buscar" type="submit" onclick= "searchData()"><i class="fa-solid fa-magnifying-glass"></i>Buscar</button>
   
  
<button class="btn btn-primary" id="cads" type="submit" onclick="window.location.href = 'http://localhost/trabalho_tai/paginas/form_contatos.php'"><i class="fa-solid fa-plus"></i>Cadastrar</button>
<br>
<br>
<table class="table" id="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Telefone 1</th>
      <th scope="col">Tipo Telefone 1</th>
      <th scope="col">Telefone 2</th>
      <th scope="col">Tipo Telefone 2</th>
      <th scope="col">Email</th>
      <th scope="col">Ação</th>
      <th scope="col">Ação</th>
    </tr>
</thead>
<tbody>
<?php


while($user_datac = mysqli_fetch_assoc($resultado)){
echo "<tr>";
echo "<td>".$user_datac['id']."</td>";
echo "<td>".$user_datac['nome']."</td>";
 echo "<td>".$user_datac['sobre_nome']."</td>";
 echo "<td>".$user_datac['telefone1']."</td>";
 echo "<td>".$user_datac['tipo_telefone1']."</td>";
 echo "<td>".$user_datac['telefone2']."</td>";
 echo "<td>".$user_datac['tipo_telefone2']."</td>";
 echo "<td>".$user_datac['email']."</td>";
 echo "<td>
 <a class='btn btn-sm btn-primary' href='edit_contato.php?id=$user_datac[id]'> <i class='fa-solid fa-pencil'></i>
 </td>";
 echo "<td>
 <a class='btn btn-sm btn-danger' href='delete_contato.php?id=$user_datac[id]'><i class='fa-solid fa-trash-can'></i>

</a>
 </td>";
 echo "<tr>";


}
  ?>
  </tbody>
</table>
         </div>
    </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d26ae53813.js" crossorigin="anonymous"></script>
</body>
  <?php echo '<p> </p>'; ?> 
  <script>
    var search = document.getElementById('serachr1')
    
    search.addEventListener("keydown", function(event){
  if (event.key === "Enter")
  {
    searchData();
  }
});
    function searchData() 
    {

window.location = 'listar_contatos.php?search=' + search.value;

    }
    </script>
  </body>
</html>
