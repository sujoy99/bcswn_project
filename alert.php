<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

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

</head>

<style>
    body {
        position: relative;
        overflow-x: hidden;
        background: #f7f7fc;
        font-family: "Roboto", sans-serif;
    }

    /* .a:hover {
		color: white;
		text-decoration: none;
	} */

    /* #hover{
        color:red;
        text-decoration: underline;
    } */

    body,
    html {
        height: 100%;
        scroll-behavior: smooth;
    }

    /*---------------------------------
sidebar
----------------------*/

    #sidebar-wrapper {
        z-index: 1000;
        height: 100%;
        width: 0px;
        left: -50px;
        overflow-y: auto;
        overflow-x: hidden;
        background: #222e3c;
        transition: all 0.5s ease;
    }

    #sidebar-wrapper::-webkit-scrollbar {
        width: 8px;
        background: #222e3c;
    }

    #sidebar-wrapper::-webkit-scrollbar-thumb {
        background-color: #989898;
        border-radius: 10px;
    }

    .sidebar-brand {
        font-weight: 600;
        font-size: 1.15rem;
        padding: 1.15rem 1.5rem;
        display: block;
        color: #f8f9fa;
    }

    .sidebar-header {
        text-transform: capitalize;
        padding: 1.5rem 1.5rem 0.375rem !important;
        font-size: 14px;
        color: #ced4da;
    }

    .navbar-nav>li>a,
    .submenu-box ul li a {
        color: gray !important;
        text-transform: capitalize;
        font-size: 14px;
        padding: 10px 10px 10px 20px !important;
        display: block;
        font-weight: 400;
        position: relative;
        z-index: 2;
        font-family: "Roboto", sans-serif;
        letter-spacing: 0.2px;
    }

    .submenu-box ul li a {
        padding: 4px 10px 4px 20px !important;
        color: #c1c1c1 !important;
    }

    .navbar-nav>li>a.active {
        color: #e9ecef !important;
        background: linear-gradient(90deg,
                rgba(59, 125, 221, 0.1),
                rgba(59, 125, 221, 0.0875) 50%,
                transparent);
        border-left: 4px solid #3b7ddd;
    }

    .navbar-nav .has-sub>a.collapsed::after {
        transition: 0.4s ease;
    }

    .navbar-nav .has-sub>a.collapsed::after {
        color: #6aa364;
        font-size: 10px;
        content: "\f078";
    }

    .navbar-nav .has-sub>a.collapsed::after {
        color: #6aa364;
    }

    .navbar-nav .has-sub>a::after {
        position: absolute;
        right: 0px;
        top: 50%;
        height: 30px;
        width: 30px;
        text-align: center;
        color: #6aa364;
        display: block;
        content: "\f077";
        font-family: "Font Awesome\ 5 Free";
        font-weight: 900;
        font-size: 13px;
        line-height: 30px;
        margin-top: -15px;
    }

    #wrapper.toggled {
        padding-left: 270px;
    }

    .toggled#sidebar-wrapper {
        width: 270px !important;
        height: 100%;
        left: 0px;
        overflow-y: auto;
        overflow-x: hidden;
        transition: all 0.5s ease;
    }

    .navbar-nav li {
        display: block !important;
        margin: 2px 0px;
    }

    .nav-item .nav-link {
        display: block;
        color: white !important;
        text-transform: capitalize;
        text-decoration: none;
        padding: 6px 10px;
        transition: 0.4s ease;
    }

    .navbar-nav>li>a i:before {
        margin: 0px 5px 0px 0px;
        font-size: 14px;
    }

    /*---------------------------------
sidebar
----------------------*/




    /*---------------------------------
  main-content
----------------------*/

    #page-content-wrapper {
        width: 100%;
        transition: all 0.5s ease;
    }

    #wrapper.toggled #page-content-wrapper {
        position: absolute;
        margin-right: -270px;

        transition: all 0.5s ease;
    }

    .toggled#page-content-wrapper {
        margin-left: 270px;
        transition: all 0.5s ease;
    }






    /* scroll icon starts */
    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 40px;
        z-index: 99;
        border: none;
        border-radius: 10px;
        color: #fff;
        background: #333;
        padding: 10px;
    }

    #myBtn:hover {
        background: #606060;
    }

    /* scroll icon ends */

    @media only screen and (min-width: 992px) {
        .toggled#page-content-wrapper {
            width: calc(100% - 270px);
        }
    }

    /*---------------------------------
  main-content
----------------------*/

    /*---------------------------------
cross-bar animation
----------------------*/

    .nav-icon1 {
        z-index: 999;
        position: relative;
        display: block;
        width: 23px;
        margin: 0px 30px 0px 25px;
        cursor: pointer;
        height: 25px;
    }

    .nav-icon1 span {
        position: absolute;
        top: 0;
        width: 100%;
        height: 3px;
        cursor: pointer;
        background-color: #5d5d5d;
        left: 0;
        transform: rotate(0deg);
        transition: 0.3s ease-in-out;
    }

    .nav-icon1:hover span:nth-of-type(1) {
        top: -3px;
    }

    .nav-icon1:hover span:nth-of-type(3) {
        top: 19px;
    }

    .nav-icon1 span:nth-of-type(1) {
        top: 0;
    }

    .nav-icon1 span:nth-of-type(2) {
        top: 8px;
    }

    .nav-icon1 span:nth-of-type(3) {
        top: 16px;
    }

    .nav-icon1.open span:nth-of-type(1) {
        top: 8px;
        transform: rotate(135deg);
    }

    .nav-icon1.open span:nth-of-type(2) {
        top: 8px;
        opacity: 0;
        left: -30px;
    }

    .nav-icon1.open span:nth-of-type(3) {
        top: 8px;
        transform: rotate(-135deg);
    }

    /*---------------------------------
cross-bar animation
----------------------*/

    /*---------------------------------
header navbar design
----------------------*/
    .my-navbar {
        height: 40%;
        padding: 0px;
        background-color: white;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.16);
    }

    .text-gray-600 {
        color: #858796 !important;
    }

    .nav-link .img-profile {
        height: 40px;
        width: 40px;
    }

    .navbar-nav>li>a>i {
        font-size: 18px;
        color: #b3b3b3;
        margin: 8px 0px 0px 0px;
        padding: 0px;
    }

    .badge-counter {
        position: absolute;
        transform: scale(0.7);
        transform-origin: top right;
        right: 6px;
        margin-top: 4px;
    }

    .dropdown,
    .dropleft,
    .dropright,
    .dropup {
        position: relative;
    }

    .nav-flag,
    .nav-icon {
        padding: 0.1rem 0.8rem;
        display: block;
        font-size: 1.5rem;
        color: #6c757d;
        transition: background 0.1s ease-in-out, color 0.1s ease-in-out;
        line-height: 1.4;
    }

    .navbar-expand .navbar-nav .dropdown-menu {
        position: absolute;
    }

    .navbar-nav .dropdown-menu {
        box-shadow: 0 0.1rem 0.2rem rgba(0, 0, 0, 0.05);
    }

    .navbar-nav .dropdown-menu {
        position: static;
        float: none;
    }

    .dropdown-menu-lg {
        min-width: 20rem;
    }

    .position-relative {
        position: relative !important;
    }

    .nav-item .indicator {
        background: #3b7ddd;
        box-shadow: 0 0.1rem 0.2rem rgba(0, 0, 0, 0.05);
        border-radius: 50%;
        display: block;
        height: 18px;
        width: 18px;
        padding: 1px;
        position: absolute;
        top: 0;
        right: -8px;
        text-align: center;
        transition: top 0.1s ease-out;
        font-size: 0.675rem;
        color: #fff;
    }

    /*---------------------------------
 header navbar design
----------------------*/

    /*---------------------------------
main-top card
----------------------*/

    .card {
        margin-bottom: 24px;
        border: none;
        box-shadow: 0 0 0.875rem 0 rgba(33, 37, 41, 0.05);
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1.25rem;
    }

    .card-title {
        font-size: 0.875rem;
        color: #495057;
    }

    .card-body h1 {
        font-size: 1.75rem;
        font-weight: 400;
        line-height: 1.2;
        color: #000;
    }

    .text-gray-800 {
        color: #5a5c69 !important;
        font-size: 1.75rem;
        font-weight: 400;
        line-height: 1.2;
    }

    .shadow-sm {
        box-shadow: 0 0.125rem 0.25rem 0 rgba(58, 59, 69, 0.2) !important;
    }

    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5;
        border-radius: 0.2rem;
    }

    .font-16 {
        font-size: 16px;
    }

    /*---------------------------------
main-top card
----------------------*/

    /*---------------------------------
main-table
----------------------*/

    .m-r-10 {
        margin-right: 10px;
    }

    .btn-circle {
        border-radius: 100%;
        width: 40px;
        height: 40px;
        padding: 10px;
    }

    .btn-info {
        color: #fff;
        background-color: #2962ff;
        border-color: #2962ff;
    }

    .btn-orange {
        color: #212529;
        background-color: #fb8c00;
        border-color: #fb8c00;
    }

    .btn-success {
        color: #fff;
        background-color: #36bea6;
        border-color: #36bea6;
    }

    .btn-purple {
        color: #fff;
        background-color: #7460ee;
        border-color: #7460ee;
    }

    .card .card-title {
        position: relative;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .card .card-subtitle {
        font-weight: 300;
        margin-bottom: 10px;
        color: #a1aab2;
        margin-top: -0.375rem;
    }

    .table td,
    .table th {
        padding: 1rem;
        font-size: 14px;
        color: #333;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    .table h5 {
        font-size: 16px;
        font-weight: 600;
        color: #585858;
    }

    /*---------------------------------
main-table
----------------------*/

    /*---------------------------------
 footer
----------------------*/

    footer.footer {
        padding: 1rem 0.875rem;
        direction: ltr;
        background: #fff;
    }

    footer.footer ul {
        margin: 0px;
        list-style: none;
    }

    .footer ul li {
        display: inline-block;
        margin: 0px 7px;
    }

    .text-muted {
        color: #6c757d !important;
        font-size: 14px;
    }

    /*---------------------------------
footer
----------------------*/


    .h:hover {
        background-color: teal;
        border-radius: 100px;
    }



    /* view start  */
    .wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        height: 400px;
    }

    .form-holder {
        background: #000;
        width: 450px;
        max-width: 90%;
        padding: 35px 0px;
        opacity: .7;
        border-radius: 10px;
    }

    .logo {
        display: block;
        width: 100px;
        margin: 0px auto;
        border-radius: 20px;
        background: #222;
        padding: 10px;
    }

    .form-holder h2 {
        color: #ddd;
        padding: 10px;
        text-align: center;
        font-size: 22px;
    }

    .form .form-group {
        width: 90%;
        margin: 20px auto;
        padding: 10px;
        position: relative;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        background: #222;
        border: none;
        outline: none;
        color: #fff;
        font-size: 15px;
        border-bottom: 2px solid #777;
        border-radius: 5px;
        padding-left: 40px;
    }

    .form-group img {
        width: 26px;
        position: absolute;
        left: 15px;
        top: 13px;
    }

    .form-group button {
        width: 100%;
        padding: 10px;
        background: transparent;
        border: none;
        outline: none;
        color: #fff;
        font-size: 15px;
        border: 2px solid #777;
        border-radius: 5px;
        cursor: pointer;
    }

    .form-group input:focus {
        background: #333;
        border-color: #0088FF;
    }

    .form-group button:hover {
        background: #333;
    }

    .form-group a {
        color: #999;
        text-decoration: none;
        font-size: 14px;
    }

    .form-group a:hover {
        color: #555;
    }

    .form-group .right-link {
        float: right;
    }
