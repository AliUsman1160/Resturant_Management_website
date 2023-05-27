<?php
require_once('Database.php');

$db = new Database();

$un = $_POST['email'];
$pass = $_POST['pwd'];

$res = $db->signin($un, $pass);

if($res === true){
    setcookie('loged_in', time()+3600);
    header('location:adminhome.php?rid=1');
}
else{
    header('location:signin.php?rid=2');
}

class signin_c{

    function WrongE()
    {
        $e=2;
        if($res !== true){
            return $e;
        }
    }
    
}