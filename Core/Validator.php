<?php

class Validator
{
    public static function string( $value, $min = 1, $max = INF )
    {
        $value = trim(htmlspecialchars($value));
        
        if(Validator::number($value)) return false;

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function number( $value )
    {
        return filter_var($value, FILTER_VALIDATE_INT);
    }

}