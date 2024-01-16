@extends('layouts.flat')

@section('content')
    @include('components.header')

    <div class="max-w-6xl p-5 mx-auto space-y-10">
        <h3 class="text-3xl font-bold uppercase text-center text-sky-800">
            Dịch vụ
        </h3>

        <div class="space-y-5">
            <a href="/dich-vu-tai-massage-nang-sen" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-2xl hover:bg-gray-100 mx-auto">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://flowbite.com/docs/images/blog/image-4.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Massage tại Nàng Sen: Những điều không phải ai cũng biết?</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Không gian, thái độ chuyên nghiệp, dịch vụ chuyên sâu, không chỉ massage mà còn làm đẹp như trẻ hoá da mặt, triệt lông body, tắm trắng</p>
                </div>
            </a>

            <a href="/xua-tan-met-moi-voi-goi-giam-dau" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-2xl hover:bg-gray-100 mx-auto">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://flowbite.com/docs/images/blog/image-4.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Gói trị liệu điểm đau, vùng đau</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Được thiết kế cho những khách hàng có quỹ thời gian ngắn, có nhu cầu trị liệu tập trung chủ yếu vào các vùng đau, điểm đau cụ thể theo từng triệu chứng bệnh lý</p>
                </div>
            </a>

            <a href="/goi-thuy-tri-lieu" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-2xl hover:bg-gray-100 mx-auto">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://flowbite.com/docs/images/blog/image-4.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Gói thủy trị liệu truyền thống tại Nàng Sen</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Thủy trị liệu là một trong những phương pháp vật lý trị liệu được đánh giá là có tác động hiệu quả tới cơn đau và tình trạng bệnh của bệnh nhân.</p>
                </div>
            </a>
        </div>
    </div>

    {{--    @include('components.footer')--}}
@endsection
