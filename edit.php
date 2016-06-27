<?php
include('connection.php');

$ReinforcementBar = $_POST['ReinforcementBar'];
$PlateStructure = $_POST['PlateStructure'];
$SteelSection = $_POST['SteelSection'];
$Crane = $_POST['Crane'];
$Excavator = $_POST['Excavator'];
$MagneticExcavator = $_POST['MagneticExcavator'];
?>

<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PRICE UPDATE || DRONE INTERNATIONAL</title>

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
                <a href="pricing_list.php"  onclick = $("#menu-close").click(); >Edit Page</a>
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

<?php
if(!$ReinforcementBar == NULL)
{
$query1 = mysqli_query($con, "update product set price='".$ReinforcementBar."' where name='ReinforcementBar'")or die(mysqli_error($con));
}
if(!$PlateStructure == NULL)
{
$query3 = mysqli_query($con, "update product set price='".$PlateStructure."' where name='PlateStructure'")or die(mysqli_error($con));
}
if(!$SteelSection == NULL)
{
$query5 = mysqli_query($con, "update product set price='".$SteelSection."' where name='SteelSection'")or die(mysqli_error($con));
}
if(!$Crane == NULL)
{
$query7 = mysqli_query($con, "update product set price='".$Crane."' where name='Crane'")or die(mysqli_error($con));
}
if(!$Excavator == NULL)
{
$query9 = mysqli_query($con, "update product set price='".$Excavator."' where name='Excavator'")or die(mysqli_error($con));
}
if (!$MagneticExcavator == NULL)
{
$query11 = mysqli_query($con, "update product set price='".$MagneticExcavator."' where name='MagneticExcavator'")or die(mysqli_error($con));
}
?>

<a href="pricing_list.php" class="btn-light  btn-lg">Price Updated... Go Back!!</a>
  
  
  </div>
</body>

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

