<?php
require_once '../vendor/autoload.php';

use App\classes\Database;


if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
    $sql = "DELETE FROM categories WHERE id='$id'";
    $query = mysqli_query(Database::connect(), $sql);
    if ($query == true) {
        header("location: manageCategories.php?dataDeleted");
    }
}
