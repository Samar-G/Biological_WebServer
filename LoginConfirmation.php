<?php

$servername = "Localhost";
$username = "root";
$password = "usbw";
$dbname = "bloodissues";
$message = "Connected Successfully";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




function Confirm($conn)
{
    $name = $_POST["email"];
    $pass = $_POST["pwd"];
    


    $selectname = "SELECT * FROM users WHERE Email = '$name' AND Pass = '$pass' ";

   // $resultname = $conn->query($selectname);
    $result = mysqli_query($conn, $selectname);


   // echo $resultname;
    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);

        if ($row['Email'] === $name && $row['Pass'] === $pass) {

            echo "Logged in!";
            header("Location: inbetween.php");

            exit();
    }
    }else{

        header("Location: login.php?error=Incorrect Email or Password");         
        

        exit();
    }
}

Confirm($conn);
?>