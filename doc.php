<?php
require_once dirname(__FILE__) . '/vendor/autoload.php';

$page = 'doc';
$pagetitle = '入门指南';

$loader = new Twig_Loader_Filesystem('./views');
$twig = new Twig_Environment($loader, array(
    /* 'cache' => './compilation_cache', */
));
 
echo $twig->render('doc.html', array('page' => $page, 'pagetitle' => $pagetitle));