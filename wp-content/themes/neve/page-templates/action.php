<?php
    include_once("../../../../wp-config.php");
    global $wpdb;

    $act_first_name = $_POST['firstName'];
    $act_last_name = $_POST['lastName'];
    $act_address_line1 = $_POST['streetLine1'];
    $act_address_line2 = $_POST['streetLine2'];
    $act_city = $_POST['city'];
    $act_state_province = $_POST['stateProvince'];
    $act_postal_code = $_POST['postalCode'];
    $act_country = $_POST['country'];
    $act_email = $_POST['emailAddress'];
    $act_birth_year = $_POST['birthYear'];
    $act_phone = $_POST['phone'];
    $act_notif_sms = $_POST['noticeSms'];
    $act_notif_email = $_POST['noticeEmail'];
    $act_pulse_check_freq = $_POST['pulseRadio'];
    $act_auto_pulse_check = $_POST['pulseRadio'];
    $_POST['frequency'];
    
    
    //$sql = "INSERT INTO account (ACT_FIRST_NAME, ACT_LAST_NAME, ACT_ADDRESS_LINE1, ACT_ADDRESS_LINE2, ACT_CITY, ACT_STATE_PROVINCE, ACT_POSTAL_CODE, ACT_COUNTRY, ACT_EMAIL, ACT_BIRTH_YEAR, ACT_PHONE, ACT_NOTIF_SMS, ACT_NOTIF_EMAIL, ACT_PULSE_CHECK_FREQ, ACT_AUTO_PULSE_CHECK) VALUES ()";

?>
