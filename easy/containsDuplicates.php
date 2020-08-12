<?php
/**
 * Created by PhpStorm.
 * User: smliang
 * Date: 2020/8/12 0012
 * Time: 15:12
 * Desc: 判断是否存在重复元素
 */

function containsDuplicates($nums)
{
    $tmp = array_flip($nums);
    return count($nums) != count($tmp);
}

function containsDuplicates2($nums)
{
    $tmp = [];
    foreach ($nums as $num){
        if(isset($tmp[$num])){
            return true;
        }else{
            $tmp[$num] = 1;
        }
    }
    return false;
}

$nums = [1,2,2,3,4,5];
var_dump(containsDuplicates2($nums));