<?php
require_once  "Prodotto.php";

class Fotocamera extends Prodotto
{
  public $mirino;
  public $sensore;
  public $ISO;

  public function __construct($_sku, $_marca, $_modello, $_prezzo, $_sensore)
  {
    parent::__construct($_sku, $_marca, $_modello, $_prezzo)
    $this->sensore = $_sensore;
  }
}


 ?>
