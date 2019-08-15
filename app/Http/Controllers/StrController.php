<?php

namespace App\Http\Controllers;

class StrController extends Controller
{
    public function mb_strlen()
    {
    	$str1 = 'I love you!'; // 11 characters
    	$str2 = '我是谷祖楠'; // 5 汉字

    	$str1Length = mb_strlen($str1);
    	$str2Length = mb_strlen($str2);

    	$str1LengthOld = strlen($str1);
    	$str2LengthOld = strlen($str2);

    	echo '通过mb_strlen获取的字符串长度, 与strlen的区别是，一个汉字还是一个占位'."<br>";
    	echo 'I love you!'. '长度是'. $str1Length."<br>";
    	echo '我是谷祖楠'. '长度是'. $str2Length."<br><br>";

    	// 通过strlen获取的字符串长度
    	echo 'I love you!'. '长度是'. $str1LengthOld."<br>";
    	echo '我是谷祖楠'. '长度是'. $str2LengthOld;

    }

}