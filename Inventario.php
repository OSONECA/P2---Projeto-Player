<?php

class Inventario {
    private $capacidade;
    private $itens;

    public function __construct($capacidade = 20) {
        $this->capacidade = $capacidade;
        $this->itens = [];
    }

    public function getCapacidade() {
        return $this->capacidade;
    }

    public function setCapacidade($capacidade) {
        $this->capacidade = $capacidade;
    }

    public function getItens() {
        return $this->itens;
    }

    public function setItens($itens){
        $this->itens=$itens;
    }

    public function getEspacoDisponivel() {
        $ocupado = 0;
        foreach ($this->itens as $item) {
            $ocupado += $item->getTamanho();
        }
        return $this->getCapacidade() - $ocupado;
        }


    public function adicionarItem($item) {
        if ($this->getEspacoDisponivel() >= $item->getTamanho()) {
            $this->itens[] = $item;
            return true;
        }
        return false;
    }

    public function removerItem($item) {
        $nomeitem = array_search($item, $this->itens);
        if ($nomeitem !== false) {
            unset($this->itens[$nomeitem]);
            return true;
        }
        return false;
    }

}
?>