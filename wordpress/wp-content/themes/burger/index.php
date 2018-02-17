<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php the_title(); ?>
    </title>
    <link rel="stylesheet" href="./css/vendors.min.css">
    <link rel="stylesheet" href="./css/main.min.css">
</head>
<body>
<?php
$fields = get_fields(); //Выбрать все поля которые принадлежат странице 1
?>

<div class="wrapper">
    <div class="maincontent">
        <section class="section hero">
            <div class="container">
                <header class="header">
                    <div class="header__logo">
                        <a class="logo" href="#"><img class="logo__icon" src="<?=$fields['logo']['url']?>"></a>
                    </div>
                    <div class="header__menu">
                        <nav class="nav">
                            <ul class="nav__list">
                                <li class="nav__item"><a class="nav__link" href="" data-scroll-to="1">о нас</a>
                                </li>
                                <li class="nav__item"><a class="nav__link" href="" data-scroll-to="2">бургеры</a>
                                </li>
                                <li class="nav__item"><a class="nav__link" href="" data-scroll-to="3">команда</a>
                                </li>
                                <li class="nav__item"><a class="nav__link" href="" data-scroll-to="4">меню</a>
                                </li>
                                <li class="nav__item"><a class="nav__link" href="" data-scroll-to="5">отзывы</a>
                                </li>
                                <li class="nav__item"><a class="nav__link" href="" data-scroll-to="7">контакты</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header__links"><a class="order-link btn" href="" data-scroll-to="6">Заказать</a><a class="hamburger-menu-link" href="">
                            <div class="hamburger-menu-link__bars"></div></a></div>
                </header>
                <div class="hero__container">
                    <div class="hero__content">
                        <div class="hero__left"><img class="hero__img" src="<?=$fields['bigpic1']['url']?>" alt=""></div>
                        <div class="hero__right">
                            <div class="section__title"><?=$fields['title']?></div>
                            <div class="hero__desc"><?=$fields['subtitle']?></div>
                        </div>
                    </div>
                </div>
            </div><a class="down-arrow" href="#" data-scroll-to="1">
                <svg class="down-arrow__icon">
                    <use xlink:href="./img/sprite/sprite.svg#arrow-scroll"></use>
                </svg></a>
        </section>
        <section class="section best">
            <div class="container">
                <div class="section__title section__title_black">Мы лучшие</div>
                <ul class="best__list">
                    <li class="best__item">
                        <div class="best__icon">
                            <svg class="best__icon-pic" style="fill: #e25028;">
                                <use xlink:href="./img/sprite/sprite.svg#meat"></use>
                            </svg>
                        </div>
                        <div class="best__desc">
                            <div class="best__title">100% свежее мясо</div>
                            <div class="best__text text-block">
                                <p>Драма представляет собой деструктивный цикл. Анапест представляет собой анапест. Ямб неравномерен.</p>
                            </div>
                        </div>
                    </li>
                    <li class="best__item">
                        <div class="best__icon">
                            <svg class="best__icon-pic" style="fill: #f8b43a;">
                                <use xlink:href="./img/sprite/sprite.svg#hand"></use>
                            </svg>
                        </div>
                        <div class="best__desc">
                            <div class="best__title">Ручная сборка</div>
                            <div class="best__text text-block">
                                <p>Драма представляет собой деструктивный цикл. Анапест представляет собой анапест. Ямб неравномерен.</p>
                            </div>
                        </div>
                    </li>
                    <li class="best__item">
                        <div class="best__icon">
                            <svg class="best__icon-pic" style="fill: #8ac03e;">
                                <use xlink:href="./img/sprite/sprite.svg#natural"></use>
                            </svg>
                        </div>
                        <div class="best__desc">
                            <div class="best__title">Натуральные ингредиенты</div>
                            <div class="best__text text-block">
                                <p>Драма представляет собой деструктивный цикл. Анапест представляет собой анапест. Ямб неравномерен.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="section burgers">
            <div class="container">
                <div class="burger-slider-wrap">
                    <div class="burger-slider__controls"><a class="burger-slider__btn burger-slider__btn_next" href="#">
                            <svg class="burger-slider__arrow">
                                <use xlink:href="./img/sprite/sprite.svg#arrow-scroll"></use>
                            </svg></a><a class="burger-slider__btn burger-slider__btn_prev" href="#">
                            <svg class="burger-slider__arrow">
                                <use xlink:href="./img/sprite/sprite.svg#arrow-scroll"></use>
                            </svg></a></div>
                    <ul class="burgers-slider owl-carousel">
                        <?php
                        $posts = query_posts('post_type=tovar');
                        if ( have_posts() ) : while ( have_posts() ) : the_post();
                        ?>
                        <li class="burgers-slider__item">
                            <div class="ingredients">
                                <svg class="ingredients__icon">
                                    <use xlink:href="./img/sprite/sprite.svg#burger"></use>
                                </svg>
                                <div class="ingredients__icon-text">Состав</div>
                                <div class="ingredients__dropdown">
                                    <table class="ingredients__table">
                                        <tr class="ingredients__table-row">
                                            <td class="ingredients__table-cell"><img src="./img/icons/beef.svg" alt="ingredients__table-icon"></td>
                                            <td class="ingredients__table-cell">
                                                <div class="ingredients__table-icon">Говядина</div>
                                            </td>
                                            <td class="ingredients__table-cell">
                                                <div class="ingredients__table-icon">300г</div>
                                            </td>
                                        </tr>
                                        <tr class="ingredients__table-row">
                                            <td class="ingredients__table-cell"><img src="./img/icons/buns.svg" alt="ingredients__table-icon"></td>
                                            <td class="ingredients__table-cell">
                                                <div class="ingredients__table-icon">Булочки</div>
                                            </td>
                                            <td class="ingredients__table-cell">
                                                <div class="ingredients__table-icon">100г</div>
                                            </td>
                                        </tr>
                                        <tr class="ingredients__table-row">
                                            <td class="ingredients__table-cell"><img src="./img/icons/salad.svg" alt="ingredients__table-icon"></td>
                                            <td class="ingredients__table-cell">
                                                <div class="ingredients__table-icon">Зелень</div>
                                            </td>
                                            <td class="ingredients__table-cell">
                                                <div class="ingredients__table-icon">70г</div>
                                            </td>
                                        </tr>
                                        <tr class="ingredients__table-row">
                                            <td class="ingredients__table-cell"><img src="./img/icons/sauce.svg" alt="ingredients__table-icon"></td>
                                            <td class="ingredients__table-cell">
                                                <div class="ingredients__table-icon">Соус</div>
                                            </td>
                                            <td class="ingredients__table-cell">
                                                <div class="ingredients__table-icon">150г</div>
                                            </td>
                                        </tr>
                                        <tr class="ingredients__table-row">
                                            <td class="ingredients__table-cell"><img src="./img/icons/cucumber.svg" alt="ingredients__table-icon"></td>
                                            <td class="ingredients__table-cell">
                                                <div class="ingredients__table-icon">Овощи</div>
                                            </td>
                                            <td class="ingredients__table-cell">
                                                <div class="ingredients__table-icon">200г</div>
                                            </td>
                                        </tr>
                                        <tr class="ingredients__table-row">
                                            <td class="ingredients__table-cell"><img src="./img/icons/cheese.svg" alt="ingredients__table-icon"></td>
                                            <td class="ingredients__table-cell">
                                                <div class="ingredients__table-icon">Сыр</div>
                                            </td>
                                            <td class="ingredients__table-cell">
                                                <div class="ingredients__table-icon">80г</div>
                                            </td>
                                        </tr>
                                    </table><a class="ingredients__close" href="">
                                        <svg class="ingredients__close-btn">
                                            <use xlink:href="./img/sprite/sprite.svg#close"></use>
                                        </svg></a>
                                </div>
                            </div>
                            <div class="burger-weight">
                                <div class="burger-weight__measure">
                                    <div class="burger-weight__amount">1200</div>
                                </div>
                                <div class="burger-weight__title">ккал</div>
                            </div>
                            <div class="burgers-slider__left">
                                <img class="burgers-slider__pic" src="<?=get_the_post_thumbnail_url()?>" alt="">
                            </div>
                            <div class="burgers-slider__right">
                                <div class="section__title section__title_white"><?php the_title(); ?></div>
                                <div class="burgers-slider__text text-block">
                                    <?php the_content(); ?>
                                </div>
                                <div class="burgers-slider__options">
                                    <div class="burgers-slider__price">
                                        <div class="burgers-slider__price-amount">
                                            <?php the_field('price');?>
                                        </div>
                                        <div class="burgers-slider__price-measure">рублей</div>
                                    </div><a class="burgers-slider__buy btn" href="6">Заказать</a>
                                </div>
                            </div>
                        </li>
                        <?php endwhile; else : ?>
                            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section team">
            <div class="team__section">
                <div class="section__title">Команда</div>
                <ul class="team-acco">
                    <li class="team-acco__item"><a class="team-acco__trigger" href="#">дэниэл редклифф</a>
                        <div class="team-acco__content">
                            <div class="team-acco__data">
                                <div class="team-acco__pic">
                                    <div class="team-acco__img" style="background-image: url('./img/content/teammate.jpg');"></div>
                                </div>
                                <div class="team-acco__text">
                                    <div class="team-acco__title">Шеф-повар</div>
                                    <div class="team-acco__text-content">С радостью поможет подобрать идеальный бургер и оформить заказ.</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="team-acco__item"><a class="team-acco__trigger" href="#">ричард джеймс</a>
                        <div class="team-acco__content">
                            <div class="team-acco__data">
                                <div class="team-acco__pic">
                                    <div class="team-acco__img" style="background-image: url('./img/content/teammate.jpg');"></div>
                                </div>
                                <div class="team-acco__text">
                                    <div class="team-acco__title">Оператор</div>
                                    <div class="team-acco__text-content">С радостью поможет подобрать идеальный бургер и оформить заказ.</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="team-acco__item"><a class="team-acco__trigger" href="#">Джейк Финн</a>
                        <div class="team-acco__content">
                            <div class="team-acco__data">
                                <div class="team-acco__pic">
                                    <div class="team-acco__img" style="background-image: url('./img/content/teammate.jpg');"></div>
                                </div>
                                <div class="team-acco__text">
                                    <div class="team-acco__title">Менеджер</div>
                                    <div class="team-acco__text-content">С радостью поможет подобрать идеальный бургер и оформить заказ.</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="team-acco__item"><a class="team-acco__trigger" href="#">Николай Иванов</a>
                        <div class="team-acco__content">
                            <div class="team-acco__data">
                                <div class="team-acco__pic">
                                    <div class="team-acco__img" style="background-image: url('./img/content/teammate.jpg');"></div>
                                </div>
                                <div class="team-acco__text">
                                    <div class="team-acco__title">Шоколатье</div>
                                    <div class="team-acco__text-content">С радостью поможет подобрать идеальный бургер и оформить заказ.</div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="section menu">
            <div class="section__title section__title_white menu__title">Меню</div>
            <ul class="menu-acco">
                <li class="menu-acco__item"><a class="menu-acco__trigger" href="#" style="background-image: url('./img/bg/menu/meats.jpg');">
                        <div class="menu-acco__trigger-text">Для мясоедов</div></a>
                    <div class="menu-acco__content">
                        <div class="menu-acco__text">
                            Речевой акт редуцирует диалектический характер. Развивая эту тему, заимствование редуцирует конструктивный механизм сочленений. Лирический субъект начинает диссонансный анжамбеман. Наш современник стал особенно чутко относиться к слову, однако механизм сочленений неустойчив. Модальность высказывания, как справедливо считает И.Гальперин, пространственно выбирает метр.
                            Речевой акт редуцирует диалектический характер. Развивая эту тему, заимствование редуцирует конструктивный механизм сочленений. Лирический субъект начинает диссонансный анжамбеман. Наш современник стал особенно чутко относиться к слову.
                        </div>
                    </div>
                </li>
                <li class="menu-acco__item"><a class="menu-acco__trigger" href="#" style="background-image: url('./img/bg/menu/vegans.jpg');">
                        <div class="menu-acco__trigger-text">Вегетарианское</div></a>
                    <div class="menu-acco__content">
                        <div class="menu-acco__text">
                            Речевой акт редуцирует диалектический характер. Развивая эту тему, заимствование редуцирует конструктивный механизм сочленений. Лирический субъект начинает диссонансный анжамбеман. Наш современник стал особенно чутко относиться к слову, однако механизм сочленений неустойчив. Модальность высказывания, как справедливо считает И.Гальперин, пространственно выбирает метр.
                            Речевой акт редуцирует диалектический характер. Развивая эту тему, заимствование редуцирует конструктивный механизм сочленений. Лирический субъект начинает диссонансный анжамбеман. Наш современник стал особенно чутко относиться к слову.
                        </div>
                    </div>
                </li>
                <li class="menu-acco__item"><a class="menu-acco__trigger" href="#" style="background-image: url('./img/bg/menu/diets.jpg');">
                        <div class="menu-acco__trigger-text">Диетическое</div></a>
                    <div class="menu-acco__content">
                        <div class="menu-acco__text">
                            Речевой акт редуцирует диалектический характер. Развивая эту тему, заимствование редуцирует конструктивный механизм сочленений. Лирический субъект начинает диссонансный анжамбеман. Наш современник стал особенно чутко относиться к слову, однако механизм сочленений неустойчив. Модальность высказывания, как справедливо считает И.Гальперин, пространственно выбирает метр.
                            Речевой акт редуцирует диалектический характер. Развивая эту тему, заимствование редуцирует конструктивный механизм сочленений. Лирический субъект начинает диссонансный анжамбеман. Наш современник стал особенно чутко относиться к слову.
                        </div>
                    </div>
                </li>
            </ul>
        </section>
        <section class="section reviews">
            <ul class="reviews__list">
                <li class="reviews__item">
                    <div class="review">
                        <div class="review__photo" style="background-image: url('./img/content/reviews/1.jpg');"></div>
                        <div class="review__hover">
                            <div class="review__title">Константин Спилберг</div>
                            <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                            <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
                        </div>
                    </div>
                </li>
                <li class="reviews__item">
                    <div class="review">
                        <div class="review__photo" style="background-image: url('./img/content/reviews/2.jpg');"></div>
                        <div class="review__hover">
                            <div class="review__title">Константин Спилберг</div>
                            <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                            <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
                        </div>
                    </div>
                </li>
                <li class="reviews__item">
                    <div class="review">
                        <div class="review__photo" style="background-image: url('./img/content/reviews/3.jpg');"></div>
                        <div class="review__hover">
                            <div class="review__title">Константин Спилберг</div>
                            <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                            <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
                        </div>
                    </div>
                </li>
                <li class="reviews__item">
                    <div class="review">
                        <div class="review__photo" style="background-image: url('./img/content/reviews/4.jpg');"></div>
                        <div class="review__hover">
                            <div class="review__title">Константин Спилберг</div>
                            <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                            <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
                        </div>
                    </div>
                </li>
                <li class="reviews__item">
                    <div class="review">
                        <div class="review__photo" style="background-image: url('./img/content/reviews/5.jpg');"></div>
                        <div class="review__hover">
                            <div class="review__title">Константин Спилберг</div>
                            <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                            <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
                        </div>
                    </div>
                </li>
                <li class="reviews__item">
                    <div class="review">
                        <div class="review__photo" style="background-image: url('./img/content/reviews/6.jpg');"></div>
                        <div class="review__hover">
                            <div class="review__title">Константин Спилберг</div>
                            <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                            <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
                        </div>
                    </div>
                </li>
                <li class="reviews__item">
                    <div class="review">
                        <div class="review__photo" style="background-image: url('./img/content/reviews/7.jpg');"></div>
                        <div class="review__hover">
                            <div class="review__title">Константин Спилберг</div>
                            <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                            <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
                        </div>
                    </div>
                </li>
                <li class="reviews__item">
                    <div class="review">
                        <div class="review__photo" style="background-image: url('./img/content/reviews/8.jpg');"></div>
                        <div class="review__hover">
                            <div class="review__title">Константин Спилберг</div>
                            <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                            <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
        <section class="section order">
            <div class="container">
                <div class="section__title">Закажите доставку</div>
                <div class="order__form">
                    <form class="order__form-tag" id="order-form" action="/form-handler.php" method="post">
                        <div class="order__form-col">
                            <div class="order__form-row order__form-row_double">
                                <label class="order__form-block">
                                    <div class="order__form-label">Имя</div>
                                    <input class="order__form-input" name="name" type="text" placeholder="">
                                </label>
                                <label class="order__form-block">
                                    <div class="order__form-label">Телефон</div>
                                    <input class="order__form-input phone-mask" name="phone" type="text" placeholder="">
                                </label>
                            </div>
                            <div class="order__form-row">
                                <label class="order__form-block">
                                    <div class="order__form-label">Улица</div>
                                    <input class="order__form-input" name="street" type="text" placeholder="">
                                </label>
                            </div>
                            <div class="order__form-row order__form-row_quatro">
                                <label class="order__form-block">
                                    <div class="order__form-label">Дом</div>
                                    <input class="order__form-input" name="home" type="text" placeholder="">
                                </label>
                                <label class="order__form-block">
                                    <div class="order__form-label">Корпус</div>
                                    <input class="order__form-input" name="part" type="text" placeholder="">
                                </label>
                                <label class="order__form-block">
                                    <div class="order__form-label">Квартира</div>
                                    <input class="order__form-input" name="appt" type="text" placeholder="">
                                </label>
                                <label class="order__form-block">
                                    <div class="order__form-label">Этаж</div>
                                    <input class="order__form-input" name="floor" type="text" placeholder="">
                                </label>
                            </div>
                        </div>
                        <div class="order__form-col">
                            <div class="order__form-row">
                                <label class="order__form-block">
                                    <div class="order__form-label">Комментарий</div>
                                    <textarea class="order__form-input order__form-input_textarea" name="comment"></textarea>
                                </label>
                            </div>
                            <div class="order__form-buttons">
                                <div class="order__form-row">
                                    <label class="order__radio">
                                        <input class="order__radio-elem" name="payment" type="radio">
                                        <div class="order__radio-fake"></div>
                                        <div class="order__radio-title">Потребуется сдача</div>
                                    </label>
                                    <label class="order__radio">
                                        <input class="order__radio-elem" name="payment" type="radio">
                                        <div class="order__radio-fake"></div>
                                        <div class="order__radio-title">Оплата по карте</div>
                                    </label>
                                </div>
                                <div class="order__form-row">
                                    <label class="order__radio order__radio_checkbox">
                                        <input class="order__radio-elem" name="callback" type="checkbox">
                                        <div class="order__radio-fake"></div>
                                        <div class="order__radio-title">Не перезванивать</div>
                                    </label>
                                </div>
                                <div class="order__form-row">
                                    <input class="order__form-button" name="" type="submit" value="Заказать">
                                    <input class="order__form-button order__form-button_reset" name="" type="reset" value="Очистить">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="section map">
            <div class="yandex-map" id="map"></div>
            <footer class="footer">
                <div class="container footer__container">
                    <div class="footer__col">
                        <div class="footer__address">Санкт-Петербург, ул.Бабушкина, д.12/1, 15</div><a class="footer__phone" href="tel:+78123771377">+7 (812) 377-13-77</a>
                    </div>
                    <div class="footer__col footer__col_right">
                        <ul class="socials">
                            <li class="socials__item"><a class="socials__link" href="#">
                                    <svg class="socials__link-icon" style="fill: #fff;">
                                        <use xlink:href="./img/sprite/sprite.svg#vk"></use>
                                    </svg></a></li>
                            <li class="socials__item"><a class="socials__link" href="#">
                                    <svg class="socials__link-icon" style="fill: #fff;">
                                        <use xlink:href="./img/sprite/sprite.svg#fb"></use>
                                    </svg></a></li>
                            <li class="socials__item"><a class="socials__link" href="#">
                                    <svg class="socials__link-icon" style="fill: #fff;">
                                        <use xlink:href="./img/sprite/sprite.svg#inst"></use>
                                    </svg></a></li>
                            <li class="socials__item"><a class="socials__link" href="#">
                                    <svg class="socials__link-icon" style="fill: #fff;">
                                        <use xlink:href="./img/sprite/sprite.svg#twitter"></use>
                                    </svg></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </section>
    </div>
</div>
<div class="hamburger-menu" id="hamburger-menu">
    <div class="hamburger-menu__logo"><a class="logo" href="#"><img src="./img/icons/logo.svg"></a></div>
    <div class="hamburger-menu__items">
        <nav class="nav nav_hamburger">
            <ul class="nav__list">
                <li class="nav__item"><a class="nav__link" href="" data-scroll-to="1">о нас</a>
                </li>
                <li class="nav__item"><a class="nav__link" href="" data-scroll-to="2">бургеры</a>
                </li>
                <li class="nav__item"><a class="nav__link" href="" data-scroll-to="3">команда</a>
                </li>
                <li class="nav__item"><a class="nav__link" href="" data-scroll-to="4">меню</a>
                </li>
                <li class="nav__item"><a class="nav__link" href="" data-scroll-to="5">отзывы</a>
                </li>
                <li class="nav__item"><a class="nav__link" href="" data-scroll-to="7">контакты</a>
                </li>
            </ul>
        </nav>
    </div><a class="hamburger-menu__close" href="#">
        <svg class="hamburger-menu__close-icon">
            <use xlink:href="./img/sprite/sprite.svg#close"></use>
        </svg></a>
</div>
<ul class="fixed-menu">
    <li class="fixed-menu__item"><a class="fixed-menu__link" href="" data-scroll-to="0"></a></li>
    <li class="fixed-menu__item"><a class="fixed-menu__link" href="" data-scroll-to="1"></a></li>
    <li class="fixed-menu__item"><a class="fixed-menu__link" href="" data-scroll-to="2"></a></li>
    <li class="fixed-menu__item"><a class="fixed-menu__link" href="" data-scroll-to="3"></a></li>
    <li class="fixed-menu__item"><a class="fixed-menu__link" href="" data-scroll-to="4"></a></li>
    <li class="fixed-menu__item"><a class="fixed-menu__link" href="" data-scroll-to="5"></a></li>
    <li class="fixed-menu__item"><a class="fixed-menu__link" href="" data-scroll-to="6"></a></li>
    <li class="fixed-menu__item"><a class="fixed-menu__link" href="" data-scroll-to="7"></a></li>
</ul>
<div class="full-review popup" id="full-review"><a class="full-review__close" href="#">
        <svg class="full-review__close-btn">
            <use xlink:href="./img/sprite/sprite.svg#close"></use>
        </svg></a>
    <div class="full-review__inner">
        <div class="full-review__title">Констнтин Спилберг</div>
        <div class="full-review__content">
            Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным. Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.

        </div>
    </div>
</div>
<div class="status-popup popup" id="success">
    <div class="status-popup__inner">
        <div class="status-popup__message">Сообщение отправлено</div><a class="status-popup__close btn" href="#">Закрыть</a>
    </div>
</div>
<div class="status-popup popup" id="error">
    <div class="status-popup__inner">
        <div class="status-popup__message error-message">Произошла ошибка</div><a class="status-popup__close btn" href="#">Закрыть</a>
    </div>
</div>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script src="./js/main.min.js"></script>
</body>
</html>