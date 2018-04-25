<?php

    require_once("../sql/conn.php");

    if(isset($_POST['uname'])) $username = mysqli_real_escape_string($conn, $_POST['uname']);
    if(isset($_POST['psw'])) $password = mysqli_real_escape_string($conn, $_POST['psw']);

    // DO NOT TOUCH THIS PART UNLESS YOU ABSOLUTLEY KNOW WHAT YOU ARE DOING!!!
    $salted = $hashPre.$password.$hashPost;
    $hashed = hash('sha512', $salted);

    // ______________________________________________________________________________

    if(strlen($username) > 5) {
        if (strlen($password) > 5) {
            $sql = "SELECT * FROM `users` WHERE `username` = '".$username."'";
            $result = mysqli_query($conn,$sql);

            if($result->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    if($row['password'] == $hashed) {
                        session_start();
                        $_SESSION['userLevel'] = $row['userlevel'];
                        $_SESSION["id"] = $row['id'];
                        $_SESSION['username'] = $row['username'];
                    }
                }
            }
        }
    }

   header("Location: ../index.php")
    
?>

