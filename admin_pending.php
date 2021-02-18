<?php
// $W_ID = "";
// $W_NAME = "";
// $W_MOBILE = "";
// $W_PASSWORD = "";


// $W_DOB = "";
// $W_BLOOD = "";
// $W_MARRIGE = "";
// $W_OFFICE = "";
// $W_RESIDENCE = "";
// $W_PERMANENT = "";
// $W_OFFICE_C = "";
// $W_HOME = "";
// $W_MOBILE = "";
// $W_EMAIL = "";
// $W_EDUCATION = "";
// $W_SKILL = "";
// $W_INTEREST = "";
// $W_DESIGNATION = "";
// $W_POSTING = "";
// $W_CADRE = "";
// $W_BATCH = "";
// $W_MEMBERSHIP = "";
// $W_HONOR = "";
// $W_ARTICLE = "";
// $W_CHILD = "";
// $W_PICTURE = "";
// $W_SIGNATURE = "";


$W_ID = "";
$W_NAME = "";
$W_DOB = "";
$W_BLOOD = "";
$W_MOBILE = "";
$W_EMAIL = "";
$W_SKILL = "";
$W_INTEREST = "";
$W_DESIGNATION = "";
$W_POSTING = "";
$W_CADRE = "";
$W_BATCH = "";
$W_MEMBERSHIP = "";
$W_HONOR = "";
$W_ARTICLE = "";
$W_MARRIGE = "";
$W_PICTURE = "";
$W_SIGNATURE = "";
$W_PASSWORD = "";


$W_SSC_EXAMINATION = "";
$W_SSC_BOARD = "";
$W_SSC_ROLL = "";
$W_SSC_RESULT = "";
$W_SSC_GROUP = "";
$W_SSC_PASSING_YEAR = "";
$W_HSC_EXAMINATION = "";
$W_HSC_BOARD = "";
$W_HSC_ROLL = "";
$W_HSC_RESULT = "";
$W_HSC_GROUP = "";
$W_HSC_PASSING_YEAR = "";
$W_GRADUATION_EXAMINATION= "";
$W_GRADUATION_SUBJECT= "";
$W_GRADUATION_UNIVERSITY= "";
$W_GRADUATION_RESULT= "";
$W_GRADUATION_PASSING_YEAR= "";
$W_GRADUATION_COURSE_DURATION= "";
$W_MASTER_EXAMINATION= "";
$W_MASTER_SUBJECT= "";
$W_MASTER_UNIVERSITY= "";
$W_MASTER_RESULT= "";
$W_MASTER_PASSING_YEAR= "";
$W_MASTER_COURSE_DURATION= "";
$W_O_ADDRESS = "";
$W_O_DIVISION="";
$W_O_DISTRICT="";
$W_O_UPAZILLA="";
$W_R_ADDRESS = "";
$W_R_DIVISON = "";
$W_R_DISTRICT = "";
$W_R_UPAZILLA = "";
$W_P_ADDRESS = "";
$W_P_DIVISION = "";
$W_P_DISTRICT = "";
$W_P_UPAZILLA = "";
$W_CHILD_BOYS = "";
$W_CHILD_GIRLS = "";

$W_SSC_GRADE="";

$W_HSC_GRADE="";
$W_GRADUATION_GRADE="";
$W_MASTER_GRADE="";





