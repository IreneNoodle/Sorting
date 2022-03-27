//Quick sort
//@Author:Ziyan Wang
//@Date:20/Mar/2022
<?php

function quickSort($array,$l,$h){
	if($l<0||$h<0){
    	echo "array error";
        return;
        }
    $index_h=$h;
    $index_l=$l;
    
   $pivot=(int)(($h+$l)/2);
    
    if($h-$l<=1)return $array;
    $pivot_value=$array[$pivot];
    echo "<br>pivot value=".$pivot_value;
    
    
    while($index_l<$index_h){

        while($array[$index_l]<$pivot_value)$index_l++;
        while($array[$index_h]>$pivot_value)$index_h--;
        
        
        if($array[$index_l]==$array[$index_h]&&$index_h-1==$index_l)break;
        //swap
        $temp=$array[$index_l];
        $array[$index_l]=$array[$index_h];
        $array[$index_h]=$temp;
        
    }
    //recursion
    $array=quickSort($array,$l,$index_l);
    $array=quickSort($array,$index_l+1,$h);
    return $array;
}

//test array $arr=array(3,7,8,5,2,1,9,5,4,11,20,19);

$arr=array(6,1,7,9,3,8,2,5,4,0);
$arr=quickSort($arr,0,count($arr)-1);
echo "<br>";
foreach($arr as $value) echo $value.",";

?>
