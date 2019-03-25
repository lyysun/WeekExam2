<?php

$arr=[1,2,3,4];
// var_dump(a($arr));
function a($arr){
  
  $len=count($arr);
  $res=[];
  for ($i=0; $i < $len; $i++) { 
     for ($j=0; $j < $len; $j++) { 
     	 for ($k=0; $k < $len; $k++) { 
     	 	    if ($arr[$i]!=$arr[$j] && $arr[$i]!=$arr[$k] && $arr[$j]!=$arr[$k]) {
     	 	    	$res[]=$arr[$i].$arr[$j].$arr[$k];
     	 	    }
     	 }
     }
  }
  return $res;

}

$dir="D:\phpstudy\PHPTutorial\WWW\zhuanx2.5\cs\dayz2";
// my_dir($dir);
function my_dir($dir){
	$dh=opendir($dir);
	  while (($file = readdir($dh)) !== false) {
           
           if ($file=='.'||$file=="..") {
           	 continue;
           }
           $path=$dir."/".$file;//路径+文件夹名
           if (!is_file($path)) {
           	 my_dir($path);
           }else{
               echo $path."\r\n";
           }
        }

        closedir($dh);
    }


$aPath="/a/b/c/d/test.php";
$bPath="/a/b/d/c/test.php";

$list=findCommonPath($aPath,$bPath);
var_dump($list);

function findCommonPath($aPath,$bPath){
	$res=[];
	$aPath=explode("/", $aPath);
	$bPath=explode("/", $bPath);

	$len=count($aPath)>count($bPath)?count($bPath):count($aPath);

	for ($i=0; $i < $len; $i++) { 
		
		if ($aPath[$i]==$bPath[$i]) {
			$res[]=$aPath[$i];
		}else{
			break;
		}
	}
	$str=implode("/", $res);
	return $str;

}


?>