error_reporting(0);
session_start();
if (!isset($_SESSION['MOBILE'])) {
	header("location:login.php");
} else {
	set_time_limit(1000);
	include "Connection.php";
    $W_MOBILE = $_SESSION['MOBILE'];


	
	// echo $W_MOBILE;
	$sql = "SELECT * FROM  BCSWN_ADMIN WHERE ADMIN_MOBILE='" . $W_MOBILE . "'";
	
	$parseresult = ociparse($conn, $sql);
	ociexecute($parseresult);

	while($row=oci_fetch_assoc($parseresult)){
		$admin_name=$row["ADMIN_NAME"];

	}
	// var_dump($admin_name);
    

    $id=$_GET['id'];

// $sql="SELECT*FROM BCSWN_USER WHERE ID=".$id;



$sql = "SELECT BCSWN_USER.NAME, BCSWN_USER.DOB, (SELECT BCSWN_BLOOD.BLOOD_NAME FROM BCSWN_BLOOD WHERE BCSWN_USER.BLOOD = BCSWN_BLOOD.BLOOD_ID ) AS BLOOD, BCSWN_USER.MOBILE, BCSWN_USER.EMAIL, BCSWN_USER.SKILL, (SELECT BCSWN_INTEREST.INTEREST_NAME FROM BCSWN_INTEREST WHERE BCSWN_USER.INTEREST=BCSWN_INTEREST.INTEREST_ID) AS INTEREST, BCSWN_USER.DESIGNATION, BCSWN_USER.POSTING, (SELECT BCSWN_CADRE.CADRE_NAME FROM BCSWN_CADRE WHERE BCSWN_USER.CADRE=BCSWN_CADRE.CADRE_ID ) AS CADRE, (SELECT BCSWN_BATCH.BATCH_NAME FROM BCSWN_BATCH WHERE BCSWN_USER.BATCH=BCSWN_BATCH.BATCH_ID ) AS BATCH, BCSWN_USER.MEMBERSHIP, BCSWN_USER.HONOR, BCSWN_USER.ARTICLE, BCSWN_USER.MARRIGE, BCSWN_USER.PICTURE, BCSWN_USER.SIGNATURE, BCSWN_USER.SSC_EXAM, BCSWN_USER.SSC_BOARD, BCSWN_USER.SSC_ROLL, BCSWN_USER.SSC_RESULT, BCSWN_USER.SSC_GROUP, BCSWN_USER.SSC_PASSING, BCSWN_USER.HSC_EXAM, BCSWN_USER.HSC_BOARD, BCSWN_USER.HSC_ROLL, BCSWN_USER.HSC_RESULT, BCSWN_USER.HSC_GROUP, BCSWN_USER.HSC_PASSING, BCSWN_USER.O_ADDRESS,(SELECT BCSWN_DIVISIONS.DIVISION_NAME FROM BCSWN_DIVISIONS WHERE BCSWN_USER.O_DIVISION=BCSWN_DIVISIONS.DIVISION_ID) AS O_DIV, (SELECT BCSWN_DISTRICTS.DISTRICT_NAME FROM BCSWN_DISTRICTS WHERE BCSWN_USER.O_DISTRICTS=BCSWN_DISTRICTS.DISTRICT_ID) AS O_DIST, (SELECT BCSWN_UPAZILLA.UPAZILLA_NAME FROM BCSWN_UPAZILLA WHERE BCSWN_USER.O_UPAZILLA=BCSWN_UPAZILLA.UPAZILLA_ID) AS O_UP, BCSWN_USER.R_ADDRESS, (SELECT BCSWN_DIVISIONS.DIVISION_NAME FROM BCSWN_DIVISIONS WHERE BCSWN_USER.R_DIVISION=BCSWN_DIVISIONS.DIVISION_ID) AS R_DIV, (SELECT BCSWN_DISTRICTS.DISTRICT_NAME FROM BCSWN_DISTRICTS WHERE BCSWN_USER.R_DISTRICTS=BCSWN_DISTRICTS.DISTRICT_ID) AS R_DIST, (SELECT BCSWN_UPAZILLA.UPAZILLA_NAME FROM BCSWN_UPAZILLA WHERE BCSWN_USER.R_UPAZILLA=BCSWN_UPAZILLA.UPAZILLA_ID) AS R_UP, BCSWN_USER.P_ADDRESS, (SELECT BCSWN_DIVISIONS.DIVISION_NAME FROM BCSWN_DIVISIONS WHERE BCSWN_USER.P_DIVISION=BCSWN_DIVISIONS.DIVISION_ID) AS P_DIV, (SELECT BCSWN_DISTRICTS.DISTRICT_NAME FROM BCSWN_DISTRICTS WHERE BCSWN_USER.P_DISTRICTS=BCSWN_DISTRICTS.DISTRICT_ID) AS P_DIST, (SELECT BCSWN_UPAZILLA.UPAZILLA_NAME FROM BCSWN_UPAZILLA WHERE BCSWN_USER.P_UPAZILLA=BCSWN_UPAZILLA.UPAZILLA_ID) AS P_UP, BCSWN_USER.CHILD_BOY, BCSWN_USER.CHILD_GIRL, (SELECT BCSWN_DEGREE.DEGREE_NAME FROM BCSWN_DEGREE WHERE BCSWN_USER.GRAD_EXAM=BCSWN_DEGREE.DEGREE_ID ) AS GRAD_EXAM, (SELECT BCSWN_SUBJECT.SUBJECT_NAME FROM BCSWN_SUBJECT WHERE BCSWN_USER.GRAD_SUBJECT=BCSWN_SUBJECT.SUBJECT_ID ) AS GRAD_SUB, (SELECT BCSWN_UNI.UNI_NAME FROM BCSWN_UNI WHERE BCSWN_USER.GRAD_UNIVERSITY=BCSWN_UNI.UNI_ID) AS GRAD_UNIVERSITY, BCSWN_USER.GRAD_RESULT, BCSWN_USER.GRAD_PASSING, BCSWN_USER.GRAD_DURATION, (SELECT BCSWN_DEGREE.DEGREE_NAME FROM BCSWN_DEGREE WHERE BCSWN_USER.MST_EXAM=BCSWN_DEGREE.DEGREE_ID ) AS MST_EXAM, (SELECT BCSWN_SUBJECT.SUBJECT_NAME FROM BCSWN_SUBJECT WHERE BCSWN_USER.MST_SUBJECT=BCSWN_SUBJECT.SUBJECT_ID ) AS MST_SUB, (SELECT BCSWN_UNI.UNI_NAME FROM BCSWN_UNI WHERE BCSWN_USER.MST_UNIVERSITY=BCSWN_UNI.UNI_ID) AS MST_UNIVERSITY, BCSWN_USER.MST_RESULT, BCSWN_USER.MST_PASSING, BCSWN_USER.MST_DURATION FROM BCSWN_USER WHERE ID=".$id;
// print_r($sql);

	// $sql = "SELECT * FROM BCSWN_USER WHERE MOBILE='" . $W_MOBILE . "'";
	$parseresult = ociparse($conn, $sql);
	ociexecute($parseresult);
	// var_dump($sql);
	while ($row = oci_fetch_assoc($parseresult)) {
		$W_ID = $row['ID'];
		$W_NAME = $row['NAME'];
		$W_MOBILE = $row['MOBILE'];
		$W_PASSWORD = $row['PASSWORD'];


		$W_DOB = $row['DOB'];
		$W_BLOOD = $row['BLOOD'];
		$W_MARRIGE = $row['MARRIGE'];
		$W_OFFICE = $row['OFFICE'];
		$W_RESIDENCE = $row['RESIDENCE'];
		$W_OFFICE_C = $row['OFFICE_C'];
		$W_HOME = $row['HOME'];
		$W_MOBILE = $row['MOBILE'];
		$W_EMAIL = $row['EMAIL'];
		$W_EDUCATION = $row['EDUCATION'];
		$W_SKILL = $row['SKILL'];
		$W_INTEREST = $row['INTEREST'];
		$W_DESIGNATION = $row['DESIGNATION'];
		$W_POSTING = $row['POSTING'];
		$W_CADRE = $row['CADRE'];
		$W_BATCH = $row['BATCH'];
		$W_MEMBERSHIP = $row['MEMBERSHIP'];
		$W_HONOR = $row['HONOR'];
		$W_ARTICLE = $row['ARTICLE'];
		$W_CHILD = $row['CHILD'];
		$W_PICTURE = $row['PICTURE'];
		$W_SIGNATURE  = $row['SIGNATURE'];

	

$W_SSC_EXAMINATION = $row['SSC_EXAM'];
$W_SSC_BOARD =$row['SSC_BOARD'];
$W_SSC_ROLL = $row['SSC_ROLL'];
$W_SSC_RESULT = $row['SSC_RESULT'];
$W_SSC_GROUP = $row['SSC_GROUP'];
$W_SSC_PASSING_YEAR = $row['SSC_PASSING'];
$W_HSC_EXAMINATION = $row['HSC_EXAM'];
$W_HSC_BOARD = $row['HSC_BOARD'];
$W_HSC_ROLL = $row['HSC_ROLL'];
$W_HSC_RESULT = $row['HSC_RESULT'];
$W_HSC_GROUP = $row['HSC_GROUP'];
$W_HSC_PASSING_YEAR = $row['HSC_PASSING'];
$W_GRADUATION_EXAMINATION= $row['GRAD_EXAM'];
$W_GRADUATION_SUBJECT= $row['GRAD_SUB'];
$W_GRADUATION_UNIVERSITY= $row['GRAD_UNIVERSITY'];
$W_GRADUATION_RESULT= $row['GRAD_RESULT'];
$W_GRADUATION_PASSING_YEAR= $row['GRAD_PASSING'];
$W_GRADUATION_COURSE_DURATION= $row['GRAD_DURATION'];
$W_MASTER_EXAMINATION= $row['MST_EXAM'];
$W_MASTER_SUBJECT= $row['MST_SUB'];
$W_MASTER_UNIVERSITY= $row['MST_UNIVERSITY'];
$W_MASTER_RESULT= $row['MST_RESULT'];
$W_MASTER_PASSING_YEAR= $row['MST_PASSING'];
$W_MASTER_COURSE_DURATION= $row['MST_DURATION'];
$W_O_ADDRESS = $row['O_ADDRESS'];
$W_O_DIVISION=$row['O_DIV'];
$W_O_DISTRICT=$row['O_DIST'];
$W_O_UPAZILLA=$row['O_UP'];
$W_R_ADDRESS = $row['R_ADDRESS'];
$W_R_DIVISON = $row['R_DIV'];
$W_R_DISTRICT = $row['R_DIST'];
$W_R_UPAZILLA = $row['R_UP'];
$W_P_ADDRESS = $row['P_ADDRESS'];
$W_P_DIVISION = $row['P_DIV'];
$W_P_DISTRICT = $row['P_DIST'];
$W_P_UPAZILLA = $row['P_UP'];
$W_CHILD_BOYS = $row['CHILD_BOY'];
$W_CHILD_GIRLS = $row['CHILD_GIRL'];

$W_SSC_GRADE="";

$W_HSC_GRADE="";
$W_GRADUATION_GRADE="";
$W_MASTER_GRADE="";



		$output[] = $row;
	}

	// var_dump($output);
}



