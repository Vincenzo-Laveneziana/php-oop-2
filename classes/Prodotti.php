<?php 

include_once __DIR__.'/Magazzino.php';

class Prodotto extends Magazzino{
  //Property
  public $nome;
  public $marca;
  public $tipologia;
  public $prezzo;

  //Construct
  public function __construct($_reparto, $_dispon, $_sconto, $_nome, $_marca, $_tipologia, $_prezzo){
    parent::__construct($_reparto, $_dispon, $_sconto);
    $this->nome = $_nome;
    $this->marca = $_marca;
    $this->tipologia = $_tipologia;
    $this->prezzo = $_prezzo;
  }

  public function show() {
    echo "Reparto: {$this->reparto} <br>";
    echo "Disponibilità: {$this->dispon} <br>";
    echo "Tipologia: {$this->tipologia} <br>";
    echo "Nome: {$this->nome} <br>";
    echo "Marca: {$this->marca} <br>";
    echo "Prezzo: €  {$this->prezzo} <br>";
    echo "Sconto del : {$this->sconto} % <br>";

  }

  public function calcolaSconto(){
    $percent = $this->prezzo * $this->sconto / 100;
    $prezzoFinale = $this->prezzo -  $percent;
    return  number_format($prezzoFinale,2);
  }

}

