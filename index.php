<?php
    include  'BanglaMonth.php';
    include 'EnglishToBanglaDate.php';

    defined("CURRENT_TIME") || define("CURRENT_TIME", date('H:i:s'));
    defined("CURRENT_DATE") || define("CURRENT_DATE", date('Y-m-d'));
    defined("CURRENT_DATETIME") || define("CURRENT_DATETIME", date('Y-m-d H:i:s'));

    echo '<h1>Current Time: '. CURRENT_DATETIME .'</h1>';

//    $bng_date = new BanglaMonth(strtotime(CURRENT_DATE), 6);
//    print_r($bng_date->get_date());
//
//    echo '<h1>বর্তমান তারিখ এবং সময়: '. $bng_date->get_date() .'</h1>';

    $bng_date = new EnglishToBanglaDate();
    echo '<h1>বর্তমান তারিখ এবং সময়: '. $bng_date->getSimpleDate(CURRENT_DATETIME) .'</h1>';