<?php

namespace app\Services;

use app\core\Application;
use app\core\Response;
use app\exceptions\FileSystemException;
use app\exceptions\InvalidLoginException;
use app\exceptions\IncorrectSignUpException;
use app\mappers\UserMapper;
use app\models\User;

class RegistrationServices
{
    public function canRegister(string $password, string $password2, string $email): bool
    {
        try {
            $canRegister = $this->isPasswordsEquals($password, $password2) && $this->isMailNotExist($email);
            if ($canRegister) {
                return true;
            } else {
                throw new IncorrectSignUpException('mail exist');
            }
        } catch (IncorrectSignUpException $e) {
            echo $e->getCode();
            $e->alertException();
            return false;
        }
    }

    public function register(string $username, string $email, string $password)
    {
        $user = new User($username, $email, $password);
        $mapper = new UserMapper();
        $mapper->insert($user);
    }

    public function isPasswordsEquals(mixed $password, mixed $password2): bool
    {
        return $password === $password2;
    }

    public function isPasswordEmpty(mixed $password, mixed $password2, string $email): bool
    {
        return empty($password) && empty($password2) && empty($email);
    }

    public function isMailNotExist(string $email): bool
    {
        $userMapper = new UserMapper();
        return !((bool)$userMapper->findByEmail($email));
    }

    public function writeBody(array $body)
    {
        try {
            $file = fopen("../body.txt", "w+");
            if ($file === false) {
                throw new FileSystemException("File not exist");
            }
            foreach ($body as $key => $value) {
                fwrite($file, $key . ":" . $value . PHP_EOL);
            }
            fclose($file);
        } catch (FileSystemException $e) {
            Application::$app->response->setStatusCode(Response::HTTP_SERVER_ERROR);
        }

    }
}