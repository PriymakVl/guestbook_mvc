<?php

class Validator 
{
    private $data;

    public function __construct($data) 
    {
        $this->data = $data;
    }


    public function empty() 
    {
        foreach($this->data as $key => $value) {
            if(trim($value) == ''){
                throw new Exception('empty_' . $key);
            }
        }
        return $this;
    }    

    public function minStr($keys, $minLength) 
    {
        foreach ($keys as $key) {
            if(strLen($this->data[$key]) < $minLength) {
                throw new Exception('min_length_' . $key);
            }
        }
        return $this;
    }

    public static function make($data)
    {
        return new Validator($data);
    }
}

