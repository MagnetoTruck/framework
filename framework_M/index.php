<?php
<<<<<<< HEAD
	

=======
>>>>>>> 21862d4a859bdce45d44331b07486e9bed5cf5aa

	ini_set('display_errors','on');
	error_reporting(E_ALL);

	include 'config.php';

	require 'sys/helper.php';

<<<<<<< HEAD
	Session::iniciar_session();
	$id=Session::get('id');
	//Coder::code($id);

	$conf = Registry::getInstance();

	$conf->welcome="hola";//__set

	$msg=$conf->welcome;//__get
	unset($conf->welcome);
	//Coder::code($msg);
	//Coder::codear($conf);

	Core::init();

	

=======
	
	Core::init();
>>>>>>> 21862d4a859bdce45d44331b07486e9bed5cf5aa
