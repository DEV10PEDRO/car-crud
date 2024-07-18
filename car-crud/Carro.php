<?php
// Classe Carro que representa um carro
class Cell {
    private $marca;
    private $modelo;

    // Construtor da classe
    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        
    }

    // Getters para acessar as propriedades do carro
    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    }
?>
