 <?php
$tab=array();
if($dossier = opendir('./test'))
{
   while(($fichier = readdir($dossier)))
   {
       $d=explode('.',$fichier);
	if(!empty($d[0])&&!empty($d[1]))
	{
		$tab[$d[0]]=$d[1];
	}
   }
}
print_r($tab);
?>
