<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarea;

class TareaController extends Controller
{
    //
    public function index(){
        return Tarea::all();
    }

    public function show($id){
        return Tarea::find($id);
    }

    public function store(Request $request){
        return Tarea::create($request->all());
    }

    public function update(Request $request, $id){
        $tarea = Tarea::findOrFail($id);
        $tarea->update($request->all());
        return $tarea;
    }

    public function delete(Request $request, $id){
        $tarea = Tarea::findOrFail($id);
        $tarea->delete();
        return 204;
    }
}
