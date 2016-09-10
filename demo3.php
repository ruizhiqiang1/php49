<?php
$uid =4;
$id=$uid % 3;
$table = 'u4_'.$id;
$sql="select * from $table where uid=".$uid;
mysql_connect('localhost','root','root');
mysql_select_db('db_test');
mysql_query('set names utf8');
$rst=mysql_query($sql);
$data=mysql_fetch_assoc($rst);
print_r($data);

?>