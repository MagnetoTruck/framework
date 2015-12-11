<?php

	spl_autoload_register(null,false);
	spl_autoload_register('AutoLoad::SysLoader');
<<<<<<< HEAD
	spl_autoload_register('AutoLoad::ContLoader');
	spl_autoload_register('AutoLoad::ModLoader');
	spl_autoload_register('AutoLoad::ViewLoaders');
=======
>>>>>>> 21862d4a859bdce45d44331b07486e9bed5cf5aa

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
<<<<<<< HEAD

		static function ContLoader($class)
		{
			$filename = strtolower($class).'.php';
			$file=APP.'controllers'.DS.$filename;
			if(!file_exists($file))
			{
				return false;
			}
			require $file;
		}

		static function ModLoader($class)
		{
			$filename = strtolower($class).'.php';
			$file=APP.'models'.DS.$filename;
			if(!file_exists($file))
			{
				return false;
			}
			require $file;
		}

		static function ViewLoaders($class)
		{
			$filename = strtolower($class).'.php';
			$file=APP.'views'.DS.$filename;
			if(!file_exists($file))
			{
				return false;
			}
			require $file;

		}
=======
>>>>>>> 21862d4a859bdce45d44331b07486e9bed5cf5aa
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

