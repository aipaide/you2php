<?php
include('./cache.php');

$cacheid = 'ok';
$item = getcache($cacheid);

echo '--'.strval($item).'--';

if( $item === ''){
	echo 'first time';
	setcache($cacheid, 'first time');
	echo 'cached';
}else {
	echo 'get cache:';
	echo getcache($cacheid);
}


?>
