<!DOCTYPE html>
<?php 
    include '../connect/connect.php';
    include '../util/imports.php';
    include '../control/valida.php';
    require_once "../control/autoload.php";
	$title = "Fila";
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
            $sql = "SELECT * FROM $tb_pronto_socorro ORDER BY gravidade asc";
            $result = mysqli_query($conexao,$sql);
            while ($row = mysqli_fetch_array($result))
                echo '<option value="'.$row['gravidade'].'">';
        ?>
        </datalist>
        <input type="submit" name="acao" id="acao">
        <a href="cad_prontoSocorro.php">Realizar atendimento</a>
        <br><br>
        <table width="60%">
	    <tr>
            <th align="center" width="20"><b>Código</b></th>
            <th align="center" width="50"><b>Paciente CPF</b></th> 
            <th align="center" width="50"><b>Gravidade</b></th>          
            <th align="center" width="50"><b>Hora Chegada</b></th>
            <th align="center" width="20"><b>Alterar</b></th>
            <th align="center" width="20"><b>Excluir</b></th>
	    </tr>
        <?php
            $sql = 'SELECT * FROM '.$tb_pronto_socorro;
                   ' WHERE gravidade LIKE "'.$procurar.
                   '%" ORDER BY gravidade';

        
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
	        <td align="center"><?php echo $row['paciente_cpf']; ?></td>
	        <td align="center"><?php echo $row['gravidade']; ?></td>          
            <td align="center"><?php echo $row['hora_chegada'];?></td>      
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