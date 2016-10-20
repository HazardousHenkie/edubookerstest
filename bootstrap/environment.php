<?php
/*
|--------------------------------------------------------------------------
| Detect The Application Environment
|--------------------------------------------------------------------------
*/

$env = $app->detectEnvironment(function(){
    $environmentPath = __DIR__.'/../.env';
    $setEnv = trim(file_get_contents($environmentPath));
    if (file_exists($environmentPath))
    {
        $setEnv = trim(file_get_contents($environmentPath));
        putenv('APP_ENV='.$setEnv);
        $dotenv = new Dotenv\Dotenv(__DIR__ . '/../', '.' . getenv('APP_ENV') . '.env'); // Laravel 5.2
        $dotenv->overload(); //this is important
    }
});