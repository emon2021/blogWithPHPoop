<?php
namespace App\classes;
//using other classes
use App\classes\Database;
//class declareation
class Categories
{
    public $catName;
    public function addCat($data)
    {
        $this->catName = $data["catName"];
        $catStatus = $data["catStatus"];
        $sql = "INSERT INTO categories(`catName`,`catStatus`)VALUES('$this->catName','$catStatus')";
        $query = mysqli_query(Database::connect(),$sql);
        return $query;
    }
    
}