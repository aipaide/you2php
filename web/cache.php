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
	$item = CacheItem($cacheid, time(), $text);
	$cache[$cacheid] = $item;
}


function getcache($cacheid){
	$item = $cache[$cacheid];
	if($item->isvalid()){
		return $item;	
	}
	return '';
}

?>
