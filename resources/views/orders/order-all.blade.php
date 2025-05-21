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
                    <h1 class="text-4xl">Все заказы:</h1>
                    <a class="text-2xl" href="/">Назад</a>
                </div>
                <br>
                <div class="flex flex-wrap mx-auto justify-around">
                    @foreach ($orders as $el)
                    <div class="grid flex-wrap mx-auto">
                        <div class="card mb-5">
                            <h1 class="w-82 font-medium text-3xl leading-12">{{ $el->id }}(ID)</h1>
                            <p>Создан: {{ $el->created_at }}</p>
                            <p class="w-82">ФИО: {{ $el->FIO }}</p>
                            <p>Статус: {{ $el->status }}</p>
                            <!-- <p>Итоговая цена: {{ $el->price }}</p> -->
                        </div>
                        <button type="submit"
                            class="cursor-pointer w-42 h-12 mt-5 pl-8 pr-8 bg-[#eb623c] text-white font-semibold rounded-md">Подробнее
                            о заказе</button>
                        <div class="hidden ">
                            <h1 class="w-82 font-medium text-3xl leading-12">{{ $el->id }}(ID)</h1>
                            <h1 class="w-82 text-2xl leading-12">Товар: {{ $el->tovar_name }}</h1>
                            <p>Создан: {{ $el->created_at }}</p>
                            <p class="w-82">ФИО: {{ $el->FIO }}</p>
                            <div class="flex justify-start items-center">
                                <p>Статус: {{ $el->status }}</p>
                                <form action="{{ route('orderupdate', $el->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <input class="hidden" type="text" name="FIO" value="{{ $el->FIO }}">
                                    <input class="hidden" type="number" name="quantity" value="{{ $el->quantity }}">
                                    <input class="hidden" type="text" name="status" value="выполнен">
                                    <textarea class="hidden" name="comment">{{ $el->comment }}</textarea>
                                    <button type="submit"
                                        class="cursor-pointer w-32 h-10 ml-2 pl-2 pr-2 bg-[#eb623c] text-white font-semibold rounded-md">Завершен</button>
                                </form>
                            </div>
                            <p>Комментарий: {{ $el->comment }}</p>
                            <p>Количество: {{ $el->quantity }}</p>
                            <p>Итоговая цена: {{ $el->price }}</p>
                        </div>
                    </div>
                    @endforeach
                    </for>
                </div>
        </section>
    </main>
    @include('./include/footer')
</body>
<script src=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js "></script>
<script src=" https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
const popupBtn = document.querySelectorAll("button.font-semibold");

popupBtn.forEach(button => {
    button.addEventListener("click", () => {
        button.nextElementSibling.classList.toggle("hidden");
    })
})
</script>

</html>