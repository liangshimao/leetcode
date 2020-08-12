<?php
/**
 * Created by PhpStorm.
 * User: smliang
 * Date: 2020/8/12 0012
 * Time: 15:04
 * Desc: 旋转数组
 */

function rotate(&$nums,$k)
{
    for($i=0;$i<$k;$i++){
        $num = array_pop($nums);
        array_unshift($nums,$num);
    }

}

function rotate2(&$nums,$k)
{
    $nums = array_merge(array_splice($nums,-1*$k,$k),$nums);
}

$nums = [1,2,3,4,5,6,7];
rotate2($nums,3);
print_r($nums);