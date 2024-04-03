@extends('layouts.flat')

@section('content')
    @include('components.header')

    <div class="max-w-3xl p-5 mx-auto space-y-10">
        <h3 class="text-2xl md:text-3xl font-bold uppercase text-center text-sky-800">
            Massage & Spa Nàng Sen - Nơi hội tụ đẳng cấp doanh nhân
        </h3>

        <div class="space-y-5">
            <div>
                <img src="{{asset('storage/noi-hoi-tu-dang-cap/1.jpg')}}" alt="" class="px-0 md:px-20 py-5">

                <p class="mb-3 text-center text-gray-700 px-5 md:px-20">
                    Có một Nàng Sen yên bình như thế, e thẹn nép mình trên con phố Bích Câu sầm uất, nhộn nhịp của thủ đô Hà Nội. Không gian tĩnh lặng ở đây dường như tách biệt với sự xô bồ và náo nhiệt bên ngoài. Nơi đây không chỉ là một địa điểm massage thông thường, mà còn là một điểm đến tinh tế dành cho giới doanh nhân yêu thích sự sang trọng và thư giãn.
                </p>
            </div>

            <div class="space-y-3">
                <h4 class="text-xl font-semibold">1. Không gian đẳng cấp, sang trọng</h4>

                <p class="text-gray-700 text-lg">
                    Nàng Sen tự hào là một biểu tượng của sự tinh tế và đẳng cấp, với kiến trúc cổ điển kết hợp với các yếu tố tự nhiên, không gian nơi đây tạo ra một cảm giác ấm áp và sang trọng ngay từ cái nhìn đầu tiên. Các phòng massage riêng biệt được trang bị đầy đủ tiện nghi, tạo điều kiện lý tưởng cho mọi loại dịch vụ.
                </p>

                <img src="{{asset('storage/noi-hoi-tu-dang-cap/2.jpg')}}" alt="" class="px-0 md:px-20 py-5">

                <img src="{{asset('storage/noi-hoi-tu-dang-cap/3.jpg')}}" alt="" class="px-0 md:px-20 py-5">
            </div>

            <div class="space-y-3">
                <h4 class="text-xl font-semibold">2. Dịch vụ 5 sao</h4>

                <p class="text-gray-700 text-lg">
                    Tại Nàng Sen, việc phục vụ khách hàng được đặt lên hàng đầu. Đội ngũ nhân viên chuyên nghiệp và tận tâm luôn sẵn lòng phục vụ bạn từ khi bước chân vào cửa.
                </p>

                <p class="text-gray-700 text-lg">
                    Các dịch vụ massage được thiết kế đặc biệt cho giới doanh nhân để giảm căng thẳng, tăng cường sức khỏe và cải thiện tinh thần. Với sự kết hợp tinh tế giữa kỹ thuật massage chuyên nghiệp và các phương pháp thư giãn, dịch vụ tại Nàng Sen hướng đến việc mang lại trải nghiệm thư giãn toàn diện và đáp ứng nhu cầu đặc biệt cho mỗi khách hàng.
                </p>

                <img src="{{asset('storage/noi-hoi-tu-dang-cap/3.jpg')}}" alt="" class="px-0 md:px-20 py-5">
            </div>

            <div class="space-y-3">
                <h4 class="text-xl font-semibold">3. Trải nghiệm đặc biệt</h4>

                <p class="text-gray-700 text-lg">
                    Ngoài các dịch vụ massage, Nàng Sen còn cung cấp các liệu pháp chăm sóc da chuyên sâu và các liệu pháp thư giãn độc đáo như phòng hơi xông hơi, massage đá nóng, tắm bồn thảo dược,..  Bạn có thể lựa chọn gói dịch vụ cá nhân hoặc kết hợp chúng để có trải nghiệm tối ưu nhất.
                </p>

                <img src="{{asset('storage/noi-hoi-tu-dang-cap/4.jpg')}}" alt="" class="px-0 md:px-20 py-5">

                <p class="text-gray-700 text-lg">
                    Massage & Spa Nàng Sen không chỉ là một nơi để thư giãn, mà còn là một trải nghiệm đẳng cấp dành cho giới doanh nhân mong muốn tìm kiếm sự cân bằng giữa công việc và cuộc sống. Với không gian sang trọng, dịch vụ chuyên nghiệp và không gian yên bình, đây thực sự là một điểm đến không thể bỏ qua.
                </p>

            </div>

            <div class="space-y-3">
                <h4 class="text-xl font-semibold">Nàng Sen - Khách là Nàng, còn Ta là Sen</h4>

                <ul class="space-y-3 text-gray-700 list-disc list-inside">
                    <li>
                        Địa chỉ: <strong>Số 6 Bích Câu, P. Quốc Tử Giám, Q. Đống Đa</strong>
                    </li>
                    <li>
                        Hotline: <a href="callto:0708385555" class="font-bold">070.838.5555</a>
                    </li>
                </ul>
            </div>
        </div>
@endsection
