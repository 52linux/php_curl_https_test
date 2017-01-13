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
echo "PHP VERSION " . PHP_VERSION ;
$url = 'https://www.baidu.com';
if(function_exists('curl_init')) {
        $result = niuc_curl($url);
        var_dump(strlen($result));
        echo 'curl https ok ...';
} else {
        echo 'please install php curl extension ...';
}
