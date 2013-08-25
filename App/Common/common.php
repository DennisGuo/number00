<?php
/**
 * 打印数组
 * @param unknown $arr
 */
function p($arr){
	dump($arr,1,'<pre>',0);
}
/**
 * 替换HTML中的标签
 * @param type $pre
 */
function toHtml($pre)
{
    $reg = array(
        '<'=>'&lt;',
        '>'=>'&gt;'
    );
    return strtr($pre,$reg);
}