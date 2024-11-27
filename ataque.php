<?php
require_once 'item.php';

class ataque extends Item {
    public function __construct($nome) {
        parent::__construct($nome, 7);
    }
}