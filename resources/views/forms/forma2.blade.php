 <!-- подключение к основному файлу -->
 @extends('layouts.app')
<!-- секция, которая подключает title -->
@section('block-articles')Статьи@endsection

<!-- часть, которая выводит секцию "articles" -->
@section('form-articles')

<div class="container">

<h1>Список статей</h1>

<div class='row'>

<button type="button" class="btn btn-primary btn-lg pull-right" data-toggle="modal" data-target="#addArticle">

Добавить статью

</button>

</div>

<br />

<div class='row @if(count($articles)) show @else hidden @endif' id='articles-wrap'>

<table class="table table-striped ">

<thead>

<tr>

<th>ID</th>

<th>Заголовок</th>


<th></th>

</tr>

</thead>

<tbody>

@foreach($articles as $article)

<tr>

<td>{{ $article->id }}</td>

<td><a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a></td>

<td><a href="" data-href=" {{ route('article.destroy',$article->id) }} ">Удалить</a></td>

</tr>

@endforeach

</tbody>

</table>

</div>

<div class="row">

<div class="alert alert-warning @if(count($articles) ) hidden @else show @endif" role="alert"> Записей нет</div>

</div>

</div>

<!-- Modal -->

<div class="modal fade" id="addArticle" tabindex="-1" role="dialog" aria-labelledby="addArticleLabel">

<div class="modal-dialog" role="document">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

<h4 class="modal-title" id="addArticleLabel">Добавление статьи</h4>

</div>

<div class="modal-body">

<div class="form-group">

<label for="title">Заголовок</label>

<input type="text" class="form-control" id="title">

</div>

</div>

<div class="modal-body">

<div class="form-group">

<label for="text">Текст</label>

<textarea class="form-control" id="text"></textarea>

</div>

</div>

<div class="modal-footer">

<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>

<button type="button" id = "save" class="btn btn-primary">Сохранить</button>

</div>

</div>

</div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->


<script>

$(function() {

$('#save').on('click',function(){

var title = $('#title').val();

var text = $('#text').val();

$.ajax({

url: '{{ route('article.index') }}',

type: "POST",

data: {title:title,text:text},

headers: {

'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')

},

success: function (data) {

$('#addArticle').modal('hide');

$('#articles-wrap').removeClass('hidden').addClass('show');

$('.alert').removeClass('show').addClass('hidden');

var str = '<tr><td>'+data['id']+

'</td><td><a href="/article/'+data['id']+'">'+data['title']+'</a>'+

'</td><td><a href="/article/'+data['id']+'" class="delete" data-delete="'+data['id']+'">Удалить</a></td></tr>';

$('.table > tbody:last').append(str);

},

error: function (msg) {

alert('Ошибка');

}

});

});

})

</script>
@endsection