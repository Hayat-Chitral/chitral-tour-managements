<?php
include "includes/header.php";
include "includes/sidebar.php";
?>
<div class="container-fluid">
    <div class="tile">
        <h4>Products</h4>
        <div class="table-responsive bg-white p-3">

            <?php if(isset($_SESSION['updatedproduct']) && !isset($_SESSION["errors"])):?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> <?php echo $_SESSION['updatedproduct'];?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?>
            <table id="myTable" class="table table-hover">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th class="thead-border text-white">Catagory Name</th>
                        <th class="thead-border text-white">Product Name</th>
                        <!-- <th class="thead-border text-white">Product Description</th>
                    <th class="thead-border text-white">Product Specification</th> -->
                        <th class="thead-border text-white">Price</th>
                        <!-- <th class="thead-border text-white">Product File</th> -->
                        <th class="thead-border text-white">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <?php 
                    $Fetch= mysqli_query($Connection, "SELECT *,shopingproducts.id AS p_id from shopingproducts LEFT JOIN categories on shopingproducts.catagoryid=categories.id"); 
                    if (!$Fetch)
                    {
                       die (mysqli_error($Connection)); 
                    }else
                    {
                        while($row=mysqli_fetch_array($Fetch))
                        // var_dump($row);
                        {?>
                    <tr class="text-center">
                        <td><?php echo $row['catagoryname']; ?></td>
                        <td><?php echo $row['producttitle']; ?></td>
                        <!-- <td><?php echo $row['productdescription']; ?></td>
                    <td><?php echo $row['prdouctspecification']; ?></td> -->
                        <td><?php echo "$".$row['productprice']; ?></td>
                        <!-- <td><?php echo "<img class='img-fluid' src='Images/Shop_Images/ProductImages/".$row['productfile']."' >"; ?>
                    </td> -->
                        <td><a onClick="javascript: return confirm('Are you sure you really wanted to delete?');"
                                class="text-danger btn" href="delete.php?deleteproduct=<?php echo $row['p_id'];?>">Delete
                            </a>
                            <a class="text-primary btn"
                                href="editshopingitems.php?editproduct=<?php echo $row['p_id'];?>">Edit </a>
                            <a class="text-success btn" href=""  data-toggle="modal" data-target="#productmodal">View</a>
                        </td>
                    </tr>
                    <?php }?>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- View Products -->
<!-- Large modal -->

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="productmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php
include "includes/footer.php";
unset($_SESSION['updatedproduct']);
?>