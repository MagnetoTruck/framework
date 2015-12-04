<?php

	class Request{
		static private $query=array();

		static function retrieve(){
			$array_query=explode('/', $_SERVER['REQUEST_URI']);

<<<<<<< HEAD
			array_shift($array_query);
=======
>>>>>>> 21862d4a859bdce45d44331b07486e9bed5cf5aa
			if($array_query[0]==APP_W){
				array_shift($array_query);
			}

			if (end($array_query)=="") {
				array_pop($array_query);
			}
			self::$query=$array_query;
			//var_dump($array_query);
		}

		static function getCont(){
			return array_shift(self::$query);
		}
		static function getAct(){
			return array_shift(self::$query);
		}
		static function getParams(){
<<<<<<< HEAD
			return array_shift(self::$query);
			/*if(count(self::$query)>0)
=======
			if(count(self::$query)>0)
>>>>>>> 21862d4a859bdce45d44331b07486e9bed5cf5aa
			{
				if((count(self::$query)%2)==0)
				{
					return array_shift(self::$query);
				}
<<<<<<< HEAD
			}*/
=======
			}
>>>>>>> 21862d4a859bdce45d44331b07486e9bed5cf5aa
		}
	}
