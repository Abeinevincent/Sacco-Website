	<!--==== Header File ====-->
	<?php include 'header.php';?>
	<!------------------ CONTACT US MAIN SECTION ------------------->  

  <!-- About top image section -->
  <section id="contacti">
      <img src="Images/cent.jpg" class="w-100 adj-margin" alt="About Us Image" />
  </section>

  <!-- Contact Us Section -->
    <section class="section-padding section-dark" id="contact">
      <div class="container">
        <div class="section-title text-left mt-3 mb-1">
        	<h2>Contact Us</h2>
        	<p>Contact</p>
      	</div>
        <div class="row">
          <!-- Section Titile -->
          <div class="col-md-6 mt-1">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
            </p>

            <div>
             Company:  <span href="https://saccox.com">SACCO-X</span>
            </div>
            <div>
             Address: <span href="#">Sacco X, Head Office: Lorem</span>
            </div>
            <div class="find-widget">
              Phone:  <a href="tel:+256-000-000-000" hover-none>+ 256-000-000-000</a>
            </div>
                
            <div>
              Email:  <a href="mailto:saccox@gmail.com" class="hover-none">saccox@gmail.com</a>
            </div>
            <div>
               Hours: <span href="#">Mon to Sat: 09:30 AM - 10.30 PM</span>
            </div>
          </div>

          <!-- contact form -->
          <div class="col-md-6" style="padding-bottom:20px;">
            <form role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
              <!-- Name -->
              <div class="form-group label-floating">
                <label class="control-label" for="name">Name</label>
                <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name">
                <div class="help-block with-errors"></div>
              </div>
              <!-- email -->
              <div class="form-group label-floating">
                <label class="control-label" for="email">Email</label>
                <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email">
                <div class="help-block with-errors"></div>
              </div>
                      
              <!-- Message -->
              <div class="form-group label-floating">
                  <label for="message" class="control-label">Message</label>
                  <textarea class="form-control" style="height:150px;" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                  <div class="help-block with-errors"></div>
              </div>
              <!-- Form Submit -->
              <div class="form-submit mt-5">
                  <button class="btn btn-primary" type="submit" id="form-submit">Send Message</button>
                
              </div>
            </form>
          </div>
        </div>
      <div class=" row h-50 contact-map" id="googleMap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3412.958804892796!2d30.668750714271816!3d-0.6296305354387465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfd2046c47bd8458b!2sLink%20Suites%2C%20Bar%20%26%20Restaurant!5e1!3m2!1sen!2sug!4v1602345579529!5m2!1sen!2sug" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe> 
      </div>
    </div>
  </section>
  




















	<!--==== Footer File ====-->
	<?php include 'footer.php';?>