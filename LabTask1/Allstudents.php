<?php 
	require_once 'controllers/StudentController.php';
	$students = getAllStudents();
?>


<div class="center">
	<h3 class="text">All Students</h3>
	<table class="table table-striped">
		<thead>
            <th>Serial</th>
			<th> Name </th>
			<th> DOB </th>
			<th> Credit </th>
			<th> CGPA </th>
			<th>Department </th>
			
			
		</thead>
		<tbody>
			<?php
				$i = 1;
				foreach($students as $s){
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$s["name"]."</p>";
						echo "<td>".$s["dob"]."</p>";
                        echo "<td>".$s["credit"]."</p>";
						echo "<td>".$s["cgpa"]."</p>";
						echo '<td><a href="Editstudent.php?id='.$s["id"].'" class="btn btn-success">Edit</a></td>';
						echo '<td><a href="#" class="btn btn-danger">Delete</a></td>';
					echo "</tr>";
					$i++;
						
				}
			?>
			
		</tbody>
	</table>
</div>
