<?php
if (($handle = fopen('datapribadi.csv', 'r')) !== false) {
    while (($row = fgetcsv($handle)) !== false) {
        $csvData[] = $row;
    }
    fclose($handle);
}

$fp = fopen('datapribadi.csv', 'r');
$headers = fgetcsv($fp); // Get column headers

$data = array();
while (($row = fgetcsv($fp)) !== false) {
    $data[] = array_combine($headers, $row);
}
fclose($fp);

$json = json_encode($data, JSON_PRETTY_PRINT);

header('Content-Type: application/json');

echo $json;
?>