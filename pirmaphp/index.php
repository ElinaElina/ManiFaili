<?php $title="Mana lapa"; //mainigais title, stringa tipa un vertiba mana lapa nosaukums
$title="Mana lapa vairs nav mana"; // mainita vertiba

// mainigais nevar sakties ar skaitli
//nevar atdalit ar minusa zimi
//lielo camel case lai atdalitu

$mansTitle="mans Nosaukums";
//vertibu tipi booolean, array, cikli utt

$number = 100;
$Number = 50; // integer tipa mainigais , var jau vairs nerakstit int 100
$float=100.5;

$htmltext = "<h1>hello</h1>";
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=>, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
  </head>
  <body><h1>Mana pirmā PHP lapa</h1>
  <h2><?php print $title?></h2>
  <?php print $number?>
  <?php print $Number?>
  <?php print $float?>
  <?php print $htmltext?>
  </body>
</html>
