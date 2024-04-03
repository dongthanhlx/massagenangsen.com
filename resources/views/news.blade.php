@extends('layouts.flat')

@section('content')
    @include('components.header')

    <div class="max-w-6xl p-5 mx-auto space-y-10">
        <h3 class="text-3xl font-bold uppercase text-center text-sky-800">
            Tin tức hữu ích
        </h3>

        <div class="space-y-5">
            <a href="/noi-hoi-tu-dang-cap" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-2xl hover:bg-gray-100 mx-auto">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('storage/noi-hoi-tu-dang-cap/thumbnail.png') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nơi hội tụ đẳng cấp doanh nhân</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Nàng Sen tự hào là một biểu tượng của sự tinh tế và đẳng cấp, với kiến trúc cổ điển kết hợp với các yếu tố tự nhiên, không gian nơi đây tạo ra một cảm giác ấm áp</p>
                </div>
            </a>

            <a href="/goi-dau-duong-sinh" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-2xl hover:bg-gray-100 mx-auto">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('storage/goi-dau-duong-sinh/thumbnail.png') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Gội đầu dưỡng sinh ASRM - thư giãn tinh thần chăm sóc tóc khỏe đẹp</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Gội đầu dưỡng sinh là hình thức 𝐤𝐞̂́𝐭 𝐡𝐨̛̣𝐩 giữa việc sử dụng các thảo dược thiên nhiên kết hợp với các động tác massage, bấm huyệt vừa giúp làm sạch da đầu, ...</p>
                </div>
            </a>

            <a href="/bai-thuoc-tam-la-cua-nguoi-dao" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-2xl hover:bg-gray-100 mx-auto">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('storage/bai-thuoc-tam-la.png') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Độc đáo bài thuốc tắm lá Dao đỏ tại Nàng Sen Spa & Massage</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Bài thuốc tắm lá dao đỏ có nguồn gốc từ vùng SaPa - Lào Cai, nổi tiếng với vô vàn lợi ích cho sức khỏe, nên được người Dao đỏ thường xuyên sử dụng.</p>
                </div>
            </a>

            <a href="/tip-tri-dut-diem-dau-co-vai-gay" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-2xl hover:bg-gray-100 mx-auto">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('storage/tri-vai-gay.png') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tips trị dứt điểm đau cổ vai gáy cho dân văn phòng </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Việc ngồi yên hàng giờ đồng hồ sẽ khiến cho dân văn phòng xuất hiện triệu chứng tê tay chân, mỏi cơ. Trên phương diện y học, các bài massage trị liệu sẽ giúp cơ thể phục hồi nhanh hơn.</p>
                </div>
            </a>

            <a href="/tri-lieu-be-co-xuong-khop" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-2xl hover:bg-gray-100 mx-auto">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('storage/be-xuong-khop.png') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Trị liệu bẻ cơ xương khớp và những tác dụng thần kỳ có thể bạn chưa biết?</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Trị liệu bẻ cơ xương khớp đang được đánh giá là phương pháp chữa trị hữu hiệu và an toàn nhất hiện nay cho các bệnh cơ xương khớp, đặc biệt là các bệnh lý cột sống.</p>
                </div>
            </a>
        </div>
    </div>

{{--    @include('components.footer')--}}
@endsection
