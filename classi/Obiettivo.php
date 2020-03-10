<?php
require_once  "Prodotto.php";
require_once __DIR__ . "/../traits/PrezzoIvato.php";

class Obiettivo extends Prodotto
{
  public $innesto;
  public $ingrandimento;
  use PrezzoIvato;


  public function __construct($_sku, $_marca, $_modello, $_prezzo, $_innesto)
  {
    parent::__construct($_sku, $_marca, $_modello, $_prezzo);
    $this->innesto = $_innesto;
  }
}

 ?>
