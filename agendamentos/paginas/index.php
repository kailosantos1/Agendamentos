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
.box{
  width: 35%;
  display: inline-block;

}
legend {
  margin-left: 20px;
}
.conteudo{
    border: solid;
    border-width:1px;
    border-color: #808080;
    box-sizing: border-box;
  height: 180px;
    display: table;
width: 80%;
}

.imagem{
    display:table-cell;
float:left;
}

.contatos1{
    display:table-cell;
float: left;
width: 300px;
margin-left: 30px;
    margin-right: 50px;
   padding-left: 5px;
   font-size: small;
}
.conteudo1{
    border: solid;
    border-width:1px;
    border-color: #808080;
    box-sizing: border-box;
  height: 180px;
    display: table;
    width: 70%;
  }

.imagem1{
    display:table-cell;
float:left;
}

.contatos{
    display:table-cell;
float: left;
width: 300px;
margin-left: 30px;
    margin-right: 50px;
   padding-left: 5px;
   font-size: small;
   
  }
.box1{
 width: 41%;
float: right;
margin-right: 460px;
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
     
    <li class="nav-item active">
        <a class="nav-link" href="http://localhost/trabalho_tai/paginas/index.php">Inicio <span class="sr-only">(página atual)</span></a>
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
    

       <fieldset>
         <legend><b>Telas</b></legend>
         <br>
       </fieldset>
       <div class="box">
       <div class="inputBox">
       
       <div class="conteudo">
       
       <div class="imagem">
       <img src="../Google_Contacts_logo.png" id="imgPhoto" style="width: 150px; height: 150px">
       </div>
      
   <div class="contatos1">
       <h3>
Meus Contatos
       </h3>
     
       <p>
Cadastre e Gerencie todos os seus contatos
       </p>
    
       <button class="btn btn-primary" type="submit" onclick="window.location.href = 'http://localhost/trabalho_tai/paginas/listar_contatos.php'">Ver</button>
      
       
    </div>
       </div>
       </div>
    </div>   
    <div class="box1">   
      <div class="conteudo1">
    
       <div class="imagem1">
       <img src="../kisspng-google-calendar-g-suite-google-docs-computer-icons-5afa8d85a112a6.0568071715263696696598.png" id="imgPhoto" style="width: 150px; height: 150px">
       </div>
      
   <div class="contatos">
       <h3>
Minha Agenda
       </h3>
     
       <p>
       Cadastre e Gerencie todos os seus compromissos na sua Agenda
       </p>
    
       <button class="btn btn-primary" type="submit" onclick="window.location.href = 'http://localhost/trabalho_tai/paginas/listar_agenda.php'">Ver</button>
      
       
    </div>
       </div>
    </div>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d26ae53813.js" crossorigin="anonymous"></script>
  </body>
</body>
  <?php echo '<p> </p>'; ?> 
  </body>
</html>