<?php

namespace Cacamba_System;

use Illuminate\Database\Eloquent\Model;

class Cacamba extends Model
{
    
	static private $instance;

	static public function getInstance(){
		if(!isset(self::$instance)){
			self::$instance = new Cacamba(); 
		}

		return self::$instance;
	}

}

?>
