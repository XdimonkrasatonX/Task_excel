<?php
$filename = 'table.csv'; // Путь к вашему CSV-файлу

// Проверка существования файла
if (!file_exists($filename)) {
    die("Файл $filename не найден");
}

$data = []; // Массив для хранения данных

// Открываем файл в режиме чтения
if (($handle = fopen($filename, "r")) !== false) {
    
    // Читаем строки CSV
    while (($row = fgetcsv($handle, 1000, ",")) !== false) {
        $data[] = $row;
    }
    
    fclose($handle); // Закрываем файл
} else {
    die("Не удалось открыть файл: $filename");
}

// Вывод данных (пример)
echo "<pre>";
print_r($data);
echo "</pre>";
?>