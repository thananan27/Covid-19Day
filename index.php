<?php
  $site = 'https://ddc.moph.go.th/covid19-dashboard/index.php?dashboard=province';
$homepage = file_get_contents($site);
$filename = 'reviews.txt';
$handle = fopen($filename,"w");
fwrite($handle,$homepage);
echo "Success";
fclose($handle);
?>
