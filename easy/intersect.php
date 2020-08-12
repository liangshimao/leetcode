<?php
/**
 * Created by PhpStorm.
 * User: smliang
 * Date: 2020/8/12 0012
 * Time: 14:55
 * Desc: 两个数组的交集
 */

function intersect($nums1,$nums2) {
    $len1 = count($nums1);
    $len2 = count($nums2);
    if($len1 > $len2){
        $tmp = $nums1;
        $nums1 = $nums2;
        $nums2 = $tmp;
    }

    $maps = [];
    $res = [];
    //这步操作相当于 array_count_values()
    foreach ($nums1 as $value){
        if(isset($maps[$value])){
            $maps[$value]++;
        }else{
            $maps[$value] = 1;
        }
    }

    foreach ($nums2 as $value2){
        if(isset($maps[$value2]) && $maps[$value2] > 0){
            $res[] = $value2;
            $maps[$value2]--;
        }
    }

    return $res;
}

function intersect2($nums1,$nums2)
{
    sort($nums1);
    sort($nums2);
    $len1 = count($nums1);
    $len2 = count($nums2);
    $n1 = $n2 = 0;
    $res = [];

    while($n1 < $len1 && $n2 < $len2){
        if($nums1[$n1] == $nums2[$n2]){
            $res[] = $nums1[$n1];
            $n1++;
            $n2++;
        }elseif($nums1[$n1] > $nums2[$n2]){
            $n2++;
        }else{
            $n1++;
        }
    }

    return $res;
}

$nums1 = [2,3,5,3,1,1];
$nums2 = [2,1,1];

var_dump(func($nums1,$nums2));

