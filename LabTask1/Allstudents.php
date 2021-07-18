<?php 
	require_once 'controllers/StudentController.php';
	$students = getStudents();
?>


<div class="center">
	<h3 class="text">All Students</h3>
	<table class="table table-striped">
		<thead>
			<th> Name</th>
            <th> ID </th>
			<th> DOB  </th>
			<th> Credit</th>
			<th> CGPA</th>
			<th>Department </th>
			
			
		</thead>
		<tbody>

			
		</tbody>
	</table>
</div>
