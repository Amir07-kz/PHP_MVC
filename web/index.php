<?php

declare(strict_types=1);

namespace app;

use app\controllers\LoginController;
use app\controllers\NotFoundController;
use app\controllers\RegistrationController;
use app\controllers\TodoesController;
use app\core\Application;
use app\core\ConfigParser;

require_once __DIR__."/../vendor/autoload.php";
(new ConfigParser(__DIR__ . '/../config.json'))->load();

if (getenv('APP_ENV') === 'dev') {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    ini_set('log_errors', '1');
    ini_set('error_log', __DIR__ . '/../runtime/logFile.txt');
}

$app = new Application();

$app->router->setGetPath('/', 'welcome');
$app->router->setGetPath('/registration', [new RegistrationController, 'registrationPage']);
$app->router->setPostPath('/registrationController', [new RegistrationController, 'registration']);
$app->router->setGetPath('/404', [new NotFoundController, 'notFound']);
$app->router->setGetPath('/login', [new LoginController, 'loginPage']);
$app->router->setPostPath('/loginController', [new LoginController, 'login']);
$app->router->setGetPath('/todoesVue', [new TodoesController, 'todoesVue']);

$app->run();

