<?php
require_once dirname(__FILE__) . '/vendor/autoload.php';

$page = 'index';
$pagetitle = '';

/* $loader = new Twig_Loader_String();
$twig = new Twig_Environment($loader);
 
echo $twig->render('Hello {{ name }}!', array('name' => 'Fabien')); */
$loader = new Twig_Loader_Filesystem('./views');
$twig = new Twig_Environment($loader, array(
    /* 'cache' => './compilation_cache', */
));
 
echo $twig->render('index.html', array('page' => $page, 'pagetitle' => ''));