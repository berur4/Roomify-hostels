<?php
$username = $_POST['username'];
$pass = $_POST['pass'];
$error = "";
$success = "";

if(isset($_POST['submit'])){
    if($username == "admin"){
        if($pass == "password"){
            $error = "";
            $success = "Welcome Admin!";
            //redirect to admin page after successful login
            header("Location: admin.html")
        }
        else{
            $error = "Invalid password!";
            $success = "";
        }
    }
    else{
        $error = "Invalid username!";
        $success = "";
    }
}
?>