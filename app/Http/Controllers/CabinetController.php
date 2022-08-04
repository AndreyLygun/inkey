<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class CabinetController extends Controller
{
    public function editArticle($id)
    {
        $Article = Article::find($id);
        return view('editArticle', ['Article' => $Article]);
    }

    public function storeArticle($id)
    {
        $Validated = Request()->validate([
            'title' => 'required',
            'phone' => 'required',
//            'category_id' => 'required',
            'city' => 'required',
            'address' => 'required',
            'coord' => 'required',
//            'photo' => 'required',
            'description' => 'required'
        ]);
        $Article = Article::find($id);
        $Article->update($Validated);
        return back();
    }
}
