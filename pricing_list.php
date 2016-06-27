<?php
include ('checksession.php');	
	
	$user_name = $_GET["user_name"];
	$pass = $_GET["pass"];
include('connection.php'); 
    
?>
<script language="javascript">
	
	function timeout() {
	document.form1.action = "settime.php?admin=1&user_name=<?php echo $user_name; ?>";
	document.form1.action = "settime.php?admin=1&pass=<?php echo $pass; ?>";
	document.form1.submit();
	}
</script>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EDIT PRICES || DRONE INTERNATIONAL</title>

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
                <a href="logout.php"  onclick = $("#menu-close").click(); >Log Out</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>DRONE INTERNATIONAL</h1>
            <h3>Your Trusted Scrap Dealer</h3>
            <br>
            <a href="#portfolio" class="btn-light  btn-lg">Work With Prices</a>
        </div>
    </header>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
              <form method="post" action="edit.php" >
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>EDIT PRICES</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                  <h2>Reinforcement Bar<h2>
                                    <img class="img-portfolio img-responsive" src="img/hms1.jpg"><br>
                                    <?php
		                          
		                          $query1 = mysqli_query($con, "select * from product where name = 'ReinforcementBar'" );
		                          
		                          while($query2 = mysqli_fetch_array($query1)){
		                          echo "PRICE: $". $query2['price'];
		                          }
		                          
		                         
		                 ?>	 
		                 <br>
                                    <input type='text' name="ReinforcementBar" class="btn btn-light" placeholder="Type a new Price">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-item">

                                  <h2>PlateStructure<h2>
                                    <img class="img-portfolio img-responsive" src="img/hms2.jpg"><br>
                                    <?php
		                          $query3 = mysqli_query($con, "select * from product where name='PlateStructure'");
		                          while($query4=mysqli_fetch_array($query3))
                                    		{   
				                        echo "PRICE: $". $query4['price'];
                                    		}
		                 ?> 
		                 <br>
                                    <input type='text' name="PlateStructure" class="btn btn-light" placeholder="Type a new Price">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                  <h2>SteelSection<h2>
                                    <img class="img-portfolio img-responsive" src="img/s_sec.jpg"><br>
                                    <?php
		                          $query5 = mysqli_query($con, "select * from product where name='SteelSection'");
		                          while($query6=mysqli_fetch_array($query5))
                                   		 {   
				                        echo "PRICE: $". $query6['price'];
                                    		}
		                ?> 
		                <br>
                                    <input type='text' name="SteelSection" class="btn btn-light" placeholder="Type a new Price">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-item">

                                  <h2>Crane<h2>
                                    <img class="img-portfolio img-responsive" src="img/crane.png"><br>
                                     <?php
		                          $query7 = mysqli_query($con, "select * from product where name='Crane'");
		                          while($query8=mysqli_fetch_array($query7))
                                   		 {   
				                        echo "PRICE: $". $query8['price'];
                                    		}
		                 ?> 
		                 <br>
                                    <input type='text' name="Crane" class="btn btn-light" placeholder="Type a new Price">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-item">

                                  <h2>Excavator<h2>
                                    <img class="img-portfolio img-responsive" src="img/excavator.jpg"><br>
                                    <?php
		                          $query9 = mysqli_query($con, "select * from product where name='Excavator'");
		                          while($query10=mysqli_fetch_array($query9))
                                    {   
				                        echo "PRICE: $". $query10['price'];
                                    }
		                 ?> 
		                 <br>
                                    <input type='text' name="Excavator" class="btn btn-light"  placeholder="Type a new Price">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-item">

                                  <h2>MagneticExcavator<h2>
                                    <img class="img-portfolio img-responsive" src="img/excavator_magnet.jpg"><br>
                                    <?php
		                          $query11 = mysqli_query($con, "select * from product where name='MagneticExcavator'");
		                          while($query12=mysqli_fetch_array($query11))
                                    {   
				                        echo "PRICE: $". $query12['price'];
                                    }
		                 ?>
		                 <br>
                                    <input type='text' name="MagneticExcavator" class="btn btn-light"  placeholder="Type a new Price">

                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                  <button type="submit" class="btn btn-dark btn-lg" value="Submit New Prices">Update Prices </button> <br><br><br>
                  <a href="logout.php" class="btn btn-dark btn-lg">Log Out</a>
                </div>

              </form>
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
                    <p class="text-muted">Copyright &copy; DRONE INTERNATIONAL 2016 </p>
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
