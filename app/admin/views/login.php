<?php
// session_start();
include_once("inc/config.php");

try {
    if(isset($_POST['login']) and !empty($_POST["usr"])){
        $usrp = $_POST["usrp"];
        $usr = $_POST["usr"];
    
        $loginQry1 = "SELECT * FROM admin WHERE name='$usr'";
        $loginQry = $conn->prepare($loginQry1);
        $loginQry->execute();
    
        $logireturn = $loginQry->fetch(PDO::FETCH_ASSOC);

        if($usrp == $logireturn["pass"] & $usr == $logireturn["name"]){
            $_SESSION["user"] = $logireturn["name"];
            $user = $_SESSION["user"];

            // header("location: ?asr=admin");
            include_once"views/adminblade.php";
        }
    
        
    
    } elseif(!isset($_POST['login']) and empty($_POST["usr"])) {
        $erro1 = "Please fill in your correct login details";
    }
} catch (PDOException $xx) {
    echo "erro" . $xx->getMessage();
}

?>
<?php include_once("adminheader.php"); ?>
<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
<?php 

if(isset($user )) {
     echo $user ;
} // if(isset($erro1)){ echo $erro1;}
?>

                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" method="POST">
                                        <div class="form-group">
                                            <input name="usr" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input  name="usrp" type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input name="login" value="login" type="submit" class="btn btn-primary btn-user btn-block">
                                            
                                       
                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>