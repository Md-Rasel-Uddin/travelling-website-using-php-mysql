
<!DOCTYPE html>
<html class="">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <!-- Page Title -->
    <title>Star Holiday BD</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="Travel Agency In Bangladesh">
    <meta name="keywords" content="star Holiday BD travel agency in Bangladesh. hotel booking, flight booking, hajj ,omrah, tour flight, tour packages , visa , air flight, air plane. air travel  " />

    <script src="js/cdn-cgi.js"></script>
    <link rel="shortcut icon" type="image/png" href="images/star_holiday_logo/st1.png" />
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <link href="css/css-min.css?v=FI8HWj8empu0gAeuN6Ub-vMG5orxYOmuaPC6KY_oNHE1" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
    $( "#checkIn" ).datepicker();
    $( "#checkOut" ).datepicker();
    $( "#departing" ).datepicker();
    $( "#returning" ).datepicker();
  } );
  </script>
  
                       
</head>
<body> 
    <div data-spy="scroll" data-target=".navbar" data-offset="1000" class="">
        <!-- navbar -->
        <nav class="navbar navbar-default navbar-fixed-top  Login_menu" style="background-image: url('images/Banner/Main_Banner/Log-2.jpg')">

            <div class="container-fluid ">
                <div class="navbar-header" >
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php" style="margin-top: -19px;margin-left: -26px;">
                    <img style="padding: 30px;padding-top: 20px; padding-bottom: 0px" src="<?= $_SESSION['agency_logo'] ?>">

                      <!--  <?php 
                     //echo $_SESSION['agency_logo'];

                      ?> -->
                      <h3 style="margin-left: 17px">
<?php
echo $_SESSION['agency_name'];
                  
?>
</h3>




                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                                   
                       <li ><a style="cursor: auto;margin-top: 6px;padding-right: 0px"> <p style="padding-right: -10px">Welcome to your account, <?php echo $_SESSION['admin_name'];?></p></a></li>                        
                        <li>  <a href="../index.php"> |  logout</a></li>
                        <li><img src="images/star_holiday_logo/l111.jpg"></li>
                    </ul>
                </div>
            </div>
        </nav>       
