<?php
    session_start();
		
    require_once 'controllers/publicController.php';


?>

<html>
    <head></head>


    <body>
        <h3><a href="#">Home</a></h3>
        <h1 align="center">Welcome <?php echo $_SESSION["loggedpublic"];?></h1>

        <table>
    <tr>
        <td><a href="#">=>Click Here for Latest News on Covid-19</a></td>

    </tr>

    <tr>
    <td><a href="vaccineAvailability.php">=>Click Here If Vaccine is Available or Not </a></td>
    </tr>

    <tr>
    <td><a href="#">=>Check Your Vaccine Registration Status</a></td>
    </tr>

    <tr>
    <td><a href="#">=>Download Your Vaccine registration</a></td>
    </tr>
    <tr>
    <td><a href="#">=>Download Your Vaccine certificate</a></td>
    </tr>

    <tr>
    <td><a href="#">=>Verify Your Vaccination Certificate</a></td>
    </tr>

    <tr>
    <td><a href="#">=>Can give feedback</a></td>
    </tr>


</table>





    </body>
</html>   
    
    
