<?php include 'navigation.php' ?>




			<div class="container">

				<form action="addstudent2.php" class="form-signin" method="post">
					<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h3 class="title">Add Student</h3>
	               		<hr />
	               	</div>
	            </div> 

		


			<div class="col-xs-8 col-xs-offset-2">
        				<label for="inputEmail" >Name</label>
       				 <input type="username" name="name" id="inputEmail" class="form-control" placeholder="Name" required autofocus>
        	</div>

        	<div class="col-xs-8 col-xs-offset-2">
        				<label for="inputEmail" >Reg No</label>
       				 <input type="number" name="reg" id="inputEmail" class="form-control" placeholder="Reg" required autofocus>
        	</div>

        	<div class="col-xs-8 col-xs-offset-2">
					<label for="Teacher" >Semester</label>

				<select class="form-control" name="semester" id="Teacher" name="Teacher">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>

			
				</select>
				
			</div>



        	<div class="col-xs-8 col-xs-offset-2">
        				<label for="inputEmail" >Email address</label>
       				 <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        	</div>

        	<div class="col-xs-8 col-xs-offset-2">
        				<label for="inputEmail" >Mobile</label>
       				 <input type="number" name="mobile" id="inputEmail" class="form-control" placeholder="Mobile" required autofocus>
        	</div>



			<br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br>

				<div class="col-xs-4 col-xs-offset-4">
					<input class="btn btn-lg btn-login btn-block" type="submit" value="ADD">
				</div>
				</form>
				

			</div>
		

	
	    </header>



	


	</body>

</html>
