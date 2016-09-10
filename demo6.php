<?php
$connection=new MongoClient();
$db=$connection->php49;
$rs=$db->goods->insert(array('name'=>'redat','msg'=>'i will go to home'));
var_dump($rs);





?>