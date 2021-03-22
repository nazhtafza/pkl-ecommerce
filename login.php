<?php
require 'koneksi.php';
if (isset($_POST["login"])) {
    if (login($_POST) < 0) {
        echo mysqli_error($koneksi);
    } else {
        header("Location:landingpage.html");
        exit;
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>registrasi</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <script src="https://kit.fontawesome.com/5fae6f60c5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>


    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="picture/undraw_Lighthouse_frb8.svg" class="img-fluid" alt="logo">
            </div>
            <form action="" method="post">
                <div class="col-md-6">
                    <h3 class="signin-text mb-3"> Log In</h3>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" name="checkbox" class="form-check-input" id="checkbox">
                            <label class="form-check-label" for="checkbox">Remember Me</label>
                        </div>

                        <div>
                            <button name="login" class="btn btn-class">Login</button>
                        </div>
                </div>
            </form>

        </div>
    </div>
    <footer class="page-footer bg-dark">
        <div class="bg-primary">
            <div class="container">
                <div class="row py-4 d-flex align-items-center">
                    <div class="col-md-12 text-center">
                        <a href="#"><i class="fab fa-facebook text-light mr-2"></i></a>
                        <a href="#"><i class="fab fa-twitter-square text-light mr-2"></i></a>
                        <a href="#"><i class="fab fa-instagram text-light mr-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center text-md-left mt-5">
            <div class="row">
                <div class="col-md-3 mx-auto mb-4 text-white">
                    <h6 class="text-uppercase font-weight-bold">Hubungi Kami</h6>
                    <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width:125px; height:2px">
                    <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse efficitur neque ut sapien hendrerit, ut auctor velit euismod.
                        Aenean interdum at purus et dignissim. </p>
                </div>

                <div class="col-md-3 mx-auto mb-4 text-white">
                    <h6 class="text-uppercase font-weight-bold">Hubungi Kami</h6>
                    <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width:125px; height:2px">
                    <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse efficitur neque ut sapien hendrerit, ut auctor velit euismod.
                        Aenean interdum at purus et dignissim. </p>
                </div>

                <div class="col-md-3 mx-auto mb-4 text-white">
                    <h6 class="text-uppercase font-weight-bold">Hubungi Kami</h6>
                    <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width:125px; height:2px">
                    <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse efficitur neque ut sapien hendrerit, ut auctor velit euismod.
                        Aenean interdum at purus et dignissim. </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>

</html>