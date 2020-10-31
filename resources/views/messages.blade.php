<!-- Подключение основного файла -->
@extends('lauts.app')

<!-- Подключение файла с выводом title -->
@section('block-title')отзывы@endsection

<!-- выводом контента -->
@section('content')

<!-- цикл, который перебирает данные пришедшие с БД -->
@foreach($data as $el)

<!-- код, отвечающий за блок с коментариями -->
<div class="container">
    <div class="timeline-panel">
        <ul class="timeline">
            <li>
                <div class="right-side">
                    <div class="timeline-block">
                        <span class="timeline-name fab fa-angellist">{{ $el->name }}</span>
                        <i class="fab fa-angellist"></i>
                        <span class="timeline-date"><span class="end-time">{{ $el->created_at }}</span></span>
                    </div>
                    <div class="timeline-description">К сожалению расчёты на продвижение адаптивной темы не оправдали
                        себя, решил пока не оплачивать хостинг.</div>
                </div>
            </li>
        </ul>
    </div>
</div>

@endforeach
@endsection
