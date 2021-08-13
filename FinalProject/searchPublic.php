<?php
	require_once 'controllers/crudPubcontroller.php';
	$key = $_GET["key"];
	$searchPub = searchPublic($key);
	
	if(count($searchPub)> 0){
		foreach($searchPub as $s){
			echo "<a href='AllPublicDetails.php?id=".$s["id"]."'>".$s["name"]."</a><br>";
		}
	}
    
?>