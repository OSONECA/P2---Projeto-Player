<?php
require_once 'item.php';

class Magia extends Item {
    public function __construct($nome) {
        parent::__construct($nome, 2);
    }
}