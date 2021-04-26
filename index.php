<?php
$url = $_SERVER['SERVER_NAME'];
$toJump = "";
if(strpos($url,"kylinesport.com")>=0)
{
    $toJump = "hhttp://efs-openweb.kiringames.cn/downloadPage/9BTGWH";
}
elseif(strpos($url,"www.kylinesport.com")>=0)
{
    $toJump = "http://efs-openweb.kiringames.cn/downloadPage/9BTGWH";
}
elseif(strpos($url,"m.kylinesport.com")>=0)
{
    $toJump = "http://efs-openweb.kiringames.cn/downloadPage/9BTGWH";
}
if($toJump!="")
{
    header('location:'.$toJump);
    exit;
    return true;
}
?>