<?php
	function __autoload($class){
		require($class.'.class.php');
	};
	$op = new op($_GET['a'],$_GET['b'],$_GET['oper']);
	echo $op -> switc();
	//测试魔术方法
	$op -> i();
	$op -> iii;
	$op -> ii = '123';
?>