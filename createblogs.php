<?php
 include "databases/database.php";
 include "validation/validation.php";
//  session_start();
if (isset($_SESSION['is_login'])) {
    header('location:AdminPage/dashboard.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Login</title>
</head>

<body class="login_body text-white">
    <div class="container-fluid px-0">
        <div class="container px-2">
            <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header">
                                    Already User
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.
                                    </p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


















            <div class="card text-white mb-3" data-aos="zoom-in" data-aos-duration="1500">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="card-header">
                            <h2 class="text-center">Add your thoughts with<br /> Hayat Mountain Trip</h2>
                        </div>
                        <div class="card-body py-3">
                            <form method="POST" action="">
                                <div class="form-group">
                                    <label for="email" class="col-form-label text-md-right">Email</label>
                                    <div class="">
                                        <input id="email" type="text" class="form-control" name="emailfield" value=""
                                            required autocomplete="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label text-md-right">Password</label>

                                    <div class="">
                                        <input id="password" type="text" class="form-control" name="passwordfield"
                                            required autocomplete="current-password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember">

                                            <label class="form-check-label" for="remember">
                                                Remind me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="">
                                        <button type="submit" name="LOGIN" class="btn btn-primary">
                                            Login
                                        </button>
                                        <a class="btn btn-link text-white" href="">
                                            Forgot Password
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-header">
                        <h2 class="text-center">Add your thoughts with<br /> Hayat Mountain Trip</h2>
                    </div>
                    <div class="card-body py-3">
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="email" class="col-form-label text-md-right">Email</label>
                                <div class="">
                                    <input id="email" type="text" class="form-control" name="emailfield" value=""
                                        required autocomplete="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-form-label text-md-right">Password</label>

                                <div class="">
                                    <input id="password" type="text" class="form-control" name="passwordfield" required
                                        autocomplete="current-password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                        <label class="form-check-label" for="remember">
                                            Remind me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="">
                                    <button type="submit" name="LOGIN" class="btn btn-primary">
                                        Login
                                    </button>
                                    <a class="btn btn-link text-white" href="">
                                        Forgot Password
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
    if (isset($_POST['LOGIN']))
    {
        $LoginUser= $Connection -> real_escape_string($_POST['emailfield']);
        $UserPass= $Connection -> real_escape_string($_POST['passwordfield']);
        $query = "SELECT * FROM users WHERE email='$LoginUser' AND password='$UserPass'";
        $RunQuery=mysqli_query($Connection, $query) or die (mysqli_error($Connection));
        if (mysqli_num_rows($RunQuery) > 0 && $RunQuery == true) 
        {
            while ($row=mysqli_fetch_assoc($RunQuery)) 
            {
                $_SESSION['user_loggedin']= ['user_email'=> $row['email'], 'user_name'=> $row['name'], 'user_img'=> $row['profile'] ];
                $_SESSION['is_login']=true; 
                header('location:AdminPage/dashboard');
            }
        }else
        {
            echo '<div><p class="alert alert-danger">You have entered wrong logins please try again!</p></div>';
        } 
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>