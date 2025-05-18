<?php
require_once __DIR__ . "/../src/helpers.php";
header('Content-Type: application/javascript');

$pdo = getPDO();
$sql = "SELECT cars.id, model, series_name as 'series', price as 'prices', image as 'photo' FROM cars, car_series WHERE car_series.id = cars.series_id";
$stmt = $pdo->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($products);

// Преобразуем PHP-массив в JSON и оборачиваем его в JS-экспорт
echo "const products = " . json_encode($products, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . ";\n";
echo "export default products;";
