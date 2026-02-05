<?php

    // Classe Produto representa o nome, preço e quantidade em estoque.
    class Produto{
        public $nome; //Variavel
        public $preco;
        public $quantidade;
    
    // Construtor da classe Produto.
    public function __construct(string $nome, float $preco, int $quantidade) {
        $this->nome  = $nome;
        $this->preco   = $preco;
        $this->quantidade = $quantidade;
    }

    
    // Quantidade em estoque
    public function estoque() {
        echo "Produto: {$this->nome}<br>";
        echo "Preço: R$ {$this->preco}<br>";
        echo "Quantidade em estoque: {$this->quantidade}<br>";
    }

}


// Produto
$produto = new Produto("Camiseta", 50, 100);

// O estoque
$produto->estoque();




    abstract class Cliente {
        public $nome;
        public $cpf;
        public $email;

        public function __construct(string $nome, string $cpf, string $email) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
    }

        abstract public function desconto($valor);
}

        class ClienteComum extends Cliente {

        public function __construct(string $nome, string $cpf = "", string $email = "") {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->email = $email;
    }

        public function desconto($valor) {
        return $valor * 0.05;  // 5% 
    }
}

    class ClientePremium extends Cliente {

        public function __construct(string $nome, string $cpf = "", string $email = "") {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->email = $email;
    }

        public function desconto($valor) {
        return $valor * 0.15;  // 15%
    }
}


$clienteComum = new ClienteComum("João");
$clientePremium = new ClientePremium("Maria");

$valor = 200;

echo "Cliente comum R$ " . $clienteComum->desconto($valor) . "<br>";
echo "Cliente premium R$ " . $clientePremium->desconto($valor) . "<br>"; 


    class Pedido {
        public $cliente;    
        public $itens; 
        public $status;     

     public function __construct($cliente) {
        $this->cliente = $cliente;
        $this->status = "Aberto";

    }

}