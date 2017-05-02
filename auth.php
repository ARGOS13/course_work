<?php
    require_once "config.php";
    $link = mysqli_connect($host,$user,$password,$database);
    $login=$_POST["login"];
    $password=$_POST["password"];
    $query = "SELECT * FROM users WHERE login = '$login'";
    $result = mysqli_query($link,$query);
    if ($result){
        $row = mysqli_fetch_assoc($result);
        if($login===$row['login']) {
            if ($password === $row['password']) {
                echo "welcome, " . $row['name']."!";
            } else echo "error in password";
        }
        else echo "error in login";
    }
?>