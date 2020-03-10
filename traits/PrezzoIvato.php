<?php

trait PrezzoIvato
{

  public $prezzoIvato;

  public function prezzoIvato($iva){
     $prezzoconIva = $this->prezzo + (($this->prezzo * $iva) / 100);
     return $this->prezzoIvato = $prezzoconIva;
  }
}
