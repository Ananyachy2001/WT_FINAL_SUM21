<?php

    require_once 'controllers/publicController.php';

    session_start();
	if(!isset($_SESSION["loggedpublic"])){
		header("Location: login.php");
	}


   
   
		
    $public = getAllPublic();
    



?>

<html>
    <head></head>


    <body>
        <h3><a href="#">Home</a></h3>
        <h1 align="center">Welcome <?php echo $_SESSION["loggedpublic"];?></h1>

        <h1 align="center">NID: <?php echo $_SESSION["nid"];?></h1>

    <form action="" method="post">


        <table>
    <tr>
        <td><a href="#">=>Click Here for Latest News on Covid-19</a></td>

    </tr>

    <tr>
    <td><a href="vaccineAvailability.php">=>Click Here If Vaccine is Available or Not </a></td>
    </tr>
<form action="" method='post'>
    <tr>
    <td><input type="submit"  name="btn_about" value="Registration status"></a></td>
    </tr>

    </form>

    <tr>
    <td><a href="downloadVaccineInformation.php">=>Download Your Vaccine registration</a></td>
    </tr>
    <tr>
    <td><a href="downloadVaccineCertificate.php">=>Download Your Vaccine certificate</a></td>
    </tr>

    <tr>
    <td><a href="#">=>Verify Your Vaccination Certificate</a></td>
    </tr>

    <tr>
    <td><a href="#">=>Edit Profile</a></td>
    </tr>

    <tr>
    <td><a href="#">=>Add Medical Information</a></td>
    </tr>


    <tr>
    <td><a href="publicfeedback.php">=>Can give feedback</a></td>
    </tr>

    </form>




</table>





    </body>
</html>   
    
    
