<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <div class="flex flex-wrap justify-around">
                    @foreach ($tovars as $el)
                    <div class="card mb-5">
                        <img class="w-82 h-80 " src="{{ asset('storage/'.$el->img) }}" alt="">
                        <h1 class="w-82 font-medium text-3xl leading-12">{{ $el->name }}</h1>
                        <p>{{ $el->categories }}</p>
                        <p class="w-82">Описание: {{ $el->description }}</p>
                        <p>Цена: {{ $el->price }}</p>

                        <div class="grid mx-auto flex-wrap justify-around items-center">
                            <div class="flex mx-auto flex-wrap justify-around gap-5">
                                <a href="{{ route('tovar-show',  $el->id) }}"
                                    class="w-32 h-12 mt-5 pl-8 pr-8 bg-[#A8CFE3] text-white text-center font-semibold rounded-md">Просмотр
                                    товара</a>
                                <a href="{{ route('tovar-edit',  $el->id) }}"
                                    class="w-32 h-12 mt-5 pl-8 pr-8 bg-[#A8CFE3] text-white text-center font-semibold rounded-md">Изменить
                                    товар</a>
                            </div>
                            <div class="flex mx-auto flex-wrap justify-around gap-5">
                                <form action="{{ route('tovardelete', $el->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="w-32 h-11 mt-5 pl-8 pr-8 bg-[#A8CFE3] text-white font-semibold rounded-md">
                                        Удалить товар</button>
                                </form>

                                <button
                                    class="w-32 h-11 mt-5 pl-8 pr-8 bg-[#A8CFE3] text-white font-semibold rounded-md">
                                    Купить</button>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
    </main>
    @include('./include/footer')
</body>

<script>

</script>

</html>