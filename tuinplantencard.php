<?php

    //tuinplanten card.php

    include "db_connection.php";

    if(isset($_GET['plant_id'])){
        //ALS ?plant_id=x in de link staat.
        $m_id = $_GET['plant_id'];
        $sql_querie = "SELECT plant_id, plant_name, plant_price, plant_img FROM tuinplanten WHERE plant_id= '$m_id'"; 
    }else{
        //ALS er niks in de link staat.
        $sql_querie = "SELECT plant_id, plant_name, plant_price, plant_img FROM tuinplanten";
    }  
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        
        echo '<div class="card">'.
        '<a href="tuinplanten.php?plant_id=' . $row['plant_id'] .'"> ' . '<img src="' . $row['plant_img'] . '" class="cardimage"/>'.
        '<div class="cardtext">' . $row['plant_name'] .  '</a>'. '</div>'.
        '<div class="cardtext">' . $row['plant_price'] .  '</a>'. '</div>'.
        '</div>';
       
    }       

    $conn = null;
  
?>