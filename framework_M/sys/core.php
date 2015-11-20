<?php

	require 'sys/request.php';
	class Core{
		static function init(){
			echo $_SERVER['REQUEST_URI'];
			Request::retrieve();
			$controller=Request::getCont();
			echo $controller."<br>";
			$action=Request::getAct();
			$params=Request::getparams();
		}
	}