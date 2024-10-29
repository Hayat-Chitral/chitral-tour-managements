<?php
include "header.php";
?>
<div class="container-fluid">
    <h1 class="text-center mt-5">Products</h1>
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
                    <th class="thead-border text-white">Catagory Id</th>
                    <th class="thead-border text-white">Catagory Name</th>
                    <th class="thead-border text-white">Catagory File</th>
                    <th class="thead-border text-white">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <?php 
                    $Fetch= mysqli_query($Connection, "SELECT * from categories"); 
                    if (!$Fetch)
                    {
                       die (mysqli_error($Connection)); 
                    }else
                    {
                        while($row=mysqli_fetch_array($Fetch))
                        {?>
                <tr class="text-center">
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['catagoryname']; ?></td>
                    <td><?php echo "<img class='img-fluid w-25' src='Images/Shop_Images/ProductImages/".$row['catagoryfile']."' >"; ?>
                    </td>

                    <td><a onClick="javascript: return confirm('Are you sure you really wanted to delete?');"
                            class="text-danger" href="delete.php?deletecategory=<?php echo $row['id'];?>">Delete</a>
                        <a href="editcatagorypage.php?catagoryid=<?php echo $row['id'];?>">edit</a>
                    </td>

                </tr>
                <?php }?>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
<?php
unset($_SESSION['updatedproduct']);
include "footer.php";
include "includes/scripts.php";
?>