<?php
require_once('Database.php');

$db = new Database();

$fn = $_POST['fn'];
$ln = $_POST['ln'];
$cnic =  $_POST['cnic'];
$date = $_POST['date'];
$time = $_POST['time'];
$persons =  $_POST['persons'];

$res = $db->Book($fn, $ln, $cnic, $date, $time, $persons);


require_once('index.php');
// $o = new Check();
if($res === true){
    
//    header('location:index.php?');
    // $value= "11";
    // $o->fun($value);

}
else{
//    header('location:index.php?');
    // $value= "22";
    // $o->fun($value);
}
