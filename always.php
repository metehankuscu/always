<?php

class Always{

    /*
    * return @int
    */
    public function twoDateDifference($start_date,$end_date){
        $start_date = strtotime($start_date);
        $end_date = strtotime($end_date);
        if ($start_date > $end_date) {
            return 'The second value must be greater than the first value.';
        }
        return (int)(($end_date - $start_date) / (60 * 60 * 24));
    }


    /*
    * Example Date 1701471892
    * return @string
    */
    public function timestampToDateFormat($date,$format = null){
        if ($format == null) { $format = "Y-m-d H:i:s"; }
        $convert_date = date($format,$date);
        return (string)$convert_date;
    }

    /*
    * Example TimeZone: Europe/Istanbul
    * Today: 2023-12-16
    * Yesterday: 2023-12-15
    * Result: 1702587600 (2023-12-15 00:00:00)
    */
    public function getYesterdayStartTime($timezone = null){
        if ($timezone != null) {
            $today = new DateTime('now',new DateTimeZone($timezone));
        }else{
            $today = new DateTime('now');
        }
        $yesterday = $today->modify('-1 day')->setTime(0,0,0)->getTimestamp();
        return $yesterday;
    }

    /*
    * Example TimeZone: Europe/Istanbul
    * Today: 2023-12-16
    * Yesterday: 2023-12-15
    * Result: 1702673999 (2023-12-15 23:59:59)
    */
    public function getYesterdayEndTime($timezone = null){
        if ($timezone != null) {
            $today = new DateTime('now',new DateTimeZone($timezone));
        }else{
            $today = new DateTime('now');
        }
        $yesterday = $today->modify('-1 day')->setTime(23,59,59)->getTimestamp();
        return $yesterday;
    }
}