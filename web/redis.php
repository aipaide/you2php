<?php
    //连接本地的 Redis 服务
   $redis = new Redis();
   $redis->connect('144.202.24.184', 6379);
   echo "Connection to server sucessfully";
         //查看服务是否运行
   echo "Server is running: " . $redis->ping();

	$redis->set('hello', 'world');
	echo $redis->get('hello');
?>
