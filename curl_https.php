<?php


function niuc_curl($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
}
//phpinfo();die();
$url = 'https://www.baidu.com';
                if(function_exists('curl_init')) {
                        $result = niuc_curl($url);
                        var_dump(strlen($result));
                        echo 'niuc_curl ok...';
                } else {
                        $result = file_get_contents($url);
                        echo 'file_get_contents ok...';
                }


?>
