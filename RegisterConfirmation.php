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
    $name = $_POST["Uname"];
    $email = $_POST["email"];
    $pass = $_POST["pwd"];
    $confpass = $_POST["cpwd"];
    


    $selectname = "SELECT * FROM users WHERE Username = '$name' AND Email = '$email' ";

   // $resultname = $conn->query($selectname);
    $result = mysqli_query($conn, $selectname);


   // echo $resultname;
    if (mysqli_num_rows($result) === 0) {
        if($pass != $confpass){
            header("Location: register.php?error2=Password Not Matching");
        }else{
            $insertdata = "INSERT INTO users (Username, Email, Pass) VALUES('$name', '$email', '$pass')";
            $conn->query($insertdata);
            header("Location: inbetween.php");
            exit();
        }
    }else{

        header("Location: login.php?error=Username or Email Already Exist");         
        

        exit();
    }
}

Confirm($conn);
?>