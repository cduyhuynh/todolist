<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Todo;

class TodoController extends Controller
{
    function getList()
    {
        $data = [];
        $data['categories'] = Category::all();

        return view('todo.list')->with($data);
    }

    function createCategory(Request $request)
    {
        $newCategory        = new Category();
        $newCategory->name  = $request->category_name;
        $newCategory->save();
        return redirect()->action('TodoController@getList');
    }

    function createTodo(Request $request)
    {
        $newTodo    = new Todo();
        $newTodo->title         = $request->title;
        $newTodo->description   = $request->desc;
        $newTodo->category_id   = $request->category_id;

        $result     = $newTodo->save();
        if($result)
        {
            return response()->json(array('status' => 1, 'message' => ''));
        }
        else return response()->json(array('status' => 0, 'message' => $result));
    }
}
