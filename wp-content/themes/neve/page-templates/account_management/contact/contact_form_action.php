<?php
    include_once("../../../../../../wp-config.php");
    global $wpdb;

    $ctc_first_name = $_POST['firstName'];
    $ctc_last_name = $_POST['lastName'];
    $ctc_email = $_POST['emailAddress'];
    $ctc_phone = $_POST['mobileNumber'];
    $ctc_country = $_POST['country'];
    $ctc_type = $_POST['typeOfContact'];
    //$ctc_userid = $_POST['userID'];
    $ctc_password = $_POST['password'];
    $ctc_message = $_POST['message'];
    $ctc_account_id = $_POST['accountId'];
    $ctc_wp_user_id = get_current_user_id();
    
    $sql = "INSERT INTO contact (CTC_FIRST_NAME, CTC_LAST_NAME, CTC_EMAIL, CTC_PHONE, CTC_COUNTRY, CTC_TYPE, CTC_PASSWORD, CTC_MESSAGE, CTC_ACCOUNT_ID, CTC_WP_USER_ID, CTC_CREATION_DATE) 
                VALUES ('$ctc_first_name', '$ctc_last_name', '$ctc_email', '$ctc_phone', '$ctc_country', '$ctc_type', '$ctc_password', '$ctc_message', '$ctc_account_id', '$ctc_wp_user_id', CURRENT_TIMESTAMP)";
    $wpdb->query($sql);

?>
