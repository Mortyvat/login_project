<?php
// Include Config
require('config.php');

require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');
require('classes/Calendr.php');
require 'classes/Download.php';

require('controllers/home.php');
require('controllers/blog.php');
require('controllers/users.php');
require('controllers/shares.php');
require('controllers/download.php');
require('controllers/calendar.php');
require('controllers/brambory.php');
require('controllers/rozvrh.php');

require('models/home.php');
require('models/blog.php');
require('models/user.php');
require('models/share.php');
require('models/download.php');
require('models/calendar.php');
require('models/brambor.php');
require('models/rozvrh.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}
