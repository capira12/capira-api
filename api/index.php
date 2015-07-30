<?php
/*
 * If you prefer to use a PHP session,
 * you must configure and start a native PHP session with session_start()
 * before you instantiate the Slim application.
 * ( http://docs.slimframework.com/sessions/native/ )
 */
include_once 'common.php';

require 'vendor/autoload.php';
$app = new \Slim\Slim();

$view = $app->view();
$view->setTemplatesDirectory('./templates/');
$app->notFound(function () use ($app) {
	$app->render('404.html');
});

include_once 'routes/user-api.php';
include_once 'routes/channel-api.php';
include_once 'routes/unit-api.php';

$app->run();

?>