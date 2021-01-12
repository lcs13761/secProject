<?php
ob_start();

require __DIR__ . "/vendor/autoload.php";


use CoffeeCode\Router\Router;
$route = new Router(url(), ":");
/**
 * Route home 
 */
$route->namespace("Source\App");
$route->get("/" , "Web:home");
/**
 * Route elements
 */
$route->get("/elements", "Web:elements");
/**
 * Route generic
 */
$route->get("/generic", "Web:generic");
/**
 * TERMS
 */
$route->get("/termos" ,"Web:terms");
/**
 * erro router
 */
$route->namespace("Source\App")->group("/ops");
$route->get("/{errcode}", "Web:error");

/**
 * 
 * Router
 */
$route->dispatch();

/**
 * test erro
 */
if($route->error())
{
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();