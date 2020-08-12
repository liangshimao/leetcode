<?php
/**
 * Created by PhpStorm.
 * User: smliang
 * Date: 2020/8/12 0012
 * Time: 15:18
 * Desc: 只出现一次的数字
 */

function singleNumber($nums)
{
    $ans = 0;
    foreach ($nums as $num)
    {
        $ans ^= $num;
    }
}
$a = 2;
$a = !$a;
var_dump($a);