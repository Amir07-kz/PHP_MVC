<?php

namespace app\exceptions;

class IncorrectSignUpException extends \Exception
{
    /**
     * @param string $message
     */

    public function __construct(string $message)
    {
        parent::__construct($message, 1000, null);
    }

    public function __toString(): string
    {
        return "Измените свою почту или пароль" . $this->getMessage();
    }

    public function alertException()
    {
        echo "<script>alert('Неверные данные для регистрации. измените почту или пароль')</script>";
        echo "<meta http-equiv='refresh' content='0; url=http://localhost:8080/'>";
    }
}