<?php

namespace app\exceptions;

class EmptyValueException extends \Exception
{
    public function EmptyValue()
    {
        echo "<script>alert('Пустое поле')</script>";
        echo "<meta http-equiv='refresh' content='0; url=http://localhost:8080/'>";
    }
}