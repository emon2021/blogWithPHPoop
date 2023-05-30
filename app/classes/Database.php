<?php
namespace App\classes;

//class declaration
class Database{
    public static function connect()
    {
        $host = "localhost";
        $db_uname = "root";
        $db_pwd = "";
        $db_name = "blog";
        $connect = mysqli_connect($host,$db_uname,$db_pwd,$db_name);
        return $connect;
    }
}
