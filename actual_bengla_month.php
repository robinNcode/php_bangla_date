<?php 

    include 'index.php';

    $month = new BanglaMonth('2023-05-03', 6);

    echo '<h1>English to Bengali month Example</h1><br><hr>';
    echo '<h2>Current Date: '. CURRENT_DATE .'</h2>';
    echo '<h2>Formatted Date: '. date('jS F, Y', strtotime(CURRENT_DATE)) .'</h2>';
    
    print_r($month->get_date());

    //echo '<h2>Current Month: '. $month->get_date() .'</h2>';