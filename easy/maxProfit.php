<?php
/**
 * Created by PhpStorm.
 * User: smliang
 * Date: 2020/8/12 0012
 * Time: 14:59
 * Desc: 股票买入最佳时机
 */

function maxProfit($nums)
{
    $len = count($nums);
    $sum = 0;
    for($i=0;$i<$len-1;$i++){
        if($nums[$i] < $nums[$i+1]){
            $sum += $nums[$i+1] - $nums[$i];
        }
    }
    return $sum;
}

$nums = [7,1,5,3,6,4];
echo maxProfit($nums);