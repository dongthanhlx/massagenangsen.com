@extends('layouts.flat')

@section('content')
    @include('components.header')

    <div class="max-w-3xl p-5 mx-auto space-y-10">
        <h3 class="text-2xl md:text-3xl font-bold uppercase text-center text-sky-800">
            Massage tại Nàng Sen: Những điều không phải ai cũng biết?
        </h3>

        <div class="space-y-5">
            <p class="mb-3 text-center text-gray-700 px-5 md:px-20">
                "Ưu điểm của nàng sen: không gian, thái độ chuyên nghiệp, dịch vụ chuyên sâu, không chỉ massage mà còn làm đẹp như trẻ hoá da mặt, triệt lông body, tắm trắng,..."
            </p>

            <p class="mb-3 text-center text-gray-700 px-5 md:px-20">
                Tiếng nhạc du dương, hương thơm dễ chịu, không gian ấn tượng cùng các liệu pháp massage thư giãn chuyên nghiệp. Tất cả điều đó được gói gọn tại <span class="font-semibold text-sky-700">Nàng Sen</span>, điểm đến thư giãn và an dưỡng. Với slogan “Khách là Nàng còn ta là Sen”, Nàng Sen dự sẽ là điểm đến thư giãn yêu thích tại Hà Nội
            </p>


            <div class="space-y-3">
                <h4 class="text-xl font-semibold">1. Không gian spa và massage mang đến sự thoải mái</h4>

                <p class="text-gray-700 text-lg">
                    Khác với những nơi làm đẹp khác. <span class="font-semibold text-sky-700">Nàng Sen</span> ưu tiên và chú trọng sự thoải mái của khách hàng lên đầu tiên. Từ cách thiết kế không gian đến cách bày trí các vật dụng cũng được làm cẩn thận, tỉ mỉ.
                </p>

                <p class="text-gray-700 text-lg">
                    Mỗi chi tiết dù nhỏ, nhưng lại đem đến cho bạn sự thích thú và thân thuộc như: nến, hoa, lá,… Ánh sáng ở spa thường dịu nhẹ, không quá sáng chói. Hòa quyện cùng gam màu trầm spa tạo nên sự dễ chịu cho thị giác người nhìn.
                </p>

                <img src="{{asset('storage/massage-tai-nang-sen/1.png')}}" alt="" class="px-0 md:px-20 py-5">
            </div>

            <div class="space-y-3">
                <h4 class="text-xl font-semibold">2. Các liệu pháp tại spa mang đến lợi ích tuyệt vời cho sức khỏe</h4>

                <p class="text-gray-700 text-lg">
                    Điều đặc biệt của spa là không dùng thuốc để chữa trị. Spa sẽ dùng các liệu pháp xông hơi, massage tác động vào cơ thể nhằm mang lại hiệu quả lành tính. Liệu pháp này có từ thời xa xưa và được gìn giữ, phát triển đến tận ngày nay.
                </p>

                <p class="text-gray-700 text-lg">
                    Đến với <span class="font-semibold text-sky-700">Nàng Sen</span>, bạn không những được trải nghiệm dịch vụ massage mà còn các gói dịch vụ làm đẹp như trẻ hoá da mặt, triệt lông body, tắm trắng,...
                </p>

                <img src="{{asset('storage/massage-tai-nang-sen/2.png')}}" alt="" class="px-0 md:px-20 py-5">
            </div>

            <div class="space-y-3">
                <h4 class="text-xl font-semibold">3. Kỹ thuật viên chuyên nghiệp</h4>

                <p class="text-gray-700 text-lg">
                    Những kỹ thuật viên tại <span class="font-semibold text-sky-700">Nàng Sen</span> đã được qua đào tạo và có tay nghề cao. Họ am hiểu và biết rõ các điểm  huyệt trên cơ thể của bạn, nên mọi cơn đau nhức, mệt mỏi đều được xua tan nhanh chóng.
                </p>

                <p class="text-gray-700 text-lg">
                    Điểm đặc biệt làm <span class="font-semibold text-sky-700">Nàng Sen</span> nổi bật và được nhiều khách hàng đánh giá cao. Là từ sự niềm nở, tận tình của các kỹ thuật viên. Họ mang đến cảm giác thân quen, vì thế bạn có thể chia sẻ, nói chuyện thoải mái cùng họ mà không bị ngại ngùng hay khó chịu.
                </p>

                <p class="text-gray-700 text-lg">
                    <span class="font-semibold text-sky-700">Nàng Sen</span> hội tụ đầy đủ những tiêu chuẩn chất lượng của một spa sang trọng, uy tín, chất lượng từ không gian thư giãn đỉnh cao, cơ sở vật chất hiện đại, đến trình độ tay nghề, sự tận tâm và chu đáo của đội ngũ kĩ thuật viên.Với kiến trúc ấn tượng, dịch vụ tiêu chuẩn, <span class="font-semibold text-sky-700">Nàng Sen</span> sớm trở thành điểm đến thư giãn và an dưỡng được ưa thích.
                </p>

                <img src="{{asset('storage/massage-tai-nang-sen/3.jpg')}}" alt="" class="px-0 md:px-20 py-5">
            </div>

        </div>
@endsection
