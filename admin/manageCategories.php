<?php
    require_once 'header-sidebar.php';
?>

<?php 
require_once '../vendor/autoload.php';

    $catAll = new \App\classes\Categories;
    $show = $catAll->selectAll();
?>

<div class="row">
                  <div class="col-lg-12">
                      <section class="card">
                          <header class="card-header">
                              Advanced Table 
                              <center>
                                <?php 
                                    if(isset($_REQUEST["dataDeleted"])){
                                        echo "<font color='red' style='font-size:16px'>Category Deleted!</font>";
                                    }
                                ?>
                              </center>
                          </header>
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th>Serial</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Category Name</th>
                                  <th><i class=" fa fa-edit"></i> Status</th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php 
                                    $i = 1;
                                    while($data = mysqli_fetch_assoc($show)){?>
                              <tr>
                                  <td><a href="#"><?php echo $i;$i++; ?></a></td>
                                  <td class="hidden-phone"><?php echo $data["catName"];?></td>
                                  <td>
                                    <?php 
                                        $status = $data["catStatus"];
                                        $id = $data['id'];
                                        if($status == 1){
                                        ?>
                                         <button class="btn btn-success"><a href="status_updated.php?status=<?php echo $status;?>& id=<?php echo $id;?>" style="color:white;">Active</a></button>
                                        <?php
                                        }else if($status == 2){?>
                                            <button class="btn btn-danger"><a href="status_updated.php?status=<?php echo $status;?>& id=<?php echo $id;?>" style="color:white;">Deactive</a> </button>
                                        <?php }
                                    ?>
                                </td>
                                  <td>
                                    <a href="update.php?id=<?php echo $data['id'] ?>">
                                      <button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
                                    </a>
                                      <a href="delete.php?id=<?php echo $data['id'];?>"><button class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></button></a>
                                  </td>
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
                      </section>
                  </div>
              </div>


<?php
    require_once 'footer.php';
?>