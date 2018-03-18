<?php include 'navigation.php' ?>



		<div class="container">
			<div class="row main">
				<div class="panel-heading">
					<div class="panel-title text-center">
						<h1 class="title">Select Class</h1>
						<hr/>
					</div>

					<form  class="form-signin" method="post">


						<div class="panel-body text-center">


					


							<?php

							include 'connection.php';
								

							$query = "SELECT coursename FROM class";

							$sql = mysqli_query($connection,$query);

							while ($row = $sql->fetch_assoc()){

								echo "<b>{$row['coursename']}</b>";
								echo "<br>";

								$temp = $row['coursename'];

								echo "<button type=\"submit\" name=\"submit\" formaction=\"attendancesheet.php\" value=\"$temp\" class=\"btn btn-primary\">Attendance</button> ";
								echo "      ";
								echo "<button type=\"submit\" name=\"submit\" formaction=\"status.php\" value=\"$temp\" class=\"btn btn-primary\">Status</button> ";

								echo "<hr/>";

							}

							?>



						</div>



					</form>


				</div> 

			</div>
		</div>




















	</header>





</body>

</html>
