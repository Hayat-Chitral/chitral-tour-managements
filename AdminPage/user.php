<?php 
include "header.php";
?>
<div class="container-fluid">
    <div class="tile">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="">Users</h4>
            </div>
            <div class="col-lg-6 d-flex justify-content-end">
                <h4><a class="text-dark" href="adduser.php"><i class="fa-solid fa-user-plus"></i> Add User</a></h4>
            </div>
        </div>
        <div class="bg-white p-3">
            <div class="table-responsive">
                <table id="myTable" class="table table-hover">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th class="thead-border text-white">Name</th>
                            <th class="thead-border text-white">Email</th>
                            <th class="thead-border text-white">Phone No</th>
                            <th class="thead-border text-white">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    $Show_data=mysqli_query($Connection, "SELECT * FROM users ORDER BY id ASC");
                    if (!$Show_data) 
                    {
                        echo mysqli_error();    
                    }else
                    {
                        while ($row=mysqli_fetch_array($Show_data)) { ?>
                        <tr class="text-center user_table_row">
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <!-- user delete -->
                            <td><a href="delete.php?userdelete=<?php echo $row['id']; ?>"><button type="button"
                                        class="mb-1 btn btn-danger"><i
                                            class="fa-sharp fa-solid fa-user-xmark"></i></button></a>
                                <!-- User Edit -->
                                <a href="update_user.php?edituser=<?php echo $row['id'];?>"><button type="button"
                                        class="mb-1 btn btn-primary"><i class="fa-sharp fa-solid fa-user-pen"></i></button></a>
                                <!-- user view on modal -->
                                <a href="" data-userid="<?php echo $row['id']; ?>"
                                    data-profileimage="<?php echo "<img class='image_radius img-fluid' src='User_Images/".$row['profile']."' >"; ?>"
                                    data-userid="<?php echo $row['id'];?>" data-firstname="<?php echo $row['name'];?>"
                                    data-useremail="<?php echo $row['email']; ?>"
                                    data-role="<?php echo $row['assignrole']; ?>"
                                    data-userpho="<?php echo $row['phone']; ?>"
                                    data-usergender="<?php echo $row['usergender']; ?>"
                                    data-userdob="<?php echo $row['dob']; ?>"
                                    data-usercountry="<?php echo $row['country']; ?>"
                                    data-usercity="<?php echo $row['city']; ?>"
                                    data-useraddress="<?php echo $row['address']; ?>" class="showdata"
                                    data-toggle="modal" data-target="#mydatamodal">
                                    <button type="button" class="mb-1 btn btn-info"><i class="fa-solid fa-eye"></i></button>
                            </a>

                                <!-- <?php echo "<img class='img-fluid' src='User_Images/".$row['profile']."' >"; ?> -->
                            </td>
                        </tr>

                        <?php } ?>
                        <?php  }  ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<!-- <?php
include "includes/scripts.php";
?> -->

<!-- View data in modal-->
<div class="modal fade" id="mydatamodal">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content datamodal">
            <div class="modal-header">
                <h2 class="w-100 modal-title text-dark text-center" id="user_name">
                    Data</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6" id="image_show"> </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                </div>
            </div>
            <div class="modal-body">
                <div class="table-responsive pb-3">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">User Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">User Gender</th>
                                <th scope="col">Date of Birth</th>
                                <th scope="col">Country</th>
                                <th scope="col">City</th>
                                <th scope="col">Address</th>
                                <th scope="col">Profile</th>
                            </tr>
                        </thead>
                        <tbody class="data-test">
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include "footer.php";?>