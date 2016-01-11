<?php

$app->get('/', function(){
    echo 'This is a simple starting page';
});

//The following handles any request to the /hello route

$app->get('/hello', function() use ($app){
    // the following statement invokes and displays the hello.php View
    $app->render('hello.php');
});


//The following handles any dynamic requests to the /hello/NAME routes (like /hello/world)

$app->get('/hello/:sender/:receiver', function($sender,$receiver) use ($app){
    // the following statement invokes and displays the hello.php View. It also passes the $name variable in an array so that the view can use it.
    $app->render('hello.php', array('sender' => $sender),array('receiver' => $receiver));
});