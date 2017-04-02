<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends CommonController
{
    //get.admin/article
    public function index()
    {
        echo 'kjhk';
    }

    //get.admin/article/create
    public function create()
    {
        $data = [];
        return view('admin.article.add',compact('data'));
    }
}
