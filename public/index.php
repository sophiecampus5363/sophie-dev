<?php
    require __DIR__ . "/../vendor/autoload.php";
    use \Core\Request;
    use \Core\Router\Router;
    use \Core\Router\Route;
    $request = Request::createFromGlobals();
    $router = new Router($request);
    $router

        ->addRoute(new Route("testsFoo", "/tests/foo", [], \App\Controller\TestsController::class, "foo"))
        ->addRoute(new Route("testsBar", "/tests/bar/:param", ["param" => "[\w]+"], \App\Controller\TestsController::class, "bar"));
    try {
        $route = $router->getRouteByRequest();
        $route->call();
    } catch (\Exception $e) {
        echo $e->getMessage();
    }