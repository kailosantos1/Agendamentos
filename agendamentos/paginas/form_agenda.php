
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <html>
    <title>Sis Agenda</title>
    <!-- Bootstrap CSS -->
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
#submit{
margin-left: 35px;
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
    
  <form action="connection.php" method="post">
  <div class="box">
       <fieldset>
         <legend><b>Formulário Agenda</b></legend>
         <br>
       </fieldset>
       <div class="inputBox">
 
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Titulo</label>
      <input type="text" class="form-control" id="titulo" name="titulo1" placeholder="Reunião...">
    </div>
  </div>
  
  <div class="dateini"> 
  <label for="date1">Data Inicio</label>
  <br>
  <input type="date" id="date1" class="form-control" name="data1">
  </div>
  <br>
 
  <div class="horaini"> 
  <label for="appt">Horario Inicio</label>
  <br>
  <input type="time" id="appt" class="form-control"  name="hora1">
  </div>
 
  
  <div class="datefim"> 
  <label for="date2">Data Fim</label>
  <br>
  <input type="date" id="date2" class="form-control" name="data2">
  </div>
  <br>
  
  <div class="horafim"> 
  <label for="appt1">Horario Fim</label>
  <br>
  <input type="time" id="appt1" class="form-control" name="hora_2">
  </div>
  
  <div class="form-group">
    <label for="inputAddress">Local</label>
    <input type="text" class="form-control" id="inputAddress" name="local_1" placeholder="Rua João Machado...">
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
    <label for="coment">Descrição</label>
    <br>
    <textarea id="coments" class="form-control" name="description" cols="70" rows="5"></textarea>
    </div>
  </div>
    </div>
  </div>
<br>

  <button type="submit" class="btn btn-success" id="submit"><i class="fa-solid fa-floppy-disk" ></i> Salvar</button>
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