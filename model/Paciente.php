<?php
class Paciente{
    private $usuarioId;
    private $cpf;
    private $nome;
    private $telefone;
    private $email;
    private $proximo;


    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }
    
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }

    public function getProximo(){
        return $this->proximo;
    }
    
    public function setProximo($proximo){
        $this->proximo = $proximo;
    }

    public function getUsuarioId(){
        return $this->usuarioId;
    } 

    public function setUsuarioId($usuarioId){
        return $this->usuarioid->usuarioId;
    }

    public function buildFromObj($obj){
        $obj = (array)$obj;
        $this->buildFromArray($obj);
    }

    public function buildFromArray($arr){
        $this->setCpf($arr['cpf']);
        $this->setNome($arr['nome']);
        $this->setTelefone($arr['telefone']);        
        $this->setEmail($arr['email']);
        $this->setUsuarioId($arr['usuario']);
    }
  
}
?>