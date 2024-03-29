<!DOCTYPE html>
<?php 
    $title = "Cadastro de Atendimento no Pronto Socorro";
    include '../util/imports.php';
    include '../connect/connect.php';
    include '../control/valida.php';
    require_once "../control/autoload.php";
?>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>        
</head>
<body>
    <?php include './menu2.php'; ?>
    <form class="form-signin" action="../control/acaoProntoSocorro.php" id="form" method="POST">
    <div class="container">
        <legend><?php echo $title; ?></legend> 
        <label for="paciente">Paciente</label>      
            <select class="custom-select mb-3" name="paciente_cpf" id="paciente_cpf">
                <?php
                    $sql = "SELECT * FROM $tb_paciente WHERE $tb_paciente.cpf = $tb_paciente.cpf ORDER BY $tb_paciente.nome";
                    echo $sql;
                    $result = mysqli_query($conexao,$sql);
                    while ($row = mysqli_fetch_array($result)) {      
                ?>
                    <option value="<?php echo $row[0];?>">
                    <?php echo $row[1]." | ".$row[0];?></option>
                    <?php } ?>
            </select>
            <br>
            <label for="medico">Médico</label>     
            <select class="custom-select" name="medico_crm" id="medico_crm">
                <?php
                    $sql = "SELECT * FROM $tb_medico WHERE $tb_medico.crm = $tb_medico.crm ORDER BY $tb_medico.crm";
                    echo $sql;
                    $result = mysqli_query($conexao,$sql);
                    while ($row = mysqli_fetch_array($result)) {      
                ?>
                        <option value="<?php echo $row[0];?>">
                        <?php echo $row[1]." | ".$row[0];?></option>
                        <?php } ?>
            </select>
            <br>
            <label for="hora_chegada">Hora de Chegada:</label>     
            <input class="input-group mb-3" type="datetime-local" name="hora_chegada" id="hora_chegada" placeholder="Data de Chegada" required="true"><br>
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <laber for="gravidade">Gravidade: </label> 
                    <input type="radio" id="gravidade" name="gravidade" value="1">
                    <label for="gravidade">Estável</label> 
                    <input type="radio" id="gravidade" name="gravidade" value="2">
                    <label for="gravidade">Atenção</label>  
                    <input type="radio" id="gravidade" name="gravidade" value="3">
                    <label for="gravidade">Prioridade</label>
                    <input type="radio" id="gravidade" name="gravidade" value="2">
                    <label for="gravidade">Emergência</label>    
                </div>  
            </div>  
            <button name="acao" value="confirmar" id="acao" 
            type="submit" class="btn btn-outline-primary">Salvar</button>
            <a href="./list_prontoSocorro.php" class="btn btn-outline-primary">Consultar</a>         
    </div>
    </form>
    <?php include '../util/msg.php'; ?>
</body>
</html>