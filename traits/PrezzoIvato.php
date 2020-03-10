<?php

trait PrezzoIvato
{
  public $prezzoIvato;

  public function prezzoIvato(){
     $prezzoIvato = ($this->prezzo * 22) / 100;
     return $prezzoIvato;
  }

}
