<!-- <?php
if(!empty($_GET['id']))
{
    include_once('config.php');
    
    $id = $_GET['id'];
    
    $sqlSelect = "SELECT * FROM contatos WHERE id=$id";
    
    $result = $conexao->query($sqlSelect);
    
 if($result->num_rows > 0)
 {
   while($user_data = mysqli_fetch_assoc($result))
   {
    $nome = $user_data ["nome"];
    $snome = $user_data ["sobre_nome"];
    $telefone1 = $user_data ["telefone1"];
    $stel = $user_data ["tipo_telefone1"];
    $telefone2 = $user_data ["telefone2"];
    $stel2 = $user_data ["tipo_telefone2"];
    $email = $user_data ["email"];
   }
 }
 else
 {
   header('Location: listar_contatos.php');
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
.row{
  width: 100%;
  border-radius: 5px;
  height: 35px;
}
.col{
width: 100%;

}

#exampleFormControlSelect1{
  float:right;
  width: 28%;
  margin-right: 70%;
  height: 35px;
}

#exampleFormControlSelect2{
  float:right;
  width: 28%;
  margin-right: 70%;
  height: 35px;
}

legend {
  margin-left: 20px;
}

#phone{
  width: 30%;
}
.inputemail {
  width: 775px; 
  margin-left: -460px;
}
.telselec{
  width: 35%; 
}
.inputnome{
  width: 775px;
  margin-right: 10px;
}
.form-control{
  margin-right: 0px;
  margin-bottom: 10px;
}
.btn1{
  border-radius: 5px;
  position:absolute;
  top:300px;
  left:9px; 
  margin-left: 15px;
}
.btn2{
  position:absolute;
  top:300px;
  left:120px; 
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
    
  <form action="save_contatos.php" method="post" >
  <div class="box">
       <fieldset>
         <legend><b>Formulário Contato</b></legend>
         <br>
       </fieldset>
       
       <div class="inputBox">
         <div class="row">
        
         
     <div class="inputnome">   
     <input type="text" class="form-control" id="nome"  placeholder="Nome" name="nome" value="<?php echo $nome?>">
    </div>
      
    <div class="inputnome">  
      <input type="text" class="form-control" id="snome" placeholder="Sobrenome" name="snome" value="<?php echo $snome?>">
      </div> 
 
    <input type="tel" class="form-control" name="phone1" id="phone" maxlength="17" placeholder="Telefone 01" value="<?php echo $telefone1?>"/>
      

    <div class="telselec">
    <select id="exampleFormControlSelect1" class="form-control" name="selecttel" value="<?php echo $stel?>"> 
    <option disabled> Tipo de telefone 01</option>
    <option>Celular</option>
    <option>Casa</option>
      <option>Comercial</option>
      <option>Principal</option>
    </select>
    </div>
   

    <div class="inputemail">
    <input type="email" class="form-control"  placeholder="nome@exemple.com" name="email" value="<?php echo $email?>"> 
    </div>
   
   
    <input type="tel" class="form-control" name="phone2" id="phone" maxlength="17" placeholder="Telefone 02" value="<?php echo $telefone2?>"/>  
    
   
    <div class="telselec">
    <select id="exampleFormControlSelect2" class="form-control" name="selecttel2" value="<?php echo $stel2?>"> 
<option disabled> Tipo de telefone 02</option>    
<option>Celular</option>
    <option>Casa</option>
      <option>Comercial</option>
      <option>Principal</option>
    </select>
    </div>

  </br>
</br> 

<input type="hidden" name="id" value="<?php echo $id?>"> 

<div class="btn1">

<button type="submit" class="btn btn-success" name="update" id="update"> <i class="fa-solid fa-floppy-disk" ></i> Salvar</button>
  </div>
  <div class="btn2">
  <button type="button" class="btn btn-primary" onClick="history.go(-1)"> <i class="fa-solid fa-arrow-left"></i> Voltar</button>
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