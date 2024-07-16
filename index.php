<?php 
class Celular{

    public $marca;
    public $tipocarregador;
    public $fabricante;


    public function utilizar(){

        echo "Você está utilizando o $this->marca $this->fabricante";
    }
}
    
$meucelular = new Celular();

$meucelular->marca = "Xiaomi";

$meucelular->fabricante = "Redmi Note 13";
echo "<br>";
$meucelular->tipocarregador = "Seu carregador é tipo C ";


$meucelular->utilizar();


function consumo($capacidade, $corrente){
        
        $valor = ($capacidade  / $corrente);
        echo "<br>";
        echo "A duração da bateria é de $valor amperes";


    }

   consumo(4000, 0.5);

?>




