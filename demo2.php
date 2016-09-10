<?php
ini_set('session.save_handler','memcache');
ini_set('session.save_path','tcp://localhost:11211');
session_start();
$_SESSION['deptid']=101;
$_SESSION['deptname']='开发部';
echo session_id();


?>