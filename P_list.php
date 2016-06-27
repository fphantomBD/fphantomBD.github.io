<?php
   include('connection.php');
   
   ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PRICE LIST || DRONE INTERNATIONAL</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="index.html"  onclick = $("#menu-close").click(); >Main Page</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>DRONE INTERNATIONAL</h1>
            <h3>Your Trusted Scrap Dealer</h3>
            <br>
            <a href="#portfolio" class="btn-light  btn-lg">SEE OUR PRICES</a>
        </div>
    </header>


  <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Our Price List</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                  <h2>HMS 1<h2>
                                    <img class="img-portfolio img-responsive" src="img/hms1.jpg"><br>
                                     <?php
		                          
		                          $query1 = mysqli_query($con, "select * from product where name = 'ReinforcementBar'" );
		                          
		                          while ($query2 = mysqli_fetch_array($query1)){
		                          echo "PRICE: $". $query2['price'];}
		                          
		                         
		                 ?>	 
		                 <br>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                
                                  <h2>HMS 2<h2>
                                    <img class="img-portfolio img-responsive" src="img/hms2.jpg"><br>
                                       
                                      <?php
		                          $query3 = mysqli_query($con, "select * from product where name='PlateStructure'");
		                          while($query4=mysqli_fetch_array($query3))
                                    		{   
				                        echo "PRICE: $". $query4['price'];
                                    		}
		                 ?> 
		                 <br>
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                
                                  <h2>Steel Sections<h2>
                                    <img class="img-portfolio img-responsive" src="img/s_sec.jpg"> <br>
                                      <?php
		                          $query5 = mysqli_query($con, "select * from product where name='SteelSection'");
		                          while($query6=mysqli_fetch_array($query5))
                                   		 {   
				                        echo "PRICE: $". $query6['price'];
                                    		}
		                ?> 
		                <br>
                               
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-item">
                               
                                  <h2>Cranes<h2>
                                    <img class="img-portfolio img-responsive" src="img/crane.png"><br>
                                        
                                      <?php
		                          $query1 = mysqli_query($con, "select * from product where name='Crane'");
		                          while($query2=mysqli_fetch_array($query1))
                                   		 {   
				                        echo "PRICE: $". $query2['price'];
                                    		}
		                 ?> 
		                 <br>
                               
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                
                                  <h2>Excavators<h2>
                                    <img class="img-portfolio img-responsive" src="img/excavator.jpg"><br>
                                      <?php
		                          $query3 = mysqli_query($con, "select * from product where name='Excavator'");
		                          while($query4=mysqli_fetch_array($query3))
                                    {   
				                        echo "PRICE: $". $query4['price'];
                                    }
		                 ?> 
		                 <br>
                               
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                
                                  <h2>Magnetic Excavators<h2>
                                    <img class="img-portfolio img-responsive" src="img/excavator_magnet.jpg"><br>
                                        <?php
		                          $query5 = mysqli_query($con, "select * from product where name='MagneticExcavator'");
		                          while($query6=mysqli_fetch_array($query5))
                                    {   
				                        echo "PRICE: $". $query6['price'];
                                    }
		                 ?>
		                 <br>
                              
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    
                    <a href="index.html" class="btn-dark  btn-lg">GO BACK TO MAIN PAGE</a>
                    
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <!-- Map -->
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    
                    
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; DRONE INTERNATIONAL | Designed by Fphantom</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
