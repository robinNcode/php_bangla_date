<?php

class EnglishToBanglaDate{

    private $engNumber = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
    private $bangNumber = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০');
    private $engMonth = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    private $bangMonth = array('জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর');

    private $engDay = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
    private $bangDay = array('রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার', 'শনিবার');

    public function banglaDigit($english_date) {
        return str_replace($this->engNumber, $this->bangNumber, $english_date);
    }

    public function banglaMonth($english_date){
        return str_replace($this->engMonth, $this->bangMonth, $english_date);
    }

    public function banglaDay($english_date){
        return str_replace($this->engDay, $this->bangDay, $english_date);
    }

    public function banglaDate($english_date){
        $english_date = date('h:ia jS F, Y', strtotime($english_date));
        $bangla_date = $this->banglaDigit($english_date);
        $bangla_date = $this->banglaMonth($bangla_date);

        return $bangla_date;
    }
}