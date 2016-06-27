<?php

session_start();
require 'phpmailer/PHPMailer-master/PHPMailerAutoload.php';
?>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EMAIL RESPONSE || DRONE INTERNATIONAL</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

</head>
<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="../index.html"  onclick = $("#menu-close").click(); >Go Back</a>
                
            </li>
        </ul>
    </nav>
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>DRONE INTERNATIONAL</h1>
            <h3>Your Trusted Scrap Dealer</h3>
            <br>
<?php
if(isset($_POST['name'],$_POST['email'],$_POST['comment'])){
   $fields = [
   'name' => $_POST['name'],
   'email' => $_POST['email'],
   'msg' => $_POST['comment']
   ];

   foreach($fields as $field => $data) {

   }
   if(empty($errors)){
    	$m = new PHPMailer;
    	$m->isSMTP();
    	$m->SMPTAuth = true;
    	$m->Username = 'droneint';                          // SMTP username
	$m->Password = '65J66qzfVu';                        // SMTP password
	$m->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$m->Port = 587;                                    // TCP port to connect to
	$m->setFrom('mail@droneinternational.com.sg', 'information');
	$m->addAddress('recieve@droneinternational.com.sg');               // Name is optional
   	// Optional name
	$m->isHTML(true);                                  // Set email format to HTML
	$m-> Subject = 'Contact Form Submitted';
	$m->Body = 'From: ' . $fields['name'] . '(' . $fields['email'] . ')<p>' . $fields['msg'] . '</p>';

	$m->FromName = 'Information';

	if($m->send()){
	  echo '<a href="../index.html" class="btn-light  btn-lg">Your message has been sent. We will respond to you as soon as we can. Go back!!</a>';
	}
	else{
	echo '<a href="../index.html" class="btn-light  btn-lg">Something Went Wrong. Go back!!</a>';
	}
   }

}
else{
$errors[]='Something went wrong';
}
$_SESSION['errors']= $errors;
$_SESSION['fields']= $fields;
?>
        
</div>
</body>
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

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

</html>