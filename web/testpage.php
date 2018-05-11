<?php
include('./cache.php');

$cacheid = 'ok';
$item = getcache($cacheid);

echo '--'.$item.'--';

if( $item === ''){
	echo 'first time';
	setcache($cacheid, 'first time');
}else {
	echo 'get cache:';
	echo getcache($cacheid);
}


?>
