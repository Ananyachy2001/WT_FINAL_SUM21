   <?php

require_once 'controllers/StudentController.php'


?>

<div>
<h4><?php echo $err_db;  ?></h4>

<form action="" method="post">
<div>

<h4>Name</h4>
<input type="text" name="name" value="<?php echo $name; ?>">
<span> <?php echo $err_name; ?> </span>
</div>

<h4>ID</h4>
<input type="text" name="id" value="<?php echo $id; ?>">
<span> <?php echo $err_id; ?> </span>
</div>

<h4>DOB</h4>
<input type="text" name="dob" value="<?php echo $dob; ?>">
<span> <?php echo $err_dob; ?> </span>
</div>
<h4>Credit</h4>
<input type="text" name="credit" value="<?php echo $credit; ?>">
<span> <?php echo $err_credit; ?> </span>
</div>
<h4>CGPA</h4>
<input type="text" name="cgpa" value="<?php echo $cgpa; ?>">
<span> <?php echo $err_cgpa; ?> </span>
</div>

<div class="form-group">
			<h4 class="text">Department ID:</h4> 
			<select name="dept_id" >
				<option selected disabled>Choose</option>

			</select>
		</div>


<div>
<br>
<input type="submit" name="add_student" value="Add Student">

</div> 


</form>


</div>