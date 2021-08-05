<?php 

session_start();
require_once 'controllers/publicController.php';
$public = getAllPublic();





?>
<html>
	<head></head>
	<title>Login</title>
	<body>
		<form action="" method="post">
		<fieldset>
			<table>
        <tr align="center">
    		<td><h1>Login</h1></td>
      </tr>
      <tr>
					<td>NID</td>
					<td>: <input type="text" name="nid" placeholder="nid">  </td>
					<td><span> <?php echo $err_nid;?> </span></td>
				</tr>

       <tr>
					<td>NAME</td>
					<td>: <input type="text" name="name" placeholder="name">  </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>: <input type="password" name="password" placeholder="Password">  </td>
					<td><span> <?php echo $err_password;?> </span></td>
				</tr>
				<tr>
                <td colspan="2" align="right"><input type="submit" name="btn_login" value="Login"></td>
				<tr>

			</table>



		</fieldset>
		</form>

	</body>
</html>