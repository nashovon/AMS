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

					<form action="attendancesheet.php" class="form-signin" method="post">


						<div class="panel-body text-center">


							<?php



							$query = "SELECT * FROM attendance WHERE reg='$reg1'";

							$sql = mysqli_query($connection,$query);

							while ($row = $sql->fetch_assoc()){

								echo $row['coursename'];

								echo " --------- ";

								echo $row['count'];

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
