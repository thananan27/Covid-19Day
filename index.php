<?PHP
$data = https://covid19.th-stat.com/json/covid19v2/getTodayCases.json;
header('Content-Type: application/json');
echo json_encode($data);
?>
