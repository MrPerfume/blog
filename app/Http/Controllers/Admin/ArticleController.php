<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends CommonController
{
    //get.admin/article
    public function index()
    {
        echo '全部文章列表';
    }

    //get.admin/article/create
    public function create()
    {
        $data = (new Category)->tree();
       // dd($data);
        return view('admin.article.add',compact('data'));
    }
}
