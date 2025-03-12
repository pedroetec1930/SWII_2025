<?php
	function op($a){
	  $s = 0;
	  foreach($a as $e){
	    $s += $e;
	  }
	  return $s;
	}
	
	echo op([10,20,35]);
?>