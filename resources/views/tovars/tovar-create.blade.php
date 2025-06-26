<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="m-0 p-0">
    @include('./include/header')

    <form method="post" action="{{ route('tovarstore') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-1">
            <label>Изображение товара:</label>
            <input class="form-control border-1" type="file" name="img">
        </div>
        <div class="form-group mt-1">
            <label>Название товара:</label>
            <input class="form-control border-1" type="text" name="name" value="Товар_1">
        </div>
        <div class="form-group mt-1">
            <label for="categories">Категория</label>
            <select name="categories" id="categories">
                @foreach ($category as $el)
                <option value="{{ $el->categories }}">{{ $el->categories }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-1">
            <label>Описание:</label>
            <textarea class="border-1" name="description" rows="3"
                value="тестовое описание товара_1">тестовое описание товара_1</textarea>
        </div>
        <div class="form-group mt-1">
            <label>Цена:</label>
            <input class="form-control border-1" type="number" name="price" value="1200">
        </div>
        <button type="submit" class="bg-amber-200 rounded-md p-2">Создать товар</button>
    </form>
    @include('./include/footer')

</body>

</html>