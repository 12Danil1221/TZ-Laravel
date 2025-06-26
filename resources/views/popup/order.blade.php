                                    <div class="hidden" style="position: absolute; margin: -50vh;">
                                        <div class="index-10 w-2xl h-180 bg-[#eb623c] rounded-2xl">
                                            <div class="flex justify-between p-4 rounded-2xl bg-amber-200/50">
                                                <h1 class="text-2xl text-white">
                                                    Оформление
                                                    заказа:</h1>
                                                <a class="font-normal text-white"
                                                    href="{{ route('tovar-show',$tovar->id) }}">Закрыть</a>
                                            </div>
                                            <form class="grid justify-center p-32 m-0" method="post"
                                                action="{{ route('orderstore', $tovar->id) }}">
                                                @csrf
                                                <div class="form-group mb-5">
                                                    <label class="text-white">Товар :</label>
                                                    <input class="form-control border-1" type="text" name="tovar_name"
                                                        value="{{ $tovar->name }}" readonly>
                                                </div>
                                                <div class="form-group mb-5">
                                                    <label class="text-white">ФИО покупателя :</label>
                                                    <input class="form-control border-1" type="text" name="FIO"
                                                        required>
                                                </div>
                                                <div class="form-group mb-5">
                                                    <label class="text-white">Количетсво:</label>
                                                    <input class="form-control border-1" type="number" name="quantity"
                                                        value="1">
                                                </div>
                                                <div class="form-group mb-5">
                                                    <label class="text-white">Цена :</label>
                                                    <input type="number" name="price" value="{{ $tovar->price }}"
                                                        readonly>
                                                </div>
                                                <div class="form-group mb-5">
                                                    <label class="text-white">Статус:</label>
                                                    <input class="form-control border-1" type="text" name="status"
                                                        readonly value="новый">
                                                </div>
                                                <div class="form-group mb-5">
                                                    <label class="text-white">Комментарий покупателя :</label>
                                                    <textarea class="form-control border-1" name="comment"></textarea>
                                                </div>

                                                <button type="submit" class="bg-amber-200 rounded-md p-2">Создать
                                                    заказ</a></button>
                                            </form>
                                        </div>

                                    </div>