<?PHP
include 'Connection.php';
 set_time_limit(1000);

 $P_DIS_CODE =$_POST['dis_id'];



 $sql = "SELECT * FROM BCSWN_UPAZILLA WHERE DISTRICT_ID =".$P_DIS_CODE;

 $p = ociparse($conn, $sql);
 oci_execute($p);

 



echo '<option value="0">Select Upazilla </option>';
while ($row = oci_fetch_assoc($p)) {

	echo '<option value="' . $row['UPAZILLA_ID'] . '">' . $row['UPAZILLA_NAME'] . '</option>';
//   $output[]=$row;
}
// print($output);
// print(gettype($output));
// print json_encode($output);

oci_free_statement($p);
oci_close($conn);



?>