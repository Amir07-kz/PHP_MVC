<?php

namespace app\Services;

use app\core\Model;
use app\exceptions\InvalidLoginException;
use app\exceptions\EmptyValueException;
use app\mappers\UserMapper;
use function PHPUnit\Framework\throwException;

class LoginServices
{
    public function haveAccount(array $body): bool
    {
        try{
            $InvalidLoginException = new InvalidLoginException('Invalid mail or password');
            $user = $this->isUserExists($body['email']);
            if ($user && $this->isPasswordEquals($body['password'], $user->getPassword())) {
                setcookie('PHP_AUTH_USER_ID', $user->getId());
                return true;
            } else{
                throw new $InvalidLoginException("Invalid mail or password");
            }
        } catch (InvalidLoginException $e) {
            echo $e;
            return false;
        }
    }
    public function isUserExists(String $email): ?Model
    {
        try {
            return (new UserMapper())->findByEmail($email);
        } catch (\PDOException $e) {
            return null;
        }
    }

    public function isPasswordEquals(String $enteredPassword, String $correctPassword): bool
    {
        try {
            if (strcmp($enteredPassword, $correctPassword) === 0) {
                return true;
            } else {
                throw new EmptyValueException("Empty passwrod value");
            }
        } catch (EmptyValueException $e) {
            echo $e;
            return false;
        }
    }
}