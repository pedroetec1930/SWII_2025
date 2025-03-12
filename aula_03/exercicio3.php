<?php
	function op($x){
	  if($x % 2 == 0){
	    return "O número é par";
	  }
	  else{
	    return "O número é impar";
	  }
	}
	
	echo op(10);
?>