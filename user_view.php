<?php




error_reporting(0);
session_start();
if (!isset($_SESSION['MOBILE'])) {
	header("location:index.php");
}

$W_MOBILLE = $_SESSION['MOBILE'];
// echo $W_MOBILLE;





	





?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet" />
	<title>বিসিএস উইমেন নেটওয়ার্ক</title>
	<link rel="icon" href="./image/logo_BCSWN.jpg" type="image/ico">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet" />
	<!--fontawesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

	<!-- font awesome link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css" integrity="sha512-kJ30H6g4NGhWopgdseRb8wTsyllFUYIx3hiUwmGAkgA9B/JbzUBDQVr2VVlWGde6sdBVOG7oU8AL35ORDuMm8g==" crossorigin="anonymous" />

    <style>

    *{
        margin: 0;
        padding: 0;
    }
         .box{
             height: 100vh;
             width: 100vw;
             
         }

         .box1{
             height: 15vh;
             width: 100vw;
             
         }

         .box2{
             height: 65vh;
             width: 100vw;
             
         }

         .box3{
             height: 20vh;
             width: 100vw;
             
         }


         .wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 80vh;
    
}

         .form-holder {
    background: #000;
    width: 450px;
    max-width: 90%;
    padding: 35px 0px;
    opacity: .7;
    border-radius: 10px;
}   

















   


    </style>
</head>
<body>
<div class="wrapper">
    <div class="box">

       <div class="box1">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-dark my-navbar">
                        <!-- Sidebar Toggle (Topbar) -->

                        <!-- Topbar Search -->


                        <!-- test starts  -->

                        <div class="row text-center col-12">

                            <div style="margin: 0 auto; padding: 20px!important; ">


                                <img src="./image/logo_BCSWN.jpg" class="mr-4 " alt="BD Logo" height="60px"
                                    width="60px">
                                <h1 class="d-inline "> <b class="text-white "
                                        style="position:relative; top:10px;  text-shadow: 3px 3px 5px rgba(150, 150, 150, 1); font-size:3.5vw;">
                                        বিসিএস উইমেন নেটওয়ার্ক </b></h1>

                            </div>

                            <!-- 
                        <h1 class="text-white text-center d-inline" style="padding: 20px; margin-top:5px;"><b class="text-center" style="text-shadow: 3px 3px 5px rgba(150, 150, 150, 1); font-size:3.5vw;">বিসিএস
								উইমেন নেটওয়ার্ক</b></h1> -->

                        </div>
                        <!-- test ends  -->


                        <!-- Topbar Navbar -->



                        <!-- <img src="./image/logo.png" class="mr-4 "  alt="BD Logo" height="60px" width="60px">
						<h1 class="text-white text-center d-inline" style="padding: 20px; margin-top:5px;"><b class="text-center" style="text-shadow: 3px 3px 5px rgba(150, 150, 150, 1); font-size:3.5vw;">বিসিএস
								উইমেন নেটওয়ার্ক</b></h1> -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->

                            <!-- Nav Item - Alerts -->

                            <!-- Nav Item - Messages -->

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown">

                            </li>
                        </ul>
                    </nav>
                    <!-- End of Topbar -->
       </div>
       <div class="box2">
          <!-- Begin Page Content -->
          <div>
                        <div class="wrapper">
                            <div class="form-holder">
                                <h1 class="text-center text-white">DASHOBOARD</h1>
                                <ul style="list-style:none">
                                    <!-- <li>

                 <a href="./u_profile.php"style="color: #6aa364;margin-left:150px"> <i class="fas fa-user pr-2" ></i>Profile </a>
                
                 </li> -->
                                    <li>

                                        <a href="./u_profile.php" style="color: #6aa364;margin-left:120px"> <i
                                                class="fas fa-user pr-2"></i>Profile </a>

                                    </li>
                                    <li>
                                        <a href="./event_list.php" style="color: #6aa364;margin-left:120px"><i
                                                class="fas fa-book pr-2"></i>Event List</a>

                                    </li>
                                    <li>
                                        <a href="#" style="color: #6aa364;margin-left:120px;"> <i class="fas fa-wallet mr-2" ></i>Payment</a>
                                        
                                        <div class="n" style="width: 40%; margin: 0 auto;">
                                        <ul class="ml-2" style="list-style:none">
                                            <li><a href="#" style="color: #6aa364;"> <i class="fas fa-wallet mr-2" ></i>Membership</a></li>
                                            <li><a href="./subscription.php" style="color: #6aa364;"> <i class="fas fa-wallet mr-2" ></i>Subcription</a></li>
                                            <li><a href="#" style="color: #6aa364;"> <i class="fas fa-wallet mr-2" ></i>Event</a></li>
                                            
                                        </ul>
                                        </div>
                                        

                                    </li>
                                    <li>
                                        <a href="./help_view.php" style="color: #6aa364;margin-left:120px"> <i
                                                class="fab fa-hire-a-helper"></i> Help Notice</a>

                                    </li>
                                    <li>
                                        <a href="./complain_box.php" style="color: #6aa364;margin-left:120px"><i
                                                class="fab fa-cuttlefish mr-2"></i>Complain Box</a>

                                    </li>


                                </ul>
                            </div>
                        </div>


                    </div>
       </div>
       <div class="box3">
       <footer class="footer mt-4 bg-dark"
                    style="font-weight: bold; text-shadow: 3px 3px 5px rgba(150, 150, 150, 1); position: fixed; bottom: 0; width: 100%; height: 15vh; ">

                    <div class="container text-center mt-2" >

                        <h3 class="d-inline text-white">
                            Powered By <h1 class="d-inline text-white">IT Bangla Ltd.</h1>
                        </h3>
                    </div>


                    <div class="scrolltop float-right">
                        <!-- <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i> -->
                    </div>


                </footer>
       </div>
    
    </div>

</div>



    	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


</body>
</html>