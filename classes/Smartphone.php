<?php 

include_once __DIR__.'/Prodotti.php';

class Smartphone extends Prodotto{
  //Property
  public $colore;
  public $quantita;
  public $prezzo;

  //Costruct
  public function __construct($_marca, $_nome, $_tipologia, $_sconto, $_colore, $_quantita, $_prezzo){
    parent::__construct($_marca, $_nome, $_tipologia, $_sconto);
    $this->colore = $_colore;
    $this->quantita = $_quantita;
    $this->prezzo = $_prezzo;
  }

}

