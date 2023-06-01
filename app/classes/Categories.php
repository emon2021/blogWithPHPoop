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
    //updating categories
    public function updating($id)
    {
        $sql = "SELECT * FROM categories WHERE id='$id'";
        $query = mysqli_query(Database::connect(),$sql);
        return $query;
    }
    public function updated($catName,$id)
    {
        $sql = "UPDATE categories SET catName='$catName' WHERE id='$id'";
        $query = mysqli_query(Database::connect(),$sql);
    }
    //status update
    public function statusUpdate($status,$id)
    {
        $sql = "UPDATE categories SET `catStatus`='$status' WHERE id='$id'";
        $query = mysqli_query(Database::connect(),$sql);
        return $query;
    }
}