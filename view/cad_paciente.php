<!DOCTYPE html>
<?php 
    $title = "Cadastro de Pacientes";
    include '../connect/connect.php';
    include '../util/imports.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>        
</head>
<body>
    <?php include './menu2.php'; ?>
    <form action="../control/acaoPaciente.php" id="form" method="POST">
    <div class="container">
        <fieldset>
            <legend><?php echo $title; ?></legend> 
            <label for="nome">CPF</label>     
            <input type="text" class="input-group mb-3" name="cpf" id="cpf" placeholder="CPF" required="true"><br>     
            <label for="nome">Nome</label>     
            <input type="text" class="input-group mb-3" name="nome" id="nome" placeholder="Nome" required="true"><br>
            <label for="telefone">Telefone:</label>     
            <input type="number" class="input-group mb-3" name="telefone" id="telefone" placeholder="Telefone" required="true"><br>
            <label for="email">Email:</label>     
            <input type="email" class="input-group mb-3" name="email" id="email" placeholder="Email" required="true"><br>    
            <label for="usuario">ID usuário:</label>     
            <input type="usuario" class="input-group mb-3" name="usuario" id="usuario" placeholder="Usuario ID" required="true"><br>    
            <br><br>
            <button name="acao"  value="confirmar" id="acao" type="submit" class="btn btn-outline-primary">Salvar</button>
            <a href="./list_paciente.php" class="btn btn-outline-primary">Consultar</a>         
        </fieldset>
    </div>
    </form>
    <?php include '../util/msg.php'; ?>
</body>
</html>