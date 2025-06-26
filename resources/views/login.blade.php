<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="m-0 p-0">
    @include('./include/header')

    <section class="login">
        <div class="container mx-auto">
            <div class="flex flex-wrap columns-2">
                <div
                    class="w-1/2 h-180 rounded-2xl bg-center bg-no-repeat bg-[url(./storage/8a482332-e1ed-4c9a-9498-83b0843bbf78.jfif)]">
                    <h1 class="text-5xl font-bold text-white text-center mask-t-to-99% mt-60 uppercase">Форма <br>
                        Авторизации</h1>
                </div>
                <div class="text-center items-center w-1/2 grid">
                    <form method="get" action="{{ route('authorization') }}">
                        <h1 class="text-black font-bold text-3xl">Авторизация</h1>
                        @csrf
                        <div class="form-group mt-1">
                            <br>
                            <input class="w-1/2 h-10 rounded-md form-control border-1" placeholder="Email" type="email"
                                name="email">
                        </div>
                        <div class="form-group mt-1">
                            <br>
                            <input class="w-1/2 h-10 rounded-md form-control border-1" placeholder="Password"
                                type="text" name="password">
                        </div>
                        <br>
                        <button type="submit"
                            class="btn btn-primary w-1/2 h-10 text-white bg-[#111111] rounded-md cursor-pointer">Войти</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('./include/footer')

</body>

</html>