<?php

/**
 *Template name: Главная страница
 */

global $redux_demo;

get_header()
?>
<section id="first__screen">
    <div class="container d-flex justify-content-end">
        <div class="first__screen">
            <h1 class="header">
                <? echo $redux_demo['first-h1']?>
            </h1>
            <p class="body">
                <? echo $redux_demo['first-description']?>
            </p>
            <button class="button"><a href="#fourty__screen">
                    <? echo $redux_demo['first-button']?></a></button>
        </div>
    </div>
</section>
<section id="second__screen">
    <div class="container">
        <h3 class="header__text mt-0">
            <? echo $redux_demo['second-h3']?>
        </h3>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                $i = 0;
                while ($i < count($redux_demo['second-slides'])) {
                    if ($i == 0) {
                        echo '
                            <li data-target="#carouselExampleIndicators" data-slide-to=" '.$i.' " class="active"></li>
                        ';
                    } else {
                        echo '
                            <li data-target="#carouselExampleIndicators" data-slide-to=" '.$i.' "></li>
                        ';
                    }
                    $i++;
                }
                ?>
            </ol>
            <div class="carousel-inner">
                <?php
                $i = 0;
                while ($i < count($redux_demo['second-slides'])) {
                    if ($i == 0) {
                        echo '
                                <div class="carousel-item active">
                                    <img src=" ' . $redux_demo['second-slides'][$i]['image'] . ' " class="d-block w-100" alt="image ' . $i . ' ">
                                </div>
                            ';
                    } else {
                        echo '
                                <div class="carousel-item">
                                    <img src=" ' . $redux_demo['second-slides'][$i]['image'] . ' " class="d-block w-100" alt="image ' . $i . ' ">
                                </div>
                            ';
                    }
                    $i++;
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<section id="thirty__screen">
    <div class="container">
        <h3 class="header__text">
            Как мы работаем
        </h3>
        <div class="cards d-flex">
            <div class="card mr-4">
                <div class="card-body">
                    <h5 class="card-title">Выезд замерщика</h5>
                    <p class="card-text">Оставьте заявку на сайте или позвоните по телефонам. Наш замерщик приедет к вам в течение 1 дня или по договоренности.</p>
                </div>
            </div>
            <div class="card mr-4">
                <div class="card-body">
                    <h5 class="card-title">Создание дизайн проекта </h5>
                    <p class="card-text">По результатам измерений создается 3d проект, в который можно вносить столько изменений, сколько нужно. Наши специалисты помогут в подборе материалов и фурнитуры.</p>
                </div>
            </div>
            <div class="card mr-4">
                <div class="card-body">
                    <h5 class="card-title">Производство</h5>
                    <p class="card-text">После подписания договора и внесения предоплаты в размере 50% от общей стоимости, проект обрабатывается конструктором и поступает на производство.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Доставка и монтаж</h5>
                    <p class="card-text">Доставка и установка мебели под ключ в четко установленные сроки по договору. Врезка техники и мойки.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="fourty__screen">
    <div class="container">
        <h3 class="header__text">
            Заказать звонок
        </h3>
        <div class="bottom__block d-flex">
            <div class="form col-xl-6 mr-4">
                <form method="post" action="form.php">
                    <div class="form-group mb-4">
                        <input placeholder="Ваше имя" type="text" class="form-control">
                    </div>
                    <div class="form-group mb-4">
                        <input placeholder="Номер телефона" type="text" class="form-control" id="exampleInputText1">
                    </div>
                    <button type="submit" class="button d-flex justify-content-end">Заказать звонок</button>
                </form>
            </div>
            <div class="white__block col-xl-6">
                <ul class="dost">
                    <li class="item">15 лет опыта </li>
                    <li class="item">Точные сроки изготовления </li>
                    <li class="item">Собственное производство </li>
                    <li class="item">400 довольных клиентов </li>
                    <li class="item mb-0">600 изготовленной мебели </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php
get_footer()
?>