<?php




function quickSort (array Sunsorted): if( (Sunsorted) <= 1)

array {

return $unsorted;

}

$pivot = $unsorted[0];

$lower arr= [];

Shigher_arr = Shigher arr []);

Sequal_arr= [];

foreach( $unsorted as $value) {

if($value < $pivot) { $lower_arr = $value;

}

elseif($value $pivot){ Sequal_arr $value;

} else{

$higher_arr[] = $value;



}

$lower_sorted = ($lower_arr);

$higher_sorted quickSort ($higher_arr);

return

($lower_sorted,

$equal_arr,

$higher_sorted);



}


var_dump(Quicksort (14, 9, 8))