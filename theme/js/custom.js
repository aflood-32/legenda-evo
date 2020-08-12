document.addEventListener('DOMContentLoaded', function () {
    (function () {
        const button = document.querySelectorAll('.wi-btn2'),
              modal  = document.querySelector('[data-modal="callback"]'),
              closeBtn = document.querySelector('[data-id="close_trigger"]'),
              modalBody = document.querySelector('.modal__body');

        button.forEach(elem => {
        elem.onclick = function (e) {
                e.preventDefault();
                modal.classList.contains('active') ?  closeModal() : openModal();
            };
        });
        [closeBtn, modal].forEach(elem => {
            elem.onclick = function (e) {
                closeModal();
            };
        });
        modalBody.onclick = function (e) {
            e.stopPropagation();
        };
        function openModal() {
            modal.classList.add('active');
        }
        function closeModal() {
            modal.classList.remove('active')
            history.replaceState({}, document.title, window.location.href.split('#')[0]);
        }
        if(window.location.hash === '#callback'){
            openModal();
        }
    })();

    if(document.querySelector('#contactForm')){
        document.querySelector('#contactForm').onsubmit = function (e) {
            window.location.hash = '#callback'
        }
    }

});
