<button class="hidden" type="button" data-modal-target="register-form-modal" data-modal-toggle="register-form-modal" data-action="click-to-show-modal">
    Toggle modal
</button>

<div id="register-form-modal" aria-hidden="true" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full bg-stone-600 m-5 rounded-lg">
        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
            <h3 class="text-xl font-semibold text-white">
                Liên hệ đặt hẹn
            </h3>

            <button type="button" class="absolute top-3 right-2.5 rounded-full text-gray-500 bg-gray-50 hover:bg-gray-300 hover:text-gray-900 rounded-full text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="register-form-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>

        <div class="p-5 md:p-10">
            <form class="space-y-0 md:space-y-8">
                <div class="grid md:grid-cols-2 md:gap-10">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-gray-200 bg-transparent border-0 border-b-2 border-gray-400 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-600 peer" placeholder=" " />
                        <label for="name" class="peer-focus:font-medium absolute text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-white peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tên quý khách</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="time" id="time" class="block py-2.5 px-0 w-full text-white bg-transparent border-0 border-b-2 border-gray-400 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-600 peer" placeholder=" " />
                        <label for="time" class="peer-focus:font-medium absolute text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-white peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Giờ quý khách đến</label>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 md:gap-10">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="number" name="phone" id="phone" class="block py-2.5 px-0 w-full text-white bg-transparent border-0 border-b-2 border-gray-400 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-600 peer" placeholder=" " />
                        <label for="phone" class="peer-focus:font-medium absolute text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-white peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Điện thoại</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-white bg-transparent border-0 border-b-2 border-gray-400 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-600 peer" placeholder=" " />
                        <label for="email" class="peer-focus:font-medium absolute text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-white peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                    </div>
                </div>
                <div class="">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="option" id="option" class="block py-2.5 px-0 w-full text-white bg-transparent border-0 border-b-2 border-gray-400 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-600 peer" placeholder=" " />
                        <label for="option" class="peer-focus:font-medium absolute text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-white peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Yêu cầu khác của quý khách</label>
                    </div>
                </div>

                <button type="button" data-action="register" class="text-stone-600 text-lg bg-white hover:bg-gray-300 font-semibold focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Book hẹn</button>
            </form>
        </div>
    </div>
</div>
