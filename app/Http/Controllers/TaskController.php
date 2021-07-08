<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;

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
        
        return view('content-updateCant',compact('task'));
    }

    public function contentEditContent(Task $task)
    {
        // dd($task->ContentCant);
        return view('content-edit',compact('task'));
    }

    public function contentCreate(Request $request)
    {    
        
        $user_id = Auth::user()->id;

        // dd($user_id); 

        $this->validate($request,[
            'name' => 'required',
            'nameCreador' => 'required',
            'fecha_emision'=> 'required',
            'valido_hasta'=>'required',
            'ContentCant'=>'required'
        ]);

        $task = Task::create([
            'user_id'=> $user_id,
            'name'=> $request->get('name'),
            'nameCreador'=> $request->get('nameCreador'),
            'fecha_emision'=> $request->get('fecha_emision'),
            'valido_hasta'=> $request->get('valido_hasta'),
            'ContentCant'=> $request->get('ContentCant')
        ]);

        return redirect()->route('content.editContent',$task)->with("ok-editInitData","");
    }

    public function contentUpdateCant(Request $request, Task $task)
    {    
        // dd($request->get('contentCant')); 

        $this->validate($request,[
            'name' => 'required',
            'nameCreador' => 'required',
            'fecha_emision'=> 'required',
            'valido_hasta'=>'required',
            'ContentCant'=>'required'
        ]);
        
        $task->nameCreador = $request->get('nameCreador');
        $task->fecha_emision = $request->get('fecha_emision');
        $task->valido_hasta = $request->get('valido_hasta');
        $task->ContentCant = $request->get('ContentCant');

        $task->save();

        return redirect()->route('content.editContent',$task)->with("ok-editInitData","");
    }

    public function contentUpdate(Request $request, Task $task)
    {          
        
        $task->hasContent = 1;

        $task->contenido1 = $request->get('contenido1');
        $task->contenido2 = $request->get('contenido2');
        $task->contenido3 = $request->get('contenido3');
        $task->contenido4 = $request->get('contenido4');
        $task->contenido5 = $request->get('contenido5');
        $task->contenido6 = $request->get('contenido6');
        $task->contenido7 = $request->get('contenido7');
        $task->contenido8 = $request->get('contenido8');
        $task->contenido9 = $request->get('contenido9');
        $task->contenido10 = $request->get('contenido10');
        $task->contenido11 = $request->get('contenido11');
        $task->contenido12 = $request->get('contenido12');
        $task->contenido13 = $request->get('contenido13');
        $task->contenido14 = $request->get('contenido14');
        $task->contenido15 = $request->get('contenido15');
        $task->contenido16 = $request->get('contenido16');
        $task->contenido17 = $request->get('contenido17');
        $task->contenido18 = $request->get('contenido18');
        $task->contenido19 = $request->get('contenido19');
        $task->contenido20 = $request->get('contenido20');
        
        $task->save();

        // return redirect()->route('home')->with("ok-editContenido","");

        $presupuesto = $task;  

        $pdf = PDF::loadView('pdf.tasks',compact('presupuesto'));        
        
        //abre el archivo en una nueva ventana
        // return PDF::loadView('pdf.tasks',compact('presupuesto'))
        //     ->stream('presupuesto-CloudSpace.pdf');

        //descarga el PDF directamente    
        return $pdf->download('presupuesto-CloudSpace.pdf'); 
    }

}
