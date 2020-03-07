<?php
     $mass = array();
     for($i = 0; $i < 100; $i++){
     	$mass[] = rand(rand(-100,0),rand(-100, 100));
     echo($mass[$i]."<br>");
}

     function FindMaxValue($array){
     $max = $array[0];
     for($i = 0; $i < count($array); $i++)
     	if($max < $array [$i])
     		$max = $array [$i];
     	 return $max;
     }
  echo ("Max value =".FindMaxValue($mass));

?>