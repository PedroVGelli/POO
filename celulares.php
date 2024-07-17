<?php 
class Celular{

    private $marca;
    private $tipocarregador;
    private $fabricante;


    public function__construct($marca, $tipocarregador, $fabricante) {
        $this->marca = $marca;
        $this->tipocarregador = $tipocarregador;
        $this->fabricante = $fabricante;
}




public function getmarca() {
    return $this->marca;
}

public function getfabricante() {
    return $this->fabricante;
}

public function gettipocarregador() {
    return $this->tipocarregador;
}


function consumo($capacidade, $corrente){
        
        $valor = ($capacidade  / $corrente);
        echo "<br>";
        echo "A duração da bateria é de $valor amperes";


    }

   consumo(4000, 0.5);

}
?>




