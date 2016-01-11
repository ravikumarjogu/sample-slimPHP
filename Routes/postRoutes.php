<?php

 //The following handles the POST requests sent to the /greet route

$app->post('/greet', function() use ($app){
    //The following statement checks if 'name' has been POSTed. If it has, it assigns the value to the $name variable. If it hasn't been set, it assigns a blank string.
    $name = (null !== $app->request->post('name'))?$app->request->post('name'):'';

    //The following statement checks if 'greeting' has been POSTed. If it has, it assigns the value to the $greeting variable. If it hasn't been set, it assigns a blank string.
    $greeting = (null !== $app->request->post('greeting'))?$app->request->post('greeting'):'';

    // the following statement invokes and displays the 'greet.php' View. It also passes the $name & $greeting variables in an array so that the view can use them.
    $app->render('greet.php', array(
        'name' => $name,
        'greeting' => $greeting
    ));
});