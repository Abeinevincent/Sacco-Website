	<!---------==== Header File ====-------->
	<?php include 'header.php';?>
	<!------------------ SIGNUP MAIN SECTION ------------------->
  	<!------- Signup top image section ------->
  	<section>
  	  <img src="Images/cent.jpg" class="d-block w-100 img-responsive" alt="About Us Image"/>
  	</section>
    <!-- <h2 class="text-primary text-center text-bold mb-3">SignUp to Access Mobile Banking</h2>
    <hr style="width: 40%; border: 1px solid orange;" /> -->

    <div class="container justify-content-center text-center" style="height: 160px; background: #aaa">
      <a href="#" class="text-center" style="line-height: 160px;">
        <img class="text-center" width="250px" src="Images/logo.png" />
      </a>      
    </div>
    <section class="row justify-content-center signin-form mt-3">
      <section class="col-12 col-sm-6 col-md-6">
        <form class="form-container">
        <div class="form-group">
          <h4 class="text-center font-weight-bold text-success"> Signup to Access Mobile Banking</h4>
          <label class="text-bold" for="InputEmail1">Name</label>
           <input type="text" class="form-control" id="InputText1" aria-describeby="NumberHelp" placeholder="Enter your full name" required />
        </div>
        <div class="form-group">
          <label class="text-bold" for="InputNumber1">Account Number</label>
          <input type="number" class="form-control" id="InputNumber1" placeholder="Enter your account  number" required />
        </div>
        <div class="form-group">
          <label class="text-bold" for="InputPhone1">Phone Number</label>
          <input type="tel" class="form-control" id="InputPhone1" placeholder="Enter your registered phone number" required />
        </div>
        <div class="form-group">
          <label class="text-bold" for="InputPassword1">Password</label>
          <input type="password" class="form-control" id="InputPassword1" placeholder="Enter atleast 8 characters" required />
        </div>
        <div class="form-group">
          <label class="text-bold" for="InputPassword2">Repeat Password</label>
          <input type="password" class="form-control" id="InputPassword2" placeholder="Re-enter your password" required />
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
        <div class="form-footer">
          <p class="mt-2"> Already have an account? <a href="signin.php">Sign In</a></p>
        </div>
        </form>
      </section>
    </section>
  </section>

	<!--==== Footer File ====-->
	<?php include 'footer.php';?>