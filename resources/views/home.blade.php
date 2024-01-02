@extends('layouts.flat')

@section('content')
    <div class="relative">
        <img src="{{ asset('storage/main.jpg') }}" alt="nang-sen" class="w-full">

        <div class="absolute bottom-0 w-full space-y-5 md:space-y-8 p-10 md:p-20">
            <h3 class="text-yellow-200 font-bold text-3xl md:text-6xl">Liên hệ đặt hẹn</h3>
            <div class="space-y-1">
                <p class="text-gray-100 text-sm md:text-xl font-medium">Quý khách có thể đặt hẹn trước với Nàng Sen - Thân Khỏe, Tâm An.</p>
                <p class="text-gray-100 text-sm md:text-xl font-medium">Chúng tôi sẽ liên hệ Quý khách trong thời gian sớm nhất.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="space-y-5 md:space-y-8">
                    <div class="space-y-2 md:space-y-5">
                        <h4 class="text-yellow-200 text-xl md:text-3xl">Ghé thăm</h4>
                        <div class="space-y-1 text-sm md:text-base">
                            <p class="text-gray-100">Số 6 Bích Câu, Quốc Tử Giám, Đống Đa, Hà nội.</p>
                            <p class="text-gray-100">Giờ hoạt động: <strong>09:00 - 19:00</strong>.</p>
                            <p class="text-gray-100">Nhận booking đến 18:00 hằng ngày.</p>
                        </div>
                    </div>

                    <div class="space-y-2 md:space-y-5">
                        <h4 class="text-yellow-200 text-xl md:text-3xl">Email</h4>
                        <div>
                            <a href="mailto:booking@nangsen.com" class="text-gray-100 hover:underline">booking@nangsen.com</a>
                        </div>
                    </div>

                    <div class="space-y-2 md:space-y-5">
                        <h4 class="text-yellow-200 text-xl md:text-3xl">Hotline</h4>
                        <div>
                            <a href="tel:0708385555" class="text-gray-100 text-xl">0708.385.555</a>
                        </div>
                    </div>

                    <div>
                        <a href="/" class="text-gray-100 hover:text-yellow-300 hover:cursor-pointer">
                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>
                        </a>
                    </div>
                </div>

                <div class="hidden md:block">
                    <form class="space-y-8">
                        <div class="grid md:grid-cols-2 md:gap-10">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-gray-200 bg-transparent border-0 border-b-2 border-gray-400 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-600 peer" placeholder=" " />
                                <label for="name" class="peer-focus:font-medium absolute text-gray-300 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-yellow-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tên quý khách</label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="time" id="time" class="block py-2.5 px-0 w-full text-gray-200 bg-transparent border-0 border-b-2 border-gray-400 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-600 peer" placeholder=" " />
                                <label for="time" class="peer-focus:font-medium absolute text-gray-300 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-yellow-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Giờ quý khách đến</label>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-10">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="phone" id="phone" class="block py-2.5 px-0 w-full text-gray-200 bg-transparent border-0 border-b-2 border-gray-400 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-600 peer" placeholder=" " />
                                <label for="phone" class="peer-focus:font-medium absolute text-gray-300 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-yellow-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Điện thoại</label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="email" id="email" class="block py-2.5 px-0 w-full text-gray-200 bg-transparent border-0 border-b-2 border-gray-400 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-600 peer" placeholder=" " />
                                <label for="email" class="peer-focus:font-medium absolute text-gray-300 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-yellow-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                            </div>
                        </div>
                        <div class="">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="option" id="option" class="block py-2.5 px-0 w-full text-gray-200 bg-transparent border-0 border-b-2 border-gray-400 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-600 peer" placeholder=" " />
                                <label for="option" class="peer-focus:font-medium absolute text-gray-300 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-yellow-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Yêu cầu khác của quý khách</label>
                            </div>
                        </div>

                        <button type="submit" class="text-white text-lg bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Book hẹn</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
