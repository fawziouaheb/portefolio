<?php

// routes web

use SaboCore\Routing\Response\BladeResponse;
use SaboCore\Routing\Response\TwigResponse;
use SaboCore\Routing\Routes\Route;
use SaboCore\Routing\Routes\RouteManager;

RouteManager::registerRoute(
Route::get(
        link: "/",
        toExecute: fn():TwigResponse => new TwigResponse("/template/index.html.twig"),
        routeName: "Home"
    )
);
