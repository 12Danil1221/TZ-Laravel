<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="m-0 p-0">
    @include('./include/header')

    <form method="post" action="{{ route('registration') }}">
        @csrf
        <div class="form-group mt-1">
            <label>Email</label>
            <input class="form-control border-1" type="email" name="email">
        </div>
        <div class="form-group mt-1">
            <label>Password</label>
            <input class="form-control border-1" type="text" name="password">
        </div>
        <div class="form-group mt-1">
            <label>Gender</label>
            <input class="form-control border-1" type="text" name="gender">
        </div>
        <button type="submit" class="btn btn-primary">Зарегестрироваться</button>
    </form>
    @include('./include/footer')

</body>

</html>