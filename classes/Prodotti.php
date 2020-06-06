<?php 

class Prodotto {
  //Property
  public $marca; 
  public $nome;
  public $tipologia;
  public $sconto;

  //Construct
  public function __construct( $_marca, $_nome, $_tipologia, $_sconto){
    $this->marca = $_marca;
    $this->nome = $_nome;
    $this->tipologia = $_tipologia;
    $this->sconto = $_sconto;
  }

  //Methos
  public function show() {
    echo "Tipologia: {$this->tipologia} <br>";
    echo "Nome: {$this->nome} <br>";
    echo "Marca: {$this->marca} <br>";
    echo "Sconto: {$this->sconto}% <br>";
  }

  public function calcolaSconto($_prezzo){
    $percent = $this->prezzo * $this->sconto / 100;
    $prezzoFinale = $this->prezzo -  $percent;
    return  number_format($prezzoFinale,2, ",",".");
  }

  //Verifica la disponibilità del prodotto
  public function disponibilita($_quantita){
    if ($this->quantita <= 0){
      return 'Non Disponibile';
    } else{
      return 'Disponibile';
    }
  }
  

}

