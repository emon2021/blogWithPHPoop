<?php
    require_once 'header-sidebar.php';
?>
<?php
    require_once '../vendor/autoload.php';
    use App\classes\Database;

    //coding
        $categories = new App\classes\Categories;
        
    if(isset($_REQUEST["catAdd"])){
        $catName = $_REQUEST["catName"];
        $sql = "SELECT * FROM categories WHERE `catName`='$catName'";
        $query = mysqli_query(Database::connect(),$sql);
        if(mysqli_num_rows($query)==0){
            $categories->addCat($_REQUEST);
        }else{
            $catExist = "This category is alreay Exist!";
        }
    }
?>
<div class="col-lg-6 m-auto">
                      <section class="card">
                          <header class="card-header">
                              Add Category Form
                          </header>
                          <div class="card-body">
                              <form method="POST">
                                  <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
                                      <div class="col-sm-10">
                                          <input type="text" required name='catName' class="form-control" id="inputEmail3" placeholder="Category Name">
                                      </div>
                                  </div>
                                  <fieldset class="form-group">
                                      <div class="row">
                                          <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                                          <div class="col-sm-10">
                                              <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="catStatus" value='1' id="gridRadios1" value="option1" checked="">
                                                  <label class="form-check-label" for="gridRadios1">
                                                      Active
                                                  </label>
                                              </div>
                                              <div class="form-check">
                                                  <input class="form-check-input" type="radio" value='0' name="catStatus" id="gridRadios2" value="option2">
                                                  <label class="form-check-label" for="gridRadios2">
                                                      Deactive
                                                  </label>
                                              </div>
                                          </div>
                                      </div>
                                  </fieldset>
                                  <div class="form-group row">
                                      <div class="col-sm-10">
                                          <button type="submit" name='catAdd' class="btn btn-primary">Add</button>
                                      </div>
                                  </div>
                              </form>
                              <center><font color="red" style="font-size:16px"><?php if(isset($catExist)){echo $catExist;}?></font></center>
                          </div>
                      </section>

                  </div>


<?php
    require_once 'footer.php';
?>