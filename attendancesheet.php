<?php 

include 'connection.php';


$name = $_POST["submit"];


?>


<?php include 'navigation.php' ?>




		<div class="container">
			<div class="row main">
				<div class="panel-heading">
					<div class="panel-title text-center">
						<h3 class="title">Attendance Sheet</h3>
						<hr/>
					</div>

					<form action="attendancesheet2.php" class="form-signin" method="get">

						<div class="panel-body text-center">


							<?php




							$name = $_POST["submit"];

							$data["course"]=$name;
							file_put_contents("saveddata.txt", serialize($data));



							$query = " SELECT semester FROM class WHERE coursename='$name'";

							$sql = mysqli_query($connection,$query);

							while ($row = $sql->fetch_assoc()){

								$temp = $row['semester'];


							}

							$query2 = " SELECT reg FROM studentinfo WHERE semester='$temp'";

							$sql = mysqli_query($connection,$query2);



							while ($row = $sql->fetch_assoc()){



								echo "<b>{$row['reg']}</b>";
								echo "<br><br>";

								$temp = $row['reg'];
					
		echo "<input type=\"checkbox\" name=\"con[]\" value=\"1\"> Present<br>";
		echo "<br>";
		echo "<input type=\"checkbox\" name=\"con[]\" value=\"0\"> Absent<br>";


		echo "<hr/>";

							}


							?>

						</div>

						<div class="col-xs-4 col-xs-offset-4">
							<input class="btn btn-lg btn-login btn-block" type="submit" value="submit">
						</div>




					</form>


				</div> 

			</div>
		</div>




















	</header>





</body>

</html>
