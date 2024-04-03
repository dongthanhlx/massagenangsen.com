@extends('layouts.flat')

@section('content')
    @include('components.header')

    <div class="max-w-3xl p-5 mx-auto space-y-10">
        <h3 class="text-2xl md:text-3xl font-bold uppercase text-center text-sky-800">
            ⚡MUA 2 TẶNG 1 - DEAL HỜI PHẢI HỐT⚡
        </h3>

        <div class="space-y-5">
            <p class="text-gray-700 text-lg">
                Siêu ưu đãi MUA 2 TẶNG 1 tại Massage & Spa Nàng Sen: Deal hời như này thì phải hốt ngay thôi💞💞
            </p>

            <img src="{{asset('storage/special-offer.jpg')}}" alt="" class="px-0 md:px-20 py-5">

            <p class="text-gray-700 text-lg">
                Tại <strong>Nàng Sen</strong>, bạn sẽ được thư giãn hoàn toàn, thả lỏng tâm hồn trong một nơi bình yên và ấm áp, mùi hương thảo dược nhẹ nhàng bao trùm không gian. Hãy gác lại mọi muộn phiền và âu lo để nhắm mắt lại và tận hưởng:
            </p>

            <ul class="space-y-3 text-gray-700 list-disc list-inside">
                <li>
                    12 kỹ thuật 𝒎𝒂𝒔𝒔𝒂𝒈𝒆 cao cấp kết hợp với bấm huyệt, truy vết chính xác điểm đau, từ đó tăng cường tuần hoàn máu, giảm ngay đau nhức và mệt mỏi.
                </li>
                <li>
                    Gội đầu dưỡng sinh kết hợp 𝒎𝒂𝒔𝒔𝒂𝒈𝒆 da dầu, đả thông kinh mạch, giúp tóc sạch khỏe, vùng đầu được khai thông, giảm nhanh tình trạng mất ngủ, đau đầu,...
                </li>
                <li>
                    Ngâm lá thảo dược người Dao đỏ giúp lưu thông khí huyết, làm da dẻ hồng hào và mịn màng.
                </li>
            </ul>

            <p class="text-gray-700 text-lg">
                Hãy dành thời gian cho bản thân và trải nghiệm sự kết hợp tuyệt vời giữa chăm sóc cơ thể và tâm hồn. Cùng đặt lịch ngay hôm nay để khám phá tại 𝑴𝒂𝒔𝒔𝒂𝒈𝒆 & 𝑺𝒑𝒂 𝑵𝒂̀𝒏𝒈 𝑺𝒆𝒏 nhé!
            </p>

            <div class="space-y-3">
                <h4 class="text-xl font-semibold">Điều kiện áp dụng</h4>

                <ul class="space-y-3 text-gray-700 list-disc list-inside">
                    <li>
                        Không có giá trị quy đổi thành tiền mặt
                    </li>
                    <li>
                        Áp dụng KH lần đầu sử dụng Dịch vụ Massage tại Nàng Sen
                    </li>
                    <li>
                        Áp dụng cho nhóm đi 3 người
                    </li>
                    <li>
                        Không áp dụng đồng thời với Chương trình khuyến mại khác
                    </li>
                </ul>
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
    </div>
@endsection
