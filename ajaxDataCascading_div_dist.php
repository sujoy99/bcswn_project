<?PHP
include 'Connection.php';
 set_time_limit(1000);

 $P_DIV_CODE =$_POST['div_id'];



 $sql = "SELECT * FROM BCSWN_DISTRICTS WHERE DIVISION_ID =".$P_DIV_CODE;

 $p = ociparse($conn, $sql);
 oci_execute($p);

 



echo '<option value="0">Select District </option>';
while ($row = oci_fetch_assoc($p)) {

	echo '<option value="' . $row['DISTRICT_ID'] . '">' . $row['DISTRICT_NAME'] . '</option>';
//   $output[]=$row;
}
// print($output);
// print(gettype($output));
// print json_encode($output);

oci_free_statement($p);
oci_close($conn);



?>