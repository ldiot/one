<?php 
require_once('SuperManClass.php');
require_once('BadManClass.php');
require_once('StageClass.php');

//实例话对战双方
header("Content-type: text/html; charset=utf-8");
$superman = new SuperMan('小明', 1000, 60, 30);
$badman = new BadMan('哥布林', 1200, 70, 10);
$stage = new Stage();

$stage->showTime($superman, $badman);