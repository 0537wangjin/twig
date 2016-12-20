<?php
require_once dirname(__FILE__) . '/vendor/autoload.php';

$page = 'doc';

$loader = new Twig_Loader_Filesystem('./views');
$twig = new Twig_Environment($loader, array(
    /* 'cache' => './compilation_cache', */
));
 
echo $twig->render('doc.html', array('page' => $page));