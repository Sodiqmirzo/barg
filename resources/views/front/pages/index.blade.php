<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Barg</title>
    <meta name="csrf-token" content="{{csrf_token()}}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/main.css" />
    <link rel="stylesheet" href="./assets/css/base/base.css" />
    <link rel="stylesheet" href="./assets/css/responsive/responsive.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" href="./assets/images/logo.svg" />
</head>

<body>


    <!-- Pre loader animation effect -->
    <div id="pre-loader">
        <div class="animated-logo">
            <img src="./assets/images/logo.svg" class="w-24" alt="Анимированный логотип Mountain">
        </div>
    </div>
    <!-- Pre loader animation effect -->



    <!-- navbar section-start -->
    <header style="background-color: #fff" class="z-50">
        <div id="bodyWrapper" class="wrapper"></div>
        <div class="container">
            <nav class="flex items-center justify-between py-6 pt-8 nav" role="navigation">
                <a href="#" class="nav-brand">
                    <img class="nav-brand-img" src="./assets/images/logo.svg" alt="Navbar Brand Image" width="125px" />
                </a>
                <ul id="headerNavList" class="flex align-middle text-md nav-list">
                    <li class="nav-item lg:px-5 md:px-2">
                        <a class="my-auto text-gray-900 nav-link" data-target="Главная" href="#Главная">
                            Главная
                        </a>
                    </li>
                    <li class="nav-item lg:px-5 md:px-3">
                        <a class="my-auto nav-link" href="#компании"> О компании </a>
                    </li>
                    <li class="nav-item lg:px-5 md:px-3">
                        <a class="my-auto nav-link" href="#Каталог"> Каталог </a>
                    </li>
                    <li class="nav-item lg:px-5 md:px-3">
                        <a class="my-auto nav-link" href="#заказать"> Как заказать </a>
                    </li>
                    <li class="nav-item lg:px-5 md:px-3">
                        <a class="my-auto nav-link" href="#Контакты"> Контакты </a>
                    </li>
                    <div class="flex items-center justify-between w-32 nav-social-links">
                        <a href="#" class="main-social__facebook">
                            <img src="./assets/images/facebook.svg" alt="Photo" />
                        </a>
                        <a href="#" class="main-social__facebook">
                            <img src="./assets/images/telegram.svg" alt="Photo" />
                        </a>
                        <a href="#" class="main-social__facebook">
                            <img src="./assets/images/instagram.svg" alt="Photo" />
                        </a>
                    </div>
                </ul>
                <a class="flex items-center justify-center invisible nav-contact lg:visible" href="tel:+998888600050">
                    <img class="w-4 h-4 nav-contact__img" src="./assets/images/phone-call.png" alt="Phone png image" />
                    <p class="pl-2 text-md nav-contact__text">88 860 00 50</p>
                </a>
            </nav>

            <!-- responsive navbar-start -->

            <nav class="flex items-center justify-center py-6 pt-8 navbar-second" role="navigation">
                <a href="#" class="nav-brand">
                    <img class="nav-brand-img" src="./assets/images/logo.svg" alt="Navbar Brand Image" width="125px" />
                </a>
                <ul id="headerNavList"
                    class="flex align-middle text-md nav-list-second animate__animated animate__slideInDown"
                    data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
                    <li class="pt-3 nav-item-second">
                        <a class="my-auto nav-link nav-link-second" href="#Главная">
                            Главная
                        </a>
                    </li>
                    <li class="pt-3 nav-item-second">
                        <a class="my-auto nav-link" href="#компании"> О компании </a>
                    </li>
                    <li class="pt-3 nav-item-second">
                        <a class="my-auto nav-link" href="#Каталог"> Каталог </a>
                    </li>
                    <li class="pt-3 nav-item-second">
                        <a class="my-auto nav-link" href="#заказать"> Как заказать </a>
                    </li>
                    <li class="pt-3 nav-item-second">
                        <a class="my-auto nav-link" href="#Контакты"> Контакты </a>
                    </li>
                    <hr class="nav-list-second-hr" />
                    <div class="flex items-center justify-between w-32 nav-social-links-second">
                        <a href="#" class="main-social__facebook">
                            <img src="./assets/images/facebook.svg" alt="Photo" />
                        </a>
                        <a href="#" class="main-social__facebook">
                            <img src="./assets/images/telegram.svg" alt="Photo" />
                        </a>
                        <a href="#" class="main-social__facebook">
                            <img src="./assets/images/instagram.svg" alt="Photo" />
                        </a>
                    </div>
                    <button id="barCloseBtn" class="border-none focus:outline-none">
                        <img class="cursor-pointer" src="./assets/images/cancel.png" alt="photo" width="15px"
                            height="15px" />
                    </button>
                </ul>
                <a class="flex items-center invisible nav-contact lg:visible" href="tel:+998888600050">
                    <img class="w-4 h-4 nav-contact__img" src="./assets/images/phone-call.png" alt="Phone png image" />
                    <p class="pl-2 text-sm nav-contact__text">88 860 00 50</p>
                </a>
                <button id="barBtn" class="border-none cursor-pointer nav-bar focus:outline-none lg:hidden">
                    <img class="w-5 nav-bar__img" src="./assets/images/menu.svg" alt="Bar image" />
                </button>
            </nav>

            <!-- responsive navbar-end -->
        </div>
    </header>
    <!-- navbar section-end -->

    <div class="absolute w-full h-full left-1/2 main-images-select-wrapper"
        style="transform: translateX(-50%); top: 305px; z-index: 100">
        <div style="display: flex; flex-direction: column">
            <div class="main-image-select-res-wrapper">
                <ul class="absolute top-0 flex flex-col items-center hidden rounded-md main-image-select-res-list"
                    style="
              width: 300px;
              top: 70px;
              left: 50%;
              transform: translateX(-50%);
              background-color: rgba(255, 255, 255, 0.98);
            ">
                    <li data-target="mainres1" class="w-full py-2 text-center main-image-responsive-select-text mt-md">
                        Экскаваторы
                    </li>
                    <li data-target="mainres2" class="w-full py-2 text-center main-image-responsive-select-text">
                        Автокраны
                    </li>
                    <li data-target="mainres3" class="w-full py-2 text-center main-image-responsive-select-text">
                        Автобетононасоса
                    </li>
                    <li data-target="mainres4" class="w-full py-2 text-center main-image-responsive-select-text mb-md">
                        Катки
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- main section-start -->
    <main class="pt-12 main md:pt-24" id="Главная">
        <div class="container pt-8">
            <ul class="flex items-center justify-between main-list">
                <li class="main-text-side">
                    <h1 class="text-5xl font-bold main-title">
                        Аренда и продажа <br />
                        спецтехники
                    </h1>
                    <p class="w-3/5 pt-8 pb-10 leading-7 main-subtext text-md">
                        Компания "Barg" предоставляет услуги аренды и продажи спецтехники
                        строительным организациям и частным лицам по всему Узбекистану.
                    </p>
                    <a class="inline-block px-5 py-1 rounded-sm main-more-btn text-md contact-form-link"
                        href="#Каталог">
                        Каталог
                    </a>
                    <div class="flex items-center justify-between w-20 main-social-links">
                        <a href="#" class="main-social__facebook">
                            <img class="main-social-facebook" src="./assets/images/facebook.svg" alt="Photo" />
                        </a>
                        <a href="#" class="main-social__facebook">
                            <img class="main-social-telegram" src="./assets/images/telegram.svg" alt="Photo" />
                        </a>
                        <a href="#" class="main-social__facebook">
                            <img class="main-social-instagram" src="./assets/images/instagram.svg" alt="Photo" />
                        </a>
                    </div>
                </li>
                <li class="main-image-side">
                    <div class="main-image">
                        <div class="flex justify-center hidden inline-block w-full main-image-change-res-header mt-lg">
                            <p style="
                    border: 1px solid #fabe0a;
                    margin: 0 auto;
                    width: 300px;
                    position: relative;
                  " class="inline-block p-2 px-5 text-lg rounded-md cursor-pointer main-image-select-header-text">
                                Автокраны
                            </p>
                        </div>

                        <div class="flex items-center justify-center hidden w-full main-images-res-wrapper"
                            style="margin: 0 auto">
                            <div id="mainres1" class="inline-block main-image-res" style="width: 300px; height: 300px">
                                <img class="" style="margin: 0 auto; width: 230px" src="./assets/images/main-image.png"
                                    alt="photo" />
                            </div>
                            <div id="mainres2" class="inline-block main-image-res active" style="width: 300px">
                                <img class="w-full" style="margin: 0 auto" src="./assets/images/main-avtokran-1.png"
                                    alt="photo" />
                            </div>
                            <div id="mainres3" class="inline-block main-image-res" style="width: 300px">
                                <img class="w-full" style="margin: 0 auto" src="./assets/images/avto-betanasos.png"
                                    alt="photo" />
                            </div>
                            <div id="mainres4" class="inline-block main-image-res" style="width: 300px; height: 300px">
                                <img class="w-full" style="margin: 0 auto" src="./assets/images/main-katki.png"
                                    alt="photo" />
                            </div>
                        </div>

                        <div class="main-line">
                            <div id="mainImgWrapper1" class="flex items-center main-image__btn main-btn-1">
                                <p id="mainImageBtn1" class="cursor-pointer main-image-text text-md">
                                    Катки
                                </p>
                                <span id="mainImgCircle1"
                                    class="w-2 h-2 rounded-full cursor-pointer main-image__btn-circle ml-md"></span>
                            </div>
                            <div id="mainImgWrapper2" class="flex items-center main-image__btn main-btn-2">
                                <p id="mainImageBtn2" class="cursor-pointer main-image-text text-md">
                                    Автокраны
                                </p>
                                <span id="mainImgCircle2"
                                    class="w-2 h-2 rounded-full cursor-pointer main-image__btn-circle ml-md"></span>
                            </div>
                            <div id="mainImgWrapper3" class="flex items-center main-image__btn active main-btn-3">
                                <p id="mainImageBtn3" class="cursor-pointer main-image-text text-md">
                                    Автобетононасоса
                                </p>
                                <span id="mainImgCircle3"
                                    class="w-2 h-2 rounded-full cursor-pointer main-image__btn-circle ml-md"></span>
                            </div>
                            <div id="mainImgWrapper4" class="flex items-center main-image__btn main-btn-4">
                                <p id="mainImageBtn4" class="cursor-pointer main-image-text text-md">
                                    Экскаваторы
                                </p>
                                <span id="mainImgCircle4"
                                    class="w-2 h-2 rounded-full cursor-pointer main-image__btn-circle ml-md"></span>
                            </div>
                            <div id="soma" class="main-img" data-target="mainImageBtn1">
                                <img src="./assets/images/main-katki-2.png" alt="Photo absolute" width="100%" />
                            </div>
                            <div id="eksa" class="main-img" data-target="mainImageBtn2">
                                <img src="./assets/images/main-avtokran-1.png" alt="Photo absolute" width="100%" />
                            </div>
                            <div id="buldo" class="main-img third" data-target="mainImageBtn3">
                                <img src="./assets/images/avto-betanasos.png" alt="Photo absolute" width="100%" />
                            </div>
                            <div id="digger" class="main-img" data-target="mainImageBtn4">
                                <img src="./assets/images/main-image.png" alt="Photo absolute" width="100%" />
                            </div>
                            <div class="main-line-break-1"></div>
                            <div class="main-line-break-2"></div>
                        </div>
                    </div>
                    <!-- </div> -->
                </li>
            </ul>
        </div>
    </main>

    <!-- main section-end -->

    <!-- company section-start -->
    <section class="company" id="компании">
        <div class="container pt-32">
            <h1 class="visually-hidden">Lorem, ipsum dolor.</h1>
            <h2 class="inline-block pb-8 text-3xl font-bold company-title">
                О компании
            </h2>
            <ul class="flex items-center justify-center company-list">
                <li class="w-1/3 text-sm text-gray-900 company-item">
                    <p class="leading-6 company-text">
                        <span class="ml-10">Наша</span> компания "Barg" основана в 2017
                        году. Мы занимаемся услугами аренды и продажи спецтехники по всему
                        Узбекистану. Наша компания представляет модели от надежных
                        зарубежных производителей, что гарантирует качество техники.
                        Арендуя и покупая спецтехнику у нас, вы можете не сомневаться в ее
                        надежности и эффективности. Наша компания ценить своих клиентов,
                        поэтому мы следуем разумной ценовой политике. Наша стратегия
                        обеспечивает возможность для налаживания долгосрочного
                        сотрудничества, пользу от которого получат все заинтересованные
                        стороны.
                    </p>
                    <p class="company-text company-text-second">
                        <span class="ml-10">Аренда</span> строительной техники не требует
                        больших финансовых вложений и полностью окупается. У нас всё
                        честно и прозрачно. Индивидуальный подход к каждому клиенту
                        гарантирован. Мы предлагаем рентабельные решения для своих
                        клиентов — с нашей помощью можно сэкономить время и деньги.
                    </p>
                </li>
                <li class="company-item-second">
                    <img class="w-full company-img-second" src="./assets/images/company-img2.png" alt="photo" />
                </li>
            </ul>
        </div>
    </section>
    <!-- company section-end -->

    <!-- catalogue section-start -->
    <section class="relative overflow-hidden catalogue" id="Каталог">
        <div class="container pt-24 pb-16">
            <h1 class="visually-hidden">Lorem, ipsum dolor.</h1>
            <h2 class="inline-block mb-24 text-2xl text-3xl font-bold catalogue-title">
                Каталог
            </h2>
            <div class="flex justify-start">
                <ul id="tools"
                    class="grid grid-cols-2 gap-12 pt-20 justify-items-center sm:grid-cols-3 catalogue-list lg:grid-cols-3 md:gap-x-2 xl:gap-x-20">
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/tools/5.png" alt="Photo" />
                        <p class="text-lg catalogue-text">Свеча зажигания Bosch</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Свеча зажигания Bosch
                            </h1>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="w-64 catalogue-img" src="./assets/images/tools/4.png" alt="Photo" />
                        <p class="text-lg catalogue-text">
                            Электронный Регулятор Sinoturk Howo Vg1560110402
                        </p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Электронный Регулятор Sinoturk Howo Vg1560110402
                            </h1>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="w-64 catalogue-img" src="./assets/images/tools/6.png" alt="Photo" />
                        <p class="text-lg text-center catalogue-text">
                            Педаль газа Евро-3 CAMC
                        </p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Педаль газа Евро-3 CAMC
                            </h1>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="w-64 catalogue-img" src="./assets/images/tools/7.png" alt="Photo" />
                        <p class="text-lg catalogue-text">Диск Сцепления фередо</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Диск Сцепления фередо
                            </h1>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="w-64 catalogue-img" src="./assets/images/tools/8.png" alt="Photo" />
                        <p class="text-lg text-center catalogue-text">Гидромуфта A7</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Гидромуфта A7
                            </h1>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="w-64 catalogue-img" src="./assets/images/tools/9.png" alt="Photo" />
                        <p class="text-lg catalogue-text">Наконечник Гидроцелиндра</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Наконечник Гидроцелиндра
                            </h1>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="w-64 catalogue-img" src="./assets/images/tools/10.png" alt="Photo" />
                        <p class="text-lg catalogue-text">Редуктор landi Renzo NG2-8</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Редуктор landi Renzo NG2-8
                            </h1>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="w-64 catalogue-img" src="./assets/images/tools/11.png" alt="Photo" />
                        <p class="text-lg text-center catalogue-text">
                            Wechai Engine Spare Parts
                        </p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Wechai Engine Spare Parts
                            </h1>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="w-64 catalogue-img" src="./assets/images/tools/1.png" alt="Photo" />
                        <p class="text-lg text-center catalogue-text">Блок управления</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Блок управления
                            </h1>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="w-64 catalogue-img" src="./assets/images/tools/2.png" alt="Photo" />
                        <p class="text-lg text-center catalogue-text">
                            Wechai Дизельный Двигатель
                        </p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Wechai Дизельный Двигатель
                            </h1>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="w-64 catalogue-img" src="./assets/images/tools/3.png" alt="Photo" />
                        <p class="text-lg text-center catalogue-text">
                            Фильтр Природного Газа 612600190993
                        </p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Фильтр Природного Газа 612600190993
                            </h1>
                        </div>
                    </li>
                </ul>
                <ul id="peregruz"
                    class="grid grid-cols-2 gap-12 pt-20 justify-items-center sm:grid-cols-3 catalogue-list xl:gap-x-20">
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="w-64 catalogue-img" src="./assets/images/autobetanasos/beta1.png" alt="Photo" />
                        <p class="text-lg catalogue-text">XCMG HB62V</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Автобетононасоса XCMG HB62V
                            </h1>
                            <p class="text-center tex-sm">
                                XCMG с технологией SCHWING ГЕРМАНИЯ. <br />
                                <br />
                                Теоретическая производительность м3 / ч 170 <br />
                                <br />
                                Высота установки стрелы м: 61,1 <br />
                                <br />
                                Глубина достижения м: 43,6 <br />
                                <br />
                                Радиус поворота укладывающей стрелы м: 55,6 <br />
                                <br />
                                Изменить тип клапана: Рок-клапан <br />
                                <br />
                                Режим смазки: Автоматическая смазка <br />
                                <br />
                                Метод управления: Пульт дистанционного управления и ручной
                                <br />
                                <br />

                                Шасси: MERCEDES BENZ, EURO 5. <br />
                                <br />
                                Модель: AROCS-4143 E5 (НОВЫЙ МОДЕЛЬ) <br />
                                <br />
                                Двигатель модель: OM470LA.5-54 / EURO 5. <br />
                                <br />
                                Мощности: 315 kW / 428 л.с. <br />
                                <br />
                                Габаритные размеры mm: 15318x2530x4000 <br />
                                <br />
                                Общий вес: 46000 kg <br />
                                <br />

                                Цена: USD411000 (CIP TASHKENT) <br />
                                Цена: 5 101 000 000 сум с НДС (Растаможенный)
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="w-64 catalogue-img" src="./assets/images/autobetanasos/beta2.png" alt="Photo" />
                        <p class="text-lg catalogue-text">XCMG HB58V</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Автобетононасоса XCMG HB58V
                            </h1>
                            <p class="text-center tex-sm">
                                XCMG с технологией SCHWING Germany. <br />
                                <br />
                                Теоретическая производительность: 170 м3 / ч <br />
                                <br />
                                Стрела: 6-секционная складная стрела <br />
                                <br />
                                Максимум. высота установки стрелы: 57.5 м <br />
                                <br />
                                Глубина достижения: 40.5 м <br />
                                <br />
                                Радиус поворота укладывающей стрелы: 52.5 м <br />
                                <br />
                                Режим смазки: Автоматическая смазка <br />
                                <br />
                                Метод управления: Пульт дистанционного управления и ручной
                                <br />
                                <br />
                                Завод-изготовитель: (XCMG) XUZHOU XCMG SCHWING MACHINERY Co.,
                                LTD <br />
                                <br />

                                Шасси: SITRAK SINOTRUK, EURO 5 <br />
                                <br />
                                Модель: ZZ5446V516ME1 <br />
                                <br />
                                Модель двигатель: MC11.44-50 <br />
                                <br />
                                Мощности: 327 kw / 440 л.с. <br />
                                <br />
                                Габаритные размеры mm: 14570x2550x4000 <br />
                                <br />
                                Общий вес: 44000 kg <br />
                                <br />

                                Цена: USD 347200 (CIP TASHKENT) <br />
                                Цена: 4 620 100 000 сум с НДС (Растаможенный)
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="w-full catalogue-img" src="./assets/images/autobetanasos/beta55.jpg" alt="Photo" />
                        <p class="text-lg text-center catalogue-text">XCMG HB50V</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Автобетононасос XCMG HB50V
                            </h1>
                            <p class="text-center tex-sm">
                                XCMG с технологией SCHWING Germany. Производительность: 170 м3
                                / ч <br />
                                <br />
                                Стрела: 6-секционная складная стрела "RZ" <br />
                                <br />
                                Максимум. высота установки стрелы: 49,1 м <br />
                                <br />
                                Глубина достижения: 34,4 м <br />
                                <br />
                                Радиус поворота укладывающей стрелы: 44,2 м <br />
                                <br />
                                Режим смазки: Автоматическая смазка <br />
                                <br />
                                Метод управления: Пульт дистанционного управления / Ручной
                                <br />
                                <br />
                                Год выпуск: 2020/2021 год <br />
                                <br />

                                Шасси: SINOTRUK HOWO, EURO 5 <br />
                                <br />
                                Кабина: А7 <br />
                                <br />
                                Модель: ZZ5347V524HE1 <br />
                                <br />
                                Мощности: 294 kw / 400 л.с. <br />
                                <br />
                                Габаритные размеры mm: 12740×2530×4000 <br />
                                <br />
                                Общий вес: 34000 kg <br />
                                <br />

                                СУПЕР АКЦИЯ, ТОЛЬКО У НАС. <br />
                                <br />
                                ОТ ОФИЦИАЛЬНЫЙ ДИЛЕР XCMG <br />
                                <br />

                                Цена: USD243200 (CIP TASHKENT) <br />
                                Цена: 3 310 000 000 сум с НДС (Растаможенный)
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/autobetanasos/beta3.png" alt="Photo" />
                        <p class="text-lg catalogue-text">XCMG HB62V</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Автобетононасоса XCMG HB62V
                            </h1>
                            <p class="text-center tex-sm">
                                XCMG с технологией SCHWING ГЕРМАНИЯ. <br />
                                <br />
                                Теоретическая производительность м3 / ч 170 <br />
                                <br />
                                Высота установки стрелы м: 61,1 <br />
                                <br />
                                Глубина достижения м: 43,6 <br />
                                <br />
                                Радиус поворота укладывающей стрелы м: 55,6 <br />
                                <br />
                                Изменить тип клапана: Рок-клапан <br />
                                <br />
                                Режим смазки: Автоматическая смазка <br />
                                <br />
                                Метод управления: Пульт дистанционного управления и ручной
                                <br />
                                <br />

                                Шасси: MERCEDES BENZ, EURO 5. <br />
                                <br />
                                Модель: AROCS-4143 E5 (НОВЫЙ МОДЕЛЬ) <br />
                                <br />
                                Двигатель модель: OM470LA.5-54 / EURO 5. <br />
                                <br />
                                Мощности: 315 kW / 428 л.с. <br />
                                <br />
                                Габаритные размеры mm: 15318x2530x4000 <br />
                                <br />
                                Общий вес: 46000 kg <br />
                                <br />

                                Цена: USD411000 (CIP TASHKENT) <br />
                                Цена: 5 101 000 000 сум с НДС (Растаможенный)
                            </p>
                        </div>
                    </li>

                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/autobetanasos/cran4.png" alt="Photo" />
                        <p class="text-lg catalogue-text">XCMG HB39V</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Автобетононасос XCMG HB39V/h1
                            </h1>
                            <p class="text-center tex-sm">
                                XCMG с технологией SCHWING Germany. <br />
                                <br />
                                Производительность: 130 м³ / ч <br />
                                <br />
                                Стрела: 5-секционная складная стрела "RZ" <br />
                                <br />
                                Максимум. высота установки стрелы: 39,1 м Глубина достижения:
                                26,8 м <br />
                                <br />
                                Радиус поворота укладывающей стрелы: 35,1 м <br />
                                <br />
                                Режим смазки: Автоматическая смазка <br />
                                <br />
                                Метод управления: Пульт дистанционного управления / Ручной
                                <br />
                                <br />
                                Год выпуск: 2020/2021 год <br />
                                <br />

                                Шасси: SINOTRUK HOWO-T7X <br />
                                <br />
                                Кабина: А7 EURO 5 <br />
                                <br />
                                Модель: ZZ5347V524HE1 <br />
                                <br />
                                Двигателя: MC11.40-50 <br />
                                <br />
                                Мощности: 294 kw / 400 л.с. Габаритные размеры mm:
                                11100×2500×3800 <br />
                                <br />
                                Общий вес: 27070 kg <br />
                                <br />
                                СУПЕРАКЦИЯ, ОТ ОФИЦИАЛЬНЫЙ ДИЛЕР XCMG <br />
                                <br />
                                ТОЛЬКО У НАС!! <br />
                                <br />

                                Цена: USD208100 (CIP TASHKENT) <br />
                                Цена: 2 694 000 000 сум с НДС (Растаможенный)
                            </p>
                        </div>
                    </li>

                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="w-64 catalogue-img" src="./assets/images/autobetanasos/cran4.png" alt="Photo" />
                        <p class="text-lg catalogue-text">XCMG HB37V</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Автобетононасос XCMG HB37V
                            </h1>
                            <p class="text-center tex-sm">
                                XCMG с технологией SCHWING Germany. <br />
                                <br />
                                Производительность: 120 м³ / ч <br />
                                <br />
                                Стрела: 5-секционная складная стрела "RZ" <br />
                                <br />
                                Максимум. высота установки стрелы: 36,5 м <br />
                                <br />
                                Глубина достижения: 24,9 м <br />
                                <br />
                                Радиус поворота укладывающей стрелы: 32,5 м <br />
                                <br />
                                Режим смазки: Автоматическая смазка <br />
                                <br />
                                Метод управления: Пульт дистанционного управления и ручной
                                <br />
                                <br />
                                Год выпуск: 2020/2021 год <br />
                                <br />

                                Шасси: SINOTRUK HOWO-TX <br />
                                <br />
                                Кабина: А7 EURO 5 <br />
                                <br />
                                Модель: ZZ5237N521GE1 <br />
                                <br />
                                Двигателя: MC07H.32-50 <br />
                                <br />
                                Мощности: 235 kw / 320 л.с. <br />
                                <br />
                                Габаритные размеры mm: 9900x2525x3750 <br />
                                <br />
                                Общий вес: 22870 kg <br />
                                <br />

                                Цена: USD165100 (CIP TASHKENT) <br />
                                Цена: 2 137 100 000 сум с НДС (Растаможенный)
                            </p>
                        </div>
                    </li>
                </ul>
                <ul id="cbuldozer"
                    class="grid grid-cols-2 gap-12 pt-20 justify-items-center sm:grid-cols-3 catalogue-list xl:gap-x-20">
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="w-64 catalogue-img" src="./assets/images/excavator/Без-имени-28.png" alt="Photo" />
                        <p class="text-lg catalogue-text">XCMG Модель XE225DN</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Экскаватор гусеничный XCMG Модель XE225DN
                            </h1>
                            <p class="text-center tex-sm">
                                Модель XE225DN <br />
                                <br />
                                Объем ковша: 1,2 м3 <br />
                                <br />
                                Рабочий вес: 22500 кг <br />
                                <br />
                                Двигателя: Perkins 1104D-E44TA <br />
                                <br />
                                Мощность: 106 kW (142 л.с.) <br />
                                <br />
                                Радиус копания, мм: 9940 <br />
                                <br />
                                Высота копания, мм: 9620 <br />
                                <br />
                                Глубина копания, мм: 6680 <br />
                                <br />
                                Высота выгрузки, мм: 6780 <br />
                                <br />
                                Габаритные размеры, мм: 9755х2500х3044 <br />
                                <br />

                                Цена: USD104000 (CIP TASHKENT) <br />
                                Цена: 1 346 000 000 сум с НДС, растаможенный <br />
                                <br />

                                Возможна в лизинг и автокредит
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/excavator/exsa2.png" alt="Photo" />
                        <p class="text-lg catalogue-text">XCMG Модель XE265C</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Гусеничного экскаватора XCMG Модель XE265C
                            </h1>
                            <p class="text-center tex-sm">
                                Модель XE265C <br />
                                <br />
                                Объем ковша: 1,25 м3 <br />
                                <br />
                                Рабочий вес: 22500 кг <br />
                                <br />
                                Двигателя: ISUZU CC-6BG1TRP-05 (Япония) <br />
                                <br />
                                Мощность: 135.5 kW (184 л.с.) <br />
                                <br />
                                Радиус копания, мм: 10240 <br />
                                <br />
                                Высота копания, мм: 9662 <br />
                                <br />
                                Глубина копания, мм: 6895 <br />
                                <br />
                                Высота выгрузки, мм: 6810 <br />
                                <br />
                                Главный насос: Kawasaki (Япония) <br />
                                <br />
                                Ходовой двигатель: Doosan (Корея) <br />
                                <br />
                                Двигатель поворота: Kawasaki (Япония) <br />
                                <br />
                                Габаритные размеры, мм: 10160x3190x3100 <br />
                                <br />

                                Цена: USD122500 (CIP TASHKENT) <br />
                                Цена: 1 586 000 000 сум с НДС
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/excavator/cran3.png" alt="Photo" />
                        <p class="text-lg text-center catalogue-text">
                            XCMG Модель XE335C
                        </p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Гусеничного экскаватора XCMG
                            </h1>
                            <p class="text-center tex-sm">
                                Гусеничного экскаватора XCMG <br />
                                <br />
                                Модель XE335C <br />
                                <br />
                                Объем ковша: 1,4 ~ 1,6 м³. <br />
                                <br />
                                Рабочий вес: 33800 кг <br />
                                <br />
                                Двигателя: ISUZU AA-6HK1XQP (Япония) <br />
                                <br />
                                Мощность: 190.5 kW (259 л.с.) <br />
                                <br />
                                Радиус копания, мм: 10650 <br />
                                <br />
                                Высота копания, мм: 10074 <br />
                                <br />
                                Глубина копания, мм: 6972 <br />
                                <br />
                                Главный насос: Kawasaki (Япония) <br />
                                <br />
                                Ходовой двигатель: Doosan (Корея) <br />
                                <br />
                                Двигатель поворота: Kawasaki (Япония) <br />
                                <br />
                                Габаритные размеры, мм: 10160x3190x3100 <br />
                                <br />

                                Цена: USD158200 (CIP TASHKENT) <br />
                                Цена: 2 048 000 000 сум с НДС <br />
                                <br />

                                Возможна в лизинг и автокредит
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/excavator/cran4.png" alt="Photo" />
                        <p class="text-lg catalogue-text">XCMG Модель XE215C</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Гусеничного экскаватора XCMG
                            </h1>
                            <p class="text-center tex-sm">
                                Модель XE215C <br />
                                <br />
                                Объем ковша: 1,2 м3 <br />
                                <br />
                                Рабочий вес: 21500 кг <br />
                                <br />
                                Радиус копания, мм: 9925 <br />
                                <br />
                                Высота копания, мм: 9640 <br />
                                <br />
                                Глубина копания, мм: 6655 <br />
                                <br />
                                Высота выгрузки, мм: 6800 <br />
                                <br />
                                Габаритные размеры, мм: 9525х2990х3000 <br />
                                <br />

                                С двигателя: Perkins 1104D-E44TA <br />
                                <br />
                                Мощность: 106 kW (142 л.с.) <br />
                                <br />
                                Цена: USD102000 (CIP TASHKENT) <br />
                                <br />
                                Цена: 1 317 100 000 сум с НДС, растаможенный <br />
                                <br />

                                С двигателя: ISUZU BB-6BG1TRP <br />
                                <br />
                                Мощность: 118 kW (160 л.с.) <br />
                                <br />
                                Цена: USD105000 (CIP TASHKENT) <br />
                                Цена: 1 359 120 000 сум с НДС, растаможенный
                            </p>
                        </div>
                    </li>
                </ul>
                <ul id="ekskavator"
                    class="grid grid-cols-2 gap-12 pt-20 justify-items-center sm:grid-cols-3 catalogue-list xl:gap-x-20 active">
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/crans/cran1.png" alt="Photo" />
                        <p class="text-lg catalogue-text">XCMG XCT130, SERIES G1</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Автокран XCMG XCT130, SERIES G1
                            </h1>
                            <p class="text-center tex-sm">
                                Макс. грузоподъёмность, (КГ): 130.000 <br />
                                <br />
                                Длина основной стрелы (м): 13.1 <br />
                                <br />
                                Длина стрелы (м): 61 <br />
                                <br />
                                Длина гуська, (м): 8/11.55/20 = 28 <br />
                                <br />
                                Длина выдвинутой стрелы + гусек (м): 89 <br />
                                <br />
                                Двигатель: WP12.430E50, EURO 5 (V) <br />
                                <br />
                                Экологический класс: Евро-5 <br />
                                <br />
                                Мощность двигателя: 316кВт/430л.с./1900 <br />
                                <br />
                                Макс. Скорость, (км/ч): 90 <br />
                                <br />
                                Контргруз, (кг): 2 шт (13000+10000*2+6000 =45000) <br />
                                <br />
                                Общая вес автокран, (кг): 100 000 <br />
                                <br />
                                Габаритные размеры, (мм) 15195×3000×3970 <br />
                                <br />
                                Год выпуск: 2020/2021 год. Новый <br />
                                <br />
                                Завод-изготовитель: (XCMG) Xuzhou Heavy Machinery Co., Ltd.
                                <br />
                                <br />

                                Цена: USD626120 (CIP TASHKENT) <br />
                                Цена: 7 704 000 000 сум с НДС (РАСТАМОЖЕННЫЙ)
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/crans/33.jpg" alt="Photo" />
                        <p class="text-lg catalogue-text">XCMG XCT60L6, EURO 5 (V)</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Автокран XCMG XCT60L6, EURO 5 (V)
                            </h1>
                            <p class="text-center tex-sm">
                                . Макс. грузоподъёмность, 60.000 кг, <br />
                                <br />
                                Длина основной стрелы (м): 11.4 <br />
                                <br />
                                Длина стрелы (м): 52.3 <br />
                                <br />
                                Длина гуська, (м): 9.5/16m <br />
                                <br />
                                Длина выдвинутой стрелы + гусек (м): 68.3 <br />
                                <br />
                                Двигатель MC11.36-50 <br />
                                <br />
                                Экологический класс: Евро-5, <br />
                                <br />
                                Мощность двигателя: 265кВт/360л.с./1900, <br />
                                <br />
                                Макс. скорость км/ч 90, <br />
                                <br />
                                Контргруз: 2 шт (3000+2000+4500+2500 = 12000 кг) <br />
                                <br />
                                Общая вес автокран 57,600 кг <br />
                                <br />
                                Габаритные размеры 14050 мм * 2800мм* 3880 мм <br />
                                <br />
                                Год выпуск: 2020/2021 год. Новый <br />
                                <br />
                                Завод-изготовитель: (XCMG) Xuzhou Heavy Machinery Co., Ltd.
                                <br />
                                <br />

                                Цена: USD201000 (CIP TASHKENT) <br />
                                Цена: 2 602 000 000 сум с НДС (РАСТАМОЖЕННЫЙ)
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/crans/cran2.png" alt="Photo" />
                        <p class="text-lg text-center catalogue-text">
                            XCMG XCT130, SERIES G1
                        </p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Автокран XCMG XCT130, SERIES G1
                            </h1>
                            <p class="text-center tex-sm">
                                Макс. грузоподъёмность, (КГ): 130.000 Длина основной стрелы
                                (м): 13.1 <br />
                                <br />
                                Длина стрелы (м): 61 <br />
                                <br />
                                Длина гуська, (м): 8/11.55/20 = 28 <br />
                                <br />
                                Длина выдвинутой стрелы + гусек (м): 89 <br />
                                <br />
                                Двигатель: WP12.430E50, EURO 5 (V) <br />
                                <br />
                                Экологический класс: Евро-5 <br />
                                <br />
                                Мощность двигателя: 316кВт/430л.с./1900 <br />
                                <br />
                                Макс. Скорость, (км/ч): 90 <br />
                                <br />
                                Контргруз, (кг): 2 шт (13000+10000*2+6000 =45000) <br />
                                <br />
                                Общая вес автокран, (кг): 100 000 <br />
                                <br />
                                Габаритные размеры, (мм) 15195×3000×3970 <br />
                                <br />
                                Год выпуск: 2020/2021 год. Новый <br />
                                <br />
                                Завод-изготовитель: (XCMG) Xuzhou Heavy Machinery Co., Ltd.
                                <br />
                                <br />

                                Цена: USD626120 (CIP TASHKENT) <br />
                                Цена: 7 704 000 000 сум с НДС (РАСТАМОЖЕННЫЙ)
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/crans/cran4.png" alt="Photo" />
                        <p class="text-lg catalogue-text">ZOOMLION ZTC1500v</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Автокран ZOOMLION ZTC1500v
                            </h1>
                            <p class="text-center tex-sm">
                                В базовую комплектацию автомобильного крана входят: <br />
                                <br />
                                - крюковые подвески 90т, 55т основной подъём и 7т
                                дополнительный подъём <br />
                                <br />
                                - двухсекционный гусёк + решётчатая вставка 8 м <br />
                                <br />
                                - противовесы 45т (10т+14т+8т+2x6,5т) <br />
                                <br />

                                Основные характеристики: <br />
                                <br />
                                - грузоподъемность: 150 т <br />
                                <br />
                                - грузовой момент: 4 704 кН/м <br />
                                <br />
                                - высота подъема на основной стреле: 72,5 м <br />
                                <br />
                                - высота подъема на стреле с гуськом и вставкой: 95 м <br />
                                <br />
                                - масса в транспортном состоянии: 54900 кг <br />
                                <br />
                                - колесная формула: 10х6 <br />
                                <br />
                                - габариты (Д х Ш х В): 15400×3000×3940 мм
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/crans/cran5.png" alt="Photo" />
                        <p class="text-lg catalogue-text">ZOOMLION ZTC550V</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Автокран ZOOMLION ZTC550V
                            </h1>
                            <p class="text-center tex-sm">
                                Конструкция автокрана включает в себя новый, более мощный
                                грузоподъемный механизм, который обеспечивает большую высоту
                                подъема, высокую эффективность работы, большую подъемную
                                мощность, оптимальное управление затратами, экономичность, а
                                также стабильность в работе. <br />
                                <br />

                                - Полная масса транспортного средства: 41000 кг <br />
                                <br />
                                - Нагрузка на переднюю ось: 15000 кг <br />
                                <br />
                                - Нагрузка на сдвоенную и заднюю оси: 26000 кг <br />
                                <br />
                                - Макс. грузоподъемность: 55000 кг <br />
                                <br />
                                - Номинальный рабочий радиус: 3 м <br />
                                <br />
                                - Скорость поворота: 2.2 об/мин <br />
                                <br />
                                - Высота подъема полностью выдвинутой стрелы: 43.6 м <br />
                                <br />
                                - Время подъема стрелы: 50 с <br />
                                <br />
                                - Время полного выдвижения стрелы: 95 с
                            </p>
                        </div>
                    </li>
                </ul>
                <ul id="combine"
                    class="grid grid-cols-2 gap-12 pt-20 justify-items-center sm:grid-cols-3 catalogue-list xl:gap-x-20">
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/autocrans/cran1.png" alt="Photo" />
                        <p class="pt-0 text-lg catalogue-text">
                            Sinotruk Howo ZZ4257S9401V
                        </p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Бортовой Грузовик Sinotruk Howo ZZ4257S9401V
                            </h1>
                            <p class="text-center tex-sm">
                                - Модель двигатели: SINOTRUK WD615.95 Евро 3 <br />
                                <br />
                                - Макс. мощность: 336л.с. <br />
                                <br />
                                - Колёсная формула: 6×4 <br />
                                <br />
                                - Размеры: 60002300600 <br />
                                <br />
                                - Объём топливного бака: 350 л <br />
                                <br />
                                - Снаряженная масса: 11200 кг <br />
                                <br />
                                - Полная масса: 30000 кг <br />
                                <br />

                                ➕Кондиционер, обогреватель, спальное место,
                                электро-стеклоподъемники, запасное колесо.
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/autocrans/cran3.png" alt="Photo" />
                        <p class="text-lg catalogue-text pb-7">SERIES XCMG 10T</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Кран манипулятор SERIES XCMG 10T
                            </h1>
                            <p class="text-left tex-sm">
                                Модель крана: SQ10SK3Q <br />
                                <br />
                                Длина выдвижения: 12000 мм <br />
                                <br />
                                Высота подъема: 13800 мм <br />
                                <br />
                                Количество выдвижных секций: 4 шт. <br />
                                <br />
                                на вылете стрелы 2,50 м. - 10 000 кг. <br />
                                <br />
                                на вылете стрелы 4,5 м. - 5 500 кг. <br />
                                <br />
                                на вылете стрелы 7,0 м. - 3 200 кг. <br />
                                <br />
                                на вылете стрелы 9,0 м. - 2 300 кг. <br />
                                <br />
                                на вылете стрелы 12,0 м. - 1 500 кг. <br />
                                <br />
                                Кран весовой: 3800 кг <br />
                                <br />
                                Угол поворота: степень 360 все вращения <br />
                                <br />

                                Шасси: FOTON <br />
                                <br />
                                Модель шасси: BJ1257VMPJP, 6x4 <br />
                                <br />
                                Модель двигателя: WP10.270E32 <br />
                                <br />
                                Мощность лошади: 199kW/270 л.с. <br />
                                <br />
                                Размер кузов: 7700×2300×600 (мм) <br />
                                <br />
                                Грузоподъемность: 12205 кг <br />
                                <br />
                                Снаряженная масса: 12600 кг; <br />
                                <br />
                                Общий вес: более 24805 кг; <br />
                                <br />
                                Год выпуск: 2021 год, новый <br />
                                <br />

                                СРОК ПОСТАВКА 30-35 ДНЕЙ <br />
                                <br />

                                Цена: USD66210 (CIP TASHKENT) <br />
                                Цена: 857 040 000 сум с НДС
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="w-full catalogue-img" src="./assets/images/autocrans/cran6.png" alt="Photo" />
                        <p class="text-lg text-center catalogue-text">
                            SERIES XCMG 6.3Т с бурением и люлькой
                        </p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Кран манипулятор SERIES XCMG 6.3Т с бурением и люлькой
                            </h1>
                            <p class="text-center tex-sm">
                                Модель крана: SQ10SK3Q <br />
                                <br />
                                Длина выдвижения: 12000 мм <br />
                                <br />
                                Высота подъема: 13800 мм <br />
                                <br />
                                Количество выдвижных секций: 4 шт. <br />
                                <br />
                                на вылете стрелы 2,50 м. - 10 000 кг. <br />
                                <br />
                                на вылете стрелы 4,5 м. - 5 500 кг. <br />
                                <br />
                                на вылете стрелы 7,0 м. - 3 200 кг. <br />
                                <br />
                                на вылете стрелы 9,0 м. - 2 300 кг. <br />
                                <br />
                                на вылете стрелы 12,0 м. - 1 500 кг. <br />
                                <br />
                                Кран весовой: 3800 кг Угол поворота: степень 360 все вращения
                                <br />
                                <br />

                                Шасси: FOTON <br />
                                <br />
                                Модель шасси: BJ1257VMPJP, 6x4 <br />
                                <br />
                                Модель двигателя: WP10.270E32 <br />
                                <br />
                                Мощность лошади: 199kW/270 л.с. <br />
                                <br />
                                Размер кузов: 7700×2300×600 (мм) <br />
                                <br />
                                Грузоподъемность: 12205 кг <br />
                                <br />
                                Снаряженная масса: 12600 кг; <br />
                                <br />
                                Общий вес: более 24805 кг; <br />
                                <br />
                                Год выпуск: 2021 год, новый <br />
                                <br />

                                СРОК ПОСТАВКА 30-35 ДНЕЙ <br />
                                <br />

                                Цена: USD66210 (CIP TASHKENT) <br />
                                Цена: 857 040 000 сум с НДС
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="w-full catalogue-img" src="./assets/images/autocrans/cran4.png" alt="Photo" />
                        <p class="text-lg catalogue-text">
                            Кран манипулятор SERIES XCMG 16T
                        </p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Кран манипулятор SERIES XCMG 16T
                            </h1>
                            <p class="text-center tex-sm">
                                Модель крана: SQS400D <br />
                                <br />
                                Максимальная грузоподъемность: 16000 кг <br />
                                <br />
                                Рекомендованная мощность: 41кВт <br />
                                <br />
                                Угол поворота: DEGREE 360 All Rotation <br />
                                <br />
                                Максимальная длина выдвижения: 18500мм <br />
                                <br />
                                Максимальная высота подъема: 19500 мм <br />
                                <br />
                                Максимальная высота: 75 градусов <br />
                                <br />

                                Производитель шасси: XCMG <br />
                                <br />
                                Модель шасси: NXG1310D5NEX / 8*4 <br />
                                <br />
                                Шасси грузоподъёмности: 43.200 кг <br />
                                <br />
                                Модель двигателя: WP10.310E53. <br />
                                <br />
                                Мощность двигателя: 228 кВт / 310 л.с <br />
                                <br />
                                Размер кузов: 8050 × 2450 × 600 мм <br />
                                <br />
                                Пассажиры: 3 места <br />
                                <br />
                                Тип шины: 10.00R20 <br />
                                <br />
                                Год выпуск: 2021 г., Новый <br />
                                <br />

                                - Цена: USD 96700 (CIP TASHKENT) <br />
                                - Цена: 1 186 000 000 сум с НДС
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/autocrans/cran2.png" alt="Photo" />
                        <p class="text-lg catalogue-text">
                            SERIES XCMG 6.3Т с бурением и люлькой
                        </p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Кран манипулятор SERIES XCMG 6.3Т с бурением и люлькой
                            </h1>
                            <p class="text-center tex-sm">
                                Модель крана: SQ6.3SK3Q <br />
                                <br />
                                Грузоподъемность кран: 6300 кг <br />
                                <br />
                                Длина выдвижения: 11000 мм <br />
                                <br />
                                Высота подъема: 13000 мм <br />
                                <br />
                                Количество выдвижных секций: 4 шт. <br />
                                <br />
                                на вылете стрелы 2,50 м. - 6 300 кг. <br />
                                <br />
                                на вылете стрелы 4,37 м. - 2 600 кг. <br />
                                <br />
                                на вылете стрелы 7,19 м. - 1 600 кг. <br />
                                <br />
                                на вылете стрелы 10,0 м. - 1 000 кг. <br />
                                <br />
                                на вылете стрелы 11,0 м. - 600 кг. <br />
                                <br />
                                Кран весовой: 2230 кг <br />
                                <br />
                                Угол поворота: степень 360 все вращения <br />
                                <br />

                                Шасси: FOTON <br />
                                <br />
                                Модель шасси: BJ1226VMPGN-F1, 4x2 <br />
                                <br />
                                Модель двигателя: ISB220 40 <br />
                                <br />
                                Мощность лошади: 163kW/220 л.с. <br />
                                <br />
                                Размер кузов: 6000×2300×600 (мм) <br />
                                <br />
                                Грузоподъемность: 11550 кг <br />
                                <br />
                                Снаряженная масса: 10650 кг; <br />
                                <br />
                                Общий вес: более 22200 кг; <br />
                                <br />
                                Год выпуск: 2020/2021 год, новый <br />
                                <br />

                                Цена: USD59120 (CIP TASHKENT) <br />
                                Цена: 765 012 000 сум с НДС
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/autocrans/cran3.png" alt="Photo" />
                        <p class="text-lg text-center catalogue-text">
                            SERIES XCMG 10T с бурением и люлькой
                        </p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Кран манипулятор SERIES XCMG 10T с бурением и люлькой
                            </h1>
                            <p class="text-center tex-sm">
                                Модель крана: SQ10SK3Q <br />
                                <br />
                                Длина выдвижения: 12000 мм <br />
                                <br />
                                Высота подъема: 13800 мм <br />
                                <br />
                                Количество выдвижных секций: 4 шт. <br />
                                <br />
                                на вылете стрелы 2,50 м. - 10 000 кг. <br />
                                <br />
                                на вылете стрелы 4,5 м. - 5 500 кг. <br />
                                <br />
                                на вылете стрелы 7,0 м. - 3 200 кг. <br />
                                <br />
                                на вылете стрелы 9,0 м. - 2 300 кг. <br />
                                <br />
                                на вылете стрелы 12,0 м. - 1 500 кг. <br />
                                <br />
                                Кран весовой: 3800 кг <br />
                                <br />
                                Угол поворота: степень 360 все вращения <br />
                                <br />

                                Шасси: FOTON <br />
                                <br />
                                Модель шасси: BJ1257VMPJP, 6x4 <br />
                                <br />
                                Модель двигателя: WP10.270E32 <br />
                                <br />
                                Мощность лошади: 199kW/270 л.с. <br />
                                <br />
                                Размер кузов: 7700×2300×600 (мм) <br />
                                <br />
                                Грузоподъемность: 12205 кг <br />
                                <br />
                                Снаряженная масса: 12600 кг; <br />
                                <br />
                                Общий вес: более 24805 кг; <br />
                                <br />
                                Год выпуск: 2021 год, новый <br />
                                <br />

                                СРОК ПОСТАВКА 30-35 ДНЕЙ <br />
                                <br />

                                Цена: USD78500 (CIP TASHKENT) <br />
                                Цена: 997 120 000 сум с НДС
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/autocrans/cran3.png" alt="Photo" />
                        <p class="text-lg catalogue-text">SERIES XCMG 10T с бурением</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Кран манипулятор SERIES XCMG 10T с бурением
                            </h1>
                            <p class="text-center tex-sm">
                                Модель крана: SQ10SK3Q <br />
                                <br />
                                Длина выдвижения: 12000 мм <br />
                                <br />
                                Высота подъема: 13800 мм <br />
                                <br />
                                Количество выдвижных секций: 4 шт. <br />
                                <br />
                                на вылете стрелы 2,50 м. - 10 000 кг. <br />
                                <br />
                                на вылете стрелы 4,5 м. - 5 500 кг. <br />
                                <br />
                                на вылете стрелы 7,0 м. - 3 200 кг. <br />
                                <br />
                                на вылете стрелы 9,0 м. - 2 300 кг. <br />
                                <br />
                                на вылете стрелы 12,0 м. - 1 500 кг. <br />
                                <br />
                                Кран весовой: 3800 кг <br />
                                <br />
                                Угол поворота: степень 360 все вращения <br />
                                <br />

                                Шасси: FOTON <br />
                                <br />
                                Модель шасси: BJ1257VMPJP, 6x4 <br />
                                <br />
                                Модель двигателя: WP10.270E32 <br />
                                <br />
                                Мощность лошади: 199kW/270 л.с. <br />
                                <br />
                                Размер кузов: 7700×2300×600 (мм) <br />
                                <br />
                                Грузоподъемность: 12205 кг <br />
                                <br />
                                Снаряженная масса: 12600 кг; <br />
                                <br />
                                Общий вес: более 24805 кг; <br />
                                <br />
                                Год выпуск: 2021 год, новый <br />
                                <br />

                                СРОК ПОСТАВКА 30-35 ДНЕЙ <br />
                                <br />

                                Цена: USD76410 (CIP TASHKENT) <br />
                                Цена: 976 120 000 сум с НДС
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/autocrans/cran5.png" alt="Photo" />
                        <p class="text-lg catalogue-text">SERIES XCMG с бурением</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Кран манипулятор SERIES XCMG с бурением
                            </h1>
                            <p class="text-center tex-sm">
                                Модель крана: SQS350G <br />
                                <br />
                                Максимальная грузоподъемность: 15000 кг <br />
                                <br />
                                Рекомендованная мощность: 41кВт <br />
                                <br />
                                Угол поворота: DEGREE 360 All Rotation <br />
                                <br />
                                Максимальная длина выдвижения: 18500мм <br />
                                <br />
                                Максимальная высота подъема: 19500 мм <br />
                                <br />
                                Максимальная высота: 75 градусов <br />
                                <br />

                                Производитель шасси: XCMG <br />
                                <br />
                                Модель шасси: NXG1310D5NEX / 8*4 <br />
                                <br />
                                Шасси грузоподъёмности: 43.200 кг <br />
                                <br />
                                Модель двигателя: WP10.310E53. <br />
                                <br />
                                Мощность двигателя: 228 кВт / 310 л.с <br />
                                <br />
                                Размер кузов: 8050 × 2450 × 600 мм <br />
                                <br />
                                Пассажиры: 3 места <br />
                                <br />
                                Тип шины: 10.00R20 <br />
                                <br />
                                Год выпуск: 2021 г., Новый <br />
                                <br />

                                - Цена: USD 99800 (CIP TASHKENT) <br />
                                - Цена: 1 292 000 000 сум с НДС <br />
                                <br />

                                СРОК ПОСТАВКА 20-25 ДНЕЙ
                            </p>
                        </div>
                    </li>
                </ul>
                <ul id="katki"
                    class="grid grid-cols-2 gap-12 pt-20 sm:grid-cols-3 justify-items-center catalogue-list xl:gap-x-20">
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/catog/cat1.png" alt="Photo" />
                        <p class="text-lg catalogue-text">XCMG с бондаж Модель XS303S</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Каток одно вальцовый XCMG с бондаж
                            </h1>
                            <p class="text-center tex-sm">
                                Модель XS303S <br />
                                <br />
                                Рабочая масса: 21000 kg <br />
                                <br />
                                Двигатель DEUTZ BF6M1013-26T3R <br />
                                <br />
                                Макс. Мощность: 192kw (261л.с.) 2200rpm <br />
                                <br />
                                Тип с водяным охлаждением, турбированный <br />
                                <br />
                                Масса распределения на передний валец: 11000 kg <br />
                                <br />
                                Статическая нагрузка: 845 N/cm <br />
                                <br />
                                Номинальная сила подъема: 30% <br />
                                <br />
                                Вибрационная частота (высокая/низкая): 27/32 Hz <br />
                                <br />
                                Ном.амплитуда (высокая/низкая): 2,0 / 1,0 mm <br />
                                <br />
                                Усилие вибрации (высок. /низ.): 520/390 кН <br />
                                <br />
                                Ширина вибрационного барабана: 2170 мм <br />
                                <br />
                                Диаметр вибрационного барабана: 1612 мм <br />
                                <br />
                                Завод-изготовитель: XCMG <br />
                                <br />
                                Год выпуска: 2021 год, Товар новый <br />
                                <br />

                                Цена: USD128200 (CIP TASHKENT) <br />
                                Цена: 1 562 000 000 сум с НДС растаможенный
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/catog/cat2.png" alt="Photo" />
                        <p class="text-lg catalogue-text">XCMG XD143</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Каток двух вальцовый XCMG XD143
                            </h1>
                            <p class="text-center tex-sm">
                                Рабочий вес: 14000 kg <br />
                                <br />
                                Форма привода: Гидравлический двойной привод <br />
                                <br />
                                Производитель двигателя: Cummins QSB4.5-C160-30 <br />
                                <br />
                                Номинальная мощность: 119kw (161,8л.с.) 2200rpm <br />
                                <br />
                                Возбуждающая сила (высокая частота / низкая частота) <br />
                                <br />
                                кН 158/98 <br />
                                <br />
                                Преодолеваемый подъем: 35% <br />
                                <br />
                                Частота колебаний Гц 45/55 (Z101) <br />
                                <br />
                                Ширина вибрационного барабана: 2130 мм <br />
                                <br />
                                Диаметр вибрационного барабана: 1300 мм <br />
                                <br />
                                Завод-изготовитель: XCMG <br />
                                <br />
                                Год выпуска: 2021 год, Товар новый <br />
                                <br />

                                Цена: USD79710 (CIP TASHKENT) <br />
                                Цена: 997 010 000 сум с НДС (Растаможенный)
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/catog/cat3.png" alt="Photo" />
                        <p class="text-lg text-center catalogue-text">Вальцовый XCMG</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Каток одно вальцовый XCMG
                            </h1>
                            <p class="text-center tex-sm">
                                Модель XS203J <br />
                                <br />
                                Рабочая масса: 20000 kg <br />
                                <br />
                                Двигатель SHANGCHAI SC8D175.2G2B1 <br />
                                <br />
                                Макс. Мощность: 128 kW - 174 л.с./1800r/min <br />
                                <br />
                                Тип с водяным охлаждением, турбированный <br />
                                <br />
                                Масса распределения на передний валец: 10000 kg <br />
                                <br />
                                Статическая нагрузка: 470 N/cm <br />
                                <br />
                                Номинальная сила подъема: 30% <br />
                                <br />
                                Вибрационная частота (высокая/низкая): 28/33 Hz <br />
                                <br />
                                Ном.амплитуда (высокая/низкая): 1.9/0.95 mm <br />
                                <br />
                                Усилие вибрации (высок. /низ.): 353/245 Kn <br />
                                <br />
                                Ширина вибрационного барабана: 2130 мм <br />
                                <br />
                                Диаметр вибрационного барабана: 1600 мм <br />
                                <br />
                                Завод-изготовитель: XCMG <br />
                                <br />
                                Год выпуска: 2021 год, Товар новый <br />
                                <br />

                                Цена: USD59710 (CIP TASHKENT) <br />
                                Цена: 773 000 000 сум с НДС растаможенный
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/catog/cat4.png" alt="Photo" />
                        <p class="text-lg catalogue-text">XCMG с бондаж Модель XS163J</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                XCMG с бондаж XS163J
                            </h1>
                            <p class="text-center tex-sm">
                                Модель XS163J <br />
                                <br />
                                Рабочая масса: 17000 kg <br />
                                <br />
                                Двигатель CUMMINS 6BTA5.9-C170 <br />
                                <br />
                                Макс. Мощность: 125 kW - 170 л.с./2200r/min <br />
                                <br />
                                Тип с водяным охлаждением, турбированный <br />
                                <br />
                                Масса распределения на передний валец: 10750 kg <br />
                                <br />
                                Статическая нагрузка: 449 N/cm <br />
                                <br />
                                Номинальная сила подъема: 39% <br />
                                <br />
                                Вибрационная частота (высокая/низкая): 28/33 Hz <br />
                                <br />
                                Ном.амплитуда (высокая/низкая): 1.86/0.88 mm <br />
                                <br />
                                Усилие вибрации (высок. /низ.): 320/235 Kn <br />
                                <br />
                                Ширина вибрационного барабана: 2130 мм <br />
                                <br />
                                Диаметр вибрационного барабана: 1725 мм <br />
                                <br />
                                Завод-изготовитель: XCMG <br />
                                <br />
                                Год выпуска: 2021 год, Товар новый <br />
                                <br />

                                Цена: USD63900 (CIP TASHKENT) <br />
                                Цена: 827 300 000 сум с НДС растаможенный
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/catog/cat5.png" alt="Photo" />
                        <p class="text-lg catalogue-text">XCMG XD83VT</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Комбинированный вибрационный дорожный каток XCMG XD83VT
                            </h1>
                            <p class="text-center tex-sm">
                                Рабочий вес: 8000 kg <br />
                                <br />
                                Форма привода: Гидравлический передний одно <br />
                                <br />барабанный и задний пневмошинный <br />
                                <br />
                                Производитель двигателя: <br />
                                <br />
                                Номинальная мощность: kw ( л.с.) rpm <br />
                                <br />
                                Рабочая скорость: 0 ～ км / ч <br />
                                <br />
                                Частота вибрации: Hz <br />
                                <br />
                                Возбуждающая сила: kN <br />
                                <br />
                                Ширина вибрационного барабана: мм <br />
                                <br />
                                Диаметр вибрационного барабана: мм <br />
                                <br />
                                Преодолеваемый подъем: % <br />
                                <br />
                                Завод-изготовитель: XCMG <br />
                                <br />
                                Год выпуска: 2021 год <br />
                                <br />

                                Цена: USD64000 (CIP TASHKENT) <br />
                                Цена: 826 012 000 сум с НДС растаможенный
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/catog/cat6.png" alt="Photo" />
                        <p class="text-lg text-center catalogue-text">
                            XCMG Модель: XD103
                        </p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Каток двух вальцовый XCMG Модель: XD10
                            </h1>
                            <p class="text-center tex-sm">
                                Рабочий вес: 10.000 kg Форма привода: Гидравлический двух
                                барабанный <br />
                                <br />
                                Производитель двигателя: Deutz (Германия) модель:
                                BF4M2012-10T3R <br />
                                <br />
                                Номинальная мощность: 74.9kw (102л.с.) 2300rpm <br />
                                <br />
                                Частота вибрации: 58/48hz <br />
                                <br />
                                Возбуждающая сила: 60/75KN <br />
                                <br />
                                Ширина вибрационного барабана: 1750 мм <br />
                                <br />
                                Диаметр вибрационного барабана: 1150 мм <br />
                                <br />
                                Преодолеваемый подъем: 38% <br />
                                <br />
                                Завод-изготовитель: XCMG <br />
                                <br />
                                Год выпуска: 2021 год, Товар новый <br />
                                <br />

                                Цена: USD62700 (CIP TASHKENT) <br />
                                Цена: 811 102 000 сум с НДС растаможенный
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/catog/cat7.png" alt="Photo" />
                        <p class="text-lg catalogue-text">XCMG Модель XP303</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Каток пневмошинный XCMG
                            </h1>
                            <p class="text-center tex-sm">
                                Рабочий вес 30300 kg Производитель двигателя: SHANGCHAI
                                SC7H180.2G3 <br />
                                <br />
                                Номинальная мощность: 132kw (180л.с.) 1800rpm <br />
                                <br />
                                Шины: 9 штук, размер 13/80A-20-16PR <br />
                                <br />
                                Номинальная скорость: км / ч 0 ～ 8/0 ～ 17 <br />
                                <br />
                                Ширина захвата: 2360 мм <br />
                                <br />
                                Величина нахлыста шин: мм 65 <br />
                                <br />
                                Давление на грунт: кПа 200 ～ 545 <br />
                                <br />
                                Завод-изготовитель: XCMG <br />
                                <br />
                                Год выпуска: 2021 год, Товар новый <br />
                                <br />

                                Цена: USD72100 (CIP TASHKENT) <br />
                                Цена: 933 200 000 сум с НДС растаможенный
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/catog/cat8.png" alt="Photo" />
                        <p class="text-lg catalogue-text">XCMG с бондаж Модель XS303S</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Каток одно вальцовый XCMG с бондаж
                            </h1>
                            <p class="text-center tex-sm">
                                Модель XS303S Рабочая масса: 21000 kg <br />
                                <br />
                                Двигатель DEUTZ BF6M1013-26T3R <br />
                                <br />
                                Макс. Мощность: 192kw (261л.с.) 2200rpm <br />
                                <br />
                                Тип с водяным охлаждением, турбированный <br />
                                <br />
                                Масса распределения на передний валец: 11000 kg <br />
                                <br />
                                Статическая нагрузка: 845 N/cm <br />
                                <br />
                                Номинальная сила подъема: 30% <br />
                                <br />
                                Вибрационная частота (высокая/низкая): 27/32 Hz <br />
                                <br />
                                Ном.амплитуда (высокая/низкая): 2,0 / 1,0 mm <br />
                                <br />
                                Усилие вибрации (высок. /низ.): 520/390 кН <br />
                                <br />
                                Ширина вибрационного барабана: 2170 мм <br />
                                <br />
                                Диаметр вибрационного барабана: 1612 мм <br />
                                <br />
                                Завод-изготовитель: XCMG <br />
                                <br />
                                Год выпуска: 2021 год, Товар новый <br />
                                <br />

                                Цена: USD128200 (CIP TASHKENT) <br />
                                Цена: 1 562 000 000 сум с НДС растаможенный
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/catog/cat9.png" alt="Photo" />
                        <p class="text-lg text-center catalogue-text">XCMG XD83</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                XCMG XD83
                            </h1>
                            <p class="text-center tex-sm">
                                Рабочий вес: 8500kg Форма привода: Гидравлический двойной
                                привод <br />
                                <br />
                                Производитель двигателя: Deutz BF4M2012-10T3R <br />
                                <br />
                                Номинальная мощность: 74.9kw (102л.с.) 2300rpm <br />
                                <br />
                                Номинальная скорость <br />
                                <br />
                                Частота вибрации: 58/48hz <br />
                                <br />
                                Возбуждающая сила: 60/75KN <br />
                                <br />
                                Преодолеваемый подъем: 35% <br />
                                <br />
                                Завод-изготовитель: XCMG <br />
                                <br />
                                Год выпуска: 2021 год, Товар новый <br />
                                <br />

                                Цена: USD59700 (CIP TASHKENT) <br />
                                Цена: 762 110 000 сум с НДС растаможенный.
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/catog/cat10.png" alt="Photo" />
                        <p class="text-lg text-center catalogue-text">XCMG XD123</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Каток двух вальцовый XCMG XD123
                            </h1>
                            <p class="text-center tex-sm">
                                Рабочий вес: 12300 kg Форма привода: Гидравлический двойной
                                привод <br />
                                <br />
                                Производитель двигателя: DEUTZ BF4M2012-13T3R <br />
                                <br />
                                Номинальная мощность: 98kw (133л.с.) 2300rpm <br />
                                <br />
                                Частота колебаний Гц 45/55 (Z101) <br />
                                <br />
                                Возбуждающая сила (высокая частота / низкая частота) кН 85/140
                                <br />
                                <br />
                                Преодолеваемый подъем: 35% <br />
                                <br />
                                Ширина вибрационного барабана: 2130 мм <br />
                                <br />
                                Диаметр вибрационного барабана: 1300 мм <br />
                                <br />
                                Завод-изготовитель: XCMG <br />
                                <br />
                                Год выпуска: 2021 год, Товар новый <br />
                                <br />

                                Цена: USD71200 (CIP TASHKENT) <br />
                                Цена: 911 310 000 сум с НДС (Растаможенный)
                            </p>
                        </div>
                    </li>

                    <li class="flex flex-col items-center justify-center catalogue-item">
                        <img class="catalogue-img" src="./assets/images/catog/cat12.png" alt="Photo" />
                        <p class="text-lg text-center catalogue-text">Модель XM1003</p>
                        <div class="p-8 catalogue-item-content">
                            <h1 class="text-lg font-semibold text-center catalogue-item-content-title">
                                Дорожная фреза XCMG Модель XM1003
                            </h1>
                            <p class="text-center tex-sm">
                                Двигатель модель: SHANGCHAI SC9DK220G3 <br />
                                <br />
                                Номинальная мощность кВт: 162 / 220 л.с. при 2200 об.мин
                                <br />
                                <br />
                                Максимум. фрезерование с мм: 1000 <br />
                                <br />
                                Максимум. глубина фрезерования мм: 180 <br />
                                <br />
                                Фрезерный круг <br />
                                <br />
                                Количество инструментов: 82 <br />
                                <br />
                                Диаметр барабана с инструментами мм: 700 <br />
                                <br />
                                Характеристики <br />
                                <br />
                                Рабочая скорость м / мин: 0 ~ 40 <br />
                                <br />
                                Скорость путешествия км / ч: 0 ~ 8 <br />
                                <br />
                                Эксплуатационная масса кг: 15600 <br />
                                <br />
                                Объем Топливный бак L: 1400 <br />
                                <br />
                                Бак гидравлического масла L: 130 <br />
                                <br />
                                Водный танк L: 800 <br />
                                <br />
                                Конвейер ширина мм: 850 <br />
                                <br />
                                Измерение Общая техника Д * Ш * В мм: 4690 * 2500 * 3500
                                <br />
                                <br />
                                Конвейер Д * Ш * В мм: 8050 * 1070 * 980
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- catalogue section image switcher section-start -->
            <div class="catalogue-slider">
                <div class="catalogue-slider-line">
                    <div class="flex items-center catalogue-image__btn catalogue-btn-0">
                        <p data-target="tools" class="cursor-pointer catalogue-image-text">
                            Запчасти
                        </p>
                        <span id="toolsCircle"
                            class="w-3 h-3 rounded-full cursor-pointer catalogue-image__btn-circle ml-md"></span>
                    </div>
                    <div class="flex items-center catalogue-image__btn catalogue-btn-1">
                        <p data-target="peregruz" class="cursor-pointer catalogue-image-text">
                            Автобетононасос
                        </p>
                        <span id="peregruzSircle"
                            class="w-3 h-3 rounded-full cursor-pointer catalogue-image__btn-circle ml-md"></span>
                    </div>
                    <div class="flex items-center catalogue-image__btn catalogue-btn-2">
                        <p data-target="cbuldozer" id="cbuldozer" class="cursor-pointer catalogue-image-text">
                            Экскаваторы
                        </p>
                        <span id="buldozerSircle"
                            class="w-3 h-3 rounded-full cursor-pointer catalogue-image__btn-circle ml-md"></span>
                    </div>
                    <div class="flex items-center catalogue-image__btn active catalogue-btn-3">
                        <p data-target="ekskavator" class="cursor-pointer catalogue-image-text">
                            Автокраны
                        </p>
                        <span id="ekskavatorSircle"
                            class="w-3 h-3 rounded-full cursor-pointer catalogue-image__btn-circle ml-md"></span>
                    </div>
                    <div class="flex items-center catalogue-image__btn catalogue-btn-5">
                        <p data-target="combine" class="cursor-pointer catalogue-image-text">
                            Краны
                        </p>
                        <span id="combineSircle"
                            class="w-3 h-3 rounded-full cursor-pointer catalogue-image__btn-circle ml-md"></span>
                    </div>
                    <div class="flex items-center catalogue-image__btn catalogue-btn-6">
                        <p data-target="katki" class="cursor-pointer catalogue-image-text">
                            Катки
                        </p>
                        <span id="katkiSircle"
                            class="w-3 h-3 rounded-full cursor-pointer catalogue-image__btn-circle ml-md"></span>
                    </div>
                </div>
            </div>
            <!-- catalogue section image switcher section-end -->
        </div>

        <!-- catalogue  section order link -->
        <div class="flex justify-center pb-12 sm:pb-20">
            <a href="#questions" class="px-5 py-1 rounded-sm contact-form-link">Заказать</a>
        </div>
        <!-- </div> -->

        <div class="rounded catalogue-select-header">
            <p class="text-lg cursor-pointer catalogue-selector-text">Автокраны</p>
        </div>

        <div class="catalogue-select-wrapper">
            <div class="catalogue-select-place">
                <div class="catalogue-select-content">
                    <ul class="rounded rounded-t-none catalogue-select-list text-md">
                        <li class="cursor-pointer" data-target="tools" id="selectTools">
                            <p data-target="tools" id="selectTools" class="first catalogue-selector-subtext">
                                Запчасти
                            </p>
                        </li>
                        <li class="cursor-pointer" data-target="peregruz" id="selectPeregruz">
                            <p data-target="peregruz" id="selectPeregruz" class="peregruz catalogue-selector-subtext">
                                Автобетононасос
                            </p>
                        </li>
                        <li class="cursor-pointer" data-target="cbuldozer" id="selectBuld">
                            <p data-target="cbuldozer" id="selectBuld" class="buld catalogue-selector-subtext">
                                Экскаваторы
                            </p>
                        </li>
                        <li class="cursor-pointer" data-target="ekskavator" id="selectExcavator">
                            <p data-target="ekskavator" id="selectExcavator" class="eksa catalogue-selector-subtext">
                                Автокраны
                            </p>
                        </li>
                        <li class="cursor-pointer" data-target="combine" id="selectCombine">
                            <p data-target="combine" id="selectCombine" class="comb catalogue-selector-subtext">
                                Краны
                            </p>
                        </li>
                        <li class="cursor-pointer" data-target="katki" id="selectKatoki">
                            <p data-target="katki" id="selectKatoki" class="kat catalogue-selector-subtext">
                                Катки
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- catalogue section-end -->

        <!-- order section-start -->
        <section class="order" id="заказать">
            <div class="container flex flex-col items-center justify-center py-20 pb-10 mx-auto ">
                <h1 class="visually-hidden">Lorem, ipsum dolor.</h1>
                <h2 class="order-title">Как заказать технику?</h2>
                <ul class="order-list">
                    <li class="order-item">
                        <a class="flex flex-col items-center order-link">
                            <img class="order-img" src="./assets/images/choice.png" alt="photo" />
                            <p class="order-text">Выберите подходящий вариант</p>
                        </a>
                    </li>
                    <li class="order-item">
                        <a class="flex flex-col items-center order-link">
                            <img class="order-img" src="./assets/images/application.png" alt="photo" />
                            <p class="order-text">Оставьте заявку</p>
                        </a>
                    </li>
                    <li class="order-item">
                        <a class="flex flex-col items-center order-link">
                            <img class="order-img" src="./assets/images/interview.png" alt="photo" />
                            <p class="order-text">Встреча</p>
                        </a>
                    </li>
                    <li class="order-item">
                        <a class="flex flex-col items-center order-link">
                            <img class="order-img" src="./assets/images/signature.png" alt="photo" />
                            <p class="order-text">Заключаем договор</p>
                        </a>
                    </li>
                    <li class="order-item">
                        <a class="flex flex-col items-center order-link">
                            <img class="order-img" src="./assets/images/credit-card (1).png" alt="photo" />
                            <p class="order-text">Оплата</p>
                        </a>
                    </li>
                    <li class="order-item">
                        <a class="flex flex-col items-center order-link">
                            <img class="order-img" src="./assets/images/case-study.png" alt="photo" />
                            <p class="order-text">Счастливый клиент</p>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- order section-end -->

        <!-- why section-start -->
        <section class="why">
            <div class="container pt-32">
                <h1 class="visually-hidden">Lorem, ipsum dolor.</h1>
                <h2 class="inline-block text-2xl text-3xl font-bold why-title sm:pb-16">
                    Почему выбирают нас?
                </h2>
                <div class="flex items-center justify-center why-separator">
                    <div class="why-image">
                        <img class="why-img" src="./assets/images/volvo-sd135b,5fd190c5.png" alt="photo" />
                    </div>
                    <div class="why-elements">
                        <ul class="grid grid-cols-1 gap-8 pt-8 gap-y-12 why-list sm:grid-cols-2">
                            <li class="why-item">
                                <img class="why-element-img" src="/assets/images/why-buld.png" alt="photo" />
                                <span></span>
                                <p class="why-text">Большой выбор</p>
                                <p class="why-subtext">
                                    Широкий выбор качественной и функциональной спецтехники.
                                </p>
                            </li>
                            <li class="why-item">
                                <img class="why-element-img secondd" src="/assets/images/medal.png" alt="photo" />
                                <span></span>
                                <p class="why-text">Качество</p>
                                <p class="why-subtext">
                                    У нас вы увидите соотношение цены и качества.
                                </p>
                            </li>
                            <li class="why-item">
                                <img class="why-element-img thirdd" src="/assets/images/wallet.png" alt="photo" />
                                <span></span>
                                <p class="why-text">Выгодная цена</p>
                                <p class="why-subtext">
                                    Доступные цены на все модели, представленные на нашем сайте.
                                </p>
                            </li>
                            <li class="why-item">
                                <img class="why-element-img fourth" src="/assets/images/handshake.png" alt="photo" />
                                <span></span>
                                <p class="why-text">Единичный подход</p>
                                <p class="why-subtext">
                                    Индивидуальный подход к каждому клиенту гарантирован..
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- why section-end -->

        <!-- brend section-start -->
        <section class="brend">
            <div class="container pt-32">
                <h1 class="visually-hidden">Lorem, ipsum dolor.</h1>
                <h2 class="inline-block text-2xl font-bold brend-title">
                    Бренды <br class="hidden" />
                    нашей техники
                </h2>
            </div>
        </section>

        <!-- order section slide-start -->
        <section>
            <div class="container py-0 xl:py-8 swiper-container mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="brend-img" src="./assets/images/hitachi.png" alt="photo" />
                    </div>
                    <div class="swiper-slide second">
                        <img class="brend-img" src="./assets/images/cat.png" alt="photo" />
                    </div>
                    <div class="swiper-slide third">
                        <img class="brend-img" src="./assets/images/10-k16ZzUUTTFNRGTVRVek5czT1RRM.png" width="40px"
                            height="40px" alt="photo" />
                    </div>
                    <div class="swiper-slide third">
                        <img class="brend-img mb-lg" src="./assets/images/m.png" alt="photo" />
                    </div>
                    <div class="swiper-slide">
                        <img class="brend-img" src="./assets/images/af36a8e7988d29a051f3aced25454f4e.png" alt="photo" />
                    </div>
                    <div class="swiper-slide second">
                        <img class="brend-img"
                            src="./assets/images/ac44c92bca9e838b8b1bf1ca44a6fea5_798x353.18181818182.png"
                            alt="photo" />
                    </div>
                    <div class="swiper-slide third">
                        <img class="brend-img" src="./assets/images/9b3f2c294dcb648977fbabacc92b678b.png" width="40px"
                            height="40px" alt="photo" />
                    </div>

                    <div class="swiper-slide unnamed">
                        <img class="brend-img" src="./assets/images/unnamed.jpg" width="40px" height="40px"
                            alt="photo" />
                    </div>
                    <div class="swiper-slide">
                        <img class="brend-img" src="./assets/images/Zoomlion-Heavy-Industry.png" width="40px"
                            height="40px" alt="photo" />
                    </div>
                    <div class="swiper-slide yuchai">
                        <img class="brend-img" src="./assets/images/Yuchai_logo_red.png" width="40px" height="40px"
                            alt="photo" />
                    </div>
                    <div class="swiper-slide">
                        <img class="brend-img" src="./assets/images/sinotruk353x146.png" width="40px" height="40px"
                            alt="photo" />
                    </div>
                    <div class="swiper-slide">
                        <img class="brend-img" src="./assets/images/0_winter.jpg" width="40px" height="40px"
                            alt="photo" />
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!-- order section slide-end -->

        <!-- questions section-start -->
        <section class="pt-0 xl:pt-4 questions" id="questions">
            <div class="container flex items-center justify-center py-32">

                <form action="/" method="POST" class="p-8 py-12 rounded-md">
                    <h1 class="visually-hidden">Lorem, ipsum dolor.</h1>
                    <h2 class="mt-sm">Хотите спецтехнику?</h2>

                    <label for="">
                        <input id="contactName"
                            class="w-full px-2 py-2 font-normal placeholder-gray-400 bg-transparent border-0 outline-none text-gray-50"
                            type="text" placeholder="Ваше имя" required />
                    </label>

                    <label for="">
                        <input id="contactPhone"
                            class="w-full px-2 py-2 font-normal placeholder-gray-400 bg-transparent border-0 outline-none text-gray-50"
                            type="tel" placeholder="Телефон" required />
                    </label>

                    <div class="flex flex-col items-center justify-center cursor-pointer mt-lg mb-md">
                        <button type="submit" id="contactButton"
                            class="inline-block px-5 py-2 mx-auto rounded-sm text-md contact-form-link">Заказать</button>
                        <p class="text-sm text-center text-gray-400 mt-lg">
                            Все услуги лицензированны
                        </p>
                    </div>

                </form>

                <div class="inline-block questions-img xl:pl-8">
                    <img class="w-full" src="./assets/images/question-img.png" alt="photo" />
                </div>
            </div>
        </section>
        <!-- questions section-end -->

        <!-- contact section start  -->
        <section class="contact" id="Контакты">
            <div class="container pb-28">
                <h1 class="visually-hidden">Lorem, ipsum dolor.</h1>
                <h2 class="inline-block text-2xl font-bold contact-title">
                    Контакты
                </h2>
                <div class="flex items-center justify-center xl:pt-16 contact-social">
                    <ul class="contact-list">
                        <li class="flex items-center">
                            <img class="w-4 mr-lg" src="./assets/images/pin (1).png" alt="photo" />
                            <a href="#">г. Ташкент Мирабадский район </a>
                        </li>
                        <li class="flex items-center py-6">
                            <img class="w-5 mr-lg" src="./assets/images/phone-call.png" alt="photo" />
                            <a href="tel:+998888600050">88 860 00 50</a>
                        </li>
                        <li class="flex items-center">
                            <img class="w-5 mr-lg" src="./assets/images/email (1).png" alt="photo" />
                            <a href="mailto:info@barging.uz">info@barging.uz</a>
                        </li>
                        <li class="flex items-center justify-between w-20 contact-social-links">
                            <a href="#" class="contact-social__facebook">
                                <img class="w-2 sm:w-3" src="./assets/images/facebook.svg" alt="Photo" />
                            </a>
                            <a href="#" class="contact-social__facebook">
                                <img class="w-5 sm:w-6" src="./assets/images/telegram.svg" alt="Photo" />
                            </a>
                            <a href="#" class="contact-social__facebook">
                                <img class="w-5 sm:w-6" src="./assets/images/instagram.svg" alt="Photo" />
                            </a>
                        </li>
                    </ul>
                    <div class="px-4 contact-map sm:px-0">
                        <iframe class="w-full rounded-lg"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1499.2197210175038!2d69.2454556408921!3d41.277539604167266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8a8b2eef294b%3A0x74d629c3b43f5834!2sYakkasaray%20District%2C%20Tashkent%2C%20Uzbekistan!5e0!3m2!1sen!2s!4v1622097596464!5m2!1sen!2s"
                            width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- contacts section-end -->

        <!-- footer section-start -->
        <footer class="footer">
            <div class="container flex flex-col items-center justify-center pt-20 pb-10 ">
                <h1 class="visually-hidden">Lorem ipsum dolor sit.</h1>
                <p class="footer-brand">
                    <img src="./assets/images/barg.png" alt="photo" />
                </p>
                <nav class="flex items-center justify-center py-0 md:py-6" role="navigation">
                    <div class="">
                        <ul class="flex items-center justify-center text-xs align-middle footer-list">
                            <li class="lg:px-5 md:px-2">
                                <a class="text-gray-300" href="#Главная"> Главная </a>
                            </li>
                            <li class="lg:px-5 md:px-3">
                                <a class="text-gray-300" href="#компании"> О компании </a>
                            </li>
                            <li class="lg:px-5 md:px-3">
                                <a class="text-gray-300" href="#Каталог"> Каталог </a>
                            </li>
                            <li class="lg:px-5 md:px-3">
                                <a class="text-gray-300" href="#заказать"> Как заказать </a>
                            </li>
                            <li class="lg:px-5 md:px-3">
                                <a class="text-gray-300" href="#Контакты"> Контакты </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <p class="pt-5 text-xl text-gray-300 md:pt-0">Есть вопросы ?</p>


                <form action="" class="mt-lg">

                    <label for="">
                        <input
                            class="px-3 py-1 font-normal text-gray-700 placeholder-gray-400 border-0 rounded-sm outline-none bg-gray-50"
                            type="text" placeholder="Имя" id="contactModalName" />
                    </label>

                    <label for="">
                        <input
                            class="px-3 py-1 font-normal text-gray-700 placeholder-gray-400 border-0 rounded-sm outline-none bg-gray-50 mx-sm"
                            type="tel" placeholder="Тел" id="contactModalPhone" />
                    </label>

                    <button id="modalcontactBtn" class="inline-block px-4 py-1 rounded-sm contact-form-link"
                        type="submit">Заказать</button>

                </form>


                <div class="flex items-center justify-between w-24 footer-socials mt-lg">
                    <a href="#" class="contact-social__facebook">
                        <svg id="facebook-app-symbol" xmlns="http://www.w3.org/2000/svg" width="11.944" height="23.001"
                            viewBox="0 0 11.944 23.001">
                            <path id="f_1_"
                                d="M45.043,23V12.51h3.52l.528-4.09H45.043V5.809c0-1.184.327-1.99,2.027-1.99h2.164V.16A29.34,29.34,0,0,0,46.08,0c-3.122,0-5.259,1.906-5.259,5.4V8.42H37.29v4.09h3.531V23Z"
                                transform="translate(-37.29)" fill="#fabe0a" />
                        </svg>
                    </a>
                    <a href="#" class="contact-social__facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="23.001" viewBox="0 0 26 23.001">
                            <g id="XMLID_496_" transform="translate(0)">
                                <path id="XMLID_497_"
                                    d="M.459,30.429,6.45,32.7l2.319,7.577a.7.7,0,0,0,1.12.343l3.339-2.766a.984.984,0,0,1,1.214-.034l6.023,4.443a.7.7,0,0,0,1.106-.434l4.412-21.565a.71.71,0,0,0-.946-.815L.452,29.087A.722.722,0,0,0,.459,30.429ZM8.4,31.492,20.1,24.165a.206.206,0,0,1,.246.328l-9.663,9.126a2.046,2.046,0,0,0-.621,1.218l-.329,2.478a.3.3,0,0,1-.591.043L7.88,32.839A1.207,1.207,0,0,1,8.4,31.492Z"
                                    transform="translate(0 -19.401)" fill="#fabe0a" />
                            </g>
                        </svg>
                    </a>
                    <a href="#" class="contact-social__facebook">
                        <svg id="instagram" xmlns="http://www.w3.org/2000/svg" width="23.001" height="23.001"
                            viewBox="0 0 23.001 23.001">
                            <g id="Сгруппировать_4" data-name="Сгруппировать 4">
                                <g id="Сгруппировать_3" data-name="Сгруппировать 3">
                                    <path id="Контур_2" data-name="Контур 2"
                                        d="M16.319,0H6.681A6.689,6.689,0,0,0,0,6.681v9.638A6.689,6.689,0,0,0,6.681,23h9.638A6.689,6.689,0,0,0,23,16.319V6.681A6.689,6.689,0,0,0,16.319,0ZM21.2,16.319A4.89,4.89,0,0,1,16.319,21.2H6.681A4.89,4.89,0,0,1,1.8,16.319V6.681A4.89,4.89,0,0,1,6.681,1.8h9.638A4.89,4.89,0,0,1,21.2,6.681Z"
                                        fill="#fabe0a" />
                                </g>
                            </g>
                            <g id="Сгруппировать_6" data-name="Сгруппировать 6" transform="translate(5.301 5.301)">
                                <g id="Сгруппировать_5" data-name="Сгруппировать 5">
                                    <path id="Контур_3" data-name="Контур 3"
                                        d="M124.2,118a6.2,6.2,0,1,0,6.2,6.2A6.206,6.206,0,0,0,124.2,118Zm0,10.6a4.4,4.4,0,1,1,4.4-4.4A4.408,4.408,0,0,1,124.2,128.6Z"
                                        transform="translate(-118 -118)" fill="#fabe0a" />
                                </g>
                            </g>
                            <g id="Сгруппировать_8" data-name="Сгруппировать 8" transform="translate(16.907 4.484)">
                                <g id="Сгруппировать_7" data-name="Сгруппировать 7" transform="translate(0)">
                                    <ellipse id="Эллипс_1" data-name="Эллипс 1" cx="0.805" cy="0.805" rx="0.805"
                                        ry="0.805" fill="#fabe0a" />
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="px-0">
                <hr class="my-4">
            </div>

            <div class="flex flex-wrap px-0 py-2 md:justify-between md:flex-nowrap lg:px-20">
                <p
                    class="w-full mb-2 text-sm font-medium text-center text-white md:text-left md:mb-0 md:w-1/2 md:text-base">
                    ©
                    2021 Barg Group</p>
                <p
                    class="w-full mb-2 text-sm font-medium text-center text-white md:mb-0 md:w-1/2 md:text-right md:text-base">
                    <a href="https://mount.uz/"> MOUNTAIN | IT & DESIGN </a> </p>
            </div>
        </footer>
        <!-- questions section-end -->
    </section>


    <script>
        $(document).ready(function() {
                $("#pre-loader").delay(1500).fadeOut();
            });
    </script>
    <script type="module" src="{{ url('js/scripts.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/js/index.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</body>

</html>