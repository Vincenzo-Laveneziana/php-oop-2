<?php 

class Magazzino{
  //Property
  public $reparto;
  public $dispon;
  public $sconto;

  //Construct
  public function __construct($_reparto, $_dispon, $_sconto){
    $this->reparto = $_reparto;
    $this->dispon = $_dispon;
    $this->sconto = $_sconto;
  }

}