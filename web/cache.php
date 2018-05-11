<?php

class CacheItem {

	public $cacheid;
	public $timestamp;
	public $text;

	public function __construct($cacheid, $timestamp, $text){
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

	public function __toString(){
		return $this.text;
	}
}



function setcache($cacheid, $text){
	$item = new CacheItem($cacheid, time(), $text);
	$_SERVER[$cacheid] = $item;
	echo 'global:'.$_SERVER[$cacheid]->text;
}


function getcache($cacheid){
	echo "getcache:".$cacheid;
	$item = $_SERVER[$cacheid];
	if(!empty($item)) {
		echo $item->isvalid();
		echo $item->text;
	}
	if(!empty($item) && $item->isvalid()){
		return $item;	
	}
	return '';
}

?>
