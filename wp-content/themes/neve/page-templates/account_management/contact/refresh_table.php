<?php
    include_once("../../../../../../wp-config.php");
    global $wpdb;
    
    $ctc_account_id = $_POST['accountId'];

    $sql = "SELECT CTC_ID, CTC_FIRST_NAME, CTC_LAST_NAME, CTC_EMAIL, CTC_PHONE, CTC_TYPE FROM contact WHERE CTC_ACCOUNT_ID = '" . $ctc_account_id . "'";
   
    $results = $wpdb->get_results($sql);

    if( count($results) ) {
        $table_html = "<tr><th>Name</th><th>Email</th><th>Phone</th><th>Type</th></th>";
    }

    foreach( $results as $result) {
        $ctc_ids = $ctc_ids . ' '. $result->CTC_ID;
        $table_html = $table_html . '<tr onclick="row_click(this)"><td>' . $result->CTC_FIRST_NAME . ' '. $result->CTC_LAST_NAME . '</td>';
        $table_html = $table_html . '<td>' . $result->CTC_EMAIL . '</td>';
        $table_html = $table_html . '<td>' . $result->CTC_PHONE . '</td>';
        $table_html = $table_html . '<td>' . $result->CTC_TYPE . '</td></tr>';
    }
    echo $ctc_ids . '###' . $table_html;
?>