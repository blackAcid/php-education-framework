<?php
<<<<<<< HEAD
class Registry
{
    private static $mass=array();
    public static function setValue($value, $key = '')
    {
        Registry::$mass[$key]=$value;
    }
    public static function getValue($key)
    {
=======

class Registry {
    private static $mass = array();

    public static function setValue($key = '', $value) {
        Registry::$mass[$key] = $value;
    }

    public static function getValue($key) {
>>>>>>> origin
        return Registry::$mass[$key];
    }
}
