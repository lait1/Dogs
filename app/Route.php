<?php
/**
 * Created by PhpStorm.
 * User: Dexter
 * Date: 19.07.2019
 * Time: 0:00
 */

namespace app;


class Route
{
    public static function start()
    {
        $routes = [
            'mops' => Mops::class,
            'sibainu' => Siba::class,
            'dachshund' => Dachshund::class,
            'labragor' => Labrador::class,
            'rubber_dog' => Rubber::class
        ];
        $path = explode('/', $_POST['message']);


        if(!empty($path[0])) $nameDog=$path[0];
        if(isset($path[1])) $command=$path[1];

        if(isset($routes[$nameDog])){
            $className = $routes[$nameDog];
            $controller = new $className();

            method_exists($controller, $command)? $controller->$command(): Route::Error();


        }
    }
    public static function Error()
    {
         echo json_encode('Oh, Error');
    }
}