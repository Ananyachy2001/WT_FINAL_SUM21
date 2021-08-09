<?php 
		session_start();
        require_once 'controllers/publicMedicalController.php';
		
		
		echo $_SESSION['nid'];




		
?>



<html>
<head></head>
<body>
	
<form action="" method="post">
		<fieldset>
            <h1 align="center">Medical History of patient</h1>
			<table>
			<tr>
                <td> <input type="hidden" name="m_id" value="<?php echo $_SESSION['nid']; ?>" >   </td>
		    	<td><br> Do you have any fever or other symptoms that could be due to COVID-19? <br> 
				<input name="symptoms" value="Yes" <?php if($symptoms=="Yes") echo "checked"; ?> type="radio"> Yes 
				<input name="symptoms" value="No" <?php if($symptoms=="No") echo "checked"; ?> type="radio"> No </td>
				<td><span> <?php echo $err_symptoms;?> </span></td>
			</tr>

			
			<tr>
			 <td><br> Are You Covid Effected Previously? <br> <input name="effected" value="Yes" <?php if($effected=="Yes") echo "checked"; ?> type="radio">   Yes   <input name="effected" value="No" <?php if($effected=="No") echo "checked"; ?> type="radio">   No   </td>
			 <td><span> <?php echo $err_effected;?> </span></td>
			 </tr>



			<tr>
			<td><br> Do you have any High blood pressure? <br><input name="bloodpressure" value="Yes" <?php if($bloodpressure=="Yes") echo "checked"; ?> type="radio"> Yes  <input name="bloodpressure" value="No" <?php if($bloodpressure=="No") echo "checked"; ?> type="radio"> No </td>
			<td><span> <?php echo $err_bloodpressure;?> </span></td>
			</tr>






			<tr>
				<td><br> Do you have any cancer? <br><input name="cancer" value="Yes" <?php if($cancer=="Yes") echo "checked"; ?> type="radio"> Yes  <input name="cancer" value="No" <?php if($cancer=="No") echo "checked"; ?> type="radio"> No </td>
				<td><span> <?php echo $err_cancer;?> </span></td>
			</tr>

			




			
			<tr> 
				<td><br> Did you have have any Stroke? <br><input name="stroke" value="Yes" <?php if($stroke=="Yes") echo "checked"; ?> type="radio"> Yes  <input name="stroke" value="No" <?php if($stroke=="No") echo "checked"; ?> type="radio"> No </td>
				<td><span> <?php echo $err_stroke;?> </span></td>
			 </tr>

			


			<tr>
			 <td><br> Do you have any other health problem? <br><input name="problem" value="Yes" <?php if($problem=="Yes") echo "checked"; ?> type="radio"> Yes  <input name="problem" value="No" <?php if($problem=="No") echo "checked"; ?> type="radio"> No </td> 
			 <td><span> <?php echo $err_problem;?> </span></td>
			 </tr>



			<tr>
			 <td><br> Do you take any medicines regularly? <br><input name="medicines" value="Yes" <?php if($medicines=="Yes") echo "checked"; ?> type="radio"> Yes  <input name="medicines" value="No" <?php if($medicines=="No") echo "checked"; ?> type="radio"> No </td>
			 <td><span> <?php echo $err_medicines;?> </span></td>
			  </tr>

			

			<tr> 
				<td>If yes, Describe <input name="medinfo" type="text"></td>
				<td><span> <?php echo $err_medinfo;?> </span></td>
			
			   </tr>




			<tr>
                    <td align="left"><input type="submit" name="medicalinfo" value="Submit"></td>

                </tr>


				<h4 class="text-danger"><?php echo $err_db;  ?></h4>


			

			








			</table>
			
			
			</fieldset>
			</form>

</body>

</html>