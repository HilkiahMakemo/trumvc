<?php

$App = TruMVC\Core\Application::instance()


->set('blueprint', function(){
    $bp = require _ROOT_ . 'blueprint.php';
    return json_decode( json_encode($bp) );
})


->set('config', function($app){
    $configs = $app->get('blueprint')->configs;
    return new TruMVC\Core\Configurator($configs);
})


->set('routing', function($app){
   $routes = $app->get('blueprint')->routes;
   return new TruMVC\Http\Routing( $routes );
})


->set('request', function(){
    return TruMVC\Http\Request::fromGlobals();
})


->set('database', function($app){
    $db = $app->get('config')->database;
    return new TruMVC\Data\Database( $db );
})

->set('viewer', function($app){
    $views = $app->get('config')->template;
    return new TruMVC\View\Template( $views );
})


->set('response', function(){
    return new TruMVC\Http\Response();
});

// print view('index', ['hilkdiah']);

dump($App->get('routing')->dispatch());


return require SYSTEM . 'boot' .DS. 'autorun.php';