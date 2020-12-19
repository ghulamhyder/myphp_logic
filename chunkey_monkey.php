<?php
 
 function chunkey_monkey($arr,$size){

 	

 	$count=0;
 	$newArr=[];
 	//echo sizeof($arr);exit;
 	while($count < sizeof($arr)){

 		$newArr[]=array_slice($arr, $count,$size);
 		
 		$count +=$size;
 		
 	} 
 	return $newArr;

 }

 echo "<pre>";
 print_r(chunkey_monkey([1,2,3,4],2) );
 echo "</pre>";exit;

?>