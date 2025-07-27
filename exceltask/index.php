<?php
$filename = 'table.csv';
if (!file_exists($filename)) {
    die("Файл $filename не найден");
}

$data = [];
if (($handle = fopen($filename, "r")) !== false) {
    while (($row = fgetcsv($handle, 1000, ",")) !== false) {
        $data[] = $row;
    }
    
    fclose($handle);
} else {
    die("Не удалось открыть файл: $filename");
}
echo "<pre>";
print_r($data);
echo "</pre>";
?>
