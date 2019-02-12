<?php

    //tuinmeubels card.php

    include "db_connection.php";

    if(isset($_GET['meubel_id'])){
        //ALS ?meubel_id=x in de link staat.
        $m_id = $_GET['meubel_id'];
        $sql_querie = "SELECT meubel_id, meubel_name, meubel_price, meubel_img FROM tuinmeubels WHERE meubel_id= '$m_id'"; 
    }else{
        //ALS er niks in de link staat.
        $sql_querie = "SELECT meubel_id, meubel_name, meubel_price, meubel_img FROM tuinmeubels";
    }  
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        
        echo '<div class="card">'.
        '<a href="tuinmeubels.php?meubel_id=' . $row['meubel_id'] .'"> ' . '<img src="' . $row['meubel_img'] . '" class="cardimage"/>'.
        '<div class="cardtext">' . $row['meubel_name'] .  '</a>'. '</div>'.
        '<div class="cardtext">' . $row['meubel_price'] .  '</a>'. '</div>'.
        '</div>';
       
    }       

    $conn = null;
  
?>