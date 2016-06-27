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

    <title>LOG IN</title>

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
            <a href="#portfolio" class="btn-light  btn-lg">Log In</a>
        </div>
    </header>

    <?php 
	
	
	echo "<script language = 'javascript'>";
	echo "function verify(){
	login = form1.user_name.value;
	password = form1.pass.value;
	if(login == ''){
	alert('Enter Login');
	form1.user_name.focus();
	return false;
					}
	if(password == ''){
	alert('Enter Password');
	form1.pass.focus();
	return false;
					}
	}
		function clearvalues(){
			 form1.user_name.value='';
	     	 form1.pass.value='';
		     form1.user_name.focus();
		}	
		
</script>";					
?>   
<?php
if($_GET["invalid"]==1)
	echo"<tr><td></td><td><font color='red'>Incorrect Information!</font></td></tr>";
if($_GET["invalid"]==2)
	echo "<tr><td></td><td><font color=blue>Session Expired!</font></td></tr>";
	
?>
                     <center>
			<form name="form1" method="post" action="verify.php" onSubmit="return verify()">
			<fieldset>
			<br/>
			<h4><u>Login</u></h4>
			</br>
				<font class="btn-lg btn-light">&nbsp;&nbsp;&nbsp;&nbsp; User ID:</font><input type="text" class="btn-lg btn-light" name="user_name"><br/><br/>
				<font class="btn-lg btn-light">Password:</font><input type="password"  class="btn-lg btn-light" name="pass"><br/><br/>
				<input type="submit" class="btn-lg btn-light"  value="Login"><br/><br/>
			</fieldset>
			</form>
		   </center>
<?php 
	echo "<script> 
	form1.user_name.focus();
	form1.pass.focus();
	</script>";
?>
    
    

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

</body>

</html>
