<?php
    function curl($url)
    {
    	$ch = curl_init();
    	curl_setopt($ch, CURLOPT_URL, $url);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    	
    	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    	$res = curl_exec($ch);
    	return $res;
    	curl_close($ch);
    }  
    $url = "https://www.csdn.net";
    $data = curl($url);
    $data = str_replace(array("\r\n", "\r", "\n"), "", $data);
    //print_r($data);die;
    $urlist = '#<li class="clearfix" data-type="blog".*?>.*?<h2>.*?<a.*?>(.*?)</a>.*?</h2>.*?<div class="summary oneline">(.*?)</div>.*?<dd class="time">(.*?)</dd>.*?</li>#';
    preg_match_all($urlist,$data,$arr);
    print_r($arr);
                                       
?>