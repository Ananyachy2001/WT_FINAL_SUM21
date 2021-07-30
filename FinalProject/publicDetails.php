<?php
		
        require_once 'controllers/publicController.php';
        $publicdetails = getAllPublic();
?>

<html>
    <head></head>


    <body>
        <h1>Details</h1>

        <table>
    <th>
        <td>S1#</td>
        <td>Name</td>
        <td>Product</td>
    </th>

    <tr>
        <?php

        
        foreach($publicdetails as $p){
            echo"<tr>";
                echo"<td>".$p["name"]."</td>";
                echo"<td>".$p["nid"]."</td>";

            echo"</tr>";
            
            
        }
        ?>

    </tr>


</table>





    </body>
</html>   
    
    
