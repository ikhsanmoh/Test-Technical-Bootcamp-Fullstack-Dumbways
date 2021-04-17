<?php
function sort_string($params){
    if (empty($params)) {
        return '';
    }
    
    $ordered_str_arr = array();
    $str_arr = explode(' ', $params);
    $valid_number_arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    
    foreach ($str_arr as $v) {
        $split_str = str_split($v);
        foreach ($valid_number_arr as $num_val) {
            foreach ($split_str as $str_val) {
                if ($num_val == $str_val) {
                    $ordered_str_arr[$num_val] = $v;
                }
            }
        }
    }
    ksort($ordered_str_arr);
    return implode(' ', $ordered_str_arr);
}

$str_tescase = 'Boo3tcamp Fullstack1 Java2script';

print_r(sort_string($str_tescase));