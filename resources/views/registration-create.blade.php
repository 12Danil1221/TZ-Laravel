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
                        Регистрации</h1>
                </div>
                <div class="text-center items-center w-1/2 grid">
                    <form method="post" action="{{ route('registration') }}" enctype="multipart/form-data">
                        @csrf
                        <h1 class="text-black font-bold text-3xl">Регистрация</h1>
                        <div class="form-group mt-1">
                            <br>
                            <input class="w-1/2 h-10 rounded-md form-control border-1" placeholder="logo" type="file"
                                name="image" value="1654087085_preview_754f046124df71a99cfd7d543a31e9ef.gif">
                        </div>
                        <div class="form-group mt-1">
                            <br>
                            <input class="w-1/2 h-10 rounded-md form-control border-1" placeholder="name" type="text"
                                name="name" value="Данил">
                        </div>
                        <div class="form-group mt-1">
                            <br>
                            <input class="w-1/2 h-10 rounded-md form-control border-1" placeholder="fullname"
                                type="text" name="fullname" value="Филиппов">
                        </div>
                        <div class="form-group mt-1">
                            <br>
                            <input class="w-1/2 h-10 rounded-md form-control border-1" placeholder="age" type="number"
                                name="age" value="21">
                        </div>
                        <div class="form-group mt-1">
                            <br>
                            <input class="w-1/2 h-10 rounded-md form-control border-1" placeholder="Email" type="email"
                                name="email" value="danil.philippov74@gmail.com">
                        </div>
                        <div class="form-group mt-1">
                            <br>
                            <input class="w-1/2 h-10 rounded-md form-control border-1" placeholder="Password"
                                type="text" name="password" value="Adminpassword">
                        </div>
                        <div class="form-group mt-1">
                            <br>
                            <input class="w-1/2 h-10 rounded-md form-control border-1" placeholder="Gender" type="text"
                                name="gender" value="humen">
                        </div>
                        <br>
                        <button type="submit"
                            class="btn btn-primary w-1/2 h-10 text-white bg-[#111111] rounded-md cursor-pointer">Зарегестрироваться</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('./include/footer')

</body>

</html>