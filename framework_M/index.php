<?php

	ini_set('display_errors','on');

	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)).DS);

	define('APP', ROOT.'app'.DS);

	define('APP_W', basename(dirname($_SERVER['SCRIPT_NAME'])));

	require 'sys/core.php';
	Core::init();