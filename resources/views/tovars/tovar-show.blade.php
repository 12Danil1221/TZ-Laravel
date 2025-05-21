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
                    <h1 class="text-4xl">Товары:</h1>
                    <a class="text-2xl" href="/tovar-create">Добавить товар</a>
                </div>
                <br>
                <a class="text-2xl" href="/tovar-all">Назад</a>

                <br>
                <div class="flex flex-wrap justify-start">
                    <div class="card mb-5">
                        <div class="flex flex-wrap">
                            <img class="w-160 h-160 " src="{{ $tovar->img }}" alt="">
                            <div class="m-5">
                                <h1 class="w-82 font-medium text-3xl leading-12">{{ $tovar->name }}</h1>
                                <p>Цена: {{ $tovar->price }}</p>
                                <p>Категория товара: {{ $tovar->categories }}</p>

                                <button type="submit"
                                    class="cursor-pointer w-42 h-12 mt-5 pl-8 pr-8 bg-[#eb623c] text-white font-semibold rounded-md">Подробнее
                                    о товаре</button>
                                <p class="hidden w-82 ">{{ $tovar->description }}</p>
                                <div class="grid mx-auto flex-wrap justify-around items-center">

                                    <button
                                        class="w-42 h-12 mt-5 pl-8 pr-8 bg-[#eb623c] text-white font-semibold rounded-md">
                                        Добавление заказа</button>
                                    <div class="hidden" style="position: absolute; margin: -50vh;">
                                        <div class="index-10 w-2xl h-180 bg-[#eb623c] rounded-2xl">
                                            <div class="flex justify-between p-4 rounded-2xl bg-amber-200/50">
                                                <h1 class="text-2xl text-white">
                                                    Оформление
                                                    заказа:</h1>
                                                <a class="font-normal text-white"
                                                    href="{{ route('tovar-show',$tovar->id) }}">Закрыть</a>
                                            </div>
                                            <form class="grid justify-center p-32 m-0" method="post"
                                                action="{{ route('orderstore', $tovar->id) }}">
                                                @csrf
                                                <div class="form-group mb-5">
                                                    <label class="text-white">Товар :</label>
                                                    <input class="form-control border-1" type="text" name="tovar_name"
                                                        value="{{ $tovar->name }}" readonly>
                                                </div>
                                                <div class="form-group mb-5">
                                                    <label class="text-white">ФИО покупателя :</label>
                                                    <input class="form-control border-1" type="text" name="FIO"
                                                        required>
                                                </div>
                                                <div class="form-group mb-5">
                                                    <label class="text-white">Количетсво:</label>
                                                    <input class="form-control border-1" type="number" name="quantity"
                                                        value="1">
                                                </div>
                                                <div class="form-group mb-5">
                                                    <label class="text-white">Цена :</label>
                                                    <input type="number" name="price" value="{{ $tovar->price }}"
                                                        readonly>
                                                </div>
                                                <div class="form-group mb-5">
                                                    <label class="text-white">Статус:</label>
                                                    <input class="form-control border-1" type="text" name="status"
                                                        readonly value="новый">
                                                </div>
                                                <div class="form-group mb-5">
                                                    <label class="text-white">Комментарий покупателя :</label>
                                                    <textarea class="form-control border-1" name="comment"></textarea>
                                                </div>

                                                <button type="submit" class="bg-amber-200 rounded-md p-2">Создать
                                                    заказ</button>
                                            </form>
                                        </div>

                                    </div>
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