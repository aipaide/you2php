<?php

class CacheItem {

	private $cacheid;
	private $timestamp;
	private $text;

	function __construct($cacheid, $timestamp, $text){
		$this->cacheid = $cacheid;
		$this->timestamp = $timestamp;
		$this->text = $text;
	}

	public function isvalid(){
		$offset = time() - $item->timestamp - 3600 ;		//exipre after 1 hour
		if($offset < 0) {
			return true;
		}
		return false;
	}	
}


// Cache

static $cache;

if(!isset($cache)) {
	$cache = array();
}


function setcache($cacheid, $text){
	$item = new CacheItem($cacheid, time(), $text);
	$cache[$cacheid] = $item;
	echo 'setcache:'.$cache[$cacheid];
}


function getcache($cacheid){
	$item = $cache[$cacheid];
	echo 'getcahe:'.$item;
	if($item != NULL && $item->isvalid()){
		echo $item->isvalid();
		echo $item->text;
		return $item;	
	}
	return '';
}

?>
