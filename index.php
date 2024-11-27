<?php

require_once 'item.php';
require_once 'inventario.php';
require_once 'player.php';
require_once 'ataque.php';
require_once 'magia.php';
require_once 'defesa.php';



// Personagens
$player1 = new Player(" Renan");
$player2 = new Player(" Bianca");

// Novo itens
$itemAtaque = new ataque("Machado Vinking");
$itemAtaque2 = new ataque ("Espada Quebrada");
$itemDefesa = new defesa(" Mascara de Urso");
$itemMagia = new magia("Cajado Amaldiçoado");
$itemMagia2 = new magia("Bola de fogo");

echo "Player2" . $player2->getnickname()."<br>";

$player2->coletarItem($itemAtaque);

echo "Player1 " . $player1->getnickname() . "<br>";
// adicionar itens
$player1->coletarItem($itemAtaque);
$player1->coletarItem($itemDefesa);
$player1->coletarItem($itemMagia);


// bolsa cheia
$player1->coletarItem($itemAtaque2) ;
$player1->coletarItem($itemMagia2);

// bolsa espaco da  bolsa
echo "Capacidade maxima do inventário: " . $player1->getCapacidade() . "<br>";

// Subindo nível e aumentando espaco da bolsa
$player1->subirNivel(); 
$player1->subirNivel();


$player1->coletarItem($itemMagia2);

//Sotlando intens

$player1->soltarItem($itemMagia);
$player1->soltarItem($itemMagia2);
$player1->soltarItem($itemMagia);




