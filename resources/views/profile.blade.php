<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-[#e2e8f0]">
    @include('./include/header')
    <main>
        <section class="profile">
            <div class="container mx-auto">

                <!-- Top Bottoms -->
                <div class="top-navigation flex justify-between m-5">
                    <a class="text-2xl" href="/">Назад</a>
                    @if($user->role == 'admin')
                    <li class="nav-item list-none">
                        <a class="nav-link active" href="{{ route('adminpanel') }}">Админ панель</a>
                    </li>
                    @endif
                </div>
                <!-- End Top Bottoms -->

                <!-- Main Content -->
                <div class="block-cards flex flex-wrap gap-4">
                    <div
                        class="card rounded-md border-1 bg-[#FFFFFF] flex-1 h-auto py-3 grid justify-center text-center mx-auto">
                        <div class="card-profile">
                            <h2 class="text-3xl"><strong>Профиль</strong></h2>
                            <img class="px-25 py-3 rounded-4xl" style="border-radius:25%;"
                                src="{{ asset('storage/'.$user->image) }}" alt="profile-image">
                            <h2 class="card-profile-title text-2xl font-semibold">
                                <?= $user->name ?></h2>
                            <p class="card-profile-text text-[#525763] font-medium">
                                {{ $user->email }}</p>
                            <p class="card-profile-text text-[#525763] font-medium">
                                {{ $user->gender }}</p>
                        </div>
                    </div>
                    <div class="card rounded-md border-1 bg-[#FFFFFF] flex-2 px-3 justify-start">
                        <div class="row_1 flex justify-normal py-3 border-b-1 border-gray-400">
                            <h2 class="pr-15"><strong>Full Name</strong></h2>
                            <h2>{{ $user->name }} {{ $user->fullname }}</h2>
                        </div>
                        <div class="row_2 flex justify-normal py-3 border-b-1 border-gray-400">
                            <h2 class="pr-15"><strong>Email</strong></h2>
                            <h2>{{ $user->email }}</h2>
                        </div>
                        <div class="row_2 flex justify-normal py-3 border-b-1 border-gray-400">
                            <h2 class="pr-15"><strong>Возраст:</strong></h2>
                            <h2> {{ $user->age }}</h2>
                        </div>
                        <div class="row_2 flex justify-normal py-3 border-b-1 border-gray-400">
                            <h2 class="pr-15"><strong>Пол:</strong></h2>
                            <h2> {{ $user->gender }}</h2>
                        </div>
                    </div>
                </div>
                <div class="block-cards columns-3 flex flex-wrap justify-between gap-4 py-4">
                    <div class="card rounded-md border-1 bg-[#FFFFFF] flex-1/5 px-3 justify-between">
                        <ul>
                            <div class="row_1 flex justify-between py-3 border-b-1 border-gray-400">
                                <h2 class="pr-15"><strong>Website</strong></h2>
                                <li class="list-disc">
                                    <h2>https://bootdey.com</h2>
                                </li>
                            </div>
                            <div class="row_2 flex justify-between py-3 border-b-1 border-gray-400">
                                <h2 class="pr-15"><strong>Github</strong></h2>
                                <li class="list-disc">
                                    <h2>bootdey</h2>
                                </li>
                            </div>
                            <div class="row_2 flex justify-between py-3 border-b-1 border-gray-400">
                                <h2 class="pr-15"><strong>Twitter</strong></h2>
                                <li class="list-disc">
                                    <h2> @bootdey</h2>
                                </li>
                            </div>
                        </ul>
                    </div>
                    <div class="card rounded-md border-1 bg-[#FFFFFF] flex-1/4 px-3 justify-between">
                        <div class="title">Web Design</div>
                        <div
                            class="flex-start grid h-1.5 w-full rounded-full overflow-hidden bg-gray-500 font-sans text-xs font-medium">
                            <div
                                class="flex items-center justify-center w-1/4 h-full overflow-hidden text-gray-500 break-all bg-blue-500 rounded-full">
                            </div>
                        </div>
                        <div class="title pt-3">Website Markup</div>
                        <div
                            class="flex-start grid h-1.5 w-full rounded-full overflow-hidden bg-gray-500 font-sans text-xs font-medium">
                            <div
                                class="flex items-center justify-center w-1/3 h-full overflow-hidden text-gray-500 break-all bg-blue-500 rounded-full">
                            </div>
                        </div>
                        <div class="title pt-3">One Page</div>
                        <div
                            class="flex-start grid h-1.5 w-full rounded-full overflow-hidden bg-gray-500 font-sans text-xs font-medium">
                            <div
                                class="flex items-center justify-center w-1/2 h-full overflow-hidden text-gray-500 break-all bg-blue-500 rounded-full">
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-md border-1 bg-[#FFFFFF] flex-1/4   px-3 justify-between">
                        <div class="title">Web Design</div>
                        <div
                            class="flex-start grid h-1.5 w-full rounded-full overflow-hidden bg-gray-500 font-sans text-xs font-medium">
                            <div
                                class="flex items-center justify-center w-1/2 h-full overflow-hidden text-gray-500 break-all bg-blue-500 rounded-full">
                            </div>
                        </div>
                        <div class="title pt-3">Website Markup</div>
                        <div
                            class="flex-start grid h-1.5 w-full rounded-full overflow-hidden bg-gray-500 font-sans text-xs font-medium">
                            <div
                                class="flex items-center justify-center w-1/3 h-full overflow-hidden text-gray-500 break-all bg-blue-500 rounded-full">
                            </div>
                        </div>
                        <div class="title pt-3">One Page</div>
                        <div
                            class="flex-start grid h-1.5 w-full rounded-full overflow-hidden bg-gray-500 font-sans text-xs font-medium">
                            <div
                                class="flex items-center justify-center w-1/4 h-full overflow-hidden text-gray-500 break-all bg-blue-500 rounded-full">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('./include/footer')
</body>
<?php 
// $a = 5;
// $b = 10;
// echo $a + $b;
// function SeyHello2($teststring){
//     echo $teststring;
// }
// SeyHello2('test2'."<br>")
?>
<script>
//Test 
// function SeyHello(int) {
//     document.write(int);
// }
// SeyHello(22202020);
</script>

</html>