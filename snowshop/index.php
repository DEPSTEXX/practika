<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
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
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">SnowPro</a>
                <ul class="nav-links">
                    <li><a href="#catalog">Каталог</a></li>
                    <li><a href="#about">О нас</a></li>
                    <li><a href="#order">Заказать</a></li>
                    <li><a href="#contacts">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Лучшие сноуборды для вашего стиля</h1>
            <p>Откройте для себя новые горизонты с нашими профессиональными досками</p>
            <a href="#catalog" class="btn">Узнать больше</a>
        </div>
    </section>

    <section id="catalog" class="catalog">
        <div class="container">
            <h2>Наши сноуборды</h2>
            <div class="products">
                <div class="product-card">
                    <div class="product-image">
                        <img src="image/2.jpg" alt="Сноуборд All-Mountain">
                    </div>
                    <div class="product-info">
                        <h3>All-Mountain Pro</h3>
                        <p>Универсальный сноуборд для всех типов склонов</p>
                        <span class="price">35,999 ₽</span>
                        <a href="#order" class="btn">Заказать</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="image/1.jpg" alt="Сноуборд Freestyle">
                    </div>
                    <div class="product-info">
                        <h3>Freestyle Air</h3>
                        <p>Идеальный выбор для трюков и паркового катания</p>
                        <span class="price">32,499 ₽</span>
                        <a href="#order" class="btn">Заказать</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="image/3.jpg" alt="Сноуборд Powder">
                    </div>
                    <div class="product-info">
                        <h3>Powder Explorer</h3>
                        <p>Специально разработан для глубокого снега</p>
                        <span class="price">39,999 ₽</span>
                        <a href="#order" class="btn">Заказать</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <h2>О нас</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>SnowPro - это магазин сноубордов, созданный друзьями энтузиастов зимних видов спорта для таких же
                        увлеченных людей, как и мы.</p>
                    <p>Мы работаем с 2024 года и за это время помогли сотням клиентов найти идеальное снаряжение для их
                        стиля катания.</p>
                    <p>Наша команда состоит из профессиональных райдеров, которые лично тестируют все товары перед тем,
                        как предложить их вам.</p>
                    <p>Мы сотрудничаем только с проверенными производителями и гарантируем качество всей нашей
                        продукции.</p>
                    <a href="#contacts" class="btn">Связаться с нами</a>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1483728642387-6c3bdd6c93e5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                        alt="Наша команда">
                </div>
            </div>
        </div>
    </section>

    <section id="order" class="order">
        <div class="container">
            <h2>Оформить заказ</h2>
            <div class="order-form">
                <form method="POST" action="orders.php">
                    <div class="form-group">
                        <label for="name">Ваше имя:</label>
                        <input type="text" id="name" name="name" required minlength="2">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон:</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="product">Товар:</label>
                        <select id="product" name="product" required>
                            <option value="">Выберите товар</option>
                            <option value="All-Mountain Pro">All-Mountain Pro - 35,999 ₽</option>
                            <option value="Freestyle Air">Freestyle Air - 32,499 ₽</option>
                            <option value="Powder Explorer">Powder Explorer - 39,999 ₽</option>
                        </select>
                    </div>
                    <button type="submit" class="btn">Отправить заказ</button>
                </form>
            </div>
        </div>
    </section>

    <section id="contacts" class="contacts">
        <div class="container">
            <h2>Наши контакты</h2>

            <div class="contact-info">
                <div class="contact-card">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Адрес</h3>
                    <p>г. Владимир, ул. Гагарина, 4</p>
                </div>

                <div class="contact-card">
                    <i class="fas fa-phone"></i>
                    <h3>Телефон</h3>
                    <p>+7 (777) 777-77-77</p>
                    <p>+7 (333) 333-33-33</p>
                </div>

                <div class="contact-card">
                    <i class="fas fa-envelope"></i>
                    <h3>Email</h3>
                    <p>snowpro@mail.ru</p>
                    <p>snowpro@gmail.com</p>
                </div>
            </div>

            <div class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d142215.2072854862!2d40.270856848642985!3d56.15515750133132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414c796abd574431%3A0xa5192737744ddb02!2z0JLQu9Cw0LTQuNC80LjRgCwg0JLQu9Cw0LTQuNC80LjRgNGB0LrQsNGPINC-0LHQuy4sINCg0L7RgdGB0LjRjw!5e0!3m2!1sru!2suk!4v1748249593899!5m2!1sru!2suk"
                    width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <ul class="footer-links">
                <li><a href="#">Главная</a></li>
                <li><a href="#catalog">Каталог</a></li>
                <li><a href="#about">О нас</a></li>
                <li><a href="#order">Заказать</a></li>
                <li><a href="#contacts">Контакты</a></li>
            </ul>

            <div class="social-links">
                <a href="#"><i class="fab fa-vk"></i></a>
                <a href="#"><i class="fab fa-telegram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>

            <p class="copyright">© 2023 SnowPro. Все права защищены.</p>
        </div>
    </footer>

</body>

</html>