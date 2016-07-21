<?php

require('config.php');

require (ROOT_DIR . 'app/base/url.php');

require (ROOT_DIR . 'app/base/controller.php');

require (ROOT_DIR . 'app/base/model.php');

require (ROOT_DIR . 'app/base/view.php');

session_start();

$url = new Url;

?>