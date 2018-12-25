
<?php
include "databaseconetion.php";

//print_r(FILTER_VALIDATE_EMAIL);


if (isset($_POST['legal'])){
    $error=false;
     //print_r($_POST);

    if (strlen($_POST['username']) < 8){
        $error=true;
        print "Username incorrect";
    }
    
    if (strlen($_POST['username']) > 64  ){
        $error=true;
        print "Username too long";
    }

    // if ( strlen($_POST['lastname'])  ){
    //     $error=true;
    //     print "lastname";
    // }

    if ( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
        $error=true;
        print "email";
    }

    if (strlen($_POST['password'])<8){
        $error=true;
        print "Password too short";
    }

    print_r($error);

    if ($error==false){
        $username = $_POST['username'];
        $lastname =  $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // INSERT INTO `users` (`index`, `username`, `password`, `created`, `email`, `lastname`) VALUES (NULL, 'lietotajs', 'paroleeee', CURRENT_TIMESTAMP, '', '');
        $query = "INSERT INTO `users` (`index`, `username`, `password`, `created`, `email`, `lastname`)";
       
        $query .= "VALUES (NULL, '$username', '$password', CURRENT_TIMESTAMP, '$email', '$lastname');";

        // print "User saved!, check your email!";
       $result = mysqli_query($connection,$query);

       if(!$result){
           die("Query failed".mysqli_error());
       } else {
           print "<br> User saved";
       }
    }
} else {
    echo 'No Neeksiste';
}
?>