<?php
namespace App\classes;
//creating objects of classes
use App\classes\Database;
//class declaration
class Login{
    public function loginCheck($data)
    {
        $uName = htmlentities($data["username"]);
        $uPwd = htmlentities($data["pwd"]);
        $sql = "SELECT * FROM users WHERE `username`='$uName' AND `pwd`='uPwd'";
        $query = mysqli_query(Database::connect(),$sql);
    }
}