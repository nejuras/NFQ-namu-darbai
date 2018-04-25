<?php

namespace App\Controller;

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

        //if (true === $this->isLoaded) {
        // throw new \RuntimeException('Do not add the "extra" loader twice');
        //}
        $routes = new RouteCollection();

        // prepare a new route
        $path = '/{slug}/{admin}';
        $defaults = array(
            '_controller' => 'App\Controller\WishaGiftController::giftList'
        );
        $requirements = array(
            'slug' => 'giftlistc',
            'admin' => 'h'
        );
        $route = new Route($path, $defaults, $requirements);

        // add the new route to the route collection
        $routeName = 'giftlistc';
        $routes->add($routeName, $route);
        //var_dump($routes);
        // $this->isLoaded = true;
vi README.txt
        return $routes;
