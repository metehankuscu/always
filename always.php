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
}