<?php include_once './header.php'; ?>
<?php include_once './connection.php'; ?>
<?php
    session_start();

    if(isset($_SESSION['user_login'])){
        header('location: index.php');
    }

    if (isset($_POST["login"])) {

        $user = $_POST["user"];
        $passWord = $_POST["password"];

        $userCheck = mysqli_query($connect, "SELECT * FROM `mc_user` WHERE `user_name` = '$user'");

        if (mysqli_num_rows($userCheck) > 0) {
            
            $_SESSION['user_login'] = $user;
            
            header('location: index.php');
            
        }
      
    }

?>

<h1 class="text-center mt-5">Admin Login </h1>
<div class="container pt-3">
    <div class="row justify-content-sm-center">
        <div class="col-sm-10 col-md-6">
            <div class="card border-primary">
                <div class="card-header">Sign in to continue</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <form class="form-signin" method="post">
                                <input type="text" name="user" class="form-control mb-3" placeholder="user" required>
                                <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
                                <button class="btn btn-primary btn-block mb-1" name="login" type="submit">Sign in</button>
                                <label class="checkbox float-left">
                                    <!-- <input type="checkbox" value="remember-me">
                                    Remember me -->
                                </label>
                                <!-- <a href="#" class="float-right">Need help?</a> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <a href="./regester.php" class="float-right">Create an account </a>
        </div>
    </div>
</div>


<?php include_once 'footer.php'; ?>