<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tailwind-Laravel project">
    <meta name="keywords" content="tailwind, php_laravel">

    <title>Document</title>
    <style>
    li {
        list-style-type: none;
    }

    .splide__slide {
        background-image: url('https://static.tildacdn.com/tild3664-6232-4531-b435-396333386564/frankdenney91407.jpg');
        background-color: rgb(18 18 18 / 70%);
        background-blend-mode: darken;
        background-position: center;
        background-size: cover;
    }

    .splide__slide_2 {
        background-color: rgb(18 18 18 / 70%);
        background-blend-mode: darken;
        background-attachment: fixed;
    }

    .slide {
        flex: 1;
        transition: all 1s ease-in-out;
    }

    .slide h3 {
        opacity: 0;
    }

    .slide.active {
        flex: 10;
    }

    .slide.active h3 {
        opacity: 1;
        transition: opacity 0.3s ease-in 0.4s;
    }
    </style>
</head>

<body class="m-0 p-0 bg-gray-50">
    @include('./include/header')
    <main>
        <section class="banner mt-5 mb-5">
            <section id="mySlider" class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track container mx-auto">
                    <ul class="splide__list">
                        <li class="splide__slide mx-auto h-168 color-white items-center text-center">
                            <h1 class="font-serif font-bold text-8xl leading-24 text-white flex justify-center mt-50">
                                ТЕСТ-SHOP
                            </h1>
                            <p class="font-serif text-white flex justify-center mt-25">Приобретайте напитки в новом
                                стиле, не
                                выходя из
                                дома.</p>
                        </li>
                        <li
                            class="splide__slide mx-auto min-h-48 bg-[url(https://placehold.co/1200x200?text=test)] color-white">
                        </li>
                        <li
                            class="splide__slide mx-auto min-h-48 bg-[url(https://placehold.co/1200x200?text=test)] color-white">
                        </li>
                    </ul>
                </div>
            </section>
        </section>
        <section class="carusel-card">
            <h2 class="text-2xl ml-12">Популярное:</h2>
            <div class="container mx-auto flex-wrap h-102 flex justify-center items-center w-full pl-5 pr-5">
                <div class="slide border-1 active h-80 rounded-2xl m-3 cursor-pointer relative"
                    style="background-size:cover; background-position:center; background-repeat: no-repeat; background-image: url('https://plus.unsplash.com/premium_photo-1680112806039-244731d88d45?q=80&w=2225&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                    <h3 class="text-white absolute size-6 bottom-5 left-5 m-0">Test</h3>
                </div>
                <div class="slide border-1 h-80 rounded-2xl m-3 cursor-pointer relative"
                    style="background-size:cover; background-position:center; background-repeat: no-repeat; background-image: url('https://plus.unsplash.com/premium_photo-1668046490168-d00204a33f89?q=80&w=2187&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                    <h3 class="text-white absolute size-6 bottom-5 left-5 m-0">Test</h3>
                </div>
                <div class="slide border-1 h-80 rounded-2xl m-3 cursor-pointer relative"
                    style="background-size:cover; background-position:center; background-repeat: no-repeat; background-image: url('https://plus.unsplash.com/premium_photo-1676524105437-7e6d524eb789?q=80&w=2192&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                    <h3 class="text-white absolute size-6 bottom-5 left-5 m-0">Test</h3>
                </div>
                <div class="slide border-1 h-80 rounded-2xl m-3 cursor-pointer relative"
                    style="background-size:cover; background-position:center; background-repeat: no-repeat; background-image: url('https://plus.unsplash.com/premium_photo-1678402545328-24b2e9ab17b9?q=80&w=2187&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                    <h3 class="text-white absolute size-6 bottom-5 left-5 m-0">Test</h3>
                </div>
                <div class="slide border-1 h-80 rounded-2xl m-3 cursor-pointer relative"
                    style="background-size:cover; background-position:center; background-repeat: no-repeat; background-image: url('https://plus.unsplash.com/premium_photo-1681344931997-da8e6c531a0a?q=80&w=2187&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                    <h3 class="text-white absolute size-6 bottom-5 left-5 m-0">Test</h3>
                </div>
            </div>
        </section>

        <section class="hero">
            <div class="container mx-auto">
                <div class="flex flex-wrap">
                    <img class="mr-5"
                        style="display: block;-webkit-user-select: none;margin: auto;cursor: zoom-in;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;"
                        src="https://static.tildacdn.com/tild3438-3565-4363-b832-613365343262/nastuhabootalebi2848.jpg"
                        width="434" height="289">
                    <div class="ml-5 grid items-center mx-auto">
                        <h2 class="font-light text-4xl leading-12 text-emerald-600">ДОБАВЬТЕ <br> ИЗЫСКАННОСТИ <br>
                            В
                            СВОЙ ИНТЕРЬЕР</h2>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="25px" height="25px"
                                viewBox="0 0 24 24">
                                <defs>
                                    <style>
                                    .cls-1 {
                                        fill-rule: evenodd;
                                    }
                                    </style>
                                </defs>
                                <path id="accept" class="cls-1"
                                    d="M1008,120a12,12,0,1,1,12-12A12,12,0,0,1,1008,120Zm0-22a10,10,0,1,0,10,10A10,10,0,0,0,1008,98Zm-0.08,14.333a0.819,0.819,0,0,1-.22.391,0.892,0.892,0,0,1-.72.259,0.913,0.913,0,0,1-.94-0.655l-2.82-2.818a0.9,0.9,0,0,1,1.27-1.271l2.18,2.184,4.46-7.907a1,1,0,0,1,1.38-.385,1.051,1.051,0,0,1,.36,1.417Z"
                                    transform="translate(-996 -96)" />
                            </svg>
                            <p class="ml-2" style="font-size: 0.7rem;">Интернет-магазин предлагает продукцию в новом
                                стиле.
                                Мы стремимся
                                предоставить нашим <br>
                                клиентам уникальный и качественный опыт покупок, создавая удобную платформу для
                                поиска и
                                <br>
                                приобретения товаров.
                            </p>
                        </div>
                        @if(isset($_COOKIE['user_id']))
                        <div class="flex justify-center mt-5">
                            <a class="" href="/tovar-all"><button type="submit"
                                    class="cursor-pointer bg-emerald-700 text-white w-60 h-10">ПЕРЕЙТИ К
                                    КАТАЛОГУ</button></a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section class="cards mt-32 mb-32">
            <div class="container mx-auto ">
                <div class="flex justify-between">
                    <h1 class="text-4xl">Товары:</h1>
                    @if(isset($_COOKIE['user_id']))
                    <a class="text-2xl" href="/tovar-all">Все товары</a>
                    @endif
                </div>
                <br>
                <div class="flex flex-wrap justify-start gap-7">
                    @foreach ($tovars as $el)
                    <div class="card mb-5">
                        <img class="w-82 h-80 " src="{{ asset('storage/'.$el->img) }}" alt="">
                        <h1 class="w-82 font-medium text-3xl leading-12">{{ $el->name }}</h1>
                        <p>{{ $el->categories }}</p>
                        <p class="w-82">{{ $el->description }}</p>
                        <p>Цена: {{ $el->price }}</p>
                        @if(isset($_COOKIE['user_id']))

                        <button
                            class="cursor-pointer w-32 h-11 mt-5 pl-5 pr-8 bg-[#eb623c] text-white font-bold rounded-md"><a
                                href="{{ route('tovar-show', $el) }}">Подробнее</a></button>
                        <!-- <button
                            class="cursor-pointer w-32 h-11 mt-5 pl-5 pr-8 bg-[#eb623c] text-white font-bold rounded-md"><a
                                href="{{ route('stripe.store') }}">Купить</a></button> -->
                        @endif
                    </div>
                    @endforeach

                </div>
            </div>
        </section>

        <section class="o nas mt-32 mb-32">
            <div class="container mx-auto">
                <div
                    class="bg-[url(https://static.tildacdn.com/tild3438-3565-4363-b832-613365343262/nastuhabootalebi2848.jpg)] bg-fixed bg-orange-700/60 bg-blend-darken h-160">
                    <h2 class="flex justify-center text-center pt-60 font-semibold text-4xl text-white">О нашем
                        интернет-<br>магазине
                    </h2>
                    <br>
                    <hr class="flex justify-center w-full text-white">
                    <br>
                    <p class="flex justify-center text-center text-white">Интернет-магазин предлагает продукцию в новом
                        стиле. Мы стремимся
                        предоставить нашим клиентам
                        <br>
                        уникальный и качественный опыт покупок, создавая удобную платформу для поиска и приобретения
                        <br>
                        товаров.
                    </p>
                </div>
            </div>
        </section>
        <section class="advantages mb-32">
            <div class="container mx-auto">
                <div class="flex flex-wrap">
                    <h2 class="font-light text-4xl leading-12 text-emerald-600 mt-5 ml-5 h-48">Почему <br> стоит
                        выбрать<br>
                        наш интернет-<br>магазин</h2>
                    <div class="grid">
                        <div class="flex h-28 mb-24">
                            <div class="mt-5 ml-5 flex mx-auto">
                                <div class="w-14 h-7 bg-emerald-700 rounded-4xl">
                                    <h2 class="text-center text-white">1</h2>
                                </div>
                                <div class="ml-2">
                                    <p class="font-bold">Широкий ассортимент</p>
                                    <p class="mt-2">Мы предлагаем разнообразие вкусов и <br> объёмов продукции для
                                        каждого
                                        клиента.
                                    </p>
                                </div>
                            </div>
                            <div class="mt-5 ml-5 flex mx-auto mx-a">
                                <div class="w-14 h-7 bg-emerald-700 rounded-4xl">
                                    <h2 class="text-center text-white">2</h2>
                                </div>
                                <div class="ml-2">
                                    <p class="font-bold">Широкий ассортимент</p>
                                    <p class="mt-2">Мы предлагаем разнообразие вкусов и <br> объёмов продукции для
                                        каждого
                                        клиента.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex h-28">
                            <div class="mt-5 ml-5 flex mx-auto">
                                <div class="w-14 h-7 bg-emerald-700 rounded-4xl">
                                    <h2 class="text-center text-white">3</h2>
                                </div>
                                <div class="ml-2">
                                    <p class="font-bold">Широкий ассортимент</p>
                                    <p class="mt-2">Мы предлагаем разнообразие вкусов и <br> объёмов продукции для
                                        каждого
                                        клиента.
                                    </p>
                                </div>
                            </div>
                            <div class="mt-5 ml-5 flex mx-auto">
                                <div class="w-14 h-7 bg-emerald-700 rounded-4xl">
                                    <h2 class="text-center text-white">4</h2>
                                </div>
                                <div class="ml-2">
                                    <p class="font-bold">Широкий ассортимент</p>
                                    <p class="mt-2">Мы предлагаем разнообразие вкусов и <br> объёмов продукции для
                                        каждого
                                        клиента.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <article class="otziv">
            <div class="container mx-auto">
                <h1 class="flex justify-center text-center font-semibold text-2xl mb-24">Отзывы о нашем
                    интернет-магазине
                </h1>
                <!-- Slider main container -->
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="grid justify-center text-center">
                                <h2 class="mb-5">Отличная продукция и качественное
                                    обслуживание.
                                    Быстрая <br>
                                    доставка и
                                    внимательный
                                    персонал. Обязательно буду делать покупки здесь ещё!</h2>
                                <div class="grid justify-center text-center">
                                    <img class="w-24 h-24 rounded-4xl relative left-4 mb-5"
                                        src="https://static.tildacdn.com/tild6137-3636-4363-b939-326166353736/petebellis224507_s.jpg"
                                        alt="">
                                    <p class=" mb-10">Дмитрий Иванов</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="grid justify-center text-center">
                                <h2 class="mb-5">Отличная продукция и качественное
                                    обслуживание.
                                    Быстрая <br>
                                    доставка и
                                    внимательный
                                    персонал. Обязательно буду делать покупки здесь ещё!</h2>
                                <div class="grid justify-center text-center">
                                    <img class="w-24 h-24 rounded-4xl relative left-4 mb-5"
                                        src="https://static.tildacdn.com/tild6137-3636-4363-b939-326166353736/petebellis224507_s.jpg"
                                        alt="">
                                    <p class=" mb-10">Дмитрий Иванов</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="grid justify-center text-center">
                                <h2 class="mb-5">Отличная продукция и качественное
                                    обслуживание.
                                    Быстрая <br>
                                    доставка и
                                    внимательный
                                    персонал. Обязательно буду делать покупки здесь ещё!</h2>
                                <div class="grid justify-center text-center">
                                    <img class="w-24 h-24 rounded-4xl relative left-4 mb-5"
                                        src="https://static.tildacdn.com/tild6137-3636-4363-b939-326166353736/petebellis224507_s.jpg"
                                        alt="">
                                    <p class=" mb-10">Дмитрий Иванов</p>
                                </div>
                            </div>
                        </div>
                        ...
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>
            </div>
        </article>
        <article class="faq">
            <!--<button onclick="openAlert()" type="submit" class="btn btn-primary font-bold">FAQ</button>
            <div class="hidden">
                <ul class="list-group">
                    <li class="list-group-item active">№1</li>
                    <li class="list-group-item disabled" aria-disabled="true">Disabled item</li>
                </ul>
            </div>-->
        </article>
        <section class="fidback mt-32 mb-32">
            <div class="container mx-auto">
                <div class="grid justify-center text-center">
                    <h2 class="text-4xl font-semibold">Контактная информация</h2>
                    <br>
                    <p class="text-2xl">8 800 123-45-67<br>
                        info@example.ru</p>
                    <br>
                    <p>г. Москва, ул. Центральная, д. 1</p>
                    <br>
                    <ul role="list" class="t-sociallinks__wrapper flex justify-center" aria-label="Соц. сети">
                        <!-- new soclinks -->
                        <li class="t-sociallinks__item t-sociallinks__item_linkedin"><a href="/" target="_blank"
                                rel="nofollow" aria-label="linkedin" style="width: 25px; height: 25px;"><svg
                                    class="t-sociallinks__svg" role="presentation" width="25px" height="25px"
                                    viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M90 58.8676V88.444H72.8529V60.8481C72.8529 53.9164 70.3722 49.1856 64.1669 49.1856C59.429 49.1856 56.6096 52.374 55.3686 55.4587C54.9159 56.5614 54.7992 58.0965 54.7992 59.6388V88.444H37.6463C37.6463 88.444 37.877 41.7061 37.6463 36.8644H54.7963V44.1753C54.7617 44.2301 54.717 44.2891 54.6839 44.3425H54.7963V44.1753C57.0752 40.6654 61.1443 35.6522 70.2526 35.6522C81.5403 35.6522 90 43.025 90 58.8676ZM19.705 12C13.837 12 10 15.8486 10 20.9108C10 25.8621 13.7275 29.8274 19.4787 29.8274H19.5926C25.5745 29.8274 29.2933 25.8621 29.2933 20.9108C29.1809 15.8486 25.5745 12 19.705 12ZM11.0191 88.444H28.1647V36.8644H11.0191V88.444Z"
                                        fill="#ff5c33"></path>
                                </svg></a></li>&nbsp;<li class="t-sociallinks__item t-sociallinks__item_telegram"><a
                                href="/" target="_blank" rel="nofollow" aria-label="telegram"
                                style="width: 25px; height: 25px;"><svg class="t-sociallinks__svg" role="presentation"
                                    width="25px" height="25px" viewBox="0 0 100 100" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M83.1797 17.5886C83.1797 17.5886 90.5802 14.7028 89.9635 21.711C89.758 24.5968 87.9079 34.6968 86.4688 45.6214L81.5351 77.9827C81.5351 77.9827 81.124 82.7235 77.4237 83.548C73.7233 84.3724 68.173 80.6623 67.145 79.8378C66.3227 79.2195 51.7273 69.9438 46.5878 65.4092C45.1488 64.1724 43.5042 61.6989 46.7934 58.8132L68.3785 38.201C70.8454 35.7274 73.3122 29.956 63.0336 36.9642L34.2535 56.5459C34.2535 56.5459 30.9644 58.6071 24.7973 56.752L11.4351 52.6295C11.4351 52.6295 6.50135 49.5377 14.9298 46.4457C35.4871 36.7579 60.7724 26.864 83.1797 17.5886Z"
                                        fill="#ff5c33"></path>
                                </svg></a></li>&nbsp;<li class="t-sociallinks__item t-sociallinks__item_whatsapp"><a
                                href="/" target="_blank" rel="nofollow" aria-label="whatsapp"
                                style="width: 25px; height: 25px;"><svg class="t-sociallinks__svg" role="presentation"
                                    width="25px" height="25px" viewBox="0 0 100 100" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M50.168 10C60.8239 10.004 70.8257 14.1522 78.346 21.6819C85.8676 29.2114 90.0066 39.2185 90 49.8636C89.9906 71.8252 72.1203 89.6956 50.1668 89.6956H50.1508C43.4852 89.6929 36.9338 88.0208 31.1162 84.8468L10 90.3853L15.6516 69.7437C12.1665 63.7042 10.3323 56.851 10.3349 49.8304C10.343 27.8676 28.2134 10 50.168 10V10ZM61.5376 54.7631C62.4507 55.0954 67.3433 57.5023 68.3389 58.0009C68.5313 58.0971 68.7113 58.1842 68.8784 58.265C69.5753 58.602 70.0458 58.8296 70.2462 59.1651C70.4947 59.5799 70.4947 61.5736 69.6654 63.8982C68.8359 66.2229 64.8605 68.3442 62.9478 68.63C61.2319 68.8865 59.0627 68.9928 56.6782 68.2353C55.2322 67.7767 53.3794 67.1653 51.0041 66.1392C41.6698 62.1082 35.3628 53.06 34.1747 51.3556C34.0919 51.2368 34.0341 51.1538 34.0017 51.1106L33.9981 51.1056C33.486 50.4243 29.9372 45.7022 29.9372 40.8149C29.9372 36.2325 32.1873 33.8303 33.2244 32.7232C33.2961 32.6467 33.3619 32.5763 33.4208 32.5118C34.3341 31.5149 35.412 31.2664 36.0751 31.2664C36.7385 31.2664 37.4029 31.2717 37.9826 31.301C38.0541 31.3046 38.1286 31.304 38.2056 31.3037C38.786 31.3001 39.5087 31.2957 40.2221 33.0089C40.4976 33.6707 40.9012 34.653 41.3265 35.6882C42.1818 37.7702 43.1251 40.066 43.2912 40.399C43.5397 40.8974 43.7058 41.4782 43.3736 42.1427C43.323 42.2436 43.2763 42.3387 43.2318 42.4295C42.9831 42.9364 42.7995 43.3104 42.378 43.8029C42.2125 43.9963 42.0413 44.2045 41.8703 44.4131C41.5273 44.8309 41.1842 45.2488 40.8853 45.5467C40.387 46.0425 39.8686 46.5808 40.4493 47.5777C41.0303 48.5731 43.028 51.8323 45.9867 54.472C49.1661 57.3091 51.93 58.5078 53.3318 59.1157C53.6058 59.2346 53.8279 59.3308 53.9907 59.4124C54.9849 59.9109 55.5658 59.8284 56.1465 59.1637C56.7274 58.4993 58.6347 56.2583 59.298 55.2615C59.9612 54.2646 60.6259 54.4307 61.5376 54.7631V54.7631Z"
                                        fill="#ff5c33"></path>
                                </svg></a></li><!-- /new soclinks -->
                    </ul>
                    <br>
                    <div class="grid justify-center gap-1">
                        <form action="{{ route('fidbackstore') }}" method="post">
                            @csrf
                            <input class="mx-auto w-full h-14 pl-5 bg-gray-200" placeholder="Электронная почта"
                                type="email" name="email" value="">
                            <hr>
                            <input class="mx-auto w-full h-14 pl-5 bg-gray-200" placeholder="Имя" type="text"
                                name="name" value="">
                            <hr>
                            <textarea class="mx-auto w-full h-24 pb-10 pl-5 bg-gray-200" placeholder="Сообщение"
                                name="message" value=""></textarea>
                            <br>
                            <button
                                class="w-2xs h-16 rounded-2xl cursor-pointer bg-orange-600 text-white font-bold">Связаться
                                с
                                нами</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('./include/footer')
</body>


<script>
//Попапы
const FAQButton = document.querySelectorAll("button.font-bold");
FAQButton.forEach(button => {
    button.addEventListener("click", () => {
        button.nextElementSibling.classList.toggle("hidden");
    })
})

//Слайдеры
const mySlider = new Splide('#mySlider', {
    gap: '30px',
    pagination: false,
    breakpoints: {
        1024: {
            perPage: 1
        },
        768: {
            arrows: false,
            pagination: true
        }
    }
})
var splide = new Splide('.splide');
splide.mount();

mySlider.mount();

//swiper slider
const swiper = new Swiper('.swiper', {
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

//Карусель
const slides = document.querySelectorAll('.slide');

slides.forEach(slide => {
    slide.addEventListener('click', () => {
        slide.classList.toggle('active');
    })
})
</script>

</html>