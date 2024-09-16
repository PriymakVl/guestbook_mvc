<?php

class Base_Controller 
{

    public function addMessage($result, $key)
    {
        $type = $result ? 'success' : 'error';
        Message::add($type, $key);
        return $this;
    }

    public function redirect($url)
    {
        header("Location: /" . $url);
        exit;
    }

}