<?php
require_once dirname(__FILE__) . '/vendor/autoload.php';

$page = 'install';
$pagetitle = '安装TWIG';
$loader = new Twig_Loader_Filesystem('./views');
$twig = new Twig_Environment($loader, array(
    /* 'cache' => './compilation_cache', */
));
 
echo $twig->render('install.html', array('page' => $page, 'pagetitle' => $pagetitle));