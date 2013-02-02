<?php 
 include 'lib/bones.php'; 

get('/',function($app) {
    $app->set('message', 'Welcome Back!');
    $app->render('home');
});

get('/signup',function($app) {
   $app->render('signup');
});


get ('/say/:message',function($app) {
  $app->set('message',$app->request('message'));
  $app->render('home');
});

post('/signup', function($app) {

   $app->set('message', 'Thanks for signing up <b>' . $app->form('name') . ' you dog!</b>');
   $app->render('home');
});

?>
