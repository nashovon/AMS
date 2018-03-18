<?php include 'connection.php';?>


<?php include 'navigation.php' ?>




			<div class="container">

				<form action="addclass2.php" class="form-signin" method="post">
					<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h3 class="title ">Add Class</h3>
	               		<hr />
	               	</div>
	            </div> 

				

				
				<div class="col-xs-8 col-xs-offset-2">
        				<label for="inputname" >Course</label>
       				 <input type="username" name="course" id="inputname" class="form-control" placeholder="Course" required autofocus>
        		</div>

        		<div class="col-xs-8 col-xs-offset-2">
					<label for="Teacher" >Semester</label>

				<select class="form-control" name="semester" id="Teacher" name="semester">
					<option >1</option>
					<option >2</option>
					<option >3</option>
					<option >4</option>
					<option >5</option>
					<option >6</option>
					<option >7</option>
					<option >8</option>
				</select>
				
			</div>

				


				<div class="col-xs-8 col-xs-offset-2">
					<label for="Teacher" >Select Teacher</label>

				


				<select class="form-control" id="teacher" name="teacher">
					<?php 
						$sql = mysqli_query($connection, "SELECT teachername FROM teacherinfo");
						while ($row = $sql->fetch_assoc()){
							echo "<option>" . $row['teachername'] . "</option>";
						}
					?>
				</select>
				
				</div>


				<br><br><br><br><br><br><br><br><br><br>

				<div class="col-xs-4 col-xs-offset-4">
					<input class="btn btn-lg btn-login btn-block pull-bottom" id='gg' type="submit" value="ADD">
				</div>

				
				</form>
				

			</div>
		

	
	    </header>



	


	</body>

</html>
