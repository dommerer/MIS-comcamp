<?php
    if(isset($_GET['lab'])){
        $token = 'qLXmiQA4xDCFfw8pD2zH3fMv4leT5vCYfxY8fIcyP2m';
        $headers = array('Authorization: Bearer ' .$token);
        $url = 'https://notify-api.line.me/api/notify';
        $ch = curl_init($url);
        $lab = array('message' => 'มีผู้สมัครส่งสลิปชำระเงิน โปรดตรวจสอบ http://csmju.jowave.com/applications/compcamp/admin_login.php ');
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $lab );
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers );
            $result = curl_exec($ch);
            curl_close($ch);
            echo $result;     
    }
?>