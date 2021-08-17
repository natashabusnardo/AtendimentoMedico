<?php
	require '../connect/Conexao.class.php';
	require '../connect/crud.class.php';
    include "autoload.php";
	require 'autoload.php';
	include '../connect/deault.inc.php';
	include '../model/Atendimento.php';
	include '../model/Medico.php';
	include '../model/Paciente.php';
    include '../dao/enviaEmail.php';

$acao = '';
$codigo = '';
inserir();

if ($acao == "excluir"){
    $codigo = 0;
    if (isset($_GET["codigo"])){
          $codigo = $_GET["codigo"];
        excluir($codigo);
}}


// Métodos para cada operação

function excluir($codigo){
    $sql = 'DELETE FROM '.$GLOBALS['tb_atendimento'].
           ' WHERE codigo =  '.$codigo;
    $result = mysqli_query($GLOBALS['conexao'],$sql);
    if ($result == 1)
        header('location:list_atendimento.php');
    else
        header('location:list_atendimento.php');
}


function inserir(){
    $email = new enviaEmail();
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'atendimento');
    $atendimento = dadosForm();
    // Insere os dados do usuário
    $arrayUser = array();
    $arrayUser['paciente_cpf'] = $atendimento->getPaciente();
    $arrayUser['medico_crm'] = $atendimento->getMedico();
    $arrayUser['horario_atendimento'] = $atendimento->getHorarioAtendimento();
    $retorno   = $crud->insert($arrayUser);
    $email->geraEmail($atendimento);
    header("location:../view/cad_atendimento.php");
}

// Busca as informações digitadas no form
function dadosForm(){	
    echo $_POST['paciente_cpf'];
    $atendimento = new Atendimento;   
	$dados = array();
	$dados['medico_crm'] = $_POST['medico_crm'];
	$dados['paciente_cpf'] = $_POST['paciente_cpf'];
    $dados['horario_atendimento'] = $_POST['horario_atendimento'];
    $atendimento->buildFromArray($dados);
    return $atendimento;
}
 ?>