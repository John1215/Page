<?php
session_start(300);
if(){$_SESSION['smscode']=$smscode;}
 function sendcode($phone){
   $random=mt_rand(123897,999999);
    $ch = curl_init();
  $url='http://apis.baidu.com/kingtto_media/106sms/106sms?mobile='.$phone.'&content='.'【Spartan】您的验证码是'.$random.'，有效时间5分钟，请不要告诉他人'.'&tag=2';
    $header = array(
        'apikey: f39c0332e60e92bcc13417f6ceb44dea', //
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);
    // var_dump($res);
    return $random;
  }
?>
