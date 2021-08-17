<?php
	// Banco de Dados
    define('HOST', 'localhost');  
    define('DBNAME', 'projetofinal');    
    define('USER', 'root');  
    define('PASSWORD', '');

    define('DRIVER', 'mysql'); 
    define('CHARSET', 'utf8');

    // Geral da Aplicação
    define('NOME_DO_PROJETO','Atendimento Médico');
    define('DESCRICAO_DO_PROJETO','Atendimento Médico');
    
    $url = "127.0.0.1"; // IP do host
	$dbname="projetofinal"; // Nome do database
	$usuario="root"; // Usuário do database
	$password=""; // Senha do database
	
	// Tabelas do Banco de Dados
	$tb_usuario = "usuario";
	$tb_atendimento = "atendimento";
	$tb_medico = "medico";
	$tb_paciente = "paciente";
	$tb_pronto_socorro = "prontosocorro";
	
?>