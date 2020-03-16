<?php

class FunctionsSession
{
    function __construct()
    {
        session_start();
    }
    function IsSetCheck($key)
    {
        return isset($_SESSION[$key]);
    }
// cохранение значения поля в сессию
    function save($key,$text)
    {
        $text=$this->clearData($text);
        if(!empty($text))

          $_SESSION[$key] =$text ;
    }
    function delete($key, $name)
    {
        if (isset($_SESSION[$key . $name]))
        {
            unset($_SESSION[$key . $name]);
        }
    }
    function update($key,$name)
    {
        return ;
    }
    function destroy()
    {
        session_destroy();
    }
    function select($key)
    {
        if (isset($_SESSION[ $key])) return $_SESSION[ $key];
    }
    function clearData($value)
    {
        $value=trim(strip_tags($value));

        return $value;
    }


}