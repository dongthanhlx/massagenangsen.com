@extends('layouts.flat')

@section('content')
    @include('components.header')

    <div class="max-w-3xl p-5 mx-auto space-y-10">
        <h3 class="text-2xl md:text-3xl font-bold uppercase text-center text-sky-800">
            Gói thủy trị liệu truyền thống tại Nàng Sen
        </h3>

        <div class="space-y-5">
            <div>
                <img src="{{asset('storage/goi-thuy-tri-lieu/1.png')}}" alt="" class="px-0 md:px-20 py-5">
            </div>

            <div class="space-y-3">
                <h4 class="text-xl font-semibold">1. Chữa lành từ nước – Thủy trị liệu là gì?</h4>

                <img src="{{asset('storage/goi-thuy-tri-lieu/2.jpg')}}" alt="" class="px-0 md:px-20 py-5">

                <p class="text-gray-700 text-lg">
                    Thủy trị liệu là một trong những phương pháp vật lý trị liệu được đánh giá là có tác động hiệu quả tới cơn đau và tình trạng bệnh của bệnh nhân. Bên cạnh điện trị liệu, nhiệt trị liệu thì thủy trị liệu cũng đang được áp dụng ở trong việc điều trị các vấn đề về cơ xương khớp như đau mỏi vai gáy, thoái hóa cột sống, thoát vị đĩa đệm...
                </p>

                <p class="text-gray-700 text-lg">
                    Tại <span class="font-semibold text-sky-700">Nàng Sen</span>, dịch vụ Thủy trị liệu là một trong những phương pháp truyền thống được ưa chuộng bậc nhất bởi liệu trình đơn giản mà mang lại hiệu quả rất lớn cho khách hàng. Chỉ cần thư giãn trong làn nước thảo mộc, khách hàng sẽ có trải nghiệm thư giãn, thoải mái về cả tâm hồn lẫn thể xác.
                </p>
            </div>

            <div class="space-y-3">
                <h4 class="text-xl font-semibold">2. Thủy trị liệu bằng lá thuốc tắm của người Dao Đỏ chỉ có tại <span class="font-semibold text-sky-700">Nàng Sen</span></h4>

                <img src="{{asset('storage/tam-la/2.png')}}" alt="" class="px-0 md:px-20 py-5">

                <p class="text-gray-700 text-lg">
                    Có nguồn gốc từ vùng Sapa thuộc tỉnh Lào Cai. Nơi được thiên nhiên ban tặng không chỉ cảnh quan tự nhiên hùng vĩ mà còn là nơi sinh trưởng của những loài thực vật quý. Trong đó bài thuốc tắm lá của người Dao cổ được phối từ 10 – 120 loại dược liệu khác nhau giúp hoạt hóa huyết ứ và hỗ trợ điều trị bệnh.
                </p>

                <p class="text-gray-700 text-lg">
                    Bài thuốc tắm của người Dao Đỏ phù hợp với mọi đối tượng từ người già cho đến trẻ nhỏ. Với phụ nữ sau sinh, đây được xem là giải pháp hồi phục sức khỏe nhanh chóng đáng tham khảo. Các chuyên gia đã đưa ra nhận định rằng thủy trị liệu là phương pháp an toàn, lành tính nhất trong điều trị các bệnh về cơ xương khớp nhất là viêm khớp hoặc đau mỏi.
                </p>
            </div>

            <div class="space-y-3">
                <h4 class="text-xl font-semibold">3. Công dụng của phương pháp thủy trị liệu tại <span class="font-semibold text-sky-700">Nàng Sen</span></h4>

                <img src="{{asset('storage/goi-thuy-tri-lieu/1.png')}}" alt="" class="px-0 md:px-20 py-5">

                <p class="text-gray-700 text-lg">
                    Các nghiên cứu khoa học đã chỉ ra rằng, thủy trị liệu có thể cải thiện sức mạnh và thể lực chung ở những người gặp các vấn đề về cơ xương khớp như đau khớp chân tay, cổ vai gáy,... Các bài tập có thể được điều chỉnh theo nhu cầu cá nhân và mục đích sử dụng trị liệu, vì vậy chúng ta có thể bắt đầu từ từ và dần dần xây dựng sức mạnh và tính linh hoạt của mình.
                </p>

                <ul class="space-y-3 text-gray-700 list-disc list-inside">
                    <li>
                        Chống đau lưng
                    </li>
                    <li>
                        Giảm đau thần kinh tọa
                    </li>
                    <li>
                        Cải thiện lưu thông máu, đào thải độc tố cơ thể
                    </li>
                    <li>
                        Hỗ trợ các bệnh lý về đường hô hấp
                    </li>
                    <li>
                        Làm linh hoạt các cơ, khớp
                    </li>
                </ul>
            </div>


            <div class="space-y-3">
                <h4 class="text-xl font-semibold">4. Nguyên tắc chung trong thủy trị liệu</h4>

                <img src="{{asset('storage/goi-thuy-tri-lieu/3.png')}}" alt="" class="px-0 md:px-20 py-5">

                <p class="text-gray-700 text-lg">
                    Tại <span class="font-semibold text-sky-700">Nàng Sen</span>, chúng tôi có một đội ngũ kĩ thuật viên chuyên nghiệp để đảm bảo chất lượng và an toàn cho trải nghiệm thủy trị liệu của quý khách
                </p>

                <ul class="space-y-3 text-gray-700 list-disc list-inside">
                    <li>
                        Ngâm tắm, xông hơi là quá trình mất nước, thoát nhiệt và mồ hôi. Do vậy nên uống một cốc nước ấm trước khi ngâm xông
                    </li>
                    <li>
                        Không nên thực hiện liệu trình thủy trị liệu vào lúc tối muộn.
                    </li>
                    <li>
                        Sau khi xông, ngâm tắm không tắm lại bằng nước lạnh tránh sốc nhiệt thay vào đó là giữ ấm cơ thể.
                    </li>
                </ul>

                <p class="text-gray-700 text-lg">
                    Không nên ngâm xông khi quá đói hoặc quá no. <span class="font-semibold text-sky-700">Nàng Sen</span> có trà và thức ăn nhẹ hoàn toàn miễn phí cho quý khách.
                </p>
            </div>

            <div class="space-y-3">
                <p class="text-gray-700 text-lg">
                    Các dịch vụ thủy trị liệu tại <span class="font-semibold text-sky-700">Nàng Sen</span> không chỉ giúp giảm căng thẳng, căng cơ mà còn kích thích tuần hoàn máu, cải thiện sức khỏe tổng thể. Không gian ấm cúng, riêng tư tại <span class="font-semibold text-sky-700">Nàng Sen</span> cùng với sự chuyên nghiệp của đội ngũ kỹ thuật viên sẽ giúp bạn tái tạo năng lượng và tận hưởng khoảnh khắc thoải mái nhất.
                </p>
            </div>
        </div>
    </div>
@endsection
