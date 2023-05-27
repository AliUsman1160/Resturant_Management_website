<?php
require_once('Database.php');

$db = new Database();

$un = $_POST['email'];
$u = $_POST['email'];
$pass = $_POST['pwd'];
$cpass = $_POST['cpwd'];
$s="Admin";

if($pass != $cpass){
    header('location:signup.php?rid=4');
}

else{
    $res = $db->signup($u, $pass);

    if($res === true){
    setcookie('loged_in', true);
    header('location:adminhome.php?rid=3');
    }
    
    else if($res === 0){
     header('location:signup.php?rid=4'); // rid=4 mean this user is not employee.
    }
    else 
    {
        header('location:signup.php?rid=6'); // rid=6 mean this user already signup
    }
}
