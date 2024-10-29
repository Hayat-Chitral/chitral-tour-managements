<?php
include "header.php";
if (!isset($_SESSION['is_login'])) {
   header('location:AdminPage/dashboard.php');
}
?>

<?php $user_id = $_GET['edituser'];
    $userQuery = mysqli_query($Connection, "SELECT * FROM users WHERE id='$user_id'");
    if (!$userQuery) {
        echo mysqli_error();
    }else{
        $user_data = mysqli_fetch_array($userQuery); 
    ?>
<div class="container-fluid my-5">
    <div class="container px-2">
        <div class="row">
            <div class="col-lg-2 col-2 col-sm-2 col-md-2"></div>
            <div class="col-lg-8">
                <div class="card user-card">
                    <div class="card-header">
                        <h2 class="text-dark text-center mb-0 p-0">Upadate <?php echo $user_data['name'];?></h2>
                        <small id="" class="form-text text-muted text-center">Fill out the form carefully for
                            registration</small>
                    </div>
                    <div class="card-body mt-0 pt-0">
                        <form action="tables/editusertable.php" method="post" enctype="multipart/form-data"
                            id="personal_info_form">
                            <input type="hidden" name="productid" value="<?php echo $_GET['editproduct']; ?>">

                            <div class="row mt-5">
                                <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                    <div class="form-group">
                                        <input name="user_firstname" type="text" class="form-control" id="userfirstname"
                                            placeholder="Enter Name" value="<?php echo $user_data['name'];?>">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                    <div class="form-group">
                                        <input name="user_email" type="email" class="form-control" id="useremail"
                                            placeholder="Enter email" value="<?php echo $user_data['email'];?>">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                    <div class="form-group">
                                        <input name="user_ph" type="text" class="form-control" id="userphoneno"
                                            placeholder="Phone Number" value="<?php echo $user_data['phone'];?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Date of Birth"
                                            id="datePicker" name="user_dob" onfocus="(this.type='date')"
                                            value="<?php echo $user_data['dob'];?>">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                    <select class="form-control" id="usergender" name="user_gender" value="">
                                        <option value="<?php echo $user_data['usergender'];?>" disabled="" selected=""
                                            class="text-dark">
                                            <?php echo $user_data['usergender'];?></option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                    <select class="form-control" id="assignrole" name="assign_role">
                                        <option value="" disabled="" selected="" class="text-dark"></option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                        <option value="read_only">Read Only</option>
                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                                    <textarea name="user_address" class="form-control" placeholder="Address"
                                        id="exampleFormControlTextarea1"
                                        rows="3"><?php echo $user_data['address'];?></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                    <div class="form-group">
                                        <input name="user_country" type="text" class="form-control" id="usercountry"
                                            placeholder="Country" value="<?php echo $user_data['country'];?>">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                    <div class="form-group">
                                        <input name="user_city" type="text" class="form-control" id="usercity"
                                            placeholder="City" value="<?php echo $user_data['city'];?>">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                    <div class="form-group">
                                        <input name="user_password" type="password" class="form-control"
                                            id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 d-flex justify-content-center">
                                <div class="col-lg-6 col-md-6 col-12 col-sm-12 d-flex justify-content-center">
                                    <img src="<?php echo 'User_Images/'.$user_data['profile'];?>"
                                        class="img-fluid imgplaceholder" onclick="triggerClick()"
                                        id="image_placeholder" />
                                    <div class="my-4" id="uploaduserimage" placeholder="upload image">
                                        <input onchange="DisplayImage(this)" name="edited_image" class="form-control"
                                            type="file" id="formFile" style="display:none;">
                                    </div>
                                </div>
                            </div>
                            <div class=" mt-3 d-flex justify-content-center">
                                <button name="updateuser" type="submit" class="btn btn-primary w-50">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-2 col-sm-2 col-md-2"></div>
        </div>
    </div>
</div>
<?php
include "includes/scripts.php";
?>
<?php
    }
include "footer.php";
?>