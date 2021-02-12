<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<!-- Important meta tags -->
	<meta charset="utf-8" />
	<meta name="description" content="Official website for Sacco X" />
	<meta name="kewords" content="Awesome Website, Sacco X" />
	<meta name="author" content="Abeinemukama Vicent" />
	<meta http-equiv="refresh" content="500" />
	
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css.map" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.rtl.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.rtl.css.map" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.rtl.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.rtl.min.css.map" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css.map" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css.map" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.rtl.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.rtl.css.map" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.rtl.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.rtl.min.css.map" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css.map" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.css.map" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.min.css.map" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.rtl.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.rtl.css.map" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.rtl.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css.map" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css.map" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.rtl.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.rtl.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.rtl.min.css.map" />
    
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" /> -->

	<!-- Font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" type="text/css" />
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css" type="text/css" />
	
	<!-- AOS CSS -->
	 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" type="text/css" />
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="gallery.css"  />

	<!-- Website title -->
	<title>Bootstrap Test</title>
</head>
<body>

     <!-- Navbar -->
  <?php include "navbar.php";?>
  <!-- end of NAVBAR -->

      <section id="newsi">
        <div class="container-fluid">
          <img src="Images/abouti.jpg" class="w-100 adj-margin" alt="About Us Image" />
        </div>
      </section>
  <!------------GALLERY PAGE------------------>  
      <div class="container w-60 add-border my-3">
                
        <div class="row">
        <div class="col-sm-12">
        <div class="jumbotron jumbotron-fluid">
        <div class="container jump">
        <h1 class="display-4 first">GALERY & EVENTS</h1>
        <p class="lead third"> 
        Explore Sacco X in photos and view several activities including coperate meetings, .celebrations and many more. 
        </p>
        </div>
        </div>
        </div>  
        </div>
            
        <!--Carousel Wrapper-->
        <div id="carousel-with-lb" class="carousel slide carousel-multi-item" data-ride="carousel">
        
        <!--Controls-->
        <div class="controls-top">
        <a class="btn-floating btn-secondary" href="#carousel-with-lb" data-slide="prev"></a>
        <a class="btn-floating btn-secondary" href="#carousel-with-lb" data-slide="next"></a>
        </div>
        <!--/.Controls-->
        
        <!--Indicators-->
        <ol class="carousel-indicators">
        <li data-target="#carousel-with-lb" data-slide-to="0" class="active secondary-color"></li>
        <li data-target="#carousel-with-lb" data-slide-to="1" class="secondary-color"></li>
        <li data-target="#carousel-with-lb" data-slide-to="2" class="secondary-color"></li>
        </ol>
        <!--/.Indicators-->
        
        <!--Slides and lightbox-->
        
        <div class="carousel-inner mdb-lightbox" role="listbox">
        <div id="mdb-lightbox-ui"></div>
        <!--First slide-->
        <div class=" carousel-item active text-center">
        
        <figure class="col-md-4 d-md-inline-block">
        <a href="image/sc1.jfif" data-size="1600x1067">
          <img src="image/sc1.jfif" class="img-fluid">
        </a>
        </figure>
        
        <figure class="col-md-4 d-md-inline-block">
         <a href="image/sc1.jfif" data-size="1600x1067">
          <img src="image/sc1.jfif" class="img-fluid">
        </a>
        </figure>
        
        <figure class="col-md-4 d-md-inline-block">
         <a href="image/sc1.jfif" data-size="1600x1067">
          <img src="image/sc1.jfif" class="img-fluid">
        </a>
        </figure>
        
        <figure class="col-md-4 d-md-inline-block">
               <a href="image/sc1.jfif" data-size="1600x1067">
          <img src="image/sc1.jfif" class="img-fluid">
        </a>
        </figure>
        <figure class="col-md-4 d-md-inline-block">
           <a href="image/sc1.jfif" data-size="1600x1067">
          <img src="image/sc1.jfif" class="img-fluid">
        </a>
        </figure>
        <figure class="col-md-4 d-md-inline-block">
          <a href="image/sc1.jfif" data-size="1600x1067">
          <img src="image/sc1.jfif" class="img-fluid">
        </a>
        </figure>
        
        </div>
        <!--/.First slide-->
        
        <!--Second slide-->
        <div class="carousel-item text-center">
        
        <figure class="col-md-4 d-md-inline-block">
              <a href="image/sc1.jfif" data-size="1600x1067">
          <img src="image/sc1.jfif" class="img-fluid">
        </a>
        </figure>
        
        <figure class="col-md-4 d-md-inline-block">
              <a href="image/sc1.jfif" data-size="1600x1067">
          <img src="image/sc1.jfif" class="img-fluid">
        </a>
        </figure>
        
        <figure class="col-md-4 d-md-inline-block">
         <a href="image/sc1.jfif" data-size="1600x1067">
          <img src="image/sc1.jfif" class="img-fluid">
        </a>
        </figure>
        
        <figure class="col-md-4 d-md-inline-block">
         <a href="image/sc1.jfif" data-size="1600x1067">
          <img src="image/sc1.jfif" class="img-fluid">
        </a>
        </figure>
        <figure class="col-md-4 d-md-inline-block">
        <a href="image/sc1.jfif" data-size="1600x1067">
          <img src="image/sc1.jfif" class="img-fluid">
        </a>
        </figure>
        <figure class="col-md-4 d-md-inline-block">
          <a href="image/sc1.jfif" data-size="1600x1067">
          <img src="image/sc1.jfif" class="img-fluid">
        </a>
        </figure>
        
        </div>
        <!--/.Second slide-->
        
        <!--Third slide-->
        <div class="carousel-item text-center">
        
        <figure class="col-md-4 d-md-inline-block">
          <a href="image/sc1.jfif" data-size="1600x1067">
          <img src="image/sc1.jfif" class="img-fluid">
        </a>
        </figure>
        
        <figure class="col-md-4 d-md-inline-block">
         <a href="image/sc1.jfif" data-size="1600x1067">
          <img src="image/sc1.jfif" class="img-fluid">
        </a>
        </figure>
        
        <figure class="col-md-4 d-md-inline-block">
          <a href="image/sc1.jfif" data-size="1600x1067">
          <img src="image/sc1.jfif" class="img-fluid">
        </a>
        </figure>
        
        <figure class="col-md-4 d-md-inline-block">
            <a href="image/sc1.jfif" data-size="1600x1067">
          <img src="image/sc1.jfif" class="img-fluid">
        </a>
        </figure>
        <figure class="col-md-4 d-md-inline-block">
             <a href="image/sc1.jfif" data-size="1600x1067">
          <img src="image/sc1.jfif" class="img-fluid">
        </a>
        </figure>
        <figure class="col-md-4 d-md-inline-block">
            <a href="image/sc1.jfif" data-size="1600x1067">
          <img src="image/sc1.jfif" class="img-fluid">
        </a>
        </figure>
        
        </div>
        <!--/.Third slide-->
        
        </div>
        <!--/.Slides-->
        
        </div>
        <!--/.Carousel Wrapper-->
              </div>
        
             <!--Calculator-->
          <?php include "calc.php";?>
          <!-- end of calculator -->
             
 <!-- Footer -->
  <?php include "footer.php";?>
  <!-- end of footer -->

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<!-- External JavaScript file -->
	<script type="text/javascript" src="app.js"></script>
	
	<!-- AOS JavaScript -->
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  
	<!-- Initialise AOS -->
	<script>
    		AOS.init();
  	</script>
</body>
</html>
