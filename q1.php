<?php

$array=array('3','6','8','7','0','1','4','2','9','5');

echo "Old Array";
echo "<br />";
print_r($array);
echo "<br />";

for($i = 0; $i < count($array); $i ++) {
    for($j = 0; $j< count($array)-1; $j ++){

        if($array[$j] > $array[$j+1]) {
            $temp = $array[$j+1];
            $array[$j+1]=$array[$j];
            $array[$j]=$temp;
        }       
    }
}
echo "<br />";
echo "Sorted Array";
echo "<br />";
print_r($array);
echo "<br />";

$numarr=array('3','6','8','7','0','1','4','2','9','5');
echo "<br />";
echo "Before sorting: ";
echo "<br />";
print_r($numarr);
echo "<br />";
for($j = 0; $j < count($numarr); $j ++) {
    for($i = 0; $i < count($numarr)-1; $i ++){
        if($numarr[$i] > $numarr[$i+1]) {
            $temp = $numarr[$i+1];
            $numarr[$i+1]=$numarr[$i];
            $numarr[$i]=$temp;
        }       
    }
}
echo "<br />";
echo "After sorting: ";
echo "<br />";
print_r($numarr);



?>