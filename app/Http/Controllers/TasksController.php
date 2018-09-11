<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;
// use App\User;
use DB;
class TasksController extends Controller
{
    
       public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    
    
    
    public function index ()
    
    {

        $tasks = task::orderBy('created_at', 'desc')->paginate(2);
     return view('task.index', compact('tasks'));

    }
    
       public function create()
   
    {
       
        return view('task.insert');
    }
    
     public function store(Request $request){
        // $request->validate([
        //     'body' => 'required',
        // ]);
        
        
          if ($request->hasFile('cover_image')) {
//get file name with the extentin
            $filenamewithExt = $request->file('cover_image')->getClientOriginalName();
            // get just filename
            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
            //get just extention
            $extension = $request->file('cover_image')->getClientOriginalExtension();
//filename to store
            $fileNametostore = $filename . '_' . time() . '.' . $extension;
            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNametostore);
        } else {
            $fileNametostore = 'no_image.jpg';
        }

 
    
        
        $task = new task;
      
        $task->body = $request->task;
        $task->disc = $request->disc;
        $task->user_id = auth()->user()->id;
        $task->cover_image = $fileNametostore;

        $task->save();
     
        
        return redirect('/task')->with('succes', 'new task created');
    }
    
    
      public function show($id){
        

         $task = Task::find($id);

   return view('task.show')->with('task', $task);
    }
    
     public function edit($id)
    {
        $task = task::find($id);
        
        return view('task.edit')->with('task', $task);
    }
    
 
 
 
    public function update(Request $request, $id)
    {
   
       
        $task = task::find($id);
       
     
        $task->body = $request->task;
        $task->disc = $request->disc;
        $task->save();
        
     
        return redirect('/task')->with('succes', 'task updated');
    }
    
    
    public function destroy($id)
    {
        $task = task::find($id);
      
        //   if($task->cover_image != 'noimage.jpg'){
        //     // delete foto
        // storage::delete('/public/cover_images' .$task->cover_image);
        // }
      
      
        $task->delete();
        return redirect('/task')->with('succes', 'task deleted');
    }
}
