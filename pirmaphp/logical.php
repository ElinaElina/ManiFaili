<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    if(3>10){
        print "tris ir lielaks par 10";

    }else {
        print "tris nav lielaks par 10";
    }
    print "</br>";
    if(3>10){
        print "tris ir lielaks par 10";

    }else if(4>5){
        print "cetri ir lielaks par 5";
    }else {
        print "Nekas neizpildijas"; 
    }
    print "</br>";
    if (1==2){
        print "go home you are drunk";
    }
    if (1=="1"){
            print "Idk";
    }
    print "</br>";
    if (1===3){
        print "not find";
    }
    // vienads ==
    // identiski === sakrit ari datu tipi
    // salidzinasana < > >= <= <>
    //nav vienads !=
    //nav identisks !==

    if ((1===1 && 2===2) || 3===3){
        print "ok";
    }
    print "</br>";
    if ((1===2 && 2===2) || 3===4){ //te nekas neizvadīs jo 1===2 nav vienadi un 3=4 nav vienadi....
        //te svarigi jo || sis svitras jo nozime vai, vai nu vai nu , ja kaut viens vai nu der tad izvadisies ok
        print "ok";
    }
    // && un
    // || vai
?>
<?php
    $number = 100;
    switch ($number){
        case 34:
        print "34";
        break;
        
        case 55:
        print "55";
        break;

        case 100:
        print "100";
        print "</br>";
        default:
        print "Error";

    }
?>

</body>
</html>