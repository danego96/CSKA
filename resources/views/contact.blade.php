@extends ('layouts.app')

@section ('title-block') Контакты @endsection

@section ('content')
<h1>Страница контактов</h1>



<form action="{{ route('contact-form') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Введите имя</label>
        <input type="text" name="name" placeholder="Введите имя" id="имя" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Введите email</label>
        <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="subject" class="form-label">Тема</label>
        <input type="text" name="subject" placeholder="Введите тему" id="subject" class="form-control">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Сообщение</label>
        <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Отправить</button>
</form>


@endsection