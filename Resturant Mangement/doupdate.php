<?php
require_once('Database.php');

$db = new Database();

$id= $_POST['id'];
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$cnic =  $_POST['cnic'];
$email = $_POST['email'];
$status = $_POST['status'];
$c =  $_POST['contact'];

$res = $db->update($fn, $ln, $cnic, $email, $status, $c,$id);

if($res === true){
    header('location:adminhome.php?');
}