</style>

<body>
    <div id="wrapper">
        <div class="overlay"></div>



        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div id="content">
                <div class="container-fluid p-0 px-lg-0 px-md-0">
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-dark my-navbar">
                        <!-- Sidebar Toggle (Topbar) -->

                        <!-- Topbar Search -->


                        <!-- test starts  -->

                        <div class="row text-center col-12">

                            <div style="margin: 0 auto; padding: 20px!important; ">


                                <img src="./image/logo_BCSWN.jpg" class="mr-4 " alt="BD Logo" height="60px" width="60px">
                                <h1 class="d-inline "> <b class="text-white " style="position:relative; top:10px;  text-shadow: 3px 3px 5px rgba(150, 150, 150, 1); font-size:3.5vw;"> বিসিএস উইমেন নেটওয়ার্ক </b></h1>

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

                    <!-- Begin Page Content -->
                   
                   
                    <!-- /.container-fluid -->
                </div>


                <!-- alert start  -->
                   <div class="container-fluid">
                       <div class="row" style="margin-top: 30px;">
                           <div class="col-md-3 .col-lg-3 col-sm-12"></div>
                           <div class="col-md-6 .col-lg-6 col-sm-12">
                           <div class="card " style="width: 95%; ">
									
									<div class="card-body" id="section_12_content">
                                        <!-- signature starts -->
                                        

                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h1 style="text-align: center; font-weight: bold;">Thanks for your submission. <br> You will be notified soon.</h1>
                                                </div>
                                            </div>


                                            <div class="row mt-4">
                                                <div class="col-md-4 col-lg-4 col-sm-12"></div>
                                                <div class="col-md-4 col-lg-4 col-sm-12">
                                                    <!-- <a href="#">
                                                <button type='submit' class='btn  btn-primary btn-block' name='submit' id='submit'>Submit</button>
                                                </a> -->
                                                <a href="./index.php" class="btn  btn-primary btn-block">OK</a>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-sm-12"></div>
                                            </div>
                                        </div>



										


									</div>
                                </div>
                             </div>
                           <div class="col-md-3 .col-lg-3 col-sm-12"></div>
                       </div>
                   </div>

                <!-- alert ends  -->

                <footer class="footer mt-4 bg-dark" style="font-weight: bold; text-shadow: 3px 3px 5px rgba(150, 150, 150, 1); position: fixed; bottom: 0; width: 100%;  ">

                    <div class="container text-center">

                        <h3 class="d-inline text-white">
                            Powered By <h1 class="d-inline text-white">IT Bangla Ltd.</h1>
                        </h3>
                    </div>


                    <div class="scrolltop float-right">
                        <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
                    </div>


                </footer>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


</body>

</html>