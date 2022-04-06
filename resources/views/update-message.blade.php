@extends ('layouts.app')

@section ('title-block') Обновление записи @endsection

@section ('content')
<h1>Обновление записи</h1>



<form action="{{ route('contact-update-submit', $data -> id) }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Введите имя</label>
        <input type="text" value="{{$data-> name}}" name="name" placeholder="Введите имя" id="имя" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Введите email</label>
        <input type="text" value="{{$data-> email}}" name="email" placeholder="Введите email" id="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="subject" class="form-label">Тема</label>
        <input type="text" value="{{$data-> subject}}" name="subject" placeholder="Введите тему" id="subject" class="form-control">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Сообщение</label>
        <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"> {{$data-> message}}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Обновить</button>
</form>


@endsection