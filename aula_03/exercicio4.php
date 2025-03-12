<?php
	function op($x){
	  for($i = 0;$i <=10; $i++){
	    echo "$i * $x = " . $i * $x . "<br>";
	  }
	}
	
	echo op(10);
?>