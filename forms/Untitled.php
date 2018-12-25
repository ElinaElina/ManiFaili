<?php 
include "databaseconetion.php";



// DELETE FROM `users` WHERE `users`.`index` = 1

if (isset($_POST['delete'])){
    print_r($_POST);
        $index2delete = $_POST['index'];
        $index2update = $_POST['index'];
        // $index2users = $_POST['username']; te vajag uztaistit atsevsksi ka delete tikai update
    $query = "DELETE FROM `users` WHERE `users`.`index` = '$index2delete'";
    $sql = "UPDATE MyGuests SET users='$index2users' WHERE id= '$index2update'";


    print  $index2delete;
    $delete_result = mysqli_query($connection,$query);

    print  $index2update;
    $update_result = mysqli_query($connection,$sql);

    print  $index2users;
    $update_result = mysqli_query($connection,$sql);
}
if ($delete_result) {
    print "User deleted";
}else {
    print "Error".mysqli_error($connection);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
</head>
<body>
<h1>All user</h1>
<table class= "table"> 
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">created</th>
      <th scope="col">lastname</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>



<?php

$query = "SELECT * FROM `users`";
$result = mysqli_query($connection,$query);

$sql= "UPDATE `users` SET `username` = 'lietotajss', `password` = 'paroleeees' WHERE `users`.`index` = 11;";
$result = mysqli_query($connection,$sql);

if(!$result){
    die("Query failed".mysqli_error());
} else {
    // print_r($result);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        print "<tr>";
        print "<td>".$row["index"]."</td>";
        print "<td>".$row["username"]."</td>";
        print "<td>".$row["password"]."</td>";
        print "<td>".$row["created"]."</td>";
        print "<td>".$row["lastname"]."</td>";
        print "<td>".$row["email"]."</td>";
        print "</tr>";

        // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
}

?>

    </tbody>
    </table>
  
<form action="Untitled.php" method="post">
<input type="number" name="index" id="index" placeholder="User ID">
<input type="submit" value="delete" name="delete">
</form>
<form action="Untitled.php" method="post">
<input type="number" name="index" id="index" placeholder="User ID">
<input type="number" name="username" id="index" placeholder="User ID">
<input type="number" name="password" id="index" placeholder="User ID">
<input type="submit" value="update" name="update">
</form>
</body>
</html>