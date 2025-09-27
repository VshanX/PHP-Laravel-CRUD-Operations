<?php

namespace App\Http\Controllers;
use App\Models\Crudtest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $task;
    public function __construct(){
        $this->task = new Crudtest();
    }

    public function index(){
        $res['tasks'] = $this->task->all();
        return view ('components.index')->with($res);
    }

    
    //create user
    public function create(){
        return view ('components.create');
    }

    //store data
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:120'
        ]);
        
        $this->task->create($request->all());
        return redirect()->route('index')->with('success', 'User created successfully!');
    }

    //show edit form
    public function update($id){
        $res['task'] = $this->task->find($id);
        return view('components.edit')->with($res);
    }

    //update data
    public function edit(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:120'
        ]);
        
        $task = $this->task->find($id);
        $task->update($request->all());
        return redirect()->route('index')->with('success', 'User updated successfully!');
    }

    //delete data
    public function destroy($id){
        $task = $this->task->find($id);
        $task->delete();
        return redirect()->route('index')->with('success', 'User deleted successfully!');
    }
}
