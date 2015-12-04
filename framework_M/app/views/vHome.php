<?php

	class vHome extends View
	{
		function __construct()
		{
			parent::__construct();
			//echo 'Vista creada';
			
			$this->template= Template::load('home');

		}//END CONSTRUCT
	}