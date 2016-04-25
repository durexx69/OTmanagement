<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('change_date')) {

    function change_date($date) {
        $get_date = explode("-", $date);
        $month = array("01" => "ม.ค.", "02" => "ก.พ", "03" => "มี.ค.", "04" => "เม.ย.", "05" => "พ.ค.", "06" => "มิ.ย.", "07" => "ก.ค.", "08" => "ส.ค.", "09" => "ก.ย.", "10" => "ต.ค.", "11" => "พ.ย.", "12" => "ธ.ค.");
        $get_month = $get_date["1"];
        $year = $get_date["0"] + 543;
        return $month[$get_month] . " " . $year;
    }

}
