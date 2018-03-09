/*
 *MakeArrayConsecutive2
 *https://codefights.com/arcade/intro/level-2/bq2XnSr5kbHqpHGJC
 *
 */
<?php

function makeArrayConsecutive2($statues) {
sort($statues);

	
$need_statues = 0;
    
    for($i = 0; $i < count($statues)-1 ; $i++) {
		
        if($statues[$i+1] > $statues[$i]+1){
			
            $need_statues+=$statues[$i+1]-$statues[$i]-1;
        }
    }
    return $need_statues;
}
