<?php 

session_start();
require_once 'controllers/publicController.php';



?>
<html>
	<head>
	<script>
		
		var hasError=false;
		function get(id){
			return document.getElementById(id);
		}



		function validate(){
			refresh();
			
			if(get("nid").value == ""){
				hasError = true;
				get("err_nid").innerHTML = "*NID Req";
			}
			else if(get("nid").value.length <=4){
				hasError = true;
				get("err_nid").innerHTML = "*Nid must be > 4 char";
			}
			if(get("name").value == ""){
				hasError = true;
				get("err_name").innerHTML = "*Name Req";
			}
			else if(get("name").value.length < 4){
				hasError = true;
				get("err_name").innerHTML = "*Name must be > 4 char";
			}
			if(get("password").value == ""){
				hasError = true;
				get("err_password").innerHTML = "*Password Req";
			}


			return !hasError;
			
		}

		function refresh(){
			hasError=false;
			get("err_nid").innerHTML ="";
			get("err_name").innerHTML ="";
			get("err_password").innerHTML ="";
		}

	</script>
	</head>
	<title>Login</title>
	<body>
		<h5 class="text-danger"><?php echo $err_db;?></h5>
		<form action="" onsubmit="return validate()"  method="post">
		<fieldset>
			<table>
        <tr align="center">
    		<td><h1>Login</h1></td>
      </tr>
      <tr>
					<td>NID</td>
					<td>: <input id="nid" type="text" name="nid" placeholder="nid">  </td>
					<td><span id="err_nid"> <?php echo $err_nid;?> </span></td>
				</tr>

       <tr>
					<td>NAME</td>
					<td>: <input id="name" type="text" name="name" placeholder="name">  </td>
					<td><span id="err_name"> <?php echo $err_name;?> </span></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>: <input id="password" type="password" name="password" placeholder="Password">  </td>
					<td><span id="err_password"> <?php echo $err_password;?> </span></td>
				</tr>
				<tr>
                <td colspan="2" align="right"><input type="submit" name="btn_login" value="Login"></td>
				<tr>

			</table>


		<h5><a href="registration.php"> Are you not registered yet? </a></h5>
		<h5><a href="resetPublicpage1.php">Reset Password</a></h5>

		</fieldset>
		</form>


	</body>
</html>