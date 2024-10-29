<?php
    include "header.php";
?>
<div class="container-fluid my-5">
    <div class="tile px-2">
        <h4 class="">User Register Form</h4>
        <small id="" class="form-text text-muted">Fill out the form carefully for
            registration</small>
        <?php if(isset($_SESSION['success']) && !isset($_SESSION["errors"])):?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> <?php echo $_SESSION['success'];?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-lg-12">
                <form action="tables/usertable" method="POST" enctype="multipart/form-data" id="personal_info_form">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row mt-3">
                                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                    <div class="form-group">
                                        <input name="user_firstname" type="text" class="form-control" id="userfirstname"
                                            placeholder="Enter Name">
                                        <span
                                            class="text-danger"><?php echo (isset($_SESSION["errors"])&&isset($_SESSION["errors"]["user_firstname"]))?$_SESSION["errors"]["user_firstname"]:""; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                    <div class="form-group">
                                        <input name="user_email" type="email" class="form-control" id="useremail"
                                            placeholder="Enter email">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                    <div class="form-group">
                                        <input name="user_ph" type="text" class="form-control" id="userphoneno"
                                            placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Date of Birth"
                                            id="datePicker" name="user_dob" onfocus="(this.type='date')">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                    <select class="form-control" id="usergender" name="user_gender">
                                        <option value="" disabled="" selected="" class="text-dark">Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                    <select class="form-control" id="assignrole" name="assign_role">
                                        <option value="" disabled="" selected="" class="text-dark">Assign Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                        <option value="read_only">Read Only</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                    <div class="form-group">
                                        <input name="user_country" type="text" class="form-control" id="usercountry"
                                            placeholder="Country">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                    <div class="form-group">
                                        <input name="user_city" type="text" class="form-control" id="usercity"
                                            placeholder="City">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                    <textarea name="user_address" class="form-control" placeholder="Address"
                                        id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                    <div class="form-group">
                                        <input name="user_password" type="password" class="form-control"
                                            id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <img src="Images/inplaceimg.jpg" class="img-fluid imgplaceholder" onclick="triggerClick()"
                                id="image_placeholder" />
                            <div class="my-4" id="uploaduserimage" placeholder="upload image">
                                <input onchange="DisplayImage(this)" name="image" class="form-control" type="file"
                                    id="formFile" style="display:none;">
                            </div>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <button name="saveuser" type="submit" class="btn btn-primary w-50">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include "includes/scripts.php";
?>
<?php
include "footer.php";
unset($_SESSION['errors']);
unset($_SESSION['success']);

?>