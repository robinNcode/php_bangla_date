<?php

class EnglishToBanglaDate{
    public function getSimpleDate( $english_date ) {
        $engNumber = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
        $bangNumber = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০');

        return str_replace( $engNumber, $bangNumber, $english_date );
    }
}