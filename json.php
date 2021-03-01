<?php 
if(isset($_GET["x"])):
$tab=$_GET["x"];
endif;
$resultat= json_decode($tab);
echo $resultat->name;
?>
<script>
var a={name:'david',age:31,adresse:"itaosy"};
window.location="json.php?x="+JSON.stringify(a);
</script>
