	<!----------- Loan calculator section ---------->

    <div class="container justify-content-center">
      <div class="row justify-content-center mt-2">
        <div class="col-md-6 mt-3 justify-content-center vertical-align-center">
          <div class="card border-primary text-white bg-primary mb-3" style="marginleft: 40px;" data-aos="fade-up-right" data-aos-duration="1000" style="max-width: 30rem;">
            <div class="card-header text-center" style="background-color: darkblue;">Loan Calculator</div>
            <div class="card-body bg-primary">
              <form>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-md-5 col-form-label">
                      Amount
                    </label>
                    <div class="col-md-7">
                        <input type="text" class="form-control form-control-sm" placeholder="Enter Amount" id="input-amount">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-md-5 col-form-label">Loan
                        Period
                      </label>
                    <div class="col-md-7">
                        <input type="text" class="form-control form-control-sm" id="input-period"
                               placeholder="Enter Loan Period in Months">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-md-5 col-form-label">
                      Interest Rate
                      </label>
                    <div class="col-md-7">
                        <input type="text" class="form-control form-control-sm" id="input-interest" placeholder="Enter Interest Rate">
                    </div>
                </div>
                <div class="error-summary text-center">
                        <span id="loanPayment" class="text-center">

                        </span>
                </div>
                
            </form>
            </div>
            <div class="card-footer">
              <div class="form-group row center">
                <button type="button" style="border: 1px solid darkblue;" class="btn btn-primary w-100 mb-1" onclick="loanCalc()">Calculate
                </button>
            </div>
            </div>
          </div>   
        </div>

        <!-- Interest calculator section -->
        <div class="col-md-6 mt-3 justify-content-center vertical-align-center">
          <div class="card border-primary text-white bg-primary mb-3" style="marginleft: 40px;" data-aos="fade-up-left" data-aos-duration="1000" style="max-width: 30rem;">
            <div class="card-header text-center" style="background-color: darkblue;">Interest Calculator</div>
            <div class="card-body bg-primary">
              <form>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-md-5 col-form-label">
                      Amount
                    </label>
                    <div class="col-md-7">
                        <input type="text" class="form-control form-control-sm" placeholder="Enter Amount" id="input-amount">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-md-5 col-form-label">
                      Investment Period
                    </label>
                    <div class="col-md-7">
                        <input type="text" class="form-control form-control-sm" id="input-period" placeholder="Enter Loan Period in Months">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-md-5 col-form-label">
                      Interest Rate
                    </label>
                    <div class="col-md-7">
                        <input type="text" class="form-control form-control-sm" id="input-interest" placeholder="Enter Interest Rate">
                    </div>
                </div>
                <div class="error-summary text-center">
                        <span id="loanPayment" class="text-center">

                        </span>
                </div>
                
            </form>
            </div>
            <div class="card-footer">
              <div class="form-group row center">
                <button type="button" style="border: 1px solid darkblue;" class="btn btn-primary w-100 mb-1" onclick="interestCalc()">Calculate
                </button>
            </div>
            </div>
          </div>   
        </div>

      </div>
    </div>

	<!-- Ask a question section -->
    <div class="container-fluid bg-primary" id="need-help" style="height: 200px;">
      <h3 class="text-center mt-1 text-white">Need help?</h3><hr class="mb-4" style="border: 1px solid yellow; width: 10%;" />
      <div class="row">
        <div class="col-md-12">
        <p class="text-white" style="font-size: 22px; font-height: 25px">Ask your Question here</p>
        </div>
      </div>
      
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Type your question.." aria-label="Recipient's username" aria-describedby="basic-addon2" />
          <div class="input-group-append">
            <button class="btn btn-success text-white" type="button">Submit</button>
          </div>
      </div>
    </div>

	<!-- Footer section -->
	<section id="footer">
	 	<div class="container">
	  		<div class="row text-center text-xs-center text-sm-left text-md-left">
	  			<div class="col-md-3">
	  				<h5 class="mt-3 text-warning" style="color: #e5dd4b!important;">Products & Services</h5>
	  				<ul class="list-unstyled quick-links">
	  					<li><a href="loans.php"><i class="fa fa-angle-double-right"></i>Loan Products</a></li>
	  					<li><a href="#services"><i class="fa fa-angle-double-right"></i>Banking Products</a></li>
	  					<li><a href="mbank.php"><i class="fa fa-angle-double-right"></i>Mobile Banking</a></li>
	  					<li><a href="mbank.php"><i class="fa fa-angle-double-right"></i>Online Banking</a></li>
	  					<li><a href="#services"><i class="fa fa-angle-double-right"></i>Other Services</a></li>
	  				</ul>
	  			</div>
	  			<div class="col-md-3">
	  				<h5 class="mt-3 text-warning" style="color: #e5dd4b!important;">Quick Links</h5>
	  				<ul class="list-unstyled quick-links">
	  					<li><a href="home.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
	  					<li><a href="about.php"><i class="fa fa-angle-double-right"></i>About</a></li>
	  					<li><a href="member.php"><i class="fa fa-angle-double-right"></i>Account Opening</a></li>
	  					<li><a href="careers.php"><i class="fa fa-angle-double-right"></i>Careers</a></li>
	  					<li><a href="#reports"><i class="fa fa-angle-double-right"></i>Reports</a></li>
	  				</ul>
	  			</div>
          <div class="col-md-3">
            <h5 class="mt-3 text-warning" style="color: #e5dd4b!important;">Learn More</h5>
            <ul class="list-unstyled quick-links">
              <li><a href="#"><i class="fa fa-angle-double-right"></i>FAQs</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Terms and Conditions</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Privacy Policy</a></li>
              <li><a href="contact.php"><i class="fa fa-angle-double-right"></i>Support</a></li>
              <li><a href="loans.php"><i class="fa fa-angle-double-right"></i>Loan Application</a></li>
            </ul>
          </div>
	  			<div class="col-md-3">
	  				<h5 class="mt-3 text-warning" style="color: #e5dd4b!important;">Get In Touch</h5>
	  				<ul class="list-unstyled quick-links">
	  					<li><a href="#"><i class="fa fa-angle-double-right"></i>Tel: +256-000-000-000</a></li>
	  					<li><a href="#"><i class="fa fa-angle-double-right"></i>Email: info@saccox.co.ug</a></li>
	  					<li><a href="#"><i class="fa fa-angle-double-right"></i>Whatsapp: +256-000-000-000</a></li>
	  					<li><a href="#"><i class="fa fa-angle-double-right"></i>Location: Mbarara-Booma</a></li>
	  					<li><a href="#" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Skype: +256-000-000-000</a></li>
	  				</ul>
	  			</div>
	  		</div>
	  		<div class="row">
	  			<div class="col-xs-12 col-sm-12 col-md-12 mt-1 mt-sm-4">
	  				<ul class="list-unstyled list-inline social text-center">
	  					<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
	  					<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
	  					<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
	  					<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
	  					<li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
	  				</ul>
	  			</div>
	  			<hr>
	  		</div>	
	  		<div class="row">
	  			<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
	  				<p><u><a href="#">Sacco X</a></u> is a Registered Sacco of Lorem, Lorem a wholly owned subsidiary of Lorem. Lorem, Lorem, MN</p>
	  				<p class="h6">Designed & maintained by <a class="softcodes.dev ml-2" href="#" target="_blank">SoftcodesTech</a></p>
	  			</div>
	  			<hr>
	  		</div>	
	  	</div>
	  </section>

	<!-- jQuery library -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled Bootstrap JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script> -->

  <!-- Other scripts -->
  <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
 -->
	<!-- External JavaScript file -->
	<script src="web.js"></script>

	<!-- AOS JavaScript -->
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  
	<!-- Initialise AOS -->
	<script>
    	AOS.init();
  	</script>
</body>
</html>
    