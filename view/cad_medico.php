<!DOCTYPE html>
<?php 
    $title = "Cadastro de Médicos";
    include '../control/valida.php';
    require_once "../control/autoload.php";
    include '../util/imports.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>        
</head>
<body>
    <?php include './menu2.php'; ?>
    <form class="form-signin" action="../control/acaoMedico.php" id="form" method="POST">
    <div class="container">
        <legend><?php echo $title; ?></legend>
        <label for="nome">CRM</label>     
        <input type="text" class="input-group mb-3" name="crm" id="crm" placeholder="CRM" required="true"><br>       
        <label for="nome">Nome</label>     
        <input type="text" class="input-group mb-3" name="nome" id="nome" placeholder="Nome" required="true"><br>      
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <laber for="disponivel">Status: </label> 
                    <input type="radio" id="disponivel" name="disponivel" value="1">
                    <label for="disponivel">Disponivel</label> 
                    <input type="radio" id="disponivel" name="disponivel" value="0">
                    <label for="disponivel">Indisponível</label>  
                </div>  
            </div>       
            <br><br>
        <button name="acao"  value="confirmar" id="acao" type="submit" class="btn btn-outline-primary">Salvar</button>
        <a href="./list_medico.php" class="btn btn-outline-primary">Consultar</a>         
    </div>
    </form>
    <?php include '../util/msg.php'; ?>
</body>
</html>