<?php
	function op($x){
	  if($x == 0 || $x == 1){
	    return 1;
	  }
	  else{
	    $r = 1;
	    for($x; $x > 0; $x--){
	      $r *= $x;
	    }
	    return $r;
	  }   
	}
	
	echo op(5);
	
?>