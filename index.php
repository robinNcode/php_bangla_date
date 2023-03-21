<?php
    include  'BanglaMonth.php';
    include 'EnglishToBanglaDate.php';
    date_default_timezone_set('Asia/Dhaka');

    defined("CURRENT_TIME") || define("CURRENT_TIME", date('H:i:s'));
    defined("CURRENT_DATE") || define("CURRENT_DATE", date('Y-m-d'));
    defined("CURRENT_DATETIME") || define("CURRENT_DATETIME", date('Y-m-d H:i:s'));

    echo '<h1>English to converted Bengali DateTime Example</h1><br><hr>';

    echo '<h2>Current Time: '. CURRENT_DATETIME .'</h2>';
    echo '<h2>Formatted Time: '. date('h:i a jS F, Y', strtotime(CURRENT_DATETIME)) .'</h2>';

    $bng_date = new EnglishToBanglaDate();
    echo '<h2>বর্তমান তারিখ এবং সময়: '. $bng_date->banglaDate(CURRENT_DATETIME) .'</h2>';