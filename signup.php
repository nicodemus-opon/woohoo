<?php include("include/head.php"); ?>

<body class="bg-gradient-secondaryb"
      style="background-image: url('../assets/img/ill/p2.svg');background-repeat: no-repeat;background-size: cover;">


<section class="upper pt-5">
    <div class="container pt-5">
        <div class="col-lg-5 col-md-8 mx-auto">
            <div class="card   shadow border-0">
                <div class="card-header border-0 bg-whiteb bg-transparent ">
                    <div class="text-muted text-center mb-3">AHIDI</div>
                    <div class="btn-wrapper text-center">
                        <img src="../assets/img/artboard.png" class="img-fluidb" height="96px" alt="">
                    </div>
                </div>
                <div class="card-body px-lg-5 py-lg-5">
                    <?php
                    session_start();
                    if (!empty($_POST)) {
                        require_once "include/connect.php";
                        $nm = $_POST["name"];
                        $em = $_POST["email"];
                        $id = $_POST["id"];
                        $paid = "no";
                        $pass = $_POST["password"];

                        $sql = "insert into user values('" . $nm . "','" . $id . "','" . $em . "','" . $pass . "','"  . $paid . "')";
                        //echo $sql;
                        //print $sql;
                        if ($con->query($sql) === true) {
                            echo "<br>";
                            print '
                  <div class="alert alert-success" role="alert">
    <span class="alert-inner--text"><strong>Success: </strong> Account created Successfully </span>
</div>
                  ';
                            //header("Location:dashboard.php");
                        } else {
                            print '
  <div class="alert alert-warning" role="alert">
<span class="alert-inner--text"><strong>Error: </strong> Could not create account this could because a similar user with the same ID or email exist</span>
</div>
  ';
                        }
                    } else {
                        echo "";
                    }
                    ?>
                    <form role="form" action="signup.php" method="post">
                        <div class="form-group mb-3">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                </div>
                                <input class="form-control" name="name" placeholder="Full Name" type="text">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-tag"></i></span>
                                </div>
                                <input class="form-control" name="id" placeholder="National ID" type="text">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control" name="email" placeholder="Email" type="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control" name="password" placeholder="Password" type="password">
                            </div>
                        </div>


                        <div class="pt-2">
                            <button type="submit" class="btn btn-linkb btn-primary btn-block" href="#hh">Sign Up
                            </button>
                            <a class="btn btn-linkb btn-default btn-block" href="/">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>

<?php include("include/end.php"); ?>


</body>

</html>