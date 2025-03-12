<?php
	function op(){
	  $a = array();
	  for($i = 0; $i = 10; $i++){
	    array_push($a, rand(0,100));
	  }
	  return $a;
	}
	
	echo var_dump(op());
	
?>