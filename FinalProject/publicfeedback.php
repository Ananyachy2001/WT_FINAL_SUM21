<?php 
		
        require_once 'controllers/feedbackcontroller.php';
?>

<html>
	<head>

	</head>
	<body>

	<h1><u>Give Feedback as People:</u></h1>


    <h5 class="text-danger"><?php echo $err_db;?></h5>

	<form action="" method="post">
		<fieldset>

		<table align="center">
				<tr>
					<td>Feedback</td>
					<td>: <textarea  name="feedback" <?php echo $feedback; ?>" placeholder="Feedback"></textarea> </td>
					<td><span"> <?php echo $err_feedback;?> </span></td>
					
                </tr>
				<tr>
                    <td colspan="2" align="center"><input type="submit" name="btn_feedback" value="Submit"></td>

                </tr>


               
        </table>
		<tr>
        <td><a href="login.php">Logout</a></td>

    </tr>
			
			
			
		</fieldset>
		</form>
	</body>
</html>