oci_free_statement($parseresults);
// oci_close($conn);










?>



<?php

include 'Connecton.php';
if (isset($_POST["backword"]))
{
	header("location:pending.php");
    // $sql2="UPDATE BCSWN_USER SET STATUS='A', APP_BY='". $admin_name."' where ID=".$id;
    // // print_r($sql2);
    
    $parseresult = ociparse($conn, $sql2);
    // var_dump($parseresult);
ociexecute($parseresult);
oci_free_statement($parseresult);
oci_close($conn);

}




?>



<?php

include 'Connecton.php';
if (isset($_POST["ok"]))
{
	

	// echo  $W_MOBILE;


	$string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789()*#&!@%";

	$W_PASSWORD = substr(str_shuffle($string), 0, 6);

    $sql2="UPDATE BCSWN_USER SET STATUS='A', APP_BY='". $admin_name."', PASSWORD='". $W_PASSWORD."' where ID=".$id." AND MOBILE='". $W_MOBILE."'";
    // print_r($sql2);
    
    $parseresult = ociparse($conn, $sql2);
    // var_dump($parseresult);
ociexecute($parseresult);





$messageUrl = urlencode('Thank you For Registration in BCS WOMEN NETWORK. Your password is '.$W_PASSWORD);
     $response = file_get_contents('http://sms.ajuratech.com/api/mt/SendSMS?user=itbangla&password=itbangla1234&senderid=8809612440402&channel=Normal&DCS=0&flashsms=0&number=88'. $W_MOBILE.'&text='.$messageUrl);

 






oci_free_statement($parseresult);
oci_close($conn);

header("location:member_list.php");

}




?>


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



    <style>
	body {
		position: relative;
		overflow-x: hidden;
		background: #f7f7fc;
		font-family: "Roboto", sans-serif;
	}

	a:hover {
		color: white;
		text-decoration: none;
	}

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
		color: gray;
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









.forward {
        position: relative;
        display: inline-block;
        padding: 10px 30px;
        text-decoration: none;
        text-transform: uppercase;
        /* color: rgba(255, 255, 255, 0.4); */
        color: #262c37;
        /* background: #262c37; */
        background: #09790e;
        letter-spacing: 2px;
        font-size: 16px;
        transition: 0.5s;
    }

    .backoword {
        position: relative;
        display: inline-block;
        padding: 10px 30px;
        text-decoration: none;
        text-transform: uppercase;
        /* color: rgba(255, 255, 255, 0.4); */
        /* color: rgba(255, 255, 255, 0.4); */
        color: #262c37;
        /* background: #262c37; */
        background: #fd1d1d;
        letter-spacing: 2px;
        font-size: 16px;
        transition: 0.5s;
    }

    .clearfix {
        overflow: auto;
    }

    #b:hover {
        color: rgba(255, 255, 255, 1);
        text-decoration: none;
    }

    #b span {
        display: block;
        position: absolute;
        background: #262c37;
        ;
        /* background: #2894ff; */
        border: 1px solid;
    }

    #b span:nth-child(1) {
        left: 0;
        bottom: 0;
        width: 1px;
        height: 100%;
        transform: scaleY(0);
        transform-origin: top;
        transition: transform 0.5s;
    }

    #b:hover span:nth-child(1) {
        transform: scaleY(1);
        transform-origin: bottom;
        transition: transform 0.5s;
    }

    #b span:nth-child(2) {
        left: 0;
        bottom: 0;
        width: 100%;
        height: 1px;
        transform: scalex(0);
        transform-origin: right;
        transition: transform 0.5s;
    }

    #b:hover span:nth-child(2) {
        transform: scaleY(1);
        transform-origin: left;
        transition: transform 0.5s;
    }

    #b span:nth-child(3) {
        right: 0;
        bottom: 0;
        width: 1px;
        height: 100%;
        transform: scaley(0);
        transform-origin: top;
        transition: transform 0.5s;
    }

    #b:hover span:nth-child(3) {
        transform: scaleY(1);
        transform-origin: bottom;
        transition: transform 0.5s;
    }

    #b span:nth-child(4) {
        left: 0;
        top: 0;
        width: 100%;
        height: 1px;
        transform: scalex(0);
        transform-origin: right;
        transition: transform 0.5s;
        transition-delay: 0.5s;
    }

    #b:hover span:nth-child(4) {
        transform: scaleY(1);
        transform-origin: left;
        transition: transform 0.5s;
        transition-delay: 0.5s;

    }

	.h:hover{
	background-color: teal;
	border-radius: 100px;
}
</style>








