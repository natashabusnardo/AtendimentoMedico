<?php
	require '../connect/Conexao.class.php';
	require '../connect/crud.class.php';
	require 'autoload.php';
	include '../connect/deault.inc.php';
	include '../model/Paciente.php';
$acao = '';
$codigo = '';
inserir();


// Métodos para cada operação
function inserir(){
    echo 'oi';
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'paciente');
    $paciente = dadosForm();
    // Insere os dados do usuário
    $arrayUser = array();
    $arrayUser['cpf'] = $paciente->getCpf();
    $arrayUser['nome'] = $paciente->getNome();
    $arrayUser['telefone'] = $paciente->getTelefone();
    $arrayUser['email'] = $paciente->getEmail();
	$arrayUser['gravidade'] = $paciente->getGravidade();
    $retorno   = $crud->insert($arrayUser);
    header("location:../view/cad_paciente.php");
}

// Busca as informações digitadas no form
function dadosForm()
{
    $paciente = new Paciente;   
    $dados = array();
    $dados['cpf'] = $_POST['cpf'];
    $dados['nome'] = $_POST['nome'];
    $dados['telefone'] = $_POST['telefone'];
    $dados['email'] = $_POST['email'];
    $dados['gravidade'] = $_POST['gravidade'];
    $paciente->buildFromArray($dados);
    return $paciente;
}