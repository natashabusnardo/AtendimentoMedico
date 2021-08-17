<!DOCTYPE html>
<?php 
    include '../util/imports.php';
?>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Tela de login</title>
</head>
<body>
    <div class = "row" style = "height: 100%">
        <div class ="col-4">
            <div class="leftside d-flex justify-content-center align-items-center">
                <form class="form-signin" action="../control/acaoLogin.php" method="post">
                <a href="#" class="navbar-brand text-black col-lg-8 col-md-11 p-0 m-0 titulo">
                <img id=logo src="../img/logo.png" alt="Logo" class="text-dark"> Atendimento Médico</a>
                
                <h1 class="text-black col-lg-8 col-md-11" style="margin-bottom: 50px">Login</h1>
                <hr class="bg-black p-0 mb-2 mb-4">
                <i class="fas fa-user"></i> <label for="login" class="text-dark">Login</label>
                <input type="text" id="login" name="user" class="form-control bg-transparent rounded-0" placeholder="Seu Login" required autofocus>
                <br>
                <i class="fas fa-lock"></i> <label for="inputPassword" class="text-dark">Senha</label>
                <input type="password" id="inputPassword" name="pass"class="form-control bg-transparent rounded-0" placeholder="Senha" required> 
                <br>
                <button name="acao" value="login" class="btn btn-dark btn-block" type="submit">Entrar</button>
                <a href="index.php"  class="btn btn-outline-dark btn-block">Voltar</a>
                </form>
            </div>
            <footer class="text-center ">
            <span><small>Desenvolvido por Natasha Busnardo</small></b></span>
            <br>
            <span><b><small>Todos os direitos reservados.</small></b></span>
    </footer>
        </div>

        <div class="col-8" style="padding-right:0">
            <div class = "rightside" style = "height: 100%">
                <div id="md-layout-item master" style = "height: 100%">
                    <div class="homeimage" alt="Login"></div>
                </div>
            </div>
            
        </div>
    
    </div>
   
  
</body>
</html>