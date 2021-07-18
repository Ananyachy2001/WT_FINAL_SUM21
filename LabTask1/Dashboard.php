<?php 
	require_once 'controllers/StudentController.php';
	$students = getAllStudents();
?>

<div>

<h3> Dashboard</h3>

<table>
    <th>
        <td><a href="Allstudents.php">All Students </a> </td>
        <td><a href="Addstudent.php">Add Students </a> </td>>
        <td><a href="#">All Department </a> </td>
        <td><a href="#">Add Department </a> </td>
    </th>


</table>



</div>