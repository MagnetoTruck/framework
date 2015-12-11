<?php

	require 'sys/request.php';
	class Core{
		static private $controller;
		static private $action;

		static function init(){
			echo $_SERVER['REQUEST_URI'];
			Request::retrieve();

			$controller=Request::getCont();
			self::$controller=$controller;
			//Coder::code($controller);

			$action=Request::getAct();
			self::$action=$action;
			//Coder::code($action);

			$params=Request::getparams();
			//Coder::codear($params);

			self::router();
		}


		static function router(){

			//if the conroller exists
			//make an instance of controller
			Coder::code(self::$controller);
			Coder::code(self::$action);
			$contr_call=ucfirst(self::$controller!="")?self::$controller:'Home';
			$action_call=(self::$action!="")?self::$action:'Home';
			Coder::code($contr_call);
			$filename=$contr_call.'.php';
			$filecontroller = APP.'controllers'.DS.ucfirst($filename);
			if(is_readable($filecontroller))
			{
				$cont=new $contr_call();
				//echo $action_call;
				if(is_callable(array($cont,$action_call)))
				{
					call_user_func(array($cont,$action_call));
					//Coder::codear($cont);
				}
				else
				{
					echo 'No action';
				}
			}
			else
			{
				echo 'No controller';
			}

		}
	}