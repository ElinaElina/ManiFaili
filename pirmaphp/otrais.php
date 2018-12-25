<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cipari</title>
</head>
<body>

<?php
             
// $number = array("viens" => "0 viens", "divi" => "1 divi", "tris" => "2 tris" );
// $number = array[0];
// print $number["viens"];
// print "</br>";
// print $number["divi"];       
// print "</br>";
// print $number["tris"];    
// $numbers[0] = " 0 viens";
// $numbers[1] = " 1 divi";
// $numbers[2] = "2 tris";
    
//       print $numbers[0];
//       print "</br>";
//       print $numbers[1];
//       print "</br>";
//       print $numbers[2];
//       print "</br>";
   
$number = array("viens"=>"0", "divi"=>"1", "tris"=>"2");

foreach($number as $x => $x_value) {
    print "<td> " . $x . "<td> " . $x_value;
    print "<br>";
}
?>

</body>
</html>