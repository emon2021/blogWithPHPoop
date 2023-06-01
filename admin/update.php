<?php
    require_once 'header-sidebar.php';
?>
<?php
    require_once '../vendor/autoload.php';
    use App\classes\Database;

    //coding
        $categories = new App\classes\Categories;
        if(isset($_REQUEST["id"])){
            $id = $_REQUEST["id"];
            $rowData = $categories->updating($id);
            $data = mysqli_fetch_assoc($rowData);

            //updating data
            if(isset($_REQUEST["catAdd"])){
                $catName = $_REQUEST["catName"];
                $categories->updated($catName,$id);
                echo "<h1><a href='manageCategories.php'>Please! Click To Visit Manage Categories File</a></h1>";
                exit;
            }
        }else{
            echo "Please visit \" manageCategories.php \" first!";
            exit;
        }
        
    
?>
<div class="col-lg-6 m-auto">
                      <section class="card">
                          <header class="card-header">
                              Update Category Form
                          </header>
                          <div class="card-body">
                              <form method="POST">
                                  <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
                                      <div class="col-sm-10">
                                          <input type="text" required name='catName' value="<?php echo $data['catName'];?>" class="form-control" id="inputEmail3" placeholder="Category Name">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <div class="col-sm-10">
                                          <button type="submit" name='catAdd' class="btn btn-primary">Update</button>
                                      </div>
                                  </div>
                              </form>
                              <center>
                              <?php 
                                if(isset($catExist)){echo $catExist;}
                                if(isset($inserted)){echo $inserted;}
                              ?>
                              </center>
                          </div>
                      </section>

                  </div>


<?php
    require_once 'footer.php';
?>