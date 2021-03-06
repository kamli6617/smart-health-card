<!DOCTYPE html>
<html lang="en">


  <head>
    <title>Patient Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Doctor</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="form.css" >

    
    

       <!--========== Theme Fonts ==========-->

        
        <!--Font Awesome css-->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!--Bootstrap css-->
        <link rel="stylesheet" href="css/bootstrap.min.css">

       

        <!--Template css-->
        <link rel="stylesheet" href="css/style.css">

        <!--Responsive css-->
        <link rel="stylesheet" href="css/responsive.css">



        <!--==========Favicon==========-->

        <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
        <link rel="manifest" href="../favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <script src="cities.js"></script>
   </head>



  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  	<div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+91*******</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text"><?php 
                                session_start();
                                echo "".$_SESSION['student_id'];
                            ?></span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><a href="../logindata/logout.php" class="mr-3">Log Out</a></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>

    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
        <a class="navbar-brand" href="home.html">
        <!--img src="favicon/logo.png"  width="40" height="40">&nbsp &nbsp &nbsp &nbsp </img-->
        <input type="image" src="../favicon/logo.png"  width="40" height="40">&nbsp &nbsp &nbsp &nbsp
        </a>
	      <a class="navbar-brand" href="index.html">Health Card</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="patient_portal.php" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span> Appointment</span></a></li>
				
				<li class="nav-item">
						
	          	  		<div class="dropdown">
	          	  			<div class="nav-link">
	          	  			
	          	          			<span class="dropbtn"> Department </span>

	          	 		<div class="dropdown-content">

    	<a href="#">Neurology</a>
   		<a href="#">Opthalmology</a>
    	<a href="#">Nucler Magnetic</a>
     	<a href="#">Surgical</a>
      	<a href="#">Cardiology</a>
       	<a href="#">Dental</a>
        <a href="#">Gynecologist</a>
        <a href="#">Dermatology</a>
        <a href="#">Athologists</a>
  
						</div>
						</div>
