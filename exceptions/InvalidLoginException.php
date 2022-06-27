<?php

namespace app\exceptions;

class InvalidLoginException extends \Exception
{
    public function InvalidLoginException()
    {
        echo "<script>alert('Пароли не совпадают')</script>";
        echo "<meta http-equiv='refresh' content='0; url=http://localhost:8080/'>";
        echo '<pre>';
        var_dump('паоли не совпадают');
        echo '</pre>';
    }
}