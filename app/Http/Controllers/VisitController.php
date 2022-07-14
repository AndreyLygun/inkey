<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class VisitController extends Controller
{
    public function index() {
        $id = \request('phone');
        $Articles = Article::all();
        return View('articles', ['Articles'=>$Articles]);
    }

    public function getPhone($phone) {
        $Articles = Article::where('phone', $phone)->get();
        if ($Articles->count() == 0 ) return View('nophone');
        if ($Articles->count() == 1) {
            $id = $Articles[0]->id;
            return redirect("/articles/$id");
        }
        return View('phone', ['Articles'=>$Articles]);
    }

    public function getArticle($id) {
        $Article = Article::with('photos')->where('id', $id)->get();
        if ($Article->count()>0) {
            return View('article', ['Article'=>$Article[0]]);
        } else abort(404);

    }



}
