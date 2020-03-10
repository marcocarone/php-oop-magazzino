<?php
//includo le classi che mi servono
require_once "classi/Prodotto.php";
// require_once "classi/Fotocamera.php";

// creo una istanza nuova per un semplice prodotto
$fotocamera = new Prodotto("K0345", "Canon", "EOS M50", 350);
$fotocamera->descrizione = "Descrizione prodotto";
var_dump($fotocamera);

//
// $fotocamera = new Fotocamera("K0345", "Canon", "EOS M50", 350, "CMOS da 22,3 x 14,9 mm");
// $fotocamera->messaFuoco = "EF e EF-S";
// $fotocamera->iso = "1006400";
//
//
// var_dump($fotocamera);
 ?>
