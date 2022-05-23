<?php
namespace App\Utils;
use Illuminate\Support\Str as IlluminateStr;

class Str {
    public static function ucfirst(string $str) {
        return IlluminateStr::ucfirst($str);
    }    
}