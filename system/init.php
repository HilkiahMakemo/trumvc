<?php

$APP = TruMVC\Core\Application::instance();


$APP->set('blueprint', function(){
    $bp = require _ROOT_ . 'blueprint.php';
    return json_decode( json_encode($bp) );

})
->set('routing', function($app){
   $routes = $app->get('blueprint')->routes;
   return new TruMVC\Http\Routing($routes.DS);
})
->set('request', function(){
    return TruMVC\Http\Request::fromGlobals();

})
->set('response', function(){
    return new TruMVC\Http\Response();

})
->set('config', function($app){
    $configs = $app->get('blueprint')->configs;
    return new TruMVC\Core\Configurator($configs);

})
->set('hilkiah', function(){
    return 'Makemo';

})
->set('hilkiah', function(){
    return 'Makemo';
});

dump($APP->get('blueprint'));

return $APP;