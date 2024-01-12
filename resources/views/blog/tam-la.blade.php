@extends('layouts.flat')

@section('content')
    @include('components.header')

    <div class="max-w-3xl p-5 mx-auto space-y-10">
        <h3 class="text-2xl md:text-3xl font-bold uppercase text-center text-sky-800">
            XUA TAN CƠN MỆT MỎI, CĂNG THẲNG VỚI BÀI THUỐC TẮM LÁ CỦA NGƯỜI DAO TẠI “NÀNG SEN MASSAGE&SPA”!!!
        </h3>

        <div class="space-y-5">
            <p class="mb-3 text-center text-gray-700 px-5 md:px-20">
                "Bài thuốc tắm lá dao đỏ có nguồn gốc từ vùng SaPa - Lào Cai, nổi tiếng với vô vàn lợi ích cho sức khỏe, nên được người Dao đỏ thường xuyên sử dụng."
            </p>

            <div class="space-y-3">
                <h4 class="text-xl font-semibold">Thuốc lá tắm là gì?</h4>

                <p class="text-gray-700 text-lg">
                    Đó là một dạng đặc biệt về cách sử dụng cây cỏ làm thuốc để chăm sóc sức khoẻ và chữa bệnh ở người đã có từ rất xa xưa, đây còn là nét đẹp văn hoá y học cổ truyền trong cộng đồng các dân tộc ở Việt Nam.
                </p>

                <img src="{{asset('storage/tam-la/1.png')}}" alt="" class="px-0 md:px-20 py-5">
            </div>

            <div class="space-y-3">
                <h4 class="text-xl font-semibold">Nguồn gốc của thuốc lá tắm Dao đỏ.</h4>

                <p class="text-gray-700 text-lg">
                    Có nguồn gốc từ vùng Sapa thuộc tỉnh Lào Cai. Nơi được thiên nhiên ban tặng không chỉ cảnh quan tự nhiên hùng vĩ mà còn là nơi sinh trưởng của những loài thực vật quý. Trong đó bài thuốc tắm lá của người Dao cổ được phối từ 10 – 120 loại dược liệu khác nhau giúp hoạt hóa huyết ứ và hỗ trợ điều trị bệnh. Một số thành phần nổi bật có trong bài tắm lá người Dao Đỏ phải kể đến như:
                </p>

                <ul class="space-y-3 text-gray-700 list-disc list-inside">
                    <li>
                        Liên đằng hoa nhỏ: có tác dụng thanh nhiệt, giải độc và bổ hư, dùng để tắm giúp giảm mụn nhọt và các bệnh về da.
                    </li>
                    <li>
                        Màng tang: hiệu quả trong việc xoa dịu cơn đau đầu, dạ dày, nhức xương khớp, thậm chí là chứng đầy hơi và ôn trung hạ khí.
                    </li>
                    <li>
                        Rễ cây hoa ông lão: có tác dụng chữa đau lưng, đau răng hoặc khó tiêu.
                    </li>
                    <li>
                        Cây chùa dù: hỗ trợ chữa cảm cúm, sốt, ho,… và được xem là vị thuốc hỗ trợ rất tốt cho sức khỏe.
                    </li>
                    <li>
                        Cây cơm cháy: có công dụng khử phong trừ thấp, hoạt huyết tán ứ, hỗ trợ điều trị viêm thận, viêm khí quản mạn tính.
                    </li>
                </ul>

                <img src="{{asset('storage/tam-la/2.png')}}" alt="" class="px-0 md:px-20 py-5">
            </div>

            <div class="space-y-3">
                <h4 class="text-xl font-semibold">Công dụng của thuốc lá tắm.</h4>

                <p class="text-gray-700 text-lg">
                    Bài thuốc tắm của người Dao Đỏ phù hợp với mọi đối tượng từ người già cho đến trẻ nhỏ. Với phụ nữ sau sinh, đây được xem là giải pháp hồi phục sức khỏe nhanh chóng đáng tham khảo. Một vài công dụng từ phương pháp tắm dân gian mang lại như:
                </p>

                <ul class="space-y-3 text-gray-700">
                    <li>
                        <h5 class="font-semibold">1. Giảm đau nhức xương khớp </h5>

                        <p class="text-gray-700 text-lg">
                            Trong bài thuốc có nhiều dược liệu mang tính trầm, ấm giúp hoạt huyết tan ứ, giảm đau nhức gân cơ. Đặc biệt là tác dụng làm dịu dần các cơn đau xương khớp lâu năm nếu bạn áp dụng phương pháp tắm cách tuần. Do vậy những bạn hay nhức mỏi khi thời tiết thay đổi thì thử sử dụng nước lá tắm này để cải thiện sức khỏe nhé!
                        </p>
                    </li>
                    <li>
                        <h5 class="font-semibold">2. Cải thiện tình trạng mất ngủ, tăng cường trí nhớ </h5>

                        <p class="text-gray-700 text-lg">
                            Nếu đều đặn mỗi ngày ngâm chân bằng thảo dược sẽ giúp bạn có giấc ngủ sâu hơn. Bởi thành phần chính của bài thuốc có tác động tích cực đến tuần hoàn máu. Từ đó cơ thể trở nên thư giãn, tinh thần thoải mái và giảm stress. Kết quả, những cơn đau đầu, chóng mặt tan biến mà thay vào đó là một giấc ngủ ngon xuyên suốt cả đêm.
                        </p>
                    </li>
                    <li>
                        <h5 class="font-semibold">3. Dưỡng da và hỗ trợ điều trị các bệnh về da </h5>

                        <p class="text-gray-700 text-lg">
                            Tắm thảo dược của người Dao Đỏ có tác dụng làm đẹp da từ bên trong. Vì chúng tác động trực tiếp đến huyệt tam âm giao giúp duy trì sự trẻ trung và đẩy lùi lão hóa. Hơn nữa, với thành phần dược liệu tự nhiên quý hiếm hỗ trợ cải thiện các bệnh về da rất tốt như mẩn đỏ, mụn nhọt,… Từ đó làn da trở nên hồng hào, trắng trẻo và mịn màng hơn.
                        </p>
                    </li>
                </ul>

                <img src="{{asset('storage/tam-la/3.png')}}" alt="" class="px-0 md:px-20 py-5">
            </div>

            <div class="space-y-3">
                <h4 class="text-xl font-semibold">Tác dụng tốt hơn với những đối tượng nào?</h4>

                <p class="text-gray-700 text-lg">
                    Lá tắm của người Dao đỏ là một trong những sản phẩm quý của vùng núi Tây Bắc, những bài thuốc này có giá trị tốt với những bệnh nhân mắc các bệnh đau nhức xương khớp, người thường xuyên uống rượu bia, đặc biệt là phụ nữ sau khi sinh.
                </p>

                <img src="{{asset('storage/tam-la/4.png')}}" alt="" class="px-0 md:px-20 py-5">

                <p class="text-gray-700 text-lg">
                    Nhận thấy thuốc lá tắm Dao đỏ có rất nhiều lợi ích cho cơ thể, cho nên tại Nàng Sen & Massage đã và đang áp dụng cho khách hàng. Với kinh nghiệm nhiều năm trong lĩnh vực massage trị liệu, đến đây bạn được ngâm mình trong bồn gỗ Pơ mu, Bài thuốc tắm lá người Dao Đỏ cổ truyền được Nàng Sen & Massage sử dụng bao gồm nhiều loại thảo dược quý khác nhau. Với nhiều công dụng hữu ích cho sức khỏe như trị phong thấp, chân tay tê mỏi, chữa bệnh ngoài da,… Giúp làn da trở nên trắng sáng hơn và cơ thể loại bỏ mệt mỏi, stress ngay sau khi tắm nước lá. Với phương châm của Nàng Sen “Khách là Nàng - Ta là Sen” Nhằm đem đến trải nghiệm cho khách hàng một cách hài lòng, chu đáo và chuyên nghiệp nhất.
                </p>
            </div>
        </div>
    </div>
@endsection
