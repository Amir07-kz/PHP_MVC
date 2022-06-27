<?php

namespace app\exceptions;

class MailExistException extends \Exception
{
    public function MailExistException()
    {
        echo "<script>alert('Такая почта существует, авторизуйтесь или используйте другую')</script>";
        echo "<meta http-equiv='refresh' content='0; url=http://localhost:8080/'>";
        echo "<pre>";
    }
}