<?php

	spl_autoload_register(null,false);
	spl_autoload_register('AutoLoad::SysLoader');

	class AutoLoad{
		static function SysLoader($class)
		{
			$filename = strtolower($class).'.php';
			$file=	ROOT.'sys'.DS.$filename;
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

