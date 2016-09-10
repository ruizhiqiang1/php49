<?php
$uid=7;
mysql_connect('localhost','root','root');
mysql_select_db('db_test');
mysql_query('set names utf8');
$sql="select max(id) from temp";
$rst=mysql_query($sql);
$data=mysql_fetch_assoc($rst);
$id=$data['max(id)']+1;
$table='u4_'.($id%3);
$sql="insert into $table values($id,$uid)";
mysql_query($sql);
$sql="update temp set id=$id";
mysql_query($sql);


/*$rst=mysql_query($sql);
$data=mysql_fetch_assoc($rst);
print_r($data);
*/
?>