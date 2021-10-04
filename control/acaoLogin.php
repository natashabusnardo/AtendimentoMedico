<?php
include '../connect/connect.php';
include '../connect/default.inc.php';
$acao = '';
if (isset($_GET["acao"])) {
	$acao = $_GET["acao"];
}
if ($acao == "logoff") {
	session_start();
	session_destroy();
	header("location:../view/login.php");
} else {
	if (isset($_POST["acao"])) {
		$acao = $_POST["acao"];
		if ($acao == "login") {
			$user = $_POST['user'];
			$senha = $_POST['pass'];
			logar($user, $senha);
		}
	}
}
?>
	<?php
	function logar($user, $senha)
	{
		$sql = "SELECT * FROM " . $GLOBALS['tb_usuario'] .
			" WHERE login = '$user'";
		$result = mysqli_query($GLOBALS['conexao'], $sql);
		$senha = "";
		$usuario = "";
		$nome = "";
		while ($row = mysqli_fetch_array($result)) {		
			$usuario = $row['nomeUsuario'];
			$senhaBD = $row['senhaUsuario'];
		}

		if ($senha == $senhaBD) {
			session_start();
			$_SESSION['nomeUsuario'] = $usuario;
			$_SESSION['nome'] = $nome;
			header("location:../view/cad_medico.php");
		} else {

			header("localtion:../view/login.php");
		}
	}
	?>