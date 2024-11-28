<?php

class Item{
    public string $nome;
    public int $tamanho;

    public function __construct(string $nome, $tamanho){
        $this->nome=$nome;
        $this->tamanho=$tamanho;
    }

    public function getnome(): string{
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getTamanho(): int{
        return $this->tamanho;
    }

    public function setTamanho($tamanho) {
        $this->tamanho = $tamanho;
    }
}