<?php

class player{
    public  string $nickname;
    public  int $nivel;
    public  $inventario;

    public function __construct($nickname) {
        $this->nickname=$nickname;
        $this->nivel= 0;
        $this->inventario= new inventario();
    }

    public function getnickname () {
        return $this->nickname;
    }

    public function setnickname ($nickname) {
        $this->nickname= $nickname;
    }

    public function getnivel () {
        return $this->nivel;
    }

    public function setnivel ($nivel) {
        $this->nivel= $nivel;
    }

    public function getinventario() {
        return $this->inventario;
    }

    public function setinventario ($inventario) {
        $this->inventario=$inventario;
    }

    public function subirNivel(): void {
        $this->nivel++; 
        $aumentoCapacidade = 3; 
        $novaCapacidade = $this->inventario->getCapacidade() + $aumentoCapacidade;
        $this->inventario->setCapacidade($novaCapacidade);  // Atualiza a capacidade no inventário
        
        echo "Você subiu para o nível " . $this->nivel . ". Nova capacidade do inventário: " . $novaCapacidade . "<br>";
    }

    public function getCapacidade() {  
        return $this->inventario->getCapacidade();
    }

    public function coletarItem($item) {
        if ($this->inventario->adicionarItem($item)) {
            echo "Item coletado: " . $item->getNome() . "<br>";
        } else {
            echo  "Não há espaço no inventário para este item:  " . $item->getNome() ."<br>";
        }
    }

    public function soltarItem($item) {
        if ($this->inventario->removerItem($item)) {
            echo "Item solto: " . $item->getNome() . "<br>";    
        } else {
            echo "Item não encontrado no inventário!<br>";
        }
    }
}
