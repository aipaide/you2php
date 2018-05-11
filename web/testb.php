<?php
	include('./cache.php');

	CacheItem::$cache['ok'] = 'test';

	echo CacheItem::$cache['ok'];
?>
