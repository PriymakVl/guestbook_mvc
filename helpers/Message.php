<?php

class Message 
{
    public static function add($type, $key)
    {
        $_SESSION['mess']['type'] = $type;
        $_SESSION['mess']['key'] = $key;
    }

    public static function  display() 
    {
        if(empty($_SESSION['mess'])) return '';

        $type = $_SESSION['mess']['type'];
        $message = self::getMessage($type);
        unset($_SESSION['mess']);
        if($type == 'error') {
            return '<div class="alert alert-danger mt-3 ">' . $message . '</div>';
        }
        else{
            return '<div class="alert alert-success mt-3" >' . $message . '</div>';
        }
    }

    private static function getMessage($type)
    {
        $messages = include 'messages.php';
        return $messages[$type][$_SESSION['mess']['key']];

    }
}