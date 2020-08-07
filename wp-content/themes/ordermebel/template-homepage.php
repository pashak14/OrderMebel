<?php

/**
 *Template name: Главная страница
 */

global $redux_demo;

get_header()
?>
<section id="first__screen">
    <div class="bg">
        <img class="bg__first_screen" src="wp-content/themes/ordermebel/assets/img/first_disp.jpg" alt="">
    </div>
    <div class="container h-100 d-flex justify-content-md-start justify-content-center align-items-center position-relative">
        <div class="first__screen">
            <h1 class="header">
                <?= $redux_demo['first-h1']?>
            </h1>
            <p class="body">
                <?= $redux_demo['first-description']?>
            </p>
            <button class="button"><a href="#fourty__screen">
                <?= $redux_demo['first-button'] ?></a></button>
        </div>
    </div>
</section>
<section id="second__screen">
    <div class="container">
        <h3 class="header__text">
            <? echo $redux_demo['second-h3']?>
        </h3>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                $i = 0;
                while ($i < count($redux_demo['second-slides'])) {
                    if ($i == 0) {
                        echo '
                            <li data-target="#carouselExampleIndicators" data-slide-to=" ' . $i . ' " class="active"></li>
                        ';
                    } else {
                        echo '
                            <li data-target="#carouselExampleIndicators" data-slide-to=" ' . $i . ' "></li>
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
                <span class="sr-only">Назад</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Вперёд</span>
            </a>
        </div>
    </div>
</section>
<section id="thirty__screen">
    <div class="container">
        <h3 class="header__text">
            <?= $redux_demo['thirty-h3'] ?>
        </h3>
        <div class="cards d-flex">
            <div class="card mr-0 mr-md-4 mb-4 my-col-xl-3 my-col-lg-6 my-col-md-12">
                <div class="card-body">
                    <h5 class="card-title"><?= $redux_demo['thirty-card-1'][0] ?></h5>
                    <p class="card-text"><?= $redux_demo['thirty-card-1'][1] ?></p>
                </div>
            </div>
            <div class="card mr-0 mr-xl-4 mb-4 my-col-xl-3 my-col-lg-6 my-col-md-12">
                <div class="card-body">
                    <h5 class="card-title"><?= $redux_demo['thirty-card-2'][0] ?></h5>
                    <p class="card-text"><?= $redux_demo['thirty-card-2'][1] ?> </p>
                </div>
            </div>
            <div class="card mr-0 mr-md-4 mb-4 my-col-xl-3 my-col-lg-6 my-col-md-12">
                <div class="card-body">
                    <h5 class="card-title"><?= $redux_demo['thirty-card-3'][0] ?></h5>
                    <p class="card-text"><?= $redux_demo['thirty-card-3'][1] ?></p>
                </div>
            </div>
            <div class="card mr-0 mb-4 my-col-xl-3 my-col-lg-6 my-col-md-12">
                <div class="card-body">
                    <h5 class="card-title"><?= $redux_demo['thirty-card-4'][0] ?></h5>
                    <p class="card-text"><?= $redux_demo['thirty-card-4'][1] ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="fourty__screen">
    <div class="container">
        <h3 class="header__text">
            <?= $redux_demo['fourty-h3'] ?>
        </h3>
        <div class="bottom__block d-flex flex-wrap flex-xl-nowrap">
            <?php

            if (count($redux_demo['fourty-list']) == 0) {
                echo '
                        <div class="form col-12 col-xl-6 mr-4">
                    ';
            } else {
                echo '
                        <div class="form col-xl-6 col-12 mr-4">
                    ';
            }

            ?>
            <form method="post" action="wp-content\themes\ordermebel\form.php">
                <div class="form-group mb-4">
                    <input placeholder="Ваше имя" name="name" type="text" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <input placeholder="Номер телефона" name="phone" type="text" class="form-control" id="exampleInputText1">
                </div>
                <button type="submit" class="button d-flex justify-content-end"><?= $redux_demo['first-button'] ?></button>
            </form>
            <?php

            echo '</div>';

            $i = 0;

            if (count($redux_demo['fourty-list']) != 0) {
                echo '
                    <div class="white__block col-12 col-xl-6 mt-4 mt-xl-0">
                        <ul class="dost">';

                while ($i < count($redux_demo['fourty-list'])) {

                    if ($i + 1 == count($redux_demo['fourty-list'])) {
                        echo '
                                <li class="item mb-0">' . $redux_demo['fourty-list'][$i] . '</li>
                            ';
                    } else {
                        echo '
                                <li class="item">' . $redux_demo['fourty-list'][$i] . '</li>
                            ';
                    }
                    $i++;
                }

                echo '</ul>
                    </div>';
            }
            ?>

        </div>
    </div>
</section>
<?php
get_footer()
?>