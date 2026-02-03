<?php

class automovel{
    public $modelo;
    public $ano;
    public $cor;

    function __construct(string $modelo, float $ano, string $cor){
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
    }

    function andar(){
        
        echo "{$this->modelo} está andando<br>";
    }
}


$Carro = new automovel("Carro", 2022, "Prata");

$Carro->andar();


$Moto = new automovel("Moto", 2020, "Preto");

$Moto->andar();

$Onibus = new automovel("Onibus", 2021, "Branco");

$Onibus->andar();



class animal{
    public $especie;
    public $peso;
       

    function __construct(string $nome, float $peso)
    {
        $this->nome = $nome;
        $this->peso = $peso;
    }

    function andar()
    {
        echo "{$this->nome} está andando<br>";
    }
}


$Cachorro = new animal("Cachorro", 12);

$Cachorro->andar();


$Hiena = new animal("Hiena", 50);

$Hiena->andar();

$Taturana = new animal("Taturana", 10);

$Taturana->andar();


class filme{
    public $nome;
    public $ano;
    public $genero;

    function __construct(string $nome, float $ano, string $genero){
        $this->nome = $nome;
        $this->ano = $ano;
        $this->genero = $genero;
    }

    function andar(){
        
        echo "{$this->nome} está andando<br>";
    }
}


$Avatar = new filme("Avatar", 2009, "genero");

$Avatar->andar();


$Carros = new filme("Carros", 2000, "genero");

$Carros->andar();

$Rio = new filme("Rio", 2010, "genero");

$Rio->andar();