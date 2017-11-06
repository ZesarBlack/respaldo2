<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProyectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::paginate();
        return View('lista_proyectos', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = request()->all();
      Proyecto::create($data);
      return redirect()->to('lista_proyectos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $proyecto = Proyecto::findOrfail($id);
      return View('proy_issue',compact('proyecto'));
    }

    public function agregar_i($id)
    {
      $proyecto = Proyecto::findOrfail($id);
      return View('proy_issue',compact('proyecto'));
    }

    public function issues($id)
    {
      $issues = DB::table('proyectos')
            ->join('issues', 'proyectos.id', '=', 'issues.proy_id')
            ->select('issue.*')->where('proy_id', $id)
            ->get();
      return View('proy_issue',compact('issues'));

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $proyecto = Proyecto::find($id);
      $proyecto->delete();
      return redirect()->to('lista_proyectos');
    }
}
