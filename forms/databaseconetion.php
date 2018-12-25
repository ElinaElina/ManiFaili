<?php
 $connection = mysqli_connect('localhost','root','','website');


 //adrese kur atrodas mus datu baze, ta atrodas saja gadijuma, uz datora
 //lietotaj vards ir root sajaa gadijuma xampp
 // un parole, xmapp nav paroles tadel tuksumu atstat
 //datubazes nosaukums

 if ($connection) {
     print "Connection successfully";
 }else {
     die ("Connection filed");
 }
?>