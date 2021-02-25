<?php
try
{
	$pdo=new PDO('mysql:host=localhost;dbname=spip32','root','root');
	echo 'connection ok';
}
catch(PDOException $e)
{
	echo 'error';
}
 ?>
