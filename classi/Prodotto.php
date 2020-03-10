<?php
class Prodotto {
  public $sku;
  public $marca;
  public $modello;
  public $descrizione;
  public $prezzo;

  public function __construct($_sku, $_marca, $_modello, $_prezzo)
  {
    $this->sku = $_sku;
    $this->marca = $_marca;
    $this->nome = $_modello;
    $this->prezzo = $_prezzo;


  }
}

?>
