<?php
	require '../connect/Conexao.class.php';
	require '../connect/crud.class.php';
	include '../connect/default.inc.php';
	include '../model/Medico.php';
$acao = '';
$codigo = '';
inserir();


// Métodos para cada operação
function inserir(){
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'medico');
    $medico = dadosForm();
    // Insere os dados do usuário
    $arrayUser = array();
    $arrayUser['crm'] = $medico->getCrm();
    $arrayUser['nome'] = $medico->getNome();
    $arrayUser['disponivel'] = $medico->getDisponivel();
    $arrayUser['usuario_id'] = $medico->getUsuarioId();
    $retorno   = $crud->insert($arrayUser);
    header("location:../view/cad_medico.php");
}

// Busca as informações digitadas no form
function dadosForm(){
    $medico = new Medico;   
    $dados = array();
    $dados['crm'] = $_POST['crm'];
    $dados['nome'] = $_POST['nome'];
    $dados['disponivel'] = $_POST['disponivel'];
    $dados['usuario_id'] = $_POST['usuario_id'];
    $medico->buildFromArray($dados);
    return $medico;
}