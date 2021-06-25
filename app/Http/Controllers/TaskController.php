<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Barryvdh\DomPDF\Facade as PDF;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request, Task $task)
    {
        //get all the tasks based on current user id
        $allTasks = $task->whereIn('user_id',$request->user())->with('user');
        $tasks = $allTasks->orderBy('created_at','DESC')->take(20)->get();

        //return json response
        return response()->json([
            'tasks' => $tasks,
        ]);
    }

   
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:255'
        ]);
        //create a new task based on user tasks relationship
        $task = $request->user()->tasks()->create([
            'name'=>$request->name,
        ]);
        //return task with user object
        return response()->json($task->with('user')->find($task->id));
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return response()->json([
            'task' => $task,
        ]);
    }

    
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $task = Task::findOrFail($id);
        $task->update($input);
        return response()->json($task->with('user')->find($task->id));
    }

   
    public function destroy($id)
    {
        Task::findOrFail($id)->delete();
    }

    public function exportPDF($id)
    {
        $presupuesto = Task::findOrFail($id);   

        $pdf = PDF::loadView('pdf.tasks',compact('presupuesto'));

        //descarga directamente el archivo
        // return $pdf->download('presupuesto-CloudSpace.pdf');  
        
        //abre el archivo en una nueva ventana
        return PDF::loadView('pdf.tasks',compact('presupuesto'))
            ->stream('presupuesto-CloudSpace.pdf');
    }

    public function showPDF()
    {
        $tasks = Task::get();
        
        return view('pdf.tasks')
            ->with('tasks', $tasks)
        ;       
    }

    public function contentEdit($id)
    {
        $task = Task::findOrFail($id);   
        
        return view('content-edit',compact('task'));
    }

    public function contentUpdate(Request $request, Task $task)
    {    
        $this->validate($request,[
            'name' => 'required',
            'nameCreador' => 'required',
            'fecha_emision'=> 'required',
            'valido_hasta'=>'required'
        ]); 

        // dd($request->get('nameCreador'));
        
        // $task->name = $request->get('name');
        $task->nameCreador = $request->get('nameCreador');
        $task->fecha_emision = $request->get('fecha_emision');
        $task->valido_hasta = $request->get('valido_hasta');
        $task->contenido1 = $request->get('contenido1');
        $task->contenido2 = $request->get('contenido2');
        $task->contenido3 = $request->get('contenido3');
        $task->contenido4 = $request->get('contenido4');
        
        $task->save();

        return redirect()->route('home')->with("ok-editContenido","");
    }

}
