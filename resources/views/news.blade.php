@extends('layouts.flat')

@section('content')
    @include('components.header')

    <div class="max-w-6xl p-5 mx-auto space-y-10">
        <h3 class="text-3xl font-bold uppercase text-center text-sky-800">
            Tin tức hữu ích
        </h3>

        <div class="space-y-5">
            <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-2xl hover:bg-gray-100 mx-auto">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://flowbite.com/docs/images/blog/image-4.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Độc đáo bài thuốc tắm lá Dao đỏ tại Nàng Sen Spa & Massage</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Bài thuốc tắm lá dao đỏ có nguồn gốc từ vùng SaPa - Lào Cai, nổi tiếng với vô vàn lợi ích cho sức khỏe, nên được người Dao đỏ thường xuyên sử dụng.</p>
                </div>
            </a>

            <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-2xl hover:bg-gray-100 mx-auto">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://flowbite.com/docs/images/blog/image-4.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tips trị dứt điểm đau cổ vai gáy cho dân văn phòng </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Việc ngồi yên hàng giờ đồng hồ sẽ khiến cho dân văn phòng xuất hiện triệu chứng tê tay chân, mỏi cơ. Trên phương diện y học, các bài massage trị liệu sẽ giúp cơ thể phục hồi nhanh hơn.</p>
                </div>
            </a>

            <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-2xl hover:bg-gray-100 mx-auto">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://flowbite.com/docs/images/blog/image-4.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Trị liệu bẻ cơ xương khớp và những tác dụng thần kỳ có thể bạn chưa biết?</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Trị liệu bẻ cơ xương khớp đang được đánh giá là phương pháp chữa trị hữu hiệu và an toàn nhất hiện nay cho các bệnh cơ xương khớp, đặc biệt là các bệnh lý cột sống.</p>
                </div>
            </a>
        </div>
    </div>

{{--    @include('components.footer')--}}
@endsection
