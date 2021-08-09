<?php 
		session_start();
        require_once 'controllers/publicController.php';
        
        $id = $_SESSION['nid'];
        $n = getnid($id);
?>






<html>
	<head></head>
	<body>

	<h1><u>Index page of People</u></h1>




	

    <h5 class="text-danger"><?php echo $err_db;?></h5>

		<form action="" method="post">
		<fieldset>




            <h1 align="center"><u>Create Account for People</u></h1>
		<table align="center">



		
            <tr>
					<td>Nid</td>
					<td>: <input type="text" name="nid" value="<?php echo $n["nid"]; ?>"  placeholder=""> </td>
					<td><span> <?php echo $err_nid;?> </span></td>
					
				</tr>
				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name" value="<?php echo $n["name"]; ?>" placeholder=""> </td>
					<td><span> <?php echo $err_name;?> </span></td>
					
				</tr>


                <tr>
					<td>Email</td>
					<td>: <input type="text" name="email" value="<?php echo $n["email"]; ?>"  placeholder="">  </td>
					<td><span> <?php echo $err_email;?> </span></td>
                   
					
				</tr>
                <tr>
					<td>Password</td>
					<td>: <input type="password" name="password" value="<?php echo $n["password"]; ?>" placeholder="Password">  </td>
					<td><span> <?php echo $err_password;?> </span></td>
					
				</tr>
                <tr>
					<td>Confirm Password</td>
					<td> <input type="password" name="conpassword" value="<?php echo $n["conpassword"]; ?>" placeholder="Confirm Password">  </td>
					<td><span> <?php echo $err_conpassword;?> </span></td>
                    
					
				</tr>
                <tr>
					<td>Phone: </td>
					<td> <input type="text" name="phonenumber" value="<?php echo $n["phonenumber"]; ?>" placeholder="Number">  </td>
					<td><span> <?php echo $err_phonenumber;?> </span></td>
                   
					
				</tr>
				<tr>
				<td>Birth Date:</td>
                <td> 
                    <select name="birthday">
						
						<option disabled selected>Day</option>
						<?php
							foreach($arrDay as $a){
								if($a == $n["birthday"]) 
									echo "<option selected>$a</option>";
								else
									echo "<option>$a</option>";
							}
						?>
					</select>
					<span> <?php echo $err_birthday; ?> </span>
                    <select name="birthmonth">
						
					<option disabled selected>Month</option>
					<?php
							foreach($arrMonth as $a){
								if($a == $n["birthmonth"]) 
									echo "<option selected>$a</option>";
								else
									echo "<option>$a</option>";
							}
					?>
					</select>
					<span> <?php echo $err_birthmonth; ?> </span>
                    <select name="birthyear" value="<?php echo $n["birthmonth"]; ?>">
						
                        <option disabled selected>Year</option>
                        <?php
						
						for($i=1945;$i<=2021;$i++){
							

							if($i == $n["birthyear"]){
							echo "<option selected>$i</option>";}
							else
								{	echo "<option>$i</option>";}
							
						}
                        ?>
                        </select>
                    
                </td>

					
                    <td><span> <?php  echo $err_birthyear; ?> </span></td>

                </tr>


				<tr>
					<td>Gender</td>
					<td>: <input type="radio" value="Male" <?php if($n["gender"]=="Male") echo "checked"; ?> name="gender"> Male 
					<input name="gender" type="radio" value="Female" <?php if($n["gender"]=="Female") echo "checked"; ?> > Female 
					<input type="radio" value="Other" <?php if($n["gender"]=="Other") echo "checked"; ?> name="gender"> Other </td>
					<td><span> <?php echo $err_gender;?> </span></td>
				</tr>
				<tr>
					<td>What's your Occupation?</td>
				<td><input type="radio" value="Businessman" <?php if($n["occupation"]=="Businessman") echo "checked"; ?> name="occupation" >Businessman</td>
				<td><input name="occupation" value="Goverment Worker" <?php if($n["occupation"]=="Goverment Worker") echo "checked"; ?> type="radio">Goverment Worker</td>
				<td><input name="occupation" value="Banker" <?php if($n["occupation"]=="Banker") echo "checked"; ?> type="radio">Banker</td>
				<td><input name="occupation" value="Student" <?php if($n["occupation"]=="Student") echo "checked"; ?> type="radio"> Student </td>
				<td><input name="occupation" value="Teacher" <?php if($n["occupation"]=="Teacher") echo "checked"; ?> type="radio"> Teacher</td>
				<td><input name="occupation" value="Others" <?php if($n["occupation"]=="Others") echo "checked"; ?> type="radio"> Others </td>
				<td><span>  <?php echo $err_occupation;?> </span></td>

				

            </tr>



            
			<tr>
				<td><br> What's your Address?</td>
				<td> <input type="text" value="<?php echo $n["address"]; ?>" name="address"></td>
				<td><span> <?php echo $err_address;?> </span></td>

            </tr>
			
			<tr>
			<td>Which center do you want to give Vaccine? </td>
			 <td><select name="center" value="<?php echo $n["center"]; ?>">
						
						<option disabled selected>Hospital Center</option>
						<?php
							foreach($arrCenter as $a){
								if($a == $n["center"]) 
									echo "<option selected>$a</option>";
								else
									echo "<option>$a</option>";
							}
						?>
					</select>

					</td>
					<td><span> <?php echo $err_center; ?></span></td>
			
					</tr>

				
				


				<tr>
                    <td align="left"><input type="submit" name="update" value="Update"></td>

                </tr>


               
        </table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>