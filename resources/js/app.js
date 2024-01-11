import './bootstrap';
import jquery from 'jquery'
import config from './config'

window.$ = window.jquery = jquery;

function toggleModal() {
    $('button[data-action="click-to-show-modal"]').click();
}

const handleRegister = () => {
    const contracts = $('#register-form-modal');

    contracts.on('click', 'button[data-action="register"]', async () => {
        const form = $('#register-form-modal form')[0];
        const data = Object.fromEntries(new FormData(form).entries());

        if (!data.phone && (data.phone.length < 9 || data.phone.length > 10)) {
            alert('Vui lòng nhập Số Điện Thoại để đăng ký trải nhiệm.');
            return;
        }

        const message = `+ KHÁCH HÀNG: ${data.name}\n` +
            `+ SĐT: ${data.phone}\n` +
            `+ Email: ${data.email}\n` +
            `+ Yêu cầu: ${data.option}\n`

        await sendMessage(message);

        form.reset();
    })

    const register = $('#register-form');

    register.on('click', 'button[data-action="register"]', async () => {
        const form = $('#register-form form')[0];
        const data = Object.fromEntries(new FormData(form).entries());

        if (!data.phone || data.phone.length < 9 || data.phone.length > 10) {
            alert('Vui lòng nhập Số Điện Thoại để đăng ký trải nhiệm.');
            return;
        }

        const message = `+ KHÁCH HÀNG: ${data.name}\n` +
            `+ SĐT: ${data.phone}\n` +
            `+ Email: ${data.email}\n` +
            `+ Yêu cầu: ${data.option}\n`

        await sendMessage(message);

        form.reset();
    })
}

const sendMessage = async message => {
    try {
        await axios.post(`https://api.telegram.org/bot${config.telegram.bot_token}/sendMessage`, {chat_id: config.telegram.chat_id, text: message});

        alert('Đăng ký thành công. Chúng tôi sẽ sớm liên hệ lại với quý khách.')
    } catch (e) {
        console.error(e);
    } finally {
        toggleModal();
    }
}

$(function () {
    setTimeout(toggleModal, 2000)

    $('#book').click(() => toggleModal())

    handleRegister();
})
