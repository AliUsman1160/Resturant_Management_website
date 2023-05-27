<?php
class Database{
    private $db;

    function __construct(){
        try{
            $this->db = new PDO("mysql:host=localhost;dbname=project",
                "root",
                "");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);;
            //print('db connected');
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    } 

    function signup($u,$p){
        $a=0;
        $b=1;
      
$sql = "SELECT * FROM `employees` WHERE email=? AND status=\"Admin\";";
        
        $st = $this->db->prepare($sql);
        $st->execute(array($u));

        if($st->rowCount() == 1 ){
            try{
                $sql = "INSERT INTO `admin` (`email`, `password`) VALUES (?,?);";
                $st = $this->db->prepare($sql);
                $st->execute(array($u, $p));
                return true;
            }
            catch(PDOException $e){
                return $b; // $b=1 mean this user already signup
            }      
        }
        else{
            return $a; // $a=0 mean this user is not employee.
        }   
    }

    function signIn($u, $p){
        $sql = "SELECT * FROM `admin` WHERE `email`=? AND `password`= ?;";
        
        $st = $this->db->prepare($sql);
        $st->execute(array($u, $p));

        if($st->rowCount() == 1 ){
            return true;
        }
        else{
            false;
        }
    }

    function Book($fn, $ln, $cnic, $date, $time, $persons){
        try{

            $sql = "INSERT INTO `bookings` (`id`, `fname`, `lname`, `cnic`, `date`, `time`, `person`) VALUES (NULL, ?, ?, ?, ?, ?, ?);";

            $st = $this->db->prepare($sql);
            $st->execute(array($fn, $ln, $cnic, $date, $time, $persons));
            return true;
        }
        catch(PDOException $e){
            return false;
        }        
    }

    function fetchAllbooking(){
        $sql = "SELECT * FROM bookings";
        $st = $this->db->prepare($sql);
        $st->execute(array());
        return $st;
    }

    function deletebooking($id){
        $sql = "DELETE FROM bookings WHERE id = ?";
        $st = $this->db->prepare($sql);
        $st->execute(array($id));
    }


    function Add($fn, $ln, $cnic, $email, $status, $c){
        try{

            $sql = "INSERT INTO `employees` (`fname`, `lname`, `cnic`, `email`, `status`, `id`, `phone`) VALUES (?, ?, ?, ?, ?, NULL, ?);";
            $st = $this->db->prepare($sql);
            $st->execute(array($fn, $ln, $cnic, $email, $status, $c));
            return true;
        }
        catch(PDOException $e){
            return false;
        }        
    }

    function update($fn, $ln, $cnic, $email, $status, $c,$id){
        try{

          
            $sql = "UPDATE `employees` SET `fname`=?,`lname`=?,`cnic`=?,`email`=?,`status`=?,`phone`=? WHERE `id`=?;";
            $st = $this->db->prepare($sql);
            $st->execute(array($fn, $ln, $cnic, $email, $status, $c,$id));
            return true;
        }
        catch(PDOException $e){
            return false;
        }        
    }

    function fetchAllEmployee(){
        $sql = "SELECT * FROM employees";
        $st = $this->db->prepare($sql);
        $st->execute(array());
        return $st;
    }

    function fetchEmployee($id){
        $sql = "SELECT * FROM employees WHERE id = ?";
        $st = $this->db->prepare($sql);
        $st->execute(array($id));
        return $st;
    }

    function deleteEmployee($id){
        $sql = "DELETE FROM employees WHERE id = ?";
        $st = $this->db->prepare($sql);
        $st->execute(array($id));
    }


}

?>