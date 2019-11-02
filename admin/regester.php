<?php include_once './header.php'; ?>
<?php include_once './connection.php'; ?>
<?php
if(isset($_POST["regester"])){

   $user = $_POST["name"];
   $email = $_POST["email"];
   $passWord = $_POST["password"];
   $checkPassWord = $_POST["confirmPassword"];

   //email check
   $userCheck = mysqli_query($connect,"SELECT * FROM mc_user WHERE user_email = '$email';");

   if (mysqli_num_rows($userCheck) == 0) {
      
   }
  

}

?>
<section>
   <div class="container">
      <h1 class="text-center mt-5">Register</h1>
      <div class="row justify-content-center  pt-3">
         <div class="col-12 col-md-8 col-lg-8 col-xl-6">
            <div class="card border-primary ">
               <div class="card-header">Register to continue</div>
               <div class="card-body">
                  <form action="" method="post">
                     <div class="row align-items-center">
                        <div class="col mt-3">
                           <input type="text" name="name" class="form-control" placeholder="User Name">
                        </div>
                     </div>
                     <div class="row align-items-center mt-3">
                        <div class="col">
                           <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                     </div>
                     <div class="row align-items-center mt-3">
                        <div class="col">
                           <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="col">
                           <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password">
                        </div>
                     </div>
                     <div class="row justify-content-start mt-3">
                        <div class="col">
                           <div class="form-check">
                              <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input">
                                 I Read and Accept <a href="https://www.froala.com">Terms and Conditions</a>
                              </label>
                           </div>

                           <button class="btn btn-primary mt-4" type="submit" name="regester">Submit</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


<?php include_once 'footer.php'; ?>