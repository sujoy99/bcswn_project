<nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
			<div class="simplebar-content" style="padding: 0px">
				<a class="sidebar-brand" href="index.html">
					
				</a>

				<ul class="navbar-nav align-self-stretch">
					
					<li class="">
						<a class="nav-link text-left active" role="button" aria-haspopup="true" aria-expanded="false">
							<i class="flaticon-bar-chart-1"></i> Dashboard
						</a>
					</li>


					<li class="h">
						<a class="nav-link text-left" role="button" href="./event_create.php">
							<i class="fas fa-book pr-2" style="color: #6aa364;"></i> <label style="color: #6aa364;"> Event </label>
						</a>
					</li>
					<li class="h">
						<a class="nav-link text-left" role="button" href="./member_list.php">
							<i class="fas fa-users pr-1" style="color: #6aa364;"></i> <label style="color: #6aa364;"> Member List 
							<div style=" height: 10px; weight: 10px; background-color: red; border-radius:50%; display: inline;"></div>
							
							</label>
							
						</a>
					</li>
					<li class="h">
						<a class="nav-link text-left" role="button" href="./pending.php">
							<i class="fas fa-bell pr-1" style="color: #6aa364;"></i> <label style="color: #6aa364;">Pending Request
							
						
							<span style="color:#fff; position:absolute; top: 12px ;left: 8px; background:red; height: 20px; min-width: 20px; border-radius: 10px; text-align: center;">
							
								<?php 
								
									include "Connection.php";

									$sql2 = "SELECT COUNT(*) C FROM BCSWN_USER WHERE STATUS='P'";
								
									$n =  ociparse($conn, $sql2);

									oci_execute($n);

									while($row = oci_fetch_assoc($n)){
										$pending = $row["C"];
									}
									// var_dump($pending);
									echo $pending;
									oci_free_statement($n);
									oci_close($conn);
								?>
							
							
							</span>
							
							</label>
						</a>
					</li>

					
                    
                    

					<li class="h">
						<a class="nav-link text-left" role="button" href="./help_box.php">
						<i class="fab fa-hire-a-helper" style="color: #6aa364;"></i> <label style="color: #6aa364;"> Help Box
							<div style=" height: 10px; weight: 10px; background-color: red; border-radius:50%; display: inline;"></div>
							
							</label>
							
						</a>
					</li>

					<li class="h">
						<a class="nav-link text-left" role="button" href="./complain_view.php">
						<i class="fab fa-cuttlefish" style="color: #6aa364;"></i> <label style="color: #6aa364;"> Complain List
							<div style=" height: 10px; weight: 10px; background-color: red; border-radius:50%; display: inline;"></div>
							
							</label>
							
						</a>
					</li>

					<li class="h">
						<a class="nav-link text-left" role="button" href="./logout.php">
                        <i class="fas fa-sign-out-alt pr-1"style="color: #6aa364;"></i> <label style="color: #6aa364;"> Logout
						</a>
					</li>

				</ul>
			</div>
		</nav>