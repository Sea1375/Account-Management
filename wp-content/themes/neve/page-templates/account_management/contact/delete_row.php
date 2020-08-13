<?php
    include_once("../../../../../../wp-config.php");
    global $wpdb;
    
    $ctc_id = $_POST['ctc_id'];
    $sql = "DELETE FROM contact WHERE CTC_ID = " . $ctc_id;
    $wpdb->query($sql);
?>