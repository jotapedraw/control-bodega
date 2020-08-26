<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == "usuario" && $pass == "kk"){
    //echo "funciona";
    header('Location: home.php');
}
else{
    header('Location: index.html');
}

?>