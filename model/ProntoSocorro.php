<?php
include '../model/Medico.php';
include '../model/Paciente.php';

class ProntoSocorro{
    
    private $medico;
    private $paciente;
    private $horaChegada;
    private $horaAtendimento;

    public function getCodigo(){
        return $this->codigo;
    }

    public function getMedico(){
        return $this->medico;
    }

    public function setMedico($medico){
        $this->medico = $medico;
    }

    public function getPaciente(){
        return $this->paciente;
    }

    public function setPaciente($paciente){
        $this->paciente = $paciente;
    }

    public function getHoraChegada(){
        return $this->horaChegada;
    }

    public function setHoraChegada($horaChegada){
        $this->horaChegada = $horaChegada;
    }

    public function getHoraAtendimento(){
        return $this->horaAtendimento;
    }

    public function setHoraAtendimento($horaAtendimento){
        $this->horaAtendimento = $horaAtendimento;
    }

    public function buildFromObj($obj){
        $obj = (array)$obj;
        $this->buildFromArray($obj);
    }

    public function buildFromArray($arr){
        $this->setPaciente($arr['paciente_cpf']);
        $this->setMedico($arr['medico_crm']);
        //$this->setHoraAtendimento($arr['hora_atendimento']);
        $this->setHoraChegada($arr['hora_chegada']);
    }

}
?>