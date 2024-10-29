<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered loginmodal" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="text-center modal-title" id="exampleModalLongTitle">Chitral Tourism Login</h3>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="email" class="col-form-label text-md-right text-dark">User Name</label>
                        <input id="email" type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-form-label text-md-right text-dark">Password</label>
                        <input id="password" type="password" class="form-control" name="password">
                    </div>
                    <div class="form-check mt-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                        <label class="form-check-label text-dark" for="remember">Remember ME</label>
                    </div>
                    <div class="form-group my-3 ">
                        <button name="LOGIN" type="submit" class="btn text-white">Log In</button>
                        <button type="submit" class="btn text-white">Forget Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php 
// include('databases/database.php');
if (isset($_POST['LOGIN'])) {
    $User_Name=$_POST['user_email'];
    $User_Password=$_POST['user_password'];
    if (empty($User_Name||$User_Password)) {
        echo "Please fill all the field";
    }else{
        $check_user="SELECT * FROM user WHERE user_email= password=";
    }
}


?>