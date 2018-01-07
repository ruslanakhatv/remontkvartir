<?php
/**
 * The header for our theme
 * @link RusArt-Media.ru
 *
 * @package RusArt-Media
 * @subpackage Topor i molot
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
            <div class="head-line">
            <div class="header-logo"></div>
            <menu class="head-menu">
                <ul>
                    <li id="company">
                        <a href="">
                            <span>О нас</span><br/>
                            <i>Все виды услуг <br/> и деятельности</i>
                        </a>
                    </li>
                    <li id="portfolio">
                        <a href="">
                            <span>Портфолио</span><br/>
                            <i>Примеры <br/> наших работ</i>
                        </a>
                    </li>
                    <li id="blog">
                        <a href="">
                            <span>Блог</span><br/>
                            <i>Советы от <br/> профессионалов</i>
                        </a>
                    </li>
                    <li id="contact">
                        <a href="">
                            <span>Контакты</span><br/>
                            <i><br/>  Как нас найти</i>
                        </a>
                    </li>
                </ul>
            </menu>
            </div>
            <hr/>
            <menu class="menu-line">
                <ul>
                    <li><a href="">Услуги и Цены</a></li>
                    <li><a href="">Дизайн - проект</a></li>
                    <li><a href="">Новости</a></li>
                    <li><a href="">Акции</a></li>
                    <li><a href="">Отзывы</a></li>
                </ul>
            </menu>
            <div class="header-slide">
                <img src="<?php echo get_theme_file_uri( '/assets/images/head-img.png' )?>" alt="ремонт квартир">
            </div>
            <div class="head-usloviya">
                <ul>
                    <li><span>Кредит</span>
                        <ul>
                            <li>Кредит на строительство</li>
                            <li id="but"><a href="" class="ml-button-1">Читать подробнее -></a></li>
                        </ul>
                    </li>
                    <li><span>Скидки</span>
                        <ul>
                            <li>на все ваши услуги</li>
                            <li id="but"><a href="" class="ml-button-1">Читать подробнее -></a></li>
                        </ul>
                    </li>
                    <li><span>Заказать</span>
                        <ul>
                            <li>10% скидки призаказе</li>
                            <li id="but"><a href="" class="ml-button-1">Оформить заказ</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>