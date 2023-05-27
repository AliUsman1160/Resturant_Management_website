<?php

$id = $_GET['id'];

require_once('Database.php');

$db = new Database();

$db->deleteEmployee($id);

header('location:adminhome.php');