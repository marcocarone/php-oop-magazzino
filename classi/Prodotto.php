<?php
require_once __DIR__ . "/../traits/PrezzoIvato.php";

class Prodotto {
  public $sku;
  public $marca;
  public $modello;
  public $descrizione;
  public $prezzo;
  use PrezzoIvato;



  public function __construct($_sku, $_marca, $_modello, $_prezzo )
  {
    $this->sku = $_sku;
    $this->marca = $_marca;
    $this->modello = $_modello;
    $this->prezzo = $_prezzo;
  }

  public function prezzoIvato($iva){
     $prezzoIvato = ($this->prezzo * $iva) / 100;
     return $prezzoIvato;
  }
}

?>
