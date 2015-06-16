<?php
  session_start();
  require 'vendor/autoload.php';
  require 'app/Lang.php';

  $app = new \Slim\Slim();

  $app->config(array(
    'debug' => true,
    'templates.path' => 'templates'
  ));

  $app->get('/(:lang)', function ($lang = 'pt') use ($app) {
    $_SESSION['lang'] = $lang;
    $app->render('home.php', array(
      'lang' => $lang,
      'posts' => array()
    ));
  });

  $app->run();