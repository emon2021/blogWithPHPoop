<?php
namespace App\classes;
//using other classes
use App\classes\Database;
//class declareation
class Categories
{
    public function addCat($data)
    {
        $catName = $data["catName"];
        $catStatus = $data["catStatus"];
        $sql = "INSERT INTO categories(`catName`,`catStatus`)VALUES('$catName','$catStatus')";
        $query = mysqli_query(Database::connect(),$sql);
        return $query;
    }
    // select all for categories
    public function selectAll()
    {
        $sql = "SELECT * FROM categories";
        $query = mysqli_query(Database::connect(),$sql);
        return $query;
    }
}