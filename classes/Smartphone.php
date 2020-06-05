<?php 

include_once __DIR__.'/Prodotti.php';

class Smartphone extends Prodotto{
  //Property
  public $colore;
  public $disponibilita;
  public $prezzo;

  //Costruct
  public function __construct($_marca, $_nome, $_tipologia, $_sconto, $_colore, $_disponibilita, $_prezzo){
    parent::__construct($_marca, $_nome, $_tipologia, $_sconto);
    $this->colore = $_colore;
    $this->disponibilita = $_disponibilita;
    $this->prezzo = $_prezzo;
  }

}

