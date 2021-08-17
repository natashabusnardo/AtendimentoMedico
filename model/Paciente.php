<?php
class Paciente{
    private $cpf;
    private $nome;
    private $telefone;
    private $gravidade;
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

    public function getGravidade(){
        return $this->gravidade;
    }

    public function setGravidade($gravidade){
        $this->gravidade = $gravidade;
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

    public function buildFromObj($obj){
        $obj = (array)$obj;
        $this->buildFromArray($obj);
    }

    public function buildFromArray($arr){
        $this->setCpf($arr['cpf']);
        $this->setNome($arr['nome']);
        $this->setTelefone($arr['telefone']);
        $this->setGravidade($arr['gravidade']);
        $this->setEmail($arr['email']);
    }
  
}
?>