<?php
class Medico{
    private $nome;
    private $crm;
    private $disponivel; 

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCrm(){
        return $this->crm;
    }

    public function setCrm($crm){
        $this->crm = $crm;
    }

    public function getDisponivel(){
        return $this->disponivel;
    }

    public function setDisponivel($disponivel){
        $this->disponivel = $disponivel;
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
        $this->setNome($arr['nome']);
        $this->setCrm($arr['crm']);
        $this->setDisponivel($arr['disponivel']);
        $this->setUsuarioId($arr['usuario']);
    }

}
?>