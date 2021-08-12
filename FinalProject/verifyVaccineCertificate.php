<?php
session_start();
require_once 'controllers/downloadController.php';

if(isset($_SESSION["nid"])){
$p=getPublicCertificate($_SESSION["nid"]);

}





?>

<html>
  <body>

       <?php
       if($p) {
        echo  "<p>NID:" .$p['c_id']. "</p><br>";
        echo "<p>Name:" .$p['p_name']. "</p><br>";
        echo "<p>Vaccination Information:" .$p['vaccineInfo']. "</p><br>";
        echo "<p>Gender:" .$p['p_gender']. "</p> <br>";
        echo "<p>Occupation:" .$p['p_occupation']. "</p><br>";
        echo "<p>address:" .$p['p_address']. "</p><br>";
        echo "<p>Center:" .$p['p_center']. "</p><br>";
       }
       else{
        
        echo "We can't varify your account.";
        echo $_SESSION["nid"];
       
       }
      ?>   
