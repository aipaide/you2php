<?php
include('./cache.php');

$cacheid = 'ok';
$item = getcache($cacheid);

if( $item === ''){
	echo 'first time';
	setcache($cacheid, 'first time');
	echo 'cached';
}else {
	echo 'get cache:';
	echo getcache($cacheid);
}


?>
