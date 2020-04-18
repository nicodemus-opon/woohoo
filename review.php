<?php include("include/head.php"); ?>


<body class="bg-gradient-secondaryb"
      style="background-image: url('../assets/img/ill/testimonal_bg.svg');background-repeat: no-repeat;background-size: cover;">
<?php include("include/navbar.php"); ?>


<section class="upperb ">
    <div class="container pt-5">
        <div class="col-lg-5 col-md-8 mx-auto">

            <div class="card " styble="width: 20rem;">
                <div class="card-body">
                    <h4 class="card-title text-center">Review</h4>
                    <h5>HI  <?php session_start();

                        echo $_SESSION["username"];
                        require_once("include/connect.php");
                        $sql="update user set paid='yes' where id='".$_SESSION["id"]."'";
                        $con->query($sql);
                        ?></h5>
                        <p class="card-text">Payment Successful your Application is currently under review </p>


                </div>
            </div>

        </div>
    </div>
</section>


<?php include("include/end.php"); ?>

</body>

</html>