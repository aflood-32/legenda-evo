<form id="contactForm" method="POST">
    <input type="hidden" name="formid" value="ContactForm">
    <div class="modal__row">
        <label for="name">Имя</label>
        <input id="name" name="name" type="text" placeholder="Имя*" value="{{ $data['name.value'] }}">
        <span class="error">{!! $data['name.error'] !!}</span>
    </div>
    <div class="modal__row">
        <label for="email">Email</label>
        <input id="email" name="email" type="text" placeholder="Email*" value="{{ $data['email.value'] }}">
        <span class="error">{!! $data['email.error'] !!}</span>
    </div>
    <div class="modal__row">
        <label for="message">Текст</label>
        <textarea id="message" name="message"  cols="30" rows="10">{{ $data['message.value'] }}</textarea>
        <span class="error">{!! $data['message.error'] !!}</span>
    </div>
    <div class="modal__row">
        <button type="submit">Отправить</button>
    </div>
</form>
