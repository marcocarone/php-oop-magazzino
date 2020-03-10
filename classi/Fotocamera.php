<?php
require_once  "Prodotto.php";
require_once __DIR__ . "/../traits/PrezzoIvato.php";

class Fotocamera extends Prodotto
{
  public $messaFuoco;
  public $sensore;
  public $iso;
  use PrezzoIvato;

  public function __construct($_sku, $_marca, $_modello, $_prezzo, $_sensore)
  {
    parent::__construct($_sku, $_marca, $_modello, $_prezzo);
    $this->sensore = $_sensore;
  }
}

 ?>
