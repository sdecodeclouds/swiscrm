<?php
    session_start();
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    //echo $_SESSION["prospect"]['data']['attributes']['bill_first_name']." ".$_SESSION["prospect"]['data']['attributes']['bill_last_name'];
?>