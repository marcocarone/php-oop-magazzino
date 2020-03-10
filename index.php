<?php
//includo le classi che mi servono
require_once "classi/Prodotto.php";
require_once "classi/Fotocamera.php";
require_once "classi/Obiettivo.php";

// creo una istanza nuova per un semplice prodotto
$fotocamera = new Prodotto("K0345", "Canon", "EOS M50", 350);
$fotocamera->descrizione = "Descrizione prodotto";
var_dump($fotocamera);

// creo una istanza nuova per il prodotto specifico fotocamera
$f_K0345 = new Fotocamera("K0345", "Canon", "EOS M50", 350, "CMOS da 22,3 x 14,9 mm");
$f_K0345->messaFuoco = "EF e EF-S";
$f_K0345->descrizione = "Descrizione prodotto";
$f_K0345->iso = "1006400";
echo $f_K0345->prezzoIvato(22);
var_dump($f_K0345);

// creo una istanza nuova per il prodotto specifico obiettivo
$o_12320 = new Obiettivo("12320", "Canon", "EF 85mm f/1.4L IS USM", 1230, "Innesto EF");
$o_12320->ingrandimento = "10x";
$o_12320->descrizione = "Descrizione prodotto";
echo $o_12320->prezzoIvato(22);
var_dump($o_12320);
 ?>
