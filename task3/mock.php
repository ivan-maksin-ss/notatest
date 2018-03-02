<?php 

$fh = fopen('sql.sql', 'w');
for($i=0; $i<9000; $i++) 
{
	$arr = [];
	for ($j = 1; $j<=1000; $j++) {
		$arr[] = $i.", ".($i+$j);
	}
	$sql = "insert into friend (client_id, friend_id) values (".implode('),(', $arr).");";
	
	fwrite($fh, $sql."\n");
}
fclose($fh);
