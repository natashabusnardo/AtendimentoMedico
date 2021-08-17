<?
class Administrador
{   
    private $codigo;
    private  $nomeUsuario;
    private  $senhaUsuario;

    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function getNomeUsuario(){
        return $this->nomeUsuario;
    }

    public function setNomeUsuario($nomeUsuario){
        $this->nomeUsuario = $nomeUsuario;
    }

    public function getSenhaUsuario(){
        return $this->senhaUsuario;
    }
    public function setSenhaUsuario($senhaUsuario){
        $this->senhaUsuario = $senhaUsuario;
    }

    
}
?>