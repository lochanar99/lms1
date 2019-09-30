<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Add event</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="seo_version">

    <!-- LOADER -->
	<div id="preloader">
		<div id="cupcake" class="box">
			<span class="letter">L</span>
			<div class="cupcakeCircle box">
				<div class="cupcakeInner box">
					<div class="cupcakeCore box"></div>
				</div>
			</div>
			<span class="letter box">A</span>
			<span class="letter box">D</span>
			<span class="letter box">I</span>
			<span class="letter box">N</span>
			<span class="letter box">G</span>
		</div>
	</div>
	<!-- END LOADER -->

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img style="position: absolute; top: 20px; bottom: 20px" src="images/logos/logo-light.png" alt="image" width="100" height="100"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right hidden-md hidden-sm hidden-xs">
                        <li><a class="btn-light btn-radius btn-brd top-btn" href="#"><i class="fa fa-angle-double-right"></i>SEO Analysis</a></li>
                    </ul>
                     <ul class="nav navbar-nav navbar-right menu-top">
                        <li><a href="/index">About</a></li>
                        <li><a href="sProfile.html">Profile </a></li>
                        <li><a href="Student_Module_Home.html">Lectures</a></li>
                        <li><a class="active" href="{{url('Events')}}">Events & Extra Lectures</a></li>
                        <li><a href="sAffairDlib.html">Student Affairs & Digital Library</a></li>
                        <li><a href="/sexam">Exams & Assignments </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="all-page-title" style="background-image:url(images/pattern-4.png);">
        <div class="container text-center"><br>
            <h1>EVENTS</h1>
        </div>
		<!--Page -->
        <div class="page-info">
            <div class="container">
            	<div class="inner-container">
                    <ul class="bread-crumb">
                        <li><a href="{{url('Add_Extra_Lecture')}}">Add Extra Lecture</a></li>
                        <li><a href="{{url('NewEvent')}}"><span>Add Event</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Page-->
    </div><!-- end section -->

    <svg id="clouds" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>

    @foreach($errors->all() as $error)

    <div class="alert alert-danger" role="alert">

        {{$error}}

    </div>


    @endforeach

 	<form method="post" action="/saveEvent">
        {{csrf_field()}}
 		<div class="container">
  		Student ID:
  			<input type="text" class ="form-control" name="stdId"  placeholder="OPSxxxx">
  			<br><br>
  			&nbsp&nbsp&nbsp&nbsp&nbspStudent Name:
  			<input type="text" class ="form-control" name="stdName"  placeholder="First Name">
  			<br><br>
  			Event Date:&nbsp&nbsp&nbsp&nbsp
  			<input type="date" class ="form-control" name="eDate" placeholder="" >
  			<br><br>
  			Venue:
              <select class="form-control" id="eVenue" name="eVenue">
                    <option value="Auditorium">Auditorium</option>
                    <option value="Ground">Ground</option>
                </select>
  			<br><br>
  			Participants:
  			<input type="text" class ="form-control" name="ePartici"  placeholder="<99">
  			<br><br>
  			Telephone:
  			<input type="text"  class ="form-control" name="eTel" placeholder="eg:770688874">
  			<br><br>

            <script type="text/javascript">
            function clicked() {
                if (confirm('Do you want to submit?')) {
                    yourformelement.submit();
            } else {
           return false;
                }
            }

            </script>
            <div class="container text-center">
  			<input type="submit" class="btn btn-primary" value="REQUEST">
	       <br><br>
           </div>
  		</div>
  			
	</form> 
		

<div class="container text-center">
		
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-warning"  id="cEvents" class="float-left submit-button" ><a href = "{{url('show_current_events')}}">View Current Events</a></button>
        
       
</div>


    
    <section class="section nopad cac text-center">
        <a href="#"><h3>We will inform you when we have approved your request!</h3></a>
    </section>

   


            

    <svg id="clouds1" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>

	<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img src="images/logos/logo-light.png" alt="">
                           
                        </div>
                        <p> All inquiries and doubts must be addressed to the priciple at the 3rd floor</p>
  
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">info@yoursite.com</a></li>
                            <li><a href="#">www.yoursite.com</a></li>
                            <li>Colombo 7, Ward Place Road</li>
                            <li>+94 112 729729</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information</h3>
                        </div>

                        <ul class="footer-links">
                           <li><a href="#">About</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="{{url('Events')}}">Events & Extra Lectures</a></li>
                            <li><a href="#">Student Affairs & Digital Library</a></li>
                            <li><a href="#">Exams & Assignments</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Social</h3>
                        </div>
                        <ul class="footer-links social-md">
                            <li><a class="fb" href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li><a class="gi" href="#"><i class="fa fa-github"></i> Github</a></li>
                            <li><a class="tw" href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                            <li><a class="dr" href="#"><i class="fa fa-dribbble"></i> Dribbble</a></li>
                            <li><a class="pi" href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->
	
   

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>