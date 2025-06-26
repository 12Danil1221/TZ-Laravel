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
        <div class="container mx-auto ">
            <table class="table table-dark w-full items-center justify-center">
                <thead class="">
                    <tr>
                        <th>
                            №
                        </th>
                        <th>
                            Logo
                        </th>
                        <th>
                            Имя
                        </th>
                        <th>
                            Возраст
                        </th>
                        <th>
                            Емаил
                        </th>
                        <th>
                            Пол
                        </th>
                        <th>
                            Роль
                        </th>
                        <th>
                            Действия
                        </th>
                    </tr>
                </thead>
                @foreach ($users as $el)
                <tbody class="text-center">
                    <tr>
                        <td>{{$el->id}}</td>

                        <td class="absolute ml-3"><img class="w-12" src="{{asset('storage/'.$el->image)}}" alt=""></td>

                        <td>{{$el->name}}</td>

                        <td>{{ $el->age }}</td>

                        <td>{{ $el->email }}</td>

                        <td>{{ $el->gender }}</td>

                        <td>{{ $el->role }}</td>

                        <td class="flex text-center justify-center gap-2">
                            <a class="list-group-item active" href="{{ route('user_edit', $el->id) }}">Изменить</a>
                            <form method="post" action="{{ route('user_destroy', $el->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary cursor-pointer">Удалить</button>
                            </form>
                        </td>

                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
        <div class="hidden map container mx-auto">
            <div class="">

            </div>
        </div>
    </div>


    @include('./include/footer')
</body>

</html>