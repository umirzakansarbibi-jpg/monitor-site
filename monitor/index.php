
<?php
// JSON файлынан мониторларды оқу
$jsonFile = "products.json";

$products = [];

if (file_exists($jsonFile)) {
    $products = json_decode(file_get_contents($jsonFile), true) ?? [];
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONITOR - Современные мониторы</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="logo">MONI<span>TOR</span></div>

    <nav>
        <a href="#home">Главная</a>
        <a href="#about">О мониторе</a>
        <a href="#products">Мониторы</a>
        <a href="#contact">Контакты</a>
    </nav>
</header>

<!-- Главная секция -->
<section class="hero" id="home">

    <div class="hero-text">
        <p class="subtitle">НОВОЕ ПОКОЛЕНИЕ ТЕХНОЛОГИЙ</p>

        <h1>
            МИР ВЫСОКОГО<br>
            <span>КАЧЕСТВА</span>
        </h1>

        <p class="description">
            Современные мониторы с невероятной четкостью,
            яркими цветами и плавным изображением.
        </p>

        <a href="#products" class="btn">Смотреть мониторы →</a>
    </div>

    <div class="monitor-photo">
        <img src="monitor-bg.png" alt="Современный монитор">
    </div>

</section>

<!-- О мониторе -->
<section class="about" id="about">

    <h2>О <span>МОНИТОРЕ</span></h2>

    <p>
        Монитор — это устройство вывода информации,
        которое отображает текст, изображения и видео.
        Он используется для работы, учебы, дизайна и игр.
        Современные мониторы обеспечивают высокую четкость
        изображения и комфорт для глаз.
    </p>

</section>

<!-- Характеристики -->
<section class="features">

    <h2>ОСНОВНЫЕ <span>ХАРАКТЕРИСТИКИ</span></h2>

    <div class="cards">

        <div class="card">
            <h3>4K Ultra HD</h3>
            <p>Высокое разрешение и четкое изображение.</p>
        </div>

        <div class="card">
            <h3>144 Hz</h3>
            <p>Плавное отображение движения.</p>
        </div>

        <div class="card">
            <h3>27 дюймов</h3>
            <p>Большой экран для удобной работы.</p>
        </div>

        <div class="card">
            <h3>IPS Display</h3>
            <p>Яркие цвета и широкие углы обзора.</p>
        </div>

    </div>

</section>

<!-- Мониторы из JSON -->
<section class="products" id="products">

    <h2>НАШИ <span>МОНИТОРЫ</span></h2>

    <div class="cards">

        <?php foreach ($products as $product): ?>

            <div class="card product-card">

                <div class="product-icon">▣</div>

                <h3>
                    <?= htmlspecialchars($product["name"]) ?>
                </h3>

                <p>Экран: <?= htmlspecialchars($product["size"]) ?></p>

                <p>Разрешение:
                    <?= htmlspecialchars($product["resolution"]) ?>
                </p>

                <p>Частота:
                    <?= htmlspecialchars($product["frequency"]) ?>
                </p>

                <p>Тип:
                    <?= htmlspecialchars($product["type"]) ?>
                </p>

                <div class="price">
                    <?= htmlspecialchars($product["price"]) ?>
                </div>

            </div>

        <?php endforeach; ?>

    </div>

</section>

<!-- Контакты -->
<section class="contact" id="contact">

    <h2>СВЯЗАТЬСЯ <span>С НАМИ</span></h2>

    <p>Спасибо за посещение нашего сайта!</p>

    <div class="contact-info">
        <p>Email: monitor@gmail.com</p>
        <p>Телефон: +7 700 000 00 00</p>
    </div>

</section>

<footer>
    <p>© 2026 MONITOR. Все права защищены.</p>
</footer>

</body>
</html>

