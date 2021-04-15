<?php
$url = $_SERVER['SERVER_NAME'];
$toJump = "";
if(strpos($url,"kylinesport.com")>=0)
{
    $toJump = "http://efs-openweb.kiringames.cn/downloadPage?code=12JYNO&channelsType=1";
}
elseif(strpos($url,"www.kylinesport.com")>=0)
{
    $toJump = "http://efs-openweb.kiringames.cn/downloadPage?code=12JYNO&channelsType=1";
}
elseif(strpos($url,"m.kylinesport.com")>=0)
{
    $toJump = "http://efs-openweb.kiringames.cn/downloadPage?code=12JYNO&channelsType=1";
}
if($toJump!="")
{
    header('location:'.$toJump);
    exit;
    return true;
}
?>