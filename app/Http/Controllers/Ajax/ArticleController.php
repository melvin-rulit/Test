<?php

namespace App\Http\Controllers\Ajax;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Показать список ресурса.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all(['id','title']);

        return view('forms.forma2',['articles' => $articles]);
    }

    /**
     * Показать форму для создания нового ресурса.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Сохраните вновь созданный ресурс в хранилище.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = Article::create(['title' => $request->title, 'text' => $request->text]);

$data = ['id' => $res->id, 'title' => $request->title, 'text' => $request->text];

return $data;
    }

    /**
     * Отобразить указанный ресурс.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
// Возвращаем шаблон и передаем в него массив с найденым пользователем
return view('articles.show',['article' => $article]);
    }

    /**
     * Показать форму редактирования указанного ресурса.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Обновить указанный ресурс в хранилище.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Удалите указанный ресурс из хранилища.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::find ($id)->delete();
return 'ok';
    }
}
