<?php

// Classe Produto
class Produto{
    public $nome;
    public $preco;
    public $quantidade;

    public function __construct($nome, $preco, $quantidade){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    // estoque
    public function atualizarEstoque($quantidade){
        $this->quantidade -= $quantidade;
    }

    // produto
    public function exibirProduto(){
        return "{$this->nome} R$ {$this->preco} - Estoque: {$this->quantidade}<br>";
    }
}

// Classe Cliente
abstract class Cliente{
    public $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }

    // desconto
    abstract public function desconto($valor);
}

// Cliente Comum
class ClienteComum extends Cliente{
    public function desconto($valor){
        return $valor * 0.05;
    }
}

// Cliente Premium
class ClientePremium extends Cliente{
    public function desconto($valor){
        return $valor * 0.15;
    }
}

// Classe Pedido
class Pedido{
    private $cliente;
    private $itens = [];
    private $status = 'aberto';

    public function __construct(Cliente $cliente){
        $this->cliente = $cliente;
    }

    // Adiciona produto ao pedido
    public function addProduto(Produto $produto, $quantidade){
        if ($quantidade <= $produto->quantidade) {
            $this->itens[] = ['produto' => $produto, 'quantidade' => $quantidade];
            $produto->atualizarEstoque($quantidade);
        } else {
            echo "Estoque insuficiente de {$produto->nome}.<br>";
        }
    }

    // Total sem desconto
    public function total(){
        $total = 0;
        foreach ($this->itens as $item) {
            $total += $item['produto']->preco * $item['quantidade'];
        }
        return $total;
    }

    // Total com desconto
    public function comDesconto(){
        return $this->total() - $this->cliente->desconto($this->total());
    }

    // pedido
    public function pedido(){
        $detalhes = "Cliente: {$this->cliente->nome}<br>";
        foreach ($this->itens as $item) {
            $detalhes .= $item['produto']->exibirProduto() . "Quantidade: {$item['quantidade']}<br>";
        }
        $detalhes .= "Status: {$this->status}<br>";
        return $detalhes;
    }

    // Alterar status do pedido
    public function Status($status){
        if (in_array($status, ['aberto', 'pago', 'enviado', 'cancelado'])) {
            $this->status = $status;
        }
    }
}

// Criando produtos e clientes
$produto1 = new Produto("Camiseta", 50, 100);
$clienteComum = new ClienteComum("João (comum)");
$clientePremium = new ClientePremium("Maria (premium)");

// Pedido do Cliente Comum
$pedido1 = new Pedido($clienteComum);
$pedido1->addProduto($produto1, 2);

// Pedido e valores
echo $pedido1->pedido();
echo "Total sem desconto: R$ " . $pedido1->total() . "<br>";
echo "Total com desconto: R$ " . $pedido1->comDesconto() . "<br><br>";

// Status do pedido João
$pedido1->Status('pago');
echo $pedido1->pedido();
echo "Total com desconto: R$ " . $pedido1->comDesconto() . "<br><br>";

// Pedido do Cliente Premium
$pedido2 = new Pedido($clientePremium);
$pedido2->addProduto($produto1, 1);


// O pedido e valores
echo $pedido2->pedido();
echo "Total sem desconto: R$ " . $pedido2->total() . "<br>";
echo "Total com desconto: R$ " . $pedido2->comDesconto() . "<br><br>";

// Status do pedido Maria
$pedido2->Status('pago');
echo $pedido2->pedido();
echo "Total com desconto: R$ " . $pedido2->comDesconto() . "<br><br>";