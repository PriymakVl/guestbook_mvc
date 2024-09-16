<?php

function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    exit;
}

function debug($array = false, $exit = true)
{
    echo '<br><span style="color: red;">start script</span><br>';
    if(is_array($array) || is_object($array)) {
    echo '<pre>'.print_r($array, true).'</pre>';
    }
    else var_dump($array);
    echo '<br><span style="color: red;">end script</span><br>';
    if ($exit) exit(); 
}