<?php
namespace App\classes;
//creating objects of classes
use App\classes\Database;
//session start
session_start();
//class declaration
class Login{
    public function loginCheck($data)
    {
        $uName = htmlentities($data["username"]);
        $uPwd = htmlentities($data["pwd"]);
        $sql = "SELECT * FROM users WHERE `username`='$uName' AND `pwd`='$uPwd'";
        $query = mysqli_query(Database::connect(),$sql);
        if($query == true){
            if(mysqli_num_rows($query) == 1){
                $row = mysqli_fetch_assoc($query);
                $_SESSION["username"] = $row["username"];

                header("location: index.php?loggedIn");
            }else{
                $login_err = "Username or Password Invalid!";
                return $login_err;
            }
        }else{
            die();
        }
    }
}