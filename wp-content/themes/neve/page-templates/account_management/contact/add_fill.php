<?php
    include_once("../../../../../../wp-config.php");
    global $wpdb;

    $ctc_id = $_POST['ctc_id'];
    $sql = "SELECT CTC_FIRST_NAME, CTC_LAST_NAME, CTC_EMAIL, CTC_PHONE, CTC_COUNTRY, CTC_PASSWORD, CTC_MESSAGE FROM contact WHERE '" . $ctc_id . "'";
    $results = $wpdb->get_results($sql);
    echo($ctc_id);
    exit;
    echo json_encode($results);
?>