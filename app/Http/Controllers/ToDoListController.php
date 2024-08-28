<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\ToDoList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ToDoListController extends Controller
{
    public function index()
    {
        //$user = User::find(1); //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        // foreach ($user->toDoLists as $titles){
        //     dump($titles->title);
        // }
        $user = Auth::user();
        return view('todolist.index', compact('user'));
    }

    public function create()
    {
        return view('todolist.create');
    }

    public function store()
    {
        $title = request()->validate([
            'title' => 'string',
        ]);
        $user = Auth::id();
        $user_id = ['user_id' => $user]; //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        $data = array_merge($title, $user_id);
        ToDoList::create($data);
        return redirect()->route('lists.index');
    }

    public function show(ToDoList $list)
    {
        return view('todolist.show', compact('list'));
    }

    public function destroy(ToDoList $list){
        $list->delete();
        return redirect()->route('lists.index');
    }
}
