<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnowPro</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header>
        <div class="container">
            <nav>
                <a href="index.php" class="logo">SnowPro</a>
                <ul class="nav-links">
                    <li><a href="catalog.php">Каталог</a></li>
                    <li><a href="about.php">О нас</a></li>
                    <li><a href="order.php">Заказать</a></li>
                    <li><a href="contacts.php">Контакты</a></li>
                </ul>
            </nav>
        </div>
        <?php
        if (isset($_GET['order_success'])) {
            echo '<div class="order-notification success" style="position: fixed; top: 20px; right: 20px; padding: 15px; background: #4CAF50; color: white; border-radius: 5px; z-index: 10000;">
        Ваш заказ успешно оформлен! Спасибо за покупку!
        <button onclick="this.parentElement.remove()" style="margin-left: 10px; background: none; border: none; color: white; cursor: pointer;">×</button>
    </div>';
        }

        if (isset($_GET['order_error'])) {
            echo '<div class="order-notification error" style="position: fixed; top: 20px; right: 20px; padding: 15px; background: #f44336; color: white; border-radius: 5px; z-index: 10000;">
        ' . htmlspecialchars($_GET['order_error']) . '
        <button onclick="this.parentElement.remove()" style="margin-left: 10px; background: none; border: none; color: white; cursor: pointer;">×</button>
    </div>';
        }
        ?>
    </header>