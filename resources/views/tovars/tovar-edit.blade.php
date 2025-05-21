<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="m-0 p-0">
    @include('./include/header')

    <form method="post" action="{{ route('tovarupdate', $tovar->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group mt-1">
            <label>Image:</label>
            <input class="form-control border-1" type="text" value="{{ $tovar->img }}" name="img">
        </div>
        <div class="form-group mt-1">
            <label>Название товара:</label>
            <input class="form-control border-1" type="text" value="{{ $tovar->name }}" name="name">
        </div>
        <div class="form-group mt-1">
            <label>Категория</label>
            <input class="form-control border-1" type="text" value="{{ $tovar->categories }}" name="categories">
        </div>
        <div class="form-group mt-1">
            <label>Описание:</label>
            <textarea class="border-1" name="description" rows="3">{{ $tovar->description }}</textarea>
        </div>
        <div class="form-group mt-1">
            <label>Цена:</label>
            <input class="form-control border-1" type="number" value="{{ $tovar->price }}" name="price">
        </div>
        <button type="submit" class="bg-amber-200 rounded-md p-2">Изменить товар</button>

    </form>
    @include('./include/footer')

</body>

</html>