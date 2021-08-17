<?php
class Atendimento{
    private $codigo;
    private $medico;
    private $paciente;
    private $horario_atendimento;

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

    public function getHorarioAtendimento(){
        return $this->horario_atendimento;
    }

    public function setHorarioAtendimento($horario_atendimento){
        $this->horario_atendimento = $horario_atendimento;
    }

    public function buildFromObj($obj){
        $obj = (array)$obj;
        $this->buildFromArray($obj);
    }

    public function buildFromArray($arr){
        $this->setPaciente($arr['paciente_cpf']);
        $this->setMedico($arr['medico_crm']);
        $this->setHorarioAtendimento($arr['horario_atendimento']);
    }

}
?>