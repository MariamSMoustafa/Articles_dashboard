<?php 
require_once("../vendor/autoload.php");

try {
    session_start();
    $conn= mysqli_connect(__HOST__, __USER__, __PASS__, __DB__);
    if(!$conn) {
        echo 'Connection failed';
        throw new Exception("Connection failed");
    } else {
        if(isset($_POST['uname']) && isset($_POST['password'])) {
            $uname= ($_POST['uname']);
            $pass=($_POST['password']);
            if(empty($uname)) {
                header("Location: ../?error=Username is required");
                throw new Exception("User didn't write username");
            } elseif(empty($pass)) {
                header("Location: ../?error=Password is required");
                throw new Exception("User didn't write password");
            } else {
                $users_db= new MySQLHandler('users');
                $sql= "SELECT * FROM users WHERE name= '$uname' AND password='$pass'";
                $user=$users_db->get_results($sql);
                if(!isset($user[0])){
                    header("Location: ../?error=Incorrect username or password");
                    throw new Exception("No such user in database");
                }else{
                    $id = $user[0]['id'];
                    $groups_db= new MySQLHandler('groups');
                $group=$groups_db->get_record_by_id($user[0]['group_id']);
                    $_SESSION['name']=$user[0]['name'];
                    $_SESSION['password']=$user[0]['password'];
                    $_SESSION['email']=$user[0]['email'];
                    $_SESSION['number']=$user[0]['number'];
                    $_SESSION['group']=$group[0]['name'];
                    header("Location: ../views/Home/index.php");
                    exit();
            }
                
            }
        } else {
            header("Location: ../");
            exit();
        }
    }
}catch(Exception $e){
    $exc=$e->getMessage();
      $date = date('d.m.Y h:i:s');
      $log = $exc."   |  Date:  ".$date."\n";
      echo 'error';
      error_log("$log", 3, "../assets/log-files/log.log");
}