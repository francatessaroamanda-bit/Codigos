<?php


abstract class Automovel {
    public $modelo;
    public $ano;

    public function __construct($modelo, $ano) {
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    
    public function Acelera() {
        echo "{$this->modelo} está se movimentando<br>";
    }
}


class CarroEsportivo extends Automovel {
    function Acelera() {
        echo "{$this->modelo} acelerou rápido<br>";
    }
}


abstract class Animal {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    
    public function Barulho() {
        echo "{$this->nome} está fazendo um som<br>";
    }
}


class Cachorro extends Animal {
    public function Barulho() {
        echo "{$this->nome} está latindo<br>";
    }
}


class Filme {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    
    public function Assistir() {
        echo "Assistindo {$this->nome}<br>";
    }
}


$carro = new CarroEsportivo("Ferrari", 2022);
$carro->Acelera();

$cachorro = new Cachorro("Mel");
$cachorro->Barulho();

$filme = new Filme("Avatar");
$filme->Assistir();

?>