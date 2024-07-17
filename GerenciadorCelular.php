<?php
class GerenciadorCelular {
    private $telefone = [];
    private $arquivo = 'dados.json';

    public function __construct() {
        if (file_exists($this->arquivo)) {
            $dados = file_get_contents($this->arquivo);
            $this->celular = json_decode($dados, true) ?? [];
        }
    }

    public function adicionarCelular($celulares) {
        $this->celular[] = [
            'marca' => $celulares->getmarca(),
            'tipodecarregador' => $celulares->gettipodecarregador(),
            'fabricante' => $celulares->getfabricante(),
        ];
        $this->salvarDados();
    }

    public function deletarCelular($indice) {
        if (isset($this->telefone[$indice])) {
            array_splice($this->telefone, $indice, 1);
            $this->salvarDados();
        }
    }

    public function getCelular() {
        return $this->telefone;
    }

    private function salvarDados() {
        file_put_contents($this->arquivo, json_encode($this->telefone, JSON_PRETTY_PRINT));
    }
}
?>