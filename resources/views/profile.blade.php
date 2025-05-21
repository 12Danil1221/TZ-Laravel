<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @include('./include/header')
    <main>
        <section>
            <div class="container mx-auto">
                <div class="grid">
                    <h1 class="text-4xl mb-5">Профиль пользователя:</h1>
                    <h1 class="">Почта:</h1>
                    {{ $user->email }}
                    <hr class="w-96">
                    <h1 class="">Ваш пол:</h1>
                    {{ $user->gender }}
                </div>
            </div>
        </section>
    </main>
    @include('./include/footer')
</body>

</html>