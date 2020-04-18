<?php include("include/head.php"); ?>

<body class="bg-gradient-secondaryb"
      style="background-image: url('../assets/img/ill/p2.svg');background-repeat: no-repeat;background-size: cover;"
      style="overflow: hidden;">


<section class="upper pt-5">
    <div class="container-fluidN pt-5">
        <div class="col-lg-5 col-md-8 mx-auto">
            <div class="card   shadow border-0">
                <div class="card-header border-0 bg-whiteb bg-transparent ">
                    <div class="text-muted text-center mb-3">AHIDI</div>
                    <div class="btn-wrapper text-center">
                        <img src="../assets/img/artboard.png" class="img-fluidb" height="96px" alt="">
                    </div>
                </div>
                <div class="card-body px-lg-5 py-lg-5">
                    <?php if (!empty($_POST)) {
                        require_once "include/connect.php";
                        $usrname = $_POST["username"];
                        $pssword = $_POST["password"];
                        //echo "password";
                        $sql = "SELECT * FROM user WHERE email='" . $usrname . "' AND password='" . $pssword . "'";
                        //print $sql;
                        $result = $con->query($sql);
                        if ($result->num_rows > 0) {
                            session_start();
                            while ($row = $result->fetch_assoc()) {
                                $_SESSION["email"] = $row["email"];
                                $_SESSION["username"] = $row["name"];
                                $_SESSION["pass"] = $row["Password"];
                                $_SESSION["id"] = $row["id"];
                                $_SESSION["paid"] = $row["paid"];
                            }
                            print '
                    <div class="alert alert-success" role="alert">
                        <span class="alert-inner--text"><strong>Success: </strong> Login Successful</span>
                    </div>
                    ';

                            if($_SESSION["paid"]=="no"){
                                echo "<script>window.location.replace('main.php')</script>";
                            }else{
                                echo "<script>window.location.replace('review.php')</script>";
                            }
                            //success code
                        } else {
                            print '
                    <div class="alert alert-warning" role="alert">
                        <span class="alert-inner--text"><strong>Error: </strong> Invalid Credentials</span>
                    </div>
                    ';
                        }
                    }

                    ?>
                    <form role="form" method="post" action="index.php">
                        <div class="form-group mb-3">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control" name="username" placeholder="Email" type="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control" placeholder="Password" name="password" type="password">
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block my-4">Login</button>
                        </div>
                        <div class="pb-1">
                            <span class="text-muted">Dont have an account?</span>
                        </div>

                        <div class="pt-2">

                            <a class="btn btn-linkb btn-default btn-block" href="/signup.php">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>


<?php include("include/end.php"); ?>


</body>

</html>