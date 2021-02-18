<?php 


include "Connection.php";

$sql = "SELECT NAME, MOBILE FROM BCSWN_USER WHERE TO_CHAR(DOB,'dd-mm') = (SELECT TO_CHAR(SYSDATE,'dd-mm') FROM DUAL)";

$parseresult = ociparse($conn, $sql);
oci_execute($parseresult);


while($row = oci_fetch_assoc($parseresult)){
    $output[] = $row;
}


var_dump($output);









?>