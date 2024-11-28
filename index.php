<?php
require_once 'Item.php';
require_once 'Inventario.php';
require_once 'Player.php';
require_once 'Ataque.php';
require_once 'Magia.php';
require_once 'Defesa.php';

$player1 = new Player("Renan");
$player2 = new Player("Bianca");

$itemAtaque = new Ataque("Machado Vinking");
$itemAtaque2 = new Ataque ("Espada Quebrada");
$itemDefesa = new Defesa(" Mascara de Urso");
$itemDefesa2= new Defesa("Escudo de Tartaruga");
$itemMagia = new Magia("Cajado Amaldiçoado");
$itemMagia2 = new Magia("Bola de fogo");

echo "Player2 " . $player2->getnickname()."<br>";
$player2->coletarItem($itemDefesa2);

echo "Player1 " . $player1->getnickname() . "<br>";
$player1->coletarItem($itemAtaque);
$player1->coletarItem($itemDefesa);
$player1->coletarItem($itemMagia);
$player1->coletarItem($itemAtaque2);
$player1->coletarItem($itemMagia2);

echo "Capacidade maxima do inventário: " . $player1->getCapacidade() . "<br>";

$player1->subirNivel(); 
$player1->subirNivel();

$player1->coletarItem($itemMagia2);

$player1->soltarItem($itemMagia);
$player1->soltarItem($itemMagia2);
$player1->soltarItem($itemMagia);
?>



