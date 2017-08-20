<?php




header('Content-Type:text/html;charset:utr-8');

$message = array(
			'你说啥？',
			'你吃了吗？',
			'你找我啥事啊？',
			'我在吃饭！',
			'你是在跟我说话吗？'
		);

		$key = array_rand($message);
		echo $message[$key];
		sleep(1);












?>