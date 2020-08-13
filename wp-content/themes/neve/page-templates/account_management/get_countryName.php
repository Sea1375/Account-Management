<?php
    include_once("../../../../../wp-config.php");
    global $wpdb;
    
    $sql = "SELECT * FROM country where  CTR_AVAILABLE = 'Y' ";
    $results = $wpdb->get_results($sql);
  
    foreach( $results as $result) {
        echo "<option value = '" . $result->CTR_DESC . "'>". $result->CTR_DESC ."</option>";
    }
    
?>
