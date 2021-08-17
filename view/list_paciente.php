<!DOCTYPE html>
<?php 
    include '../connect/connect.php';
    include '../util/imports.php';
    include '../control/valida.php';
    require_once "../control/autoload.php";
	$title = "Lista de Pacientes";
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
        <input type="text"   name="procurar" list="pacientes"
               id="procurar" size="37" value="<?php echo $procurar;?>">
        <datalist id="pacientes">
        <?php 
            $sql = 'SELECT * FROM '.$tb_paciente;
            $result = mysqli_query($conexao,$sql);
            while ($row = mysqli_fetch_array($result))
                echo '<option value="'.$row['cpf'].'">';
        ?>
        </datalist>
        <input type="submit" name="acao" id="acao">
        <a href="cad_paciente.php">Novo Paciente</a>
        <br><br>
        <table width="60%">
	    <tr>
            <th width="20"><b>CPF</b></th>
            <th width="20"><b>Nome</b></th>            
            <th width="20"><b>Telefone</b></th>
            <th width="20"><b>Email</b></th>

            <th width="20"><b>Alterar</b></th>
            <th width="20"><b>Excluir</b></th>
	    </tr>
        <?php
            $sql = 'SELECT * FROM '.$tb_paciente;
                   ' WHERE nome LIKE "'.$procurar.
                   '%" ORDER BY nome';
            $result = mysqli_query($conexao,$sql);
            $cont = 0;
            while ($row = mysqli_fetch_array($result)){ 
            if ($cont % 2 == 0)
                echo '<tr>';
            else
                echo '<tr class="sombra">';
            $cont++;
        ?>
            <td align="center"><?php echo $row['cpf'];?></td>
	        <td align="center"><?php echo $row['nome']; ?></td>          
            <td align="center"><?php echo $row['telefone'];?></td>
            <td align="center"><?php echo $row['email'];?></td>          
            <td align="center"><a href="cad_paciente.php?acao=editar&cpf=<?php echo $row['cpf'];?>"><i class="fas fa-edit"></i></a></td>
            <td align="center"><a href="javascript:excluirRegistro('../control/acaoPaciente.php?acao=excluir&cpf=<?php echo $row['cpf'];?>')"><i class="fas fa-trash-alt"></i></a></td>
	    </tr>
            <?php } ?>       
        </table>
    </fieldset>
    </form>
    <?php include '../util/msg.php'; ?>
</body>
</html>