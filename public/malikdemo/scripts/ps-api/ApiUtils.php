<?php

class ApiUtils
{
    public static function array_values_recursive($array) {
        $flat = array();

        foreach($array as $value) {
            if (is_array($value)) {
                $flat = array_merge($flat, self::array_values_recursive($value));
            }
            else {
                $flat[] = $value;
            }
        }
        return $flat;
    }
}