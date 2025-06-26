<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="m-0 p-0">
    @include('./include/header')

    <!-- Top Bottoms -->
    <div class="top-navigation flex justify-between m-5">
        <a class="text-2xl" href="{{ route('adminpanel') }}">Назад</a>
    </div>
    <!-- End Top Bottoms -->

    <!-- Main Content -->
    <div class="block-cards flex flex-wrap gap-4">
        <div class="card rounded-md border-1 bg-[#FFFFFF] flex-1 h-auto py-3 grid justify-center text-center mx-auto">
            <div class="card-profile">
                <h2 class="text-3xl pb-5"><strong>Профиль</strong></h2>

                <img class="mx-auto w-25 rounded-4xl" style="border-radius:25%;"
                    src="{{ asset('storage/'.$user->image) }}" alt="profile-image">
                <h1 class="card-profile-title text-4xl font-semibold">
                    <?php echo $user->name ?></h1>
                <p class="card-profile-text text-[#525763]">
                    {{ $user->email }}</p>
                <p class="card-profile-text text-[#525763]">
                    {{ $user->gender }}</p>
            </div>
        </div>
        <div class="card rounded-md border-1 bg-[#FFFFFF] flex-2 px-3 justify-start">
            <form method="post" action="{{ route('user_update', $user->id) }}">
                @csrf
                @method('PUT')

                <div class="row_1 flex justify-normal py-3 border-b-1 border-gray-400">
                    <h2 class="pr-15"><strong>Изменение параметров профиля</strong></h2>
                </div>
                <div class="row_1 grid justify-normal py-3 border-b-1 border-gray-400">
                    <h2 class="pr-15"><strong>Имя</strong></h2>
                    <input class="form-control border-1 w-max py-2 px-2 rounded-md" type="text"
                        value="{{ $user->name }}" name="name">
                </div>
                <div class="row_2 grid justify-normal py-3 border-b-1 border-gray-400">
                    <h2 class="pr-15"><strong>Email</strong></h2>
                    <input class="form-control border-1 w-max py-2 px-2 rounded-md" type="email"
                        value="{{ $user->email }}" name="email">
                </div>
                <div class="row_2 grid justify-normal py-3 border-b-1 border-gray-400">
                    <h2 class="pr-15"><strong>Возраст</strong></h2>
                    <input class="form-control border-1 w-max py-2 px-2 rounded-md" type="age" value="{{ $user->age }}"
                        name="age">
                </div>
                <div class="row_2 grid justify-normal py-3 border-gray-400">
                    <h2 class="pr-15"><strong>Пол:</strong></h2>
                    <input class="form-control border-1 w-max py-2 px-2 rounded-md" type="text"
                        value="{{ $user->gender }}" name="gender">
                </div>
                <button type="submit" class="bg-amber-200 rounded-md p-2 my-2 cursor-pointer">Изменить
                    пользователя</button>

            </form>
        </div>
    </div>

    @include('./include/footer')

</body>

</html>