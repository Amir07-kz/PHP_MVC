<?php

namespace app\unittest;

use app\core\Model;
use app\models\User;
use PHPUnit\Framework\TestCase;
use app\core\ConfigParser;

class UserTest extends TestCase
{
    private $user;
    protected function setUp(): void
    {
        $this->user= new User();
        $this->user->setPassword(123);
    }
    protected function tearDown(): void
    {
    }
    public function setPassword($password){
        $this->assertEquals(123, $this->user->getPassword());
    }
    public function userProviser(){
        return [
            [1],
            [2],
            [3],
        ];
    }
}

