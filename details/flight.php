<?php
session_start();
include("../connection.php");
if (isset($_SESSION['supplier_id'])) {
?>

<?php
                                $lid=$_GET['lid'];					
                                $resultset=mysqli_query($con,"SELECT * From supplier_flight where id='$lid'");
                                $rows=mysqli_num_rows($resultset); 
                                $y=mysqli_fetch_assoc($resultset);
                                $flight_type=$y['flight_type'];
                                $flight_price_type=$y['flight_price_type'];
                                $airport_from=$y['airport_from'];
                                $airport_to=$y['airport_to'];
                                $departure_time=$y['departure_time'];
                                $arrival_time=$y['arrival_time'];
                                $stops=$y['stops'];
                                $stop1=$y['stop1'];
                                $stop2=$y['stop2'];
                                $stop3=$y['stop3'];
                                $price=$y['price'];
                                $calendar=$y['calendar'];
                                ?>   

<!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <!-- Page Title -->
            <title>Flight Details | The Travel Square</title>
            <!-- Meta Tags -->
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="The Travel Square">
            <meta name="description"
            content="India's Largest & Fastest Growing Travel Community . The Travel Square is a Network of 10000+ Travel Suppliers , DMC & Hotel Chains & Travellers Inspiring the World to Travel In Style With Luxury at Affordabe Pricing . The Travel Square Allows its Customers to Build The Most Customizable and Comfortable Holiday Package They Desire , Hassle Free After Comparision , Without Interence of Any Agency or Third Party . It Also Gives Free Credits & No-Cost EMI Travel Plans for Its Customers to Book , With Good Management of Their Budgets.">
            <meta name="distribution" content="global">
            <meta name="country" content="india">
            <meta name="copyright" content="The Travel Square">
            <meta name="revisit-after" content="1 hour">
            <meta name="designer" content="The Travel Square">
            <meta name="language" content="english">
            <meta name="robots" content="index, follow">
            <meta name="rating" content="general">
            <meta name="publisher" content="The Travel Square">
            <meta property="og:title" content="The Travel Square">
            <meta property="og:description" content="India's Largest & Fastest Growing Travel Community . The Travel Square is a Network of 10000+ Travel Suppliers , DMC & Hotel Chains & Travellers Inspiring the World to Travel In Style With Luxury at Affordabe Pricing . The Travel Square Allows its Customers to Build The Most Customizable and Comfortable Holiday Package They Desire , Hassle Free After Comparision , Without Interence of Any Agency or Third Party . It Also Gives Free Credits & No-Cost EMI Travel Plans for Its Customers to Book , With Good Management of Their Budgets.">
            <meta property="og:image" content="http://www.thetravelsquare/the-travel-square-logo-thumbnail.png">
            <meta property="og:url" content="http://www.thetravelsquare.in/">
            <meta name="twitter:card" content="India's Largest & Fastest Growing Travel Community . The Travel Square is a Network of 10000+ Travel Suppliers , DMC & Hotel Chains & Travellers Inspiring the World to Travel In Style With Luxury at Affordabe Pricing . The Travel Square Allows its Customers to Build The Most Customizable and Comfortable Holiday Package They Desire , Hassle Free After Comparision , Without Interence of Any Agency or Third Party . It Also Gives Free Credits & No-Cost EMI Travel Plans for Its Customers to Book , With Good Management of Their Budgets.">
            <meta name="keywords" content="travel in india ,travel packages , dubai packages , holiday packages , travel, the travel square, hotels, flights, India's Largest Travel Community">
            <meta name="format-detection" content="7428558566">

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            
            <!-- Theme Styles -->
            <link rel="stylesheet" href="/files/bootstrap.min.css">
            <link href="/files/css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="/files/animate.min.css">

          

            <!-- Main Style -->
            <!--<link id="main-style" rel="stylesheet" href="css/style.css">-->
            <link id="main-style" rel="stylesheet" href="http://thetravelsquare.in/files/style-light-yellow.css">

            <!-- Updated Styles -->
            <link rel="stylesheet" href="/files/updates.css">

            <!-- Custom Styles -->
            <link rel="stylesheet" href="/files/custom.css">

            <!-- Responsive Styles -->
            <link rel="stylesheet" href="/files/responsive.css">

            <style>
            .responsive {
                width: 100%;
                max-width: 1200px;
                height: 530;
            }
            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: black;
                color: white;
                text-align: center;
            }
            .container {
                position: relative;
                font-family: Arial;
            }
            .text-block {
                position: absolute;
                bottom: 20px;
                right: 20px;
                background-color: black;
                color: white;
                padding-left: 20px;
                padding-right: 20px;
            }
            </style>

        </head>

        <body>
            <div id="page-wrapper">
              <header id="header" class="navbar-static-top">
                <div class="topnav hidden-xs">
                 <div class="container">
                   <ul class="quick-menu pull-left">
                    <li><a href="http://partner.thetravelsquare.in/partner-care"><img height="20" width="20" src="http://www.thetravelsquare.in/images/dashboard/24-7-customer-support-the-travel-square-icon.png">&nbsp;&nbsp;<b>Partner Support</b></a></li>
                    <li><a href="http://partner.thetravelsquare.in/#enquiry"><img height="20" width="17" src="http://www.thetravelsquare.in/images/dashboard/travel-expert-the-travel-square-icon.png">&nbsp;&nbsp;<b>Destination Expert</b></a></li>
                    <li><a href="http://thetravelsquare.in/holidays"><font color="black"><a class="button white btn-small uppercase" style="height: 30px; font-size: 1em; color:black"> 
                    <img height="25" width="25" src="http://www.thetravelsquare.in/images/learn-how-to-sell.png">&nbsp;&nbsp;<b>Learn How to Sell</b></a></font></a></li>
                    <li><a href="http://partner.thetravelsquare.in/offers-and-deals"><img height="18" width="20" src="http://www.thetravelsquare.in/images/dashboard/offer-and-deal-the-travel-square-icon.png">&nbsp;&nbsp;<b>Offers on Sale Targets</b></a></li>
                   </ul>
                   <ul class="quick-menu pull-right">
                    <li><a href="http://www.thetravelsquare.in/customer-care"><img height="17" width="12" src="http://www.thetravelsquare.in/images/dashboard/toll-free-the-travel-square-icon.png">&nbsp;<b>+91-7428558566</b></a></li>
                    <li class="ribbon">

                        <?php
                            $supplier_id = $_SESSION['supplier_id'];
                            $resultset = mysqli_query($con, "SELECT * From partner where supplier_id='$supplier_id'");
                            $rows = mysqli_num_rows($resultset);
                            $y = mysqli_fetch_assoc($resultset);
                            $name = $y['name'];
                        ?>

                    <a href="http://www.thetravelsquare.in/login.php"><font color="black">
                    <a class="button white btn-small uppercase" style="height: 30px; font-size: 1em; color:black">Welcome &ensp;<?php echo $name; ?></a></font></a>

                     <ul class="menu mini uppercase">
                        <li><a href="supplier-dashboard.php">Dashboard Home</a></li>
                        <li><a href="http://partner.thetravelsquare.in">Partner Dashboard</a></li>
                        <li><a href="../logout.php">Log Out</a></li>
                     </ul>
                    </li>
                    <li><a href="http://business.thetravelsquare.in/booking-cart"><img height="27" width="30" src="http://www.thetravelsquare.in/images/cart-image.png"></a></li>
                     </ul>
                 </div>
                </div>

                <div class="main-header">
                    <a href="http://partner.thetravelsquare.in/#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">Mobile Menu Toggle</a>

                    <div class="container">
                    <h1 class="navbar-brand" style="height:20%">
                    <a href="http://partner.thetravelsquare.in/dashboard" title="The Travel Square"><img src="http://www.thetravelsquare.in/images/the-travel-square-india-logo.png" alt="The Travel Square"></a></h1><br>

                    <nav id="main-menu" role="navigation">
                        <ul class="menu">
                            <li><a href="http://business.thetravelsquare.in/flight"><img height="47" width="48" src="/images/invoice-icon.png"></a></li>
                            <li><a href="http://business.thetravelsquare.in/hotel"><img height="47" width="48" src="/images/accounts-icon.png"></a></li>
                            <li><a href="http://business.thetravelsquare.in/holidays"><img height="47" width="48" src="/images/advertise-icon.png"></a></li>
                            <li><a href="http://business.thetravelsquare.in/cabs"><img height="47" width="48" src="/images/the-travel-square-terminal-logo.png"></a></li>
                            <li><a href="http://business.thetravelsqaure.in/experiences"><img height="47" width="48" src="/images/travpay-logo.jpg"></a> </li>
                        </ul>
                    </nav>
                </div>

                <nav id="mobile-menu-01" class="mobile-menu collapse">
                <ul class="mobile-topnav container">
                <center>
                <li class="ribbon"><a>Hello &ensp;Vibhu Gupta</a>
                  <ul style="padding: 10px 10px; min-width: 350px;"class="menu mini right">
                    <li><a href="/lta-registration.php" style="color:black;">Register</a></li>
                    <li><a href="/dashboard" style="color:black;">Dashboard</a></li>
                    <li><a href="logout.php" style="color:black;">Signout</a></li>
                  </ul>
                </li>
                <li class="ribbon currency">
                  <ul class="menu mini left"></ul>
                </li>
                </ul>
                </center>

            <ul id="mobile-primary-menu" class="menu">
            <li><a href="http://travpay.thetravelsquare.in">Invoice</a> </li>
                <li><a href="http://travpay.thetravelsquare.in">Accounts</a> </li>
                <li><a href="http://adds.thetravelsquare.in">Advertise</a> </li>
                <li><a href="http://terminal.thetravelsquare.in/flight">Terminal</a> </li>
                <li><a href="http://travpay.thetravelsquare.in/experiences">Travpay</a> </li>
            </ul>
            <br>
            <ul class="mobile-topnav container">
                <button class="button full-width white uppercase animated" data-animation-type="tada" data-toggle="modal" data-target="#customerlogin">
                <b><big><img height="35" width="35" src="http://www.thetravelsquare.in/images/travel-cart.png">&nbsp; &nbsp; <font color="black">Travel Cart</font></big></b></button>
            <br>
            </ul>
            </nav>
            </div>
        </header>
            </div>

            <div class="page-title-container">
                <div class="container">
                    <div class="page-title pull-left">
                        <h2 class="entry-title">Flight Details</h2>
                    </div>
                </div>
            </div>
            <section id="content">
                <div id="main">

        <section id="content">
            <div class="container">
			
			
			
                <div class="row">
                    <div id="main" class="col-sm-8 col-md-9">
					
					
					
                        <div class="travelo-box booking-section">
                            <form method="POST" class="booking-form">
                                <div class="person-information">
                                    <div class="form-group row">
										<div class="col-sm-6 col-md-5">
                                            <label> Flight Type</label>
                                            <div class="selector">
                                                <input type="text" class="input-text full-width" value="<?php echo $flight_type?>" class="full-width" readonly>
                                            </div>
                                        </div>
										<div class="col-sm-6 col-md-5">
                                            <label> Flight Price Type</label>
                                            <div class="selector">
                                                <input type="text" value="<?php echo $flight_price_type ?>" class="input-text full-width" readonly>
                                                   
                                            </div>
                                        </div>
										<div class="col-sm-6 col-md-5">
                                            <label>From Airport</label>
                                            <input type="text" name="airport_from" class="input-text full-width" value="<?php echo $airport_from ?>" placeholder="From Airport" readonly>
                                        </div>
										<div class="col-sm-6 col-md-5">
                                            <label>To Airport</label>
                                            <input type="text" name="airport_to" class="input-text full-width" value="<?php echo $airport_to ?>" placeholder="To Airport" readonly>
                                        </div>
										<div class="col-sm-6 col-md-5">
                                            <label>Departure Time</label>
                                            <input type="text" name="departure_time" class="input-text full-width" value="<?php echo $departure_time ?>" placeholder="Departure Time" readonly>
                                        </div>
										<div class="col-sm-6 col-md-5">
                                            <label>Arrival Time</label>
                                            <input type="text" name="arrival_time" class="input-text full-width" value="<?php echo $arrival_time ?>" placeholder="Arrival Time" readonly>
                                        </div> 
                                        
                                        
                                    </div>
									<div class="form-group row">
										<div class="col-sm-6 col-md-5">
                                            <label> Stops</label>
                                            <div class="selector">
                                                <input type="text" value="<?php echo $stops ?>" class="input-text full-width" readonly>
                                                  
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-5">
                                            <label>STOP 1</label>
                                            <input type="text" name="stop1" class="input-text full-width" value="<?php echo $stop1 ?>" placeholder="Stop 1">
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 col-md-5">
                                            <label>STOP 2</label>
                                            <input type="text" name="stop2" class="input-text full-width" value="<?php echo $stop2 ?>" placeholder="Stop 2">
                                        </div>
                                        
                                        <div class="col-sm-6 col-md-5">
                                            <label>STOP 3</label>
                                            <input type="text" name="stop3" class="input-text full-width" value="<?php echo $stop3 ?>" placeholder="Stop 3">
                                        </div>
                                    </div>
									<div class="form-group row">
										<div class="col-sm-6 col-md-5">
                                            <label>Price</label>
                                            <input type="text" name="price" class="input-text full-width" value="<?php echo $price ?>" placeholder="Enter Price" readonly>
                                        </div>
                                        <div class="col-sm-6 col-md-5">
                                            <label> Calender Price</label>
                                            <div class="selector">
                                                <input type="text" name="calendar" value="<?php echo $calendar ?>" class="input-text full-width" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar col-sm-4 col-md-3">
                        <div class="travelo-box contact-box">
                            <center><h4>Need Some Help ?</h4>
                            <p>The Travel Sqaure Executives Are Always Ready Help You 24/7 .</p>
                            <address class="contact-details">
                                <span class="contact-phone">+91- 7428558566</span><br>
                                <br>
                                <a class="contact-email" href="">help.thetravelsquare@gmail.com</a>
                            </address></center>
                        </div>
						
                        
                        
                    </div>
                </div>
            </div>
        </section>
        
         <footer id="footer" class="style5">
            
			
			
            <div class="bottom white-area">
                <div class="container">
                    
                    <div class="pull-right">
                        <a id="back-to-top" href="" class="animated bounce" data-animation-type="bounce" style="animation-duration: 1s; visibility: visible;"><i class="soap-icon-longarrow-up circle"></i></a>
                    </div>
                    <div class="copyright pull-right">
                        <p>© 2020z Supplier | The Travel Square</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
	


    <!-- Javascript -->
    <script type="text/javascript" src="files/jquery-1.11.1.min.js.download"></script>
    <script type="text/javascript" src="files/jquery.noconflict.js.download"></script>
    <script type="text/javascript" src="files/modernizr.2.7.1.min.js.download"></script>
    <script type="text/javascript" src="files/jquery-migrate-1.2.1.min.js.download"></script>
    <script type="text/javascript" src="files/jquery.placeholder.js.download"></script>
    <script type="text/javascript" src="files/jquery-ui.1.10.4.min.js.download"></script>
    
    <!-- Twitter Bootstrap -->
    <script type="text/javascript" src="files/bootstrap.js.download"></script>
    
    <!-- parallax -->
    <script type="text/javascript" src="files/jquery.stellar.min.js.download"></script>
    
    <!-- waypoint -->
    <script type="text/javascript" src="files/waypoints.min.js.download"></script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="files/theme-scripts.js.download"></script>
    <script type="text/javascript" src="files/scripts.js.download"></script>
    

</body></html>

<?php
} else {
?>
<SCRIPT LANGUAGE='JavaScript'>
// alert('Please Login or Register!!');
window.location.href = './terminal-login.php';
</Script>

<?php
}
?>

