<?php

	spl_autoload_register(null,false);
	spl_autoload_register('AutoLoad::SysLoader');
	spl_autoload_register('AutoLoad::ContLoader');
	spl_autoload_register('AutoLoad::ModLoader');
	spl_autoload_register('AutoLoad::ViewLoaders');

	class AutoLoad{
		static function SysLoader($class)
		{
			$filename = strtolower($class).'.php';
			$file=	ROOT.'sys'.DS.strtolower($filename);
			if(!file_exists($file))
			{
				return false;
			}
			require $file;

		}

		static function ContLoader($class)
		{
			$filename = ($class).'.php';
			$file=APP.'controllers'.DS.($filename);
			if(!file_exists($file))
			{
				return false;
			}
			require $file;
		}

		static function ModLoader($class)
		{
			$filename = ($class).'.php';
			$file=APP.'models'.DS.($filename);
			if(!file_exists($file))
			{
				return false;
			}
			require $file;
		}

		static function ViewLoaders($class)
		{
			$filename = ($class).'.php';
			$file=APP.'views'.DS.($filename);
			if(!file_exists($file))
			{
				return false;
			}
			require $file;

		}
	}//END CLAS AUTOLOAD

	/**
	 * 
	 * Coder
	 * makes var_dump easy
	 * @author Guillem
	 * 
	 * */

	class Coder{
		static function code($var)
		{
			echo '<pre>'.$var.'</pre>';
		}

		static function codear($var)
		{
			echo '<pre>'.var_dump($var).'</pre>';
		}
	}//END CLASS CODDER

