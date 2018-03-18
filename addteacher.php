

<?php include 'navigation.php' ?>





			<div class="container">

			<form action="addteacher2.php" class="form-signin" method="post">

			<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h3 class="title">Add Teacher</h3>
	               		<hr />
	               	</div>
	            </div> 

		


			<div class="col-xs-8 col-xs-offset-2">
        				<label for="inputname" >Name</label>
       				 <input type="username" name="name" id="inputname" class="form-control" placeholder="Name" required autofocus>
        	</div>

        	<div class="col-xs-8 col-xs-offset-2">
					<label for="post" >Post</label>

				<select class="form-control" name="post" id="post">
					<option value="Professor">Professor</option>
					<option value="Associate Professor">Associate Professor</option>
					<option value="Assistant Professor">Assistant Professor</option>
					<option value="Lecturer">Lecturer</option>
				</select>

				</div>

        	<div class="col-xs-8 col-xs-offset-2">
        				<label for="email" >Email address</label>
       				 <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
        	</div>

        	<div class="col-xs-8 col-xs-offset-2">
        				<label for="mobile" >Mobile</label>
       				 <input type="number" name="mobile" id="mobile" class="form-control" placeholder="Mobile" required autofocus>
        	</div>


        	<br><br><br><br><br><br><br><br><br><br>
        	<br><br><br>


	

				<div class="col-xs-4 col-xs-offset-4">
					<button type="submit" name="submit" class="btn btn-default btn-lg">ADD</button>
				</div>

			</form>
				

			</div>
		

	
	    </header>



	


	</body>

</html>
