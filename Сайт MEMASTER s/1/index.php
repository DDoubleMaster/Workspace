<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.COMFY</title>
    <link rel="stylesheet" href="./assets/styles/global.css">
    <link rel="stylesheet" href="./assets/styles/pages/index.css">
</head>
<body>
    <!-- Добавление Шапки -->
    <?php include("header.php")?>

    <!-- Блок с краткой информацией -->
    <div class="intro">
        <h1>.COMFY</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, animi!</p>
    </div>
    <!-- /Блок с краткой информацией -->

    <!-- Заголовок секции -->
    <section class="title_section_one">
        <h2>Категории товаров</h2>
    </section>
    <!-- /Заголовок секции -->

    <!-- Блок секция для карточек товаров -->
    <div class="cards">
        <div class="card">
            <img src="./assets/images/suv1.jpg" alt="">
            <a href="./one_product.php">Народные</a>
            <div class="card_description">
                <span>8$</span>
                <button class="button">В Корзину</button>
            </div>
        </div>
        <div class="card">
            <img src="./assets/images/suv2.jpg" alt="">
            <a href="./one_product.php">Народные</a>
            <div class="card_description">
                <span>8$</span>
                <button class="button">В Корзину</button>
            </div>
        </div>
        <div class="card">
            <img src="./assets/images/suv3.jpg" alt="">
            <a href="./one_product.php">Народные</a>
            <div class="card_description">
                <span>8$</span>
                <button class="button">В Корзину</button>
            </div>
        </div>
        <div class="card">
            <img src="./assets/images/suv4.jpg" alt="">
            <a href="./one_product.php">Народные</a>
            <div class="card_description">
                <span>8$</span>
                <button class="button">В Корзину</button>
            </div>
        </div>
    </div>
    <!-- /Блок секция для карточек товаров -->

    <!-- Подвал сайта -->
    <footer>
        <!-- Блок для меню навигации -->
        <ul class="footer_left">
            <li class="link">Facebook</li>
            <li class="link">Instagram</li>
            <li class="link">Pinterest</li>
            <li class="link">Telegram</li>
        </ul>
        <!-- Блок для меню навигации -->

        <div class="footer_right">
            <a href="tel:" class="link">+7 (777) 777 77 77</a>
        </div>
    </footer>
    <!-- /Подвал сайта -->
</body>
</html>