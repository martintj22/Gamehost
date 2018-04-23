<?php

require_once("../sql/conn.php");

if(isset($_POST['fornavn'])) $fornavn = mysqli_real_escape_string($conn, $_POST['fornavn']);
if(isset($_POST['efternavn'])) $efternavn = mysqli_real_escape_string($conn, $_POST['efternavn']);
if(isset($_POST['brugernavn'])) $brugernavn = mysqli_real_escape_string($conn, $_POST['brugernavn']);
if(isset($_POST['email'])) $email = mysqli_real_escape_string($conn, $_POST['email']);
if(isset($_POST['psw'])) $password = mysqli_real_escape_string($conn, $_POST['psw']);
if(isset($_POST['pswRepeat'])) $passwordRepeat = mysqli_real_escape_string($conn, $_POST['pswRepeat']);

if($password != $passwordRepeat) {
    header("Location: ../index.php?err=psw");
}
else 
{
    $sql = "SELECT * FROM `users` WHERE `username` = '".$brugernavn."'";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows > 0) {
        header("Location: ../index.php?err=username");
    }
    else {
        $sql = "SELECT * FROM `users` WHERE `email` = '".$email."'";
        $result = mysqli_query($conn,$sql);
        if ($result->num_rows > 0) {
            header("Location: ../index.php?err=email");
        }
        else {
            $salted = $hashPre.$password.$hashPost;
            $hashed = hash('sha512', $salted);

            $sql = "INSERT INTO `web`.`users` (`username`, `password`, `products`, `firstName`, `lastName`, `email`) VALUES ('".$brugernavn."', '".$hashed."', 'none', '".$fornavn."', '".$efternavn."', '".$email."')";
            if(mysqli_query($conn,$sql)) {
                header("Location: ../index.php");
            }
            else {
                echo ("Something went horribly wrong");
            }
        }
    }
}
?>