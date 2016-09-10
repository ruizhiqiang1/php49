<?php
header("Content-Type:text/html;charset=utf-8");
$mem=new Memcache();
$mem->connect('localhost',11211);
$list=$mem->get('userList');
if(empty($list)){
	echo 'sad';
	mysql_connect('localhost','root','root');
	mysql_select_db('boke');
	mysql_query('set names utf8');
	$sql='select * from admin';
	$rst=mysql_query($sql);
	$list=array();
	while($row=mysql_fetch_assoc($rst)){
		$list[]=$rst;
	}
	$mem->set('userList',$list);
}
var_dump($list);

?>