import './bootstrap';
import jquery from 'jquery'

window.$ = window.jquery = jquery;

function toggleModal() {
    $('button[data-action="click-to-show-modal"]').click();
}

$(function () {
    setTimeout(toggleModal, 3000)

    // $('#trai-nghiem button').click(() => {
    //     toggleModal();
    // })

    // showServiceDetails();
    //
    // handleRegister();
})
