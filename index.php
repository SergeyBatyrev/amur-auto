<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:wght@400;700&family=Viaoda+Libre&display=swap"
        rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <meta name="description"
        content="Аренда авто на свадьбу в Ижевске  по доступной цене. Трансфер в другие города и аэропорт. Скидки! Звоните ☎️ +7-982-832-33-67" />
    <meta name="title"
        content="аренда автомобиля на свадьбу и другие торжества в Ижевске | Прокат автомобиля с водителем на свадьбу" />
    <title>
        Amur_avto-аренда автомобиля на свадьбу и другие торжества в Ижевске
    </title>
</head>

<body>
    <section id="header">
        <div class="header_top">
            <div class="container">
                <nav class="header_top-nav">
                    <a class="nav_logo" href=""></a>
                    <menu class="nav_top-menu">
                        <a class="nav_item" href="#slider">автомобиль</a>
                        <a class="nav_item" href="#coast">стоимость</a>
                        <a class="nav_item" href="#footer">контакты</a>
                    </menu>
                </nav>
            </div>
            <hr />
        </div>
        <div class="header_top-title">
            <h1>
                AMUR_AVTO
                <div class="show">
                    аренда автомобиля с водителем на<br />Вашу свадьбу
                </div>
                <div class="hide">аренда автомобиля</div>
                <span>г.Ижевск</span>
            </h1>
        </div>

        <div class="header_top-button">
            <a href="#footer"><button>оставить заявку</button></a>
        </div>
    </section>

    <section id="slider">
        <div class="container">
            <div class="slider-line">
                <img src="./img/Liner.png" alt="" class="img-line" />
            </div>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-zoom-container">
                            <img alt="" src="./img/1.png" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-zoom-container">
                            <img alt="" src="./img/2.png" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-zoom-container">
                            <img alt="" src="./img/3.png" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-zoom-container">
                            <img alt="" src="./img/4.png" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-zoom-container">
                            <img alt="" src="./img/5.png" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-zoom-container">
                            <img alt="" src="./img/6.png" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-zoom-container">
                            <img alt="" src="./img/7.png" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-zoom-container">
                            <img alt="" src="./img/8.png" />
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="footer" id="coast">
        <div class="container">
            <div class="footer_description">
                <p>
                    Белоснежная Мазда CX-5 для вашей свадьбы.<br />
                    Автомобиль подается для вас чистым и ухоженным.<br />
                    С вами всегда вежливый водитель с богатым опытом работы.<br />
                    Звоните и мы с Вами обязательно все обсудим.<br />
                    Авто 2019 г.в в идеальном состоянии.<br />
                    Аренда от 3 часов, 700руб.час.<br />
                    Возможны деловые поездки,<br />
                    Встречи с аэропорта, трансфер (Пермь, Казань и др.15р.км)
                </p>
            </div>
            <hr>
            <div class="about_me">
                <br />
                <h2>О себе</h2>
                <div class="about_me_info">
                    <div class="about_me_info_img"><img src="./img/driver.jpg" alt="" width="200px" /></div>
                    <div>
                        <article>
                            С вами всегда вежливый водитель с богатым опытом работы.<br />
                            Звоните и мы с Вами обязательно все обсудим.<br />
                            Авто 2019 г.в в идеальном состоянии.<br />
                            Аренда от 3 часов, 700руб.час.<br />
                            Возможны деловые поездки,<br />
                            Встречи с аэропорта, трансфер (Пермь, Казань и др.15р.км)
                        </article>
                    </div>
                </div>
            </div>

            <form action="./telegram.php" class="form" id="form" method="post">
                <legend>оформить заказ</legend>
                <input class="inp-1 Name" name="Name" type="text" placeholder="Имя" />
                <input class="inp-2 Phone" name="Phone" type="text" placeholder="Тел:" />
                <div id="Phone"></div>
                <input class="inp-3 Date" name="Date" type="date" placeholder="Укажите дату"  />
                <input type="submit" value="оставить заявку" />
            </form>

            <div id="footer" class="footer_contact">
                <div class="footer_contact-tell">
                    <a href="tel:+79828323367">Тел: 8-982-832-33-67</a>
                </div>
                <div class="footer_contact-icons">
                    <h4>связаться со мной</h4>
                    <ul>
                        <li>
                            <a href=""><img src="./img/tel.svg" alt="" /></a>
                        </li>
                        <li>
                            <a href="https://vk.com/seregaa83"><img src="./img/vk_icon-icons.svg" alt="" /></a>
                        </li>
                        <li>
                            <a href="https://api.whatsapp.com/send/?phone=79828323367"><img
                                    src="./img/Whatsapp_icon-icons.svg" alt="" /></a>
                        </li>
                        <li>
                            <a
                                href="https://www.avito.ru/izhevsk/predlozheniya_uslug/avtomobil_na_vashu_svadbu_i_drugie_torzhestva_1940149331"><img
                                    src="./img/avito.svg" alt="" /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src='./validationForm.js'></script>
    <script src='./slider.js'></script>
    <script src='./menuFix.js'></script>
</body>

</html>