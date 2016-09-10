<?php
$mem=new Memcache();
$link=$mem->connect('localhost',11211);
if(!$link){
	exit('asd');
}

echo $mem->get('id');
echo "<br/>";
echo $mem->get('name');
echo "<br/>";
echo $mem->get('weight');
echo "<br/>";
var_dump($mem->get('isMarried'));
echo "<br/>";
var_dump($mem->get('info'));
echo "<br/>";
var_dump($mem->get('p'));
echo "<br/>";
var_dump($mem->get('img'));
echo "<br/>";
var_dump($mem->get('kong'));



?>