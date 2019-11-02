<?php include_once 'header.php'; ?>

<h1 class="text-center mt-5">Admin Login </h1>
<div class="container pt-3">
    <div class="row justify-content-sm-center">
        <div class="col-sm-10 col-md-6">
            <div class="card border-primary">
                <div class="card-header">Sign in to continue</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <form class="form-signin">
                                <input type="text" class="form-control mb-3" placeholder="Email" required autofocus>
                                <input type="password" class="form-control mb-3" placeholder="Password" required>
                                <button class="btn btn-primary btn-block mb-1" type="submit">Sign in</button>
                                <label class="checkbox float-left">
                                    <!-- <input type="checkbox" value="remember-me">
                                    Remember me -->
                                </label>
                                <a href="#" class="float-right">Need help?</a>
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