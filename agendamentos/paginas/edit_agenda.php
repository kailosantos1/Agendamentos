<!-- <?php
if(!empty($_GET['id']))
{
    include_once('config.php');
    
    $id = $_GET['id'];
    
    $sqlSelect = "SELECT * FROM agendaa WHERE id=$id";
    
    $result = $conexao->query($sqlSelect);
    
 if($result->num_rows > 0)
 {
   while($user_data = mysqli_fetch_assoc($result))
   {
    $titulo = $user_data ['titulo'];
    $data1= $user_data ['data_inicio'];
    $hora1 = $user_data ['hora_inicio'];
    $data2 = $user_data ['data_fim'];
    $hora2 = $user_data ['hora_fim'];
    $local = $user_data['local_1'];
    $description = $user_data ['descricao'];
   }
 }
 else
 {
   header('Location: listar_agenda.php');
 }
}

?> -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <html>
    <title>Sis Agenda</title>
   <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
 
 <style>
.inputBox{
   width: 100%; 
    margin-left: 30px;
    margin-right: 50px;
   padding-left: 5px;

}
legend {
  margin-left: 30px;
}
.form-row{
    width: 100%;
}
.form-group{
    width: 40% 
}
.formselect{
    width: 40%  
}
.dateini{
width: 20%;
height: 100px;
display: inline-block;
}
.horaini{
width: 20%;
height: 10px;
float: right;
margin-bottom: 80px;
margin-top: -100px;
margin-right: 1140px;

}
.datefim{
width: 20%;
height: 100px;
display: inline-block;
}
.horafim{
width: 20%;
height: 10px;
float: right;
margin-bottom: 80px;
margin-top: -100px;
margin-right: 1140px;
}
.coments{
  width: 40%;
}
#uptade{
margin-left: 35px;
}

</style> 
 <body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="http://localhost/trabalho_tai/paginas/index.php">Sis Agenda</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navega????o">
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
     <li class="nav-item">
        <a class="nav-link" href="http://localhost/trabalho_tai/paginas/listar_contatos.php">Meus Contatos</a>
       </li>
       <li class="nav-item">
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">A????o</a>
          <a class="dropdown-item" href="#">Outra a????o</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Algo mais aqui</a>
        </div>
      </li>
      </div>  
    </nav>
    
  <form action="save_agenda.php" method="post">
  <div class="box">
       <fieldset>
         <legend><b>Formul??rio Agenda</b></legend>
         <br>
       </fieldset>
       <div class="inputBox">
 
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Titulo</label>
      <input type="text" class="form-control" id="titulo" name="titulo1" value="<?php echo $titulo?>" placeholder="Reuni??o...">
    </div>
  </div>
  
  <div class="dateini"> 
  <label for="date1">Data Inicio</label>
  <br>
  <input type="date" id="date1" class="form-control" name="data1" value="<?php echo $data1?>">
  </div>
  <br>
 
  <div class="horaini"> 
  <label for="appt">Horario Inicio</label>
  <br>
  <input type="time" id="appt" class="form-control"  name="hora1" value="<?php echo $hora1?>">
  </div>
 
  
  <div class="datefim"> 
  <label for="date2">Data Fim</label>
  <br>
  <input type="date" id="date2" class="form-control" name="data2" value="<?php echo $data2?>">
  </div>
  <br>
  
  <div class="horafim"> 
  <label for="appt1">Horario Fim</label>
  <br>
  <input type="time" id="appt1" class="form-control" name="hora_2" value="<?php echo $hora2?>">
  </div>
  
  <div class="form-group">
    <label for="inputAddress">Local</label>
    <input type="text" class="form-control" id="inputAddress" name="local_1" value="<?php echo $local?>" placeholder="Rua Jo??o Machado...">
  </div>
 
    <div class="formselect">
      <label for="inputConvidado">Contato Convidado</label>
      <select id="inputConvidado" name="inputConvidado" class="form-control">
        <option selected>Escolher...</option>
        <option>Marta</option>
        <option>Jackson</option>
      </select>
    </div>
   
    <div class="coments">
    <br>
    <label for="coment">Descri????o</label>
    <br>
    <textarea id="coments" class="form-control" name="description" cols="70" rows="5" value="<?php echo $description?>" ></textarea>
    </div>
  </div>
    </div>
  </div>
<br>
<input type="hidden" name="id" value="<?php echo $id?>"> 
  <button type="submit" class="btn btn-success" name="update" id="uptade"><i class="fa-solid fa-floppy-disk" ></i> Salvar</button>
  </div>
 
  <button type="button" class="btn btn-primary" id="voltar" onClick="history.go(-1)"><i class="fa-solid fa-arrow-left"></i> Voltar</button>
  </div> 
 

</div>
</div>
</div>

</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d26ae53813.js" crossorigin="anonymous"></script>
  </body>
</body>
  <?php echo '<p> </p>'; ?> 
  </body>
</html>