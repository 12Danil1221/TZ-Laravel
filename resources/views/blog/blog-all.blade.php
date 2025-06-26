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
        <section class="blog news">
            <div class="container mx-auto">
                <div class="flex justify-between">
                    <h1 class="text-4xl">Все новости</h1>
                    <a class="text-2xl" href="/blog-create">Предложить новость</a>
                </div>
            </div>
        </section>
    </main>
    @include('./include/footer')
</body>

<script>

</script>

</html>