<?php
require_once  "Prodotto.php";

class Obiettivo extends Prodotto
{
  public $innesto;
  public $ingrandimento;


  public function __construct($_sku, $_marca, $_modello, $_prezzo, $_innesto)
  {
    parent::__construct($_sku, $_marca, $_modello, $_prezzo);
    $this->innesto = $_innesto;
  }
}

 ?>
