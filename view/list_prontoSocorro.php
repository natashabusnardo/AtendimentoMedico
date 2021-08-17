<!DOCTYPE html>
<?php 
    include '../connect/connect.php';
    include '../util/imports.php';
	$title = "Lista de Atendimentos";
    $procurar = '';
	if (isset($_POST["procurar"]))
        $procurar = $_POST["procurar"];
?>
<html>
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>
</head>
<body>
    <?php include '../view/menu2.php'; ?>
    <form method="post">
    <fieldset>
        <legend><?php echo $title; ?></legend>
        <input type="text"   name="procurar" list="prontosocorros"
               id="procurar" size="37" value="<?php echo $procurar;?>">
        <datalist id="prontosocorros">
        <?php 
            $sql = 'SELECT * FROM '.$tb_prontosocorro;
            $result = mysqli_query($conexao,$sql);
            while ($row = mysqli_fetch_array($result))
                echo '<option value="'.$row['crm'].'">';
        ?>
        </datalist>
        <input type="submit" name="acao" id="acao">
        <a href="cad_prontosocorro.php">Novo Atendimento</a>
        <br><br>
        <table width="60%">
	    <tr>
            <th width="20"><b>Código</b></th>
            <th width="20"><b>Paciente</b></th>
            <th width="20"><b>Médico</b></th>            
            <th width="20"><b>Hora Chegada</b></th>
            <th width="20"><b>Hora Atendimento</b></th>
            <th width="20"><b>Alterar</b></th>
            <th width="20"><b>Excluir</b></th>
	    </tr>
        <?php
            $sql = 'SELECT * FROM '.$tb_pronto_socorro;
                   ' WHERE codigo LIKE "'.$procurar.
                   '%" ORDER BY codigo';
            $result = mysqli_query($conexao,$sql);
            
            $cont = 0;
            while ($row = mysqli_fetch_array($result)){ 
            if ($cont % 2 == 0)
                echo '<tr>';
            else
                echo '<tr class="sombra">';
            $cont++;
        ?>
            <td align="center"><?php echo $row['codigo'];?></td>
            <td align="center"><?php echo $row['medico_crm'];?></td>
	        <td align="center"><?php echo $row['paciente_cpf']; ?></td>          
            <td align="center"><?php echo $row['hora_chegada'];?></td>
            <td align="center"><?php echo $row['hora_atendimento'];?></td>      
            
            <td align="center"><a href="cad_prontosocorro.php?acao=editar&codigo=<?php echo $row['codigo'];?>"><i class="fas fa-edit"></i></a></td>
            <td align="center"><a href="javascript:excluirRegistro('../control/acaoAtendimento.php?acao=excluir&crm=<?php echo $row['codigo'];?>')"><i class="fas fa-trash-alt"></i></a></td>
	    </tr>
            <?php } ?>       
        </table>
    </fieldset>
    </form>
    <?php include '../util/msg.php'; ?>
</body>
</html>