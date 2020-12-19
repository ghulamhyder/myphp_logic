<?php 

	
	function drop_it($arr,$func){

		while(!$func($arr[0])){
			array_shift($arr);
		}
		return $arr;
	}

	$arr=[1,2,3,4];
	$func=function($n){

		return $n >=3;
	};

	print_r(drop_it($arr,$func));

?>




