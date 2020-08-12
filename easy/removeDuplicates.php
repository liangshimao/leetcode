<?php
/**
 * Created by PhpStorm.
 * User: smliang
 * Date: 2020/8/12 0012
 * Time: 14:30
 * Desc: 删除排序数组中的重复项
 */


/**
 * @param array $nums
 * @return  integer
 */
function removeDuplicates(&$nums)
{
    $len = count($nums);
    $i = 0;
    while($i < $len){
        if($nums[$i] === $nums[$i+1]){
            array_splice($nums,$i,1);
            $len--;
        }else{
            $i++;
        }
    }
    return $len;
}

function removeDuplicates2(&$nums)
{
    $len = count($nums);
    for($i=0;$i<$len;$i++){
        if($nums[$i] === $nums[$i+1]){
            unset($nums[$i]);
        }
    }
    $nums = array_values($nums);
    return count($nums);
}

function removeDuplicates3(&$nums)
{
    $nums = array_keys(array_flip($nums));
    return count($nums);
}

$nums = [0,0,0,0,0];
removeDuplicates3($nums);
print_r($nums);
