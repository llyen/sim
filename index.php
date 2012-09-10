<?php
# test file

require_once 'lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_String();
$twig = new Twig_Environment($loader);

echo $twig->render('Hello {{ string }}!', array('string' => 'world' ));