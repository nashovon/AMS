<?php 


include 'connection.php';

$reg1 = $_POST["reg"];

?>




<?php include 'navigation.php' ?>




		<div class="container">
			<div class="row main">
				<div class="panel-heading">
					<div class="panel-title text-center">
						<h3 class="title">Student Report</h3>
						<hr/>
					</div>

				


						<div >


							<?php



							$query = "SELECT * FROM attendance WHERE reg='$reg1'";

							$sql = mysqli_query($connection,$query);

							echo "<table class=\"table\">";
							echo "<thead>";
							echo "<tr>";
							echo "<th>Class</th>";
							echo "<th>Count</th>";
							echo "<th>Percentage</th>";
							echo "</tr>";
							echo "</thead>";
							echo "<tbody>";

							while ($row = $sql->fetch_assoc()){

								echo "<tr>";

								echo "<td>{$row['coursename']}</td>";
								echo "<td>{$row['count']}</td>";

								$query1 = "SELECT totalclass FROM class WHERE coursename = '{$row['coursename']}' ";

								$sql1 = mysqli_query($connection,$query1);

								while ($row1 = $sql1->fetch_assoc()){

									$Percentage = ($row['count'] / $row1['totalclass']) *100;

									echo "<td>$Percentage%</td>";


								}





								echo "</tr>";

							}

							echo "<tbody>";

							echo "</table>";

							?>



						</div>





				</div> 

			</div>
		</div>




















	</header>





</body>

</html>
