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
    $counter=0;
    while($counter <=10){
        echo $counter; // print un echo ir viens un tas pats
        $counter++; 
    }
    print "<br>";
    // $counter=0;

    for ($counter=0; $counter <10; $counter++){
        print $counter."<br>";


    }
    $masivs = array("firstname" => "Elina", "lastname" => "Silina");
    foreach ($masivs as $key => $value){
        print $value." " .$key."<br>";// key ir  
    }

    ?>
</body>
</html>