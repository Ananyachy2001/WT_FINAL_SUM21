<?php
session_start();
require_once 'controllers/publicController.php';

if(!isset($_SESSION["loggedpublic"])){
  header("Location: login.php");
}

if(isset($_SESSION["nid"])){
$p=getPublicnid($_SESSION["nid"]);

}




?>

<html>
  <head><link rel="stylesheet" href="CSS/download.css"></head>
  <body>
  <h4  class="text-danger"><?php echo $err_db;  ?></h4>

       <?php
       if($p) {
        echo  "<p>NID:" .$p['p_id']. "</p><br>";
        echo "<p>Name:" .$p['p_name']. "</p><br>";
        echo "<p>Vaccination Date:" .$p['vaccine_date']. "</p><br>";
        echo "<p>Dose Number:".$p['Dose_number']. "</p> <br>"   ;
        echo "<p>Gender:" .$p['p_gender']. "</p> <br>";
        echo "<p>Occupation:" .$p['p_occupation']. "</p><br>" ;
        echo "<p>address:" .$p['p_address']. "</p><br>";
        echo "<p>Center:" .$p['p_center']. "<p><br>";
       }
       else{
        
        echo "<p>You will be notified later.<p>";
       
       }
      ?>   

    

    

  </body>
</html>