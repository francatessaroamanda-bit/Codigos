<?php


class Automovel {
    public $modelo;
    public $ano;
    public $cor;
    public $velocidadeMax;

    public function __construct($modelo, $ano, $cor, $velocidadeMax) {
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
        $this->velocidadeMax = $velocidadeMax;
    }

    public function acelerar() {
        echo "O {$this->modelo} ({$this->ano}) está acelerando até {$this->velocidadeMax} km/h<br>";
    }
}


class Animal {
    public $nome;
    public $especie;
    public $idade;
    public $som;

    public function __construct($nome, $especie, $idade, $som) {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->idade = $idade;
        $this->som = $som;
    }

    public function fazerSom() {
        echo "{$this->nome} ({$this->especie}) faz: {$this->som}<br>";
    }
}


class Filme {
    public $nome;
    public $genero;
    public $ano;
    public $duracao;

    public function __construct($nome, $genero, $ano, $duracao) {
        $this->nome = $nome;
        $this->genero = $genero;
        $this->ano = $ano;
        $this->duracao = $duracao;
    }

    public function assistir() {
        echo "Assistindo '{$this->nome}' ({$this->genero}) - {$this->duracao} minutos<br>";
    }
}


$carro1 = new Automovel("Ferrari", 2022, "Vermelha", 340);
$carro2 = new Automovel("Gol", 2015, "Branco", 180);
$carro3 = new Automovel("Civic", 2020, "Preto", 220);

$carro1->acelerar();
$carro2->acelerar();
$carro3->acelerar();

echo "<br>";


$animal1 = new Animal("Mel", "Cachorro", 3, "Latido");
$animal2 = new Animal("Mimi", "Gato", 2, "Miau");
$animal3 = new Animal("Louro", "Papagaio", 5, "Fala");

$animal1->fazerSom();
$animal2->fazerSom();
$animal3->fazerSom();

echo "<br>";


$filme1 = new Filme("Avatar", "Ficção Científica", 2009, 162);
$filme2 = new Filme("Titanic", "Romance", 1997, 195);
$filme3 = new Filme("Vingadores", "Ação", 2012, 143);

$filme1->assistir();
$filme2->assistir();
$filme3->assistir();

?>