</li>





              <li class="nav-item"><a href="../kkkkk/allergy/Allergy.html" class="nav-link"><span>Allergy</span></a></li>
	          <li class="nav-item"><a href="#doctor-section" class="nav-link"><span>History</span></a></li>
	          <!-- <li class="nav-item"><a href="#blog-section" class="nav-link"><span>Blog</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li> -->
	          <li class="nav-item"><a href="patientpro.php" class="nav-link"><span>Profile</span>


	          </a></li>
	          
	        </ul>
	      </div>
	    </div>
	  </nav>
	  
	  <section class="hero-wrap js-fullheight" style="background-image: url('../images/bg_7.png');" data-section="home" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 pt-5 ftco-animate">
          	<div class="mt-5">
          		<!-- <span class="subheading">Welcome to Healthcard</span> -->
	            <h1 class="mb-4">PATIENT<br>PORTAL</h1>
	            <p class="mb-4">Nothing is more important than your health.</p>
	            
                <div class="btn btn-p py-3 px-4" data-toggle="modal" data-target="#myModa2">
                	
                Appointment

            </div>  </section>
                 <div id="myModa2" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            
                            <h2 class="modal-title">
                                Search - Patient
                              
                            </h2>
                        </div>
                         <div class="modal-body">
                            <form role="form" method="post" id="reused_form">
                                 

                                <div class="form-group">
                                    <label for="email"> Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" required maxlength="50">
                                </div>


                                <div class="form-group">
                                    <label for="name"> Date of Appointment & Time:</label>
                                    <input type="datetime-local" class="form-control"  name="date1"><label for="name">
                                </div>

                                <div class="form-group">
                                    <label for="name"> Hospital Name:</label>
                                    <input type="text" class="form-control" id="fname" name="hname" required maxlength="50">
                                </div>

                                <div class="form-group">
                                    <label for="name"> Doctor Name:</label>
                                    <input type="text" class="form-control" id="fname" name="dname" required maxlength="50">
                                </div>

                                <div class="form-group">
                                    <label for="name"> Gender:-</label>
                                    <input type="radio" name="gender" value="Male"> Male
                                    <input type="radio" name="gender" value="Female">Female
                                    <input type="radio" name="gender" value="other">Other
                                        </div>


                                <div class="form-group">
                                    <label for="name"> City:</label>
                                    <input type="text" class="form-control" id="name" name="name" required maxlength="50">
                                </div>

                                <div class="form-group">
                                    <label for="name"> Message:</label>
                                    <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                                </div>

                                <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Submit</button>
                            </form>
                                
                    </div>
            
    </div>

          </div>
        </div>
      </div>
  


    

    <!-- Patient Page -->


    <div id="services" class="services-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header">
                            <h2>Welcome</h2>
                            <p class="line1"></p>
                            <!-- <p class="line2"></p> -->
                        </div>
                    </div>
				


	 <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="single-services text-center" data-toggle="modal" data-target="#myModal4">
                            <div class="services-icon" >
                                <i class="fa fa-medkit" aria-hidden="true"></i>
                            </div>
                            <div class="services-content">
                                <h3>Search Doctor</h3> <!--edit the service you give-->
                             </div>
                        </div>
                          <div id="myModal4" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            
                            <h2 class="modal-title"> Search Doctor </h2>
                        </div>
                        <div class="modal-body">
                            <form role="form" method="post" id="reused_form">
                                 
                                
                            <select onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-control" required></select>
                            <select id ="state" class="form-control" required></select>
                            <script language="javascript">print_state("sts");</script>
                                   
                               

                            
                           
                            <div class="form-group">
                                <label for="name"> Doctor Name:</label>
                                <input type="text" class="form-control" id="Patinetid" name="Patinetid" >
                            </div>


                               
                                
                                <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Submit</button>
                            </form>
                                  
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="single-services text-center" data-toggle="modal" data-target="#myModal5">
                            <div class="services-icon" >
                              <i class="fa fa-medkit" aria-hidden="true"></i>

                            </div>
                            <div class="services-content">
                                <h3>Search Medical Store</h3> <!--edit the service you give-->
                             </div>
                            </div>
                          <div id="myModal5" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            
                            <h2 class="modal-title"> Search Medical Store </h2>
                        </div>
                        <div class="modal-body">
                            <form role="form" method="post" id="reused_form">
                                 
                                

                                <div class="form-group">
                                    <label for="name"> Enter Area:</label>
                                    <input type="text" class="form-control" id="Patinetid" name="Patinetid" required maxlength="50">
                                </div>


                                
                                <div class="form-group">
                                    <label for="name">Enter City :</label>
                                    <input type="text" class="form-control" name="Expected">
                                </div>


                                <div class="form-group">
                                    <label for="name">Enter State :</label>
                                    <input type="text" class="form-control" name="Expected">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Submit</button>
                            </form>
                                  
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="single-services text-center" data-toggle="modal" data-target="#myModal6">
                            <div class="services-icon" >
                              <i class="fa fa-flask" aria-hidden="true"></i>

                            </div>
                            <div class="services-content">
                                <h3>Search Laboratory</h3> <!--edit the service you give-->
                             </div>
                            </div>
                          <div id="myModal6" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            
                            <h2 class="modal-title"> Search Laboratory </h2>
                        </div>
                        <div class="modal-body">
                            <form role="form" method="post" id="reused_form">
                                 
                                

                                <div class="form-group">
                                    <label for="name"> Enter Area:</label>
                                    <input type="text" class="form-control" id="Patinetid" name="Patinetid" required maxlength="50">
                                </div>


                                
                                <div class="form-group">
                                    <label for="name">Enter City :</label>
                                    <input type="text" class="form-control" name="Expected">
                                </div>


                                <div class="form-group">
                                    <label for="name">Enter State :</label>
                                    <input type="text" class="form-control" name="Expected">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Submit</button>
                            </form>
                                  
                    </div>
                </div>
            </div>
        </div>
    </div>


                     <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="single-services text-center">
                            <div class="services-icon">
                                <i class="fa fa-file-text" aria-hidden="true"></i>

                            </div>
                            <div class="services-content">
                                <h3>All Report</h3> <!--edit the service you give-->
                                <p></p>
                            </div>
                        </div>
                    </div>



                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="single-services text-center">
                            <div class="services-icon">
                                <i class="fa fa-line-chart" aria-hidden="true"></i>
                            </div>
                            <div class="services-content">
                                <h3><a href="chratdata.php">Disease Analysis</a></h3> <!--edit the service you give-->
                          
                            </div>
                        </div>
                    </div>


                     <div class="col-xs-12 col-sm-6 col-md-4">
                      
            <div id="myModal13" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                                        <div class="modal-header">
                                            
                                            <h2 class="modal-title"> Appointment </h2>
                                        </div>
                                <div class="modal-body">
                                    <form role="form" method="post" id="reused_form">
                                   
                                                <div class="form-group">
                                                    <label for="email"> Email:</label>
                                                    <input type="email" class="form-control" id="email" name="email" required maxlength="50">
                                                </div>


                                                <div class="form-group">
                                                    <label for="name"> Phone No:</label>
                                                    <input type="text" class="form-control" id="pn" name="pno" required maxlength="50">
                                                </div>

                                                <div class="form-group">
                                                    <label for="name"> Date of Addmission & Time:</label>
                                                    <input type="datetime-local" class="form-control"  name="date1"><label for="name">
                                                </div>

                                                <div class="form-group">
                                                    <label for="name"> Hospital Name:</label>
                                                    <input type="text" class="form-control" id="fname" name="hname" required maxlength="50">
                                                </div>

                                                <div class="form-group">
                                                    <label for="name"> Doctor Name:</label>
                                                    <input type="text" class="form-control" id="fname" name="dname" required maxlength="50">
                                                </div>

                                                <div class="form-group">
                                                    <label for="name"> Gender:-</label>
                                                    <input type="radio" name="gender" value="Male"> Male
                                                    <input type="radio" name="gender" value="Female">Female
                                                    <input type="radio" name="gender" value="other">Other
                                                        </div>

                                               
                                                <div class="form-group">
                                                    <label for="name"> City:</label>
                                                    <input type="text" class="form-control" id="name" name="name" required maxlength="50">
                                                </div>

                                                <div class="form-group">
                                                    <label for="name"> Message:</label>
                                                    <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                                                </div>

                                            <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Submit</button>
                                        </form> 
                                </div>
            
                     </div>

                 </div>
                 </div>
            </div>

</div>
</div>
</div>

<!-- Patient Page end-->




	




    <footer class="ftco-footer ftco-section img" style="background-image: url(../images/footer-bg.jpg);">
    	<div class="overlay"></div>
      <div class="container-fluid px-md-5">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Mediplus</h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Departments</h2>
              <ul class="list-unstyled">
                <li><a href="https://en.wikipedia.org/wiki/Neurology">Neurology</a></li>
                <li><a href="#">Opthalmology</a></li>
                <li><a href="#">Nuclear Magnetic</a></li>
                <li><a href="#">Surgical</a></li>
                <li><a href="#">Cardiology</a></li>
                <li><a href="#">Dental</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Departments</a></li>
                <li><a href="#">Doctors</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#">Emergency Services</a></li>
                <li><a href="#">Qualified Doctors</a></li>
                <li><a href="#">Outdoors Checkup</a></li>
                <li><a href="#">24 Hours Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><a>203 Fake St. Mountain View, San Francisco, California, USA</a></li>
	                <li><a href="#"><span class="text">+91**********</span></a></li>
	                <li><a href="#"><span class="text">heatlhcard@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
	
           
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  
  <script src="../js/main.js"></script>
    
  </body>
</html>