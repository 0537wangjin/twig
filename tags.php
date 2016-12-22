<?php
//error_reporting(0);
require_once dirname(__FILE__) . '/vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('./views');
$twig = new Twig_Environment($loader);

$page = 'doc';
$tag = $_GET['tag'];
if(empty($tag)){
    Header('Location: /');
}

echo $twig->render('tags/' . $tag . '.html', array('page' => $page, 'pagetitle' => $tag . ' '));