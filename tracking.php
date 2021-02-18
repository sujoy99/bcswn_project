<?php

include 'Connection.php';
session_start();




// if (isset($_POST['select'])) {

	if ($_POST['type'] == '1') {
        $sql = "select '01'||TR_NUM_01.NEXTVAL as datetime FROM dual";
        $sql1 = "SELECT * FROM BCSWN_SUBSCRIPTION WHERE ID=1";

		$parseresults = ociparse($conn, $sql);
        $parseresults1 = ociparse($conn, $sql1);
        
		ociexecute($parseresults);
		ociexecute($parseresults1);

		while ($row = oci_fetch_assoc($parseresults)) {
			$S_MONTH = $row["DATETIME"];
        }
        
		while ($row = oci_fetch_assoc($parseresults1)) {
			$S_TYPE = $row["TYPE"];
			$S_AMOUNT = $row["AMOUNT"];
		}

		echo "<p>
		<h5 class='d-inline'>Tracking No. :</h5>
		<input type='text' name='track_num' id='track_num' value='". $S_MONTH. "' style='border:0' readonly />
		<br>
		<h5 class='d-inline'>Subscription Type :</h5>
		<h5 class='d-inline'>". $S_TYPE."</h5>
		<br>
		<h5 class='d-inline'>Subscription Amount :</h5>
		<h5 class='d-inline'>". $S_AMOUNT. "</h5>
		<br>
	
			</p>";

			// $_SESSION['TYPE'] = $S_MONTH;
	}
	if ($_POST['type'] == '2') {
        $sql = "select '02'||TR_NUM_02.NEXTVAL as datetime FROM dual";
        $sql1 = "SELECT * FROM BCSWN_SUBSCRIPTION WHERE ID=2";

        $parseresults = ociparse($conn, $sql);
        $parseresults1 = ociparse($conn, $sql1);


        ociexecute($parseresults);
        ociexecute($parseresults1);

		while ($row = oci_fetch_assoc($parseresults)) {
			$S_YEAR = $row["DATETIME"];
        }
        
        while ($row = oci_fetch_assoc($parseresults1)) {
			$S_TYPE = $row["TYPE"];
			$S_AMOUNT = $row["AMOUNT"];
		}

		echo "<p>
		<h5 class='d-inline'>Tracking No. :</h5>
		<input type='text' name='track_num' id='track_num' value='". $S_YEAR. "' style='border:0' readonly />
		<br>
		<h5 class='d-inline'>Subscription Type :</h5>
		<h5 class='d-inline'>" . $S_TYPE ."</h5>
		<br>
		<h5 class='d-inline'>Subscription Amount :</h5>
		<h5 class='d-inline'>". $S_AMOUNT . "</h5>
		<br>
		

            </p>";
            
        

		// $_SESSION['TYPE'] = $S_YEAR;
	}
// }
