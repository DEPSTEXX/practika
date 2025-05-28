<?php include 'header.php'; ?>
<section class="order" id="order">
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
<?php include 'footer.php'; ?>