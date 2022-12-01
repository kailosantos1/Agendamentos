<!-- <?php

include_once('config.php');

if(!empty($_GET['search']))
{ 
  $data = $_GET['search'];
  $sql = "SELECT * FROM agendaa WHERE titulo LIKE '%$data%' or data_inicio LIKE '%$data%' or data_fim LIKE '%$data%' or hora_inicio LIKE '%$data%' or hora_fim LIKE '%$data%' or local_1 LIKE '%$data%' ORDER BY id DESC";
}else 
{ 
  $sql = "SELECT * FROM agendaa ORDER BY id DESC";
}


$result = $conexao->query($sql);

?>   -->
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
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/trabalho_tai/paginas/listar_agenda.php">Minha Agenda<span class="sr-only">(página atual)</span></a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="http://localhost/trabalho_tai/paginas/listar_contatos.php">Meus Contatos</a>
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
    <legend><b>Listagem de Agendas</b></legend>
         <br>
         </fieldset>
       
         <div class="serch1">
         
         <input class="form-control mr-sm-2" type="search" id="serachr1" placeholder="Pesquisar" aria-label="Pesquisar">
   
    <select id="exampleFormControlSelect2" class="form-control"> 
<option disabled> Tipo</option>    
<option>Titulo</option>
<option>Data Início</option>
    <option>Hora Início</option>
    <option>Data Fim</option>
    <option>Hora Fim</option>
    <option>Local</option>
    <option>Convidado</option>
  </select>
         
<button class="btn btn-success btn-md " id="buscar" type="submit" onclick= "searchData()"><i class="fa-solid fa-magnifying-glass"></i>Buscar</button>
   
  
<button class="btn btn-primary" id="cads" type="submit" onclick="window.location.href = 'http://localhost/trabalho_tai/paginas/form_agenda.php'"><i class="fa-solid fa-plus"></i>Cadastrar</button>
<br>
           <br>
           
           
<table class="table">
  <thead class="thead-dark">
 <tr>
      <th scope="col">#</th>
      <th scope="col">titulo</th>
      <th scope="col">Data Início</th>
      <th scope="col">Hora Início</th>
      <th scope="col">Data Fim</th>
      <th scope="col">Hora Fim</th>
      <th scope="col">Local</th>
      <th scope="col">Convidado</th>
     
      <th scope="col">Ação</th>
      <th scope="col">Ação</th>

    </tr>
  </thead>
  
  <tbody>
  <?php


while($user_data = mysqli_fetch_assoc($result)){
  echo "<tr>";
  echo "<td>".$user_data['id']."</td>";
  echo "<td>".$user_data['titulo']."</td>";
  echo "<td>".$user_data['data_inicio']."</td>";
 echo "<td>".$user_data['hora_inicio']."</td>";
 echo "<td>".$user_data['data_fim']."</td>";
 echo "<td>".$user_data['hora_fim']."</td>";
 echo "<td>".$user_data['local_1']."</td>";
 echo "<td> convidado</td>";
 echo "<td>
 <a class='btn btn-sm btn-primary' href='edit_agenda.php?id=$user_data[id]'> <i class='fa-solid fa-pencil'></i>
 </td>";
 echo "<td>
 <a class='btn btn-sm btn-danger' href='delete_agenda.php?id=$user_data[id]'><i class='fa-solid fa-trash-can'></i>

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
    var search = document.getElementById('serachr1');

    search.addEventListener("keydown", function(event){
  if (event.key === "Enter")
  {
    searchData();
  }
});

    function searchData() 
    {

window.location = 'listar_agenda.php?search=' + search.value;

    }
    </script>
  </body>
</html>
