<?PHP
include 'Connection.php';
 set_time_limit(1000);

 $graduation_code=$_POST['degree_id'];



 $sql = "SELECT * FROM BCSWN_SUBJECT WHERE DEGREE_ID=".$graduation_code;

 $p = ociparse($conn, $sql);
 oci_execute($p);

 



echo '<option value="0">Select Degree</option>';
while ($row = oci_fetch_assoc($p)) {

	echo '<option value="' . $row['SUBJECT_ID'] . '">' . $row['SUBJECT_NAME'] . '</option>';
//   $output[]=$row;
}
// print($output);
// print(gettype($output));
// print json_encode($output);

oci_free_statement($p);
oci_close($conn);



?>