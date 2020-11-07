<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos =Todo::all();
        return $todos;
        //return view('todo.index',compact(''/todos));
        return view('todos.index')->with(['todos'=> $todos]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function edit(Todo $todo)
    {
        dd($todo);

       // $todo = Todo::find($id);
        //return $todo;
       // dd($id);
       return view('todos.edit',compact('todo'));
       // return view('todos.edit');
    }

    public function store(TodoCreateRequest $request)
    {
        //dd($request->all());

       /* if(!$request->title){
            return redirect()->back()->with('error','Please give title');
        }
        $request->validate(['title'=>'required|max:255',
        ]);

        $rules =[
            'title'=>'required|max:255',  
        ];
        $messages =[
            'title.max' => 'Todo title should not be greater than 255 chars.'
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator-fails()){
            return redirect()->back()
               ->withErrors($validator)
               ->withInput();
        }*/
        Todo::create($request->all());
        return redirect()->back()->with('message','Todo Created Successfully');
    }

}
