<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Category;

class TodoController extends Controller
{
    function getList()
    {
        $data = [];
        $data['categories'] = Category::all();
        return view('todo.list')->with($data);
    }
}
