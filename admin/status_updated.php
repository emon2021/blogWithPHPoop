<?php
require_once '../vendor/autoload.php';

use App\classes\Categories;
use App\classes\Database;
$catStatus = new Categories;
if(isset($_REQUEST["status"]) && isset($_REQUEST["id"])){
    $statusInfo = $_REQUEST["status"];
    $id = $_REQUEST["id"];
    if($statusInfo == '1'){
        $status = 2;
        $bd = $catStatus->statusUpdate($status,$id);
        if($bd == true){
            header("location: manageCategories.php");
        }
    }elseif($statusInfo = '2' ){
        $status = 1;
        $db = $catStatus->statusUpdate($status,$id);
        if($db == true){
            header("location: manageCategories.php");
        }
}

}   