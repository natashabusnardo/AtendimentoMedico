<?php
	require '../connect/Conexao.class.php';
	require '../connect/crud.class.php';
	require 'autoload.php';
	include '../connect/deault.inc.php';
    include '../model/ProntoSocorro.php';

$acao = '';
$codigo = '';

inserir();

// Métodos para cada operação


function inserir(){
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'prontosocorro');
    $prontoSocorro = dadosForm();

    // Insere os dados do usuário
    $arrayUser = array();

    $arrayUser['paciente_cpf']= $prontoSocorro->getPaciente();
    $arrayUser['medico_crm']= $prontoSocorro->getMedico();
    $arrayUser['hora_chegada']= $prontoSocorro->getHoraChegada();
    $arrayUser['gravidade'] = $prontoSocorro->getGravidade();
    //$arrayUser['hora_atendimento']  = $_POST['hora_atendimento'];
    
    $retorno   = $crud->insert($arrayUser);
    echo $retorno;
    header("location:../view/cad_prontoSocorro.php");
}

// Busca as informações digitadas no form
function dadosForm(){	
    echo $_POST['paciente_cpf'];
    $prontoSocorro = new ProntoSocorro;   
	$dados = array();
	$dados['medico_crm'] = $_POST['medico_crm'];
	$dados['paciente_cpf'] = $_POST['paciente_cpf'];
    $dados['hora_chegada'] = $_POST['hora_chegada'];
    $dados['gravidade'] = $dados['gravidade'];
    $prontoSocorro->buildFromArray($dados);
    return $prontoSocorro;
}