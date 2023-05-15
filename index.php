<?php /** User Andreas ... */



$app = new Application();


$app->router->get('/', function(){
    return "Hello there";
});



$app->run();