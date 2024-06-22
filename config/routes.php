<?php

use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;


Router::defaultRouteClass(DashedRoute::class);

Router::prefix('admin', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Dashboards', 'action' => 'index']);
    $routes->fallbacks();
});

Router::scope('/', function (RouteBuilder $routes) {
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true,
    ]));

    // $routes->applyMiddleware('csrf');

    $routes->prefix('login', function ($routes) {
        $routes->applyMiddleware('csrf');
    });

    // $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
    $routes->connect('/noticia/:slug', ['controller' => 'Artigos', 'action' => 'noticia'], ['pass' => ['slug']]);
    $routes->connect('/', ['controller' => 'Inicial', 'action' => 'index']);
    $routes->connect('/contatos', ['controller' => 'Pages', 'action' => 'display', 'contatos']);
    $routes->connect('/sobre', ['controller' => 'Pages', 'action' => 'display', 'sobre']);
    $routes->connect('/politicas', ['controller' => 'Pages', 'action' => 'display', 'politicas']);
    $routes->connect('/termos', ['controller' => 'Pages', 'action' => 'display', 'termos']);
    $routes->connect('/transparencia', ['controller' => 'Pages', 'action' => 'display', 'transparencia']);


    $routes->connect('/mais-visto', ['controller' => 'Artigos', 'action' => 'maisVisto']);
    $routes->connect('/noticias-recentes', ['controller' => 'Artigos', 'action' => 'noticiasRecentes']);
    $routes->connect('/brasileirao', ['controller' => 'Artigos', 'action' => 'brasileirao']);
    $routes->connect('/copa-brasil', ['controller' => 'Artigos', 'action' => 'copaBrasil']);
    $routes->connect('/libertadores', ['controller' => 'Artigos', 'action' => 'libertadores']);
    $routes->connect('/sul-americana', ['controller' => 'Artigos', 'action' => 'sulAmericana']);

    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    $routes->scope('teste', function (RouteBuilder $builder) {
    $builder->connect('/', ['controller' => 'Pages', 'action' => 'home']);
});

    $routes->fallbacks(DashedRoute::class);
});
