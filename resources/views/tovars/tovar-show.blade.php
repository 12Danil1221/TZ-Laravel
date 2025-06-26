<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Document</title>
    <style>
    li {
        list-style-type: none;
    }
    </style>
</head>

<body class="m-0 p-0 bg-gray-50">
    @include('./include/header')
    <main>
        <section class="cards mt-5 mb-5">
            <div class="container mx-auto ">
                <div class="flex justify-between">
                    <h1 class="text-4xl">Товар:</h1>
                    <a class="text-2xl" href="/tovar-create">Добавить товар</a>
                </div>
                <br>
                <a class="text-2xl" href="/tovar-all">Назад</a>

                <br>
                <div class="flex flex-wrap justify-start">
                    <div class="card mb-5">
                        <div class="flex flex-wrap">
                            <img class="w-160 h-160 " src="{{ asset('storage/'.$tovar->img) }}" alt="">
                            <div class="m-5">
                                <h1 class="w-82 font-medium text-3xl leading-12">{{ $tovar->name }}</h1>
                                <p>Цена: {{ $tovar->price }}</p>
                                <p>Категория товара: {{ $tovar->categories }}</p>

                                <button type="submit"
                                    class="cursor-pointer w-42 h-12 mt-5 pl-8 pr-8 bg-[#A8CFE3] text-white font-semibold rounded-md">Подробнее
                                    о товаре</button>
                                <p class="hidden w-82 ">{{ $tovar->description }}</p>
                                <div class="grid mx-auto flex-wrap justify-around items-center">

                                    <button
                                        class="w-42 h-12 mt-5 pl-8 pr-8 bg-[#A8CFE3] text-white font-semibold rounded-md">
                                        Добавление заказа</button>
                                    @include('popup.order')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('./include/footer')
</body>
<script src=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js "></script>
<script src=" https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
const PopupBtn = document.querySelectorAll("button.font-semibold");
PopupBtn.forEach(button => {
    button.addEventListener("click", () => {
        button.nextElementSibling.classList.toggle("hidden");
    })
})
</script>

</html>