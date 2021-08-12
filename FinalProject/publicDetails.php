<?php

    require_once 'controllers/publicController.php';
    require_once 'controllers/downloadController.php';

    session_start();
	if(!isset($_SESSION["loggedpublic"])){
		header("Location: login.php");
	}




   
		
    $public = getAllPublic();

    



?>

<html>
    <head>
    <script>
	function get(id){
		return document.getElementById(id);
	}

	function loadDoc(){
		//get("demo").innerHTML = "Hello";
		var xhr = new XMLHttpRequest();
		xhr.open("GET","downloadVaccineInformation.php",true);
		xhr.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				get("demo").innerHTML = this.responseText;
			}
		};
		xhr.send();
	}
</script>
    </head>



    <body>
        <h3><a href="#">Home</a></h3>
        <h1 align="center">Welcome <?php echo $_SESSION["loggedpublic"];?></h1>

        <h1 align="center">NID: <?php echo $_SESSION["nid"];?></h1>

        <button onclick="loadDoc()">=>Download Your Vaccine registration </button>
        <div id="demo"></div> 


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
    <td><a href="verifyVaccineCertificate.php?id=<?php echo $_SESSION["nid"];?>">=>Verify Your Vaccination Certificate</a></td>
    </tr>

    <tr>
    <td><a href="updateprofile.php">=>Edit Profile</a></td>
    </tr>

    <tr>
    <td><a href="medicalInfoAdd.php">=>Add Medical Information</a></td>
    </tr>


    <tr>
    <td><a href="publicfeedback.php">=>Can give feedback</a></td>
    </tr>

    <tr>
    <td><a href="logout.php">=>Logout</a></td>
    </tr>



     

</table>

        





    </body>
</html>   
    
    