</head>



<body>
	<div id="wrapper">
		<div class="overlay"></div>

		<!-- Sidebar -->
		<?php
		
		include "sidebar_admin.php";

		
		
		?>
		
		<!-- /#sidebar-wrapper -->

		<!-- Page Content -->
		<div id="page-content-wrapper">
			<div id="content">
				<div class="container-fluid p-0 px-lg-0 px-md-0">
					<!-- Topbar -->
					<nav class="navbar navbar-expand navbar-light bg-dark my-navbar">
						<!-- Sidebar Toggle (Topbar) -->
						<div type="button" id="bar" class="nav-icon1 hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
							<span></span>
							<span></span>
							<span></span>
						</div>

						<!-- Topbar Search -->


						<!-- Topbar Navbar -->
						<img src="./image/logo.png" class="mr-4 mt-2" alt="BD Logo" height="60px" width="60px">
						<h1 class="text-white text-center d-inline pt-2"><b style="text-shadow: 3px 3px 5px rgba(150, 150, 150, 1); font-size:3.5vw">বিসিএস
								উইমেন নেটওয়ার্ক</b></h1>
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

					

					<div class="row col-12 m-0">
                    <div class="container">

                        <div class="card">
                            <div class="card-header">

                                <form action="" method="POST">

                                    <!-- name & dp starts  -->

                                    <div class="row">
                                        <div class="col-6">
                                            <h5 style="display: inline-block;">Name : </h5>
                                            <!-- <input type="text" name="name" id="name" readonly value=""
                                            style="border:0;background:#f7f7f7;"> -->
                                            <label name="name" id="name"><?php echo $W_NAME; ?></label>

                                        </div>
                                        <div class="col-6 text-right">
                                            <img name="picture" id="picture" src="<?php echo $W_PICTURE; ?>"
                                                height="120px" width="120px">

                                        </div>
                                    </div>

                                    <!-- name & dp ends  -->

                                    <!-- DOB, Blodd, Marital starts  -->
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="d-inline">Date of Birth :</h5>
                                            <!-- <input type="text" name="dob" id="dob" readonly value=""
                                            style="border:0;background:#f7f7f7;"> -->
                                            <label name="dob" id="dob"><?php echo $W_DOB; ?></label>
                                        </div>
                                        <div class="col-12">
                                            <h5 class="d-inline">Blood Group :</h5>
                                            <!-- <input type="text" name="blood" id="blood" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="blood" id="blood"><?php echo $W_BLOOD; ?></label>
                                        </div>
                                        <div class="col-12">
                                            <h5 class="d-inline">Marital Status :</h5>
                                            <!-- <input type="text" name="marrige" id="marrige" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="marrige"><?php echo $W_MARRIGE; ?></label>
                                        </div>
                                        <div class="col-12">
                                            <h5 class="d-inline">No of Child :</h5>
                                            <!-- <input type="text" name="child" id="child" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="child" id="child"><?php echo $W_CHILD; ?></label>
										
                                        </div>
										<div class="col-3">
                                            <h6 class="d-inline">Boy :</h6>
                                            <!-- <input type="text" name="child" id="child" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="child" id="child"><?php echo $W_CHILD_BOYS; ?></label>
								
                                        </div>
										<div class="col-3">
                                            <h6 class="d-inline">Girl :</h6>
                                            <!-- <input type="text" name="child" id="child" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="child" id="child"><?php echo $W_CHILD_GIRLS; ?></label>
										
                                        </div>
                                    </div>
									<br>
									<br>
									<br>
									
									<br>
                                    <!-- DOB, Blodd, Marital ends  -->

                                    <!-- address starts  -->
                                    <div class="row">
                                        <div class="col-6">
                                            <h4>Address</h4>
                                            <hr>
                                            <h5 class="d-inline">Office : </h5>
                                            <!-- <input type="text" name="office" id="office" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="office" id="office"><?php echo $W_O_ADDRESS .",".$W_O_UPAZILLA.",".$W_O_DISTRICT.",".$W_O_DIVISION; ?></label>

	
				                         <br>
											<br>
											<br>
											<br>
											<br>
                                            <h5 class="d-inline">Residence : </h5>
                                            <!-- <input type="text" name="residence" id="residence" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="residence" id="residence"><?php echo $W_R_ADDRESS.",".$W_R_UPAZILLA.",".$W_R_DISTRICT.",".$W_R_DIVISON ; ?></label>

		                                    <br>
											<br>
											<br>
											<br>
											<br>
                                            <h5 class="d-inline">Permanent : </h5>
                                            <!-- <input type="text" name="permanent" id="permanent" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="permanent" id="permanent"><?php echo $W_P_ADDRESS.",".$W_P_UPAZILLA.",".$W_P_DISTRICT.",".$W_P_DIVISION; ?></label>
		

											<br>
											<br>
											<br>
											<br>
											<br>
                                            <br>
										</div>
                                        <div class="col-6">
                                            <h4>Contact Details</h4>
                                            <hr>
                                            <!-- <h5 class="d-inline">Office : </h5> -->
                                            <!-- <input type="text" name="office_c" id="office_c" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <!-- <label name="office_c" id="office_c"><?php echo $W_OFFICE_C; ?></label>
                                            <br>
                                            <h5 class="d-inline">Home : </h5> -->
                                            <!-- <input type="text" name="home" id="home" readonly value="<?php echo $W_HOME; ?>"
                                            style="border:0;background:#f7f7f7;"> -->
                                            <!-- <label name="home" id="home"><?php echo $W_HOME; ?></label> -->
                                            <!-- <br> -->
                                            <h5 class="d-inline">Mobile : </h5>
                                            <!-- <input type="text" name="mobile" id="mobile" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="mobile" id="mobile"><?php echo $W_MOBILE; ?></label>
                                            <br>
                                            <h5 class="d-inline">Email : </h5>
                                            <!-- <input type="text" name="email" id="email" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="email" id="email"><?php echo $W_EMAIL; ?></label>
                                        </div>
                                    </div>
                                    <!-- address ends  -->



                                    <!-- skill starts  -->


                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="d-inline">Educational Quafication :</h5>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_EDUCATION; ?></label>
                                        </div>
										<br>
										<br>
										      <!-- SSC & HSC start  -->
                                     
										<div class="col-6">
                                            <h5 class="d-inline">SSC/Equivalent :</h5>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_EDUCATION; ?></label>
                                        </div>

										<div class="col-6">
                                            <h5 class="d-inline">HSC/Equivalent  :</h5>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_EDUCATION; ?></label>
                                        </div>
                                      


										
										<div class="col-6">
                                            <h6 class="d-inline">Examination  : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_SSC_EXAMINATION; ?></label>
                                        </div>

										
										<div class="col-6">
                                            <h6 class="d-inline">Examination  : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_HSC_EXAMINATION; ?></label>
                                        </div>

										<div class="col-6">
                                            <h6 class="d-inline">Board  : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_SSC_BOARD; ?></label>
                                        </div>

										<div class="col-6">
                                            <h6 class="d-inline">Board  : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_HSC_BOARD; ?></label>
                                        </div>

										<div class="col-6">
                                            <h6 class="d-inline"> Roll : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_SSC_ROLL; ?></label>
                                        </div>
									
									    <div class="col-6">
                                            <h6 class="d-inline"> Roll : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_HSC_ROLL; ?></label>
                                        </div>

										<div class="col-6">
                                            <h6 class="d-inline"> Result : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_SSC_RESULT; ?></label>
                                        </div>

										<div class="col-6">
                                            <h6 class="d-inline"> Result : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_HSC_RESULT; ?></label>
                                        </div>

										<div class="col-6">
                                            <h6 class="d-inline"> Group : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_SSC_GROUP; ?></label>
                                        </div>

										<div class="col-6">
                                            <h6 class="d-inline"> Group : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_HSC_GROUP; ?></label>
                                        </div>

										<div class="col-6">
                                            <h6 class="d-inline"> Passing Year  : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_SSC_PASSING_YEAR; ?></label>
                                        </div>

										<div class="col-6">
                                            <h6 class="d-inline"> Passing Year  : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_HSC_PASSING_YEAR; ?></label>
                                        </div>

										<br>
										<br>
										<br>
										


								       <!-- SSC & HSC end  -->





									     <!-- Graduation & Master's start  -->
                                     
										<div class="col-6">
                                            <h5 class="d-inline">Graduation :</h5>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_EDUCATION; ?></label>
                                        </div>

										<div class="col-6">
                                            <h5 class="d-inline">Master's :</h5>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_EDUCATION; ?></label>
                                        </div>
                                      


										
										<div class="col-6">
                                            <h6 class="d-inline">Examination  : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_GRADUATION_EXAMINATION; ?></label>
                                        </div>

										
										<div class="col-6">
                                            <h6 class="d-inline">Examination  : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_MASTER_EXAMINATION; ?></label>
                                        </div>
				

										<div class="col-6">
                                            <h6 class="d-inline">Subject : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_GRADUATION_SUBJECT; ?></label>
                                        </div>

										<div class="col-6">
                                            <h6 class="d-inline">Subject  : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_MASTER_SUBJECT; ?></label>
                                        </div>

										<div class="col-6">
                                            <h6 class="d-inline"> University : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_GRADUATION_UNIVERSITY; ?></label>
                                        </div>
									
									    <div class="col-6">
                                            <h6 class="d-inline"> University : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_MASTER_UNIVERSITY; ?></label>
                                        </div>

										<div class="col-6">
                                            <h6 class="d-inline"> Result : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_GRADUATION_RESULT; ?></label>
                                        </div>

										<div class="col-6">
                                            <h6 class="d-inline"> Result : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_MASTER_RESULT; ?></label>
                                        </div>

										<div class="col-6">
                                            <h6 class="d-inline"> Passing Year  : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_GRADUATION_PASSING_YEAR; ?></label>
                                        </div>

										<div class="col-6">
                                            <h6 class="d-inline"> Passing Year  : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_MASTER_PASSING_YEAR; ?></label>
                                        </div>

										<div class="col-6">
                                            <h6 class="d-inline"> Course Duration  : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_GRADUATION_COURSE_DURATION; ?></label>
                                        </div>

										<div class="col-6">
                                            <h6 class="d-inline"> Course Duration  : </h6>
                                            <!-- <input type="text" name="education" id="education" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="education" id="education"><?php echo $W_MASTER_COURSE_DURATION; ?></label>
                                        </div>
										<br>
										<br>
										<br>
										


								       
									
									
									     <!-- Graduation & Master's END -->
									

									
									
									

                                        

                                        <div class="col-12">
                                            <h5 class="d-inline">Language Skills :</h5>
                                            <!-- <input type="text" name="skill" id="skill" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="skill" id="skill"><?php echo $W_SKILL; ?></label>
                                        </div>
                                    </div>

                                    <!-- skill ends  -->

                                    <!-- Hobby starts  -->
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="d-inline">Interest & Hobbies:</h5>
                                            <!-- <input type="text" name="interest" id="interest" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="interest" id="interest"><?php echo $W_INTEREST; ?></label>
                                        </div>
                                    </div>
                                    <!-- Hobby ends  -->


                                    <!-- record starts  -->
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="d-inline">Designation :</h5>
                                            <!-- <input type="text" name="designation" id="designation" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="designation"
                                                id="designation"><?php echo $W_DESIGNATION; ?></label>
                                        </div>
                                        <div class="col-12">
                                            <h5 class="d-inline">Place Of Posting :</h5>
                                            <!-- <input type="text" name="posting" id="posting" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="posting" id="posting"><?php echo $W_POSTING; ?></label>
                                        </div>
                                        <div class="col-12">
                                            <h5 class="d-inline">Cadre :</h5>
                                            <!-- <input type="text" name="cadre" id="cadre" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="cadre" id="cadre"><?php echo $W_CADRE; ?></label>
                                        </div>
                                        <div class="col-12">
                                            <h5 class="d-inline">Batch :</h5>
                                            <!-- <input type="text" name="batch" id="batch" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="batch" id="batch"><?php echo $W_BATCH; ?></label>
                                        </div>
                                    </div>


                                    <!-- record ends  -->

                                    <!-- Membership starts  -->

                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="d-inline">Professional Membership :</h5>
                                            <!-- <input type="text" name="membership" id="membership" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->

                                            <label name="membership"
                                                id="membership"><?php echo $W_MEMBERSHIP; ?></label>
                                        </div>

                                        <div class="col-12">
                                            <h5 class="d-inline">Honors & Awards Recieved:</h5>
                                            <!-- <input type="text" name="honor" id="honor" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="honor" id="honor"><?php echo $W_HONOR; ?></label>
                                        </div>
                                        <div class="col-12">
                                            <h5 class="d-inline">Publications & Articles :</h5>
                                            <!-- <input type="text" name="article" id="article" readonly
                                            value="" style="border:0;background:#f7f7f7;"> -->
                                            <label name="article" id="article"><?php echo $W_ARTICLE; ?></label>
                                        </div>
                                    </div>

                                    <!-- Membership ends -->



                                    <!-- Signature Start -->

                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="d-inline">Signature :</h5>
                                            <img name="signature" id="signature" src="<?php echo $W_SIGNATURE; ?>"
                                                height="80px" width="300px">


                                        </div>

                                    </div>


                                    <!-- Signature End -->

                            </div>




                        </div>
                        <div class="card-footer mt-4">
                            <div class="btn_div">
                                <!-- <a href="#" class="backoword">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<b>Backward</b>
							</a> -->
                                <!-- <a href="#" style="float:right;" class="forward" name="submit" id="submit">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<b>Submit</b>
							</a> -->

                                <button style="float:left; background-color:#00254d;" type="submit" class="forward" name="backword"
                                    id="b">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <b style="color: #fff">Back</b>
                                </button>

                                <button style="float:right;" class="forward" name="ok" id="b">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <b>Approved</b>
                                </button>
                            </div>

                        </div>
                        </form>
                    </div>




                </div>

					<!-- /.container-fluid -->
				</div>

				<footer class="footer mt-4 bg-dark text-white">

					<div class="container text-center">
					
							<h3 class="d-inline" style="font-weight: bold;">
								Powered By <h1 class="d-inline">IT Bangla Ltd.</h1>
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

	<script>


var mybtn = document.getElementById("myBtn")
window.onscroll = function() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybtn.style.display = "block";
    } else {
        mybtn.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

		$( document ).ready(function() {
				$('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled' );
		});


		$("#bar").click(function() {
			$(this).toggleClass("open");
			$("#page-content-wrapper ,#sidebar-wrapper").toggleClass("toggled");
		});
	</script>
</body>

</html>