<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends CommonController
{
    //get.admin/category   全部分类列表
    public function index()
    {
        $categorys = Category::all();
        return view('admin.category.index')->with('data',$categorys);
    }

    //post.admin/category
    public function store()
    {

    }


    //get.admin/category/create   添加分类
    public function create()
    {

    }

    //get.admin/category/{category}
    public function show()
    {

    }

    //delete.admin/category/{category}
    public function destroy()
    {

    }

    //put.admin/category/{category}
    public function update()
    {

    }

    //get.admin/category/{category}/edit
    public function edit()
    {

    }


}
