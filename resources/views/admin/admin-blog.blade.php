<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
li {
    list-style-type: none;
}
</style>

<body>
    @include('./include/header')

    <div class="flex columns-3">
        @include('admin.extends.admin-left')
        <section class="container mx-auto">
            <div class="container mx-auto ">
                <table class="table table-dark w-full">
                    <thead class="">
                        <tr>
                            <th class="w-2">
                                №
                            </th>
                            <th>
                                Товары:
                            </th>
                            <th>
                                Количество
                            </th>
                            <th>
                                Цена:
                            </th>
                            <th>
                                Комментарий:
                            </th>
                            <th>Создан:</th>
                            <th>ФИО:</th>
                            <th>Статус:</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <blockquote cite="">
                            @foreach ($orders as $el)
                            <tr>
                                <td class="w-2">
                                    <h1 class="w-12 font-medium leading-12">{{ $el->id }}</h1>
                                </td>
                                <td>
                                    <h1 class="w-32 leading-12">{{ $el->tovar_name }}</h1>
                                </td>
                                <td>
                                    <p>{{ $el->quantity }}</p>
                                </td>
                                <td>
                                    <p> {{ $el->price }}</p>
                                </td>
                                <td>
                                    <p> {{ $el->comment }}</p>
                                </td>
                                <td>
                                    <p> {{ $el->created_at }}</p>
                                </td>
                                <td>
                                    <p class="w-82"> {{ $el->FIO }}</p>
                                </td>
                                <td>
                                    <p> {{ $el->status }}</p>
                                </td>

                                <td class="gap-2">
                                    <a class="list-group-item active"
                                        href="{{ route('order_edit', $el->id) }}">Изменить</a>
                                    <form method="post" action="{{ route('order_destroy', $el->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary cursor-pointer">Удалить</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </blockquote>
                    </tbody>
                </table>
            </div>
        </section>
    </div>


    @include('./include/footer')
</body>

</html>