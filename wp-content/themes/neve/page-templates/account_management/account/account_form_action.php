<?php
    include_once("../../../../../../wp-config.php");
    global $wpdb;

    $act_addressCheck = $_POST['addressCheck'];
    $act_noticeSMS = $_POST['noticeSMS'];
    $act_noticeEmail = $_POST['noticeEmail'];
    $act_plan = $_POST['actPlan'];

    if(isset($act_addressCheck) && (isset($act_noticeSMS) || isset($act_noticeEmail))) {
        
        $act_notif_sms = isset($act_noticeSMS) ? 'Y' : 'N';
        $act_notif_email = isset($act_noticeEmail) ? 'Y' : 'N';
        
        $act_auto = $_POST['actAuto'];
        $act_pulse_check_freq = $act_auto == 'N' ? $_POST['frequency'] : '';

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
        $act_phone = $_POST['mobileNumber'];
        
        $sql = "INSERT INTO account (ACT_FIRST_NAME, ACT_LAST_NAME, ACT_ADDRESS_LINE1, ACT_ADDRESS_LINE2, ACT_CITY, ACT_STATE_PROVINCE, ACT_POSTAL_CODE, ACT_COUNTRY, ACT_EMAIL, ACT_BIRTH_YEAR, ACT_PHONE, ACT_NOTIF_SMS, ACT_NOTIF_EMAIL, ACT_PULSE_CHECK_FREQ, ACT_AUTO_PULSE_CHECK, ACT_PLAN, ACT_CREATION_DATE) VALUES ('$act_first_name', '$act_last_name', '$act_address_line1', '$act_address_line2' , '$act_city', '$act_state_province', '$act_postal_code', '$act_country', '$act_email', '$act_birth_year', '$act_phone', '$act_notif_sms', '$act_notif_email', '$act_pulse_check_freq', '$act_auto', '$act_plan', CURRENT_TIMESTAMP)";
        $wpdb->query($sql);
 
        echo "Successful";
        
    } else {
        echo "Error";
    }
    
    

?>
