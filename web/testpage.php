<?php
include('./cache.php');

$cacheid = 'ok';

if( getcache($cacheid) == ''){
	echo 'first time';
	setcache($cacheid, 'first time');
}else {
	echo 'get cache:';
	echo getcache($cacheid);
}


?>
