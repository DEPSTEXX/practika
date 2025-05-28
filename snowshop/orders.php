<?php
// Включение отображения ошибок для отладки
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = 'localhost';
$dbname = 'snowshop';
$username = 'root'; 
$password = ''; 

try {
    // Подключение к базе данных с помощью PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $product = $_POST['product'] ?? '';
    
    // Валидация данных
    if (empty($name) || empty($email) || empty($product)) {
        throw new Exception("Все обязательные поля должны быть заполнены!");
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("Некорректный email адрес!");
    }
    
    // Подготовленный запрос для предотвращения SQL-инъекций
    $stmt = $conn->prepare("INSERT INTO orders (customer_name, email, product) VALUES (:name, :email, :product)");
    

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':product', $product);
    

    if ($stmt->execute()) {
        header("Location: index.php?order_success=1");
        exit();
    } else {
        throw new Exception("Ошибка при сохранении заказа");
    }
    
} catch (PDOException $e) {
    error_log("Database error: " . $e->getMessage());
    header("Location: index.php?order_error=1");
    exit();
} catch (Exception $e) {
    header("Location: index.php?order_error=" . urlencode($e->getMessage()));
    exit();
}
?>
