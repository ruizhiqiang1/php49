<?php
header("Content-Type:text/html;charset=utf-8");
include_once 'sphinxapi.php';
$s=new SphinxClient();
$s->SetServer('localhost',9312);
$s->setMatchMode(SPH_MATCH_ANY);
$word='公司';
$source='movie';
$data=$s->Query($word);
//print_r($data);

$index=array_keys($data['matches']);
$index_str=implode(',',$index);
$sql="select * from movie where id in ($index_str)";

mysql_connect('localhost','root','root');
mysql_select_db('test');
mysql_query('set names utf8');
$res=mysql_query($sql);
$style=array(
		'before_match'=>'<font color=red>',
		'after_match'=>'</font>'
	);
echo "<table border=1 width=600>";
while($row=mysql_fetch_assoc($res)){
	$tmp=$s->BuildExcerpts($row,$source,$word,$style);
	//var_dump($tmp);
	echo "<tr>";
	echo "<td>".$tmp[0]."</td>";
	echo "<td>".$tmp[1]."</td>";
	echo "<td>".$tmp[2]."</td>";
	echo "</tr>";
}
echo "</table>";
?>