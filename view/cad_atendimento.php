<!DOCTYPE html>
<?php 
    $title = "Cadastro de Atendimento";
    include '../util/imports.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>        
</head>
<body>
    <?php include './menu2.php'; ?>
    <form class="form-signin" action="../control/acaoAtendimento.php" id="form" method="POST">
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
            <label for="horario_atendimento">Data de atendimento:</label>     
            <input class="input-group mb-3" type="datetime-local" name="horario_atendimento" id="horario_atendimento" placeholder="Data de Atendimento" required="true"><br>
            <br><br>
            <button name="acao" value="confirmar" id="acao" 
            type="submit" class="btn btn-outline-primary">Salvar</button>
            <a href="./list_atendimento.php" class="btn btn-outline-primary">Consultar</a>         
        </fieldset>
    </div>
    </form>
    <?php include '../util/msg.php'; ?>
</body>
</html>