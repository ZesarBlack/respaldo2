<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Issue;
use App\Proyecto;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $issues = Issue::paginate();
      return View('lista_issues', compact('issues'));
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
        $data = $request->all();
        Issue::create($data);
        return redirect()->to('lista_issues');
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
        $issue = Issue::findOrfail($id);
        return view('issue_comentario',compact('issue'));
    }

    public function agregar_c($id)
    {
        $issue = Issue::findOrfail($id);
        return view('agregar_comentario',compact('issue'));
    }

    public function seleccionar_c($id)
    {

      $comentarios = DB::table('issues')
            ->join('comentarios', 'issues.id', '=', 'comentarios.issue_id')
            ->select('comentarios.*')->where('issue_id', $id)
            ->get();
      return View('lista_comentario', ['comentarios' => $comentarios]);
    }
/*
    public function multi_select($proy_id, $id)
    {
      $issues = DB::table('proyectos')
            ->join('issues', 'proyectos.id', '=', 'issues.proy_id')
            ->select('issues.*','proyectos.*')->where('proy_id', $proy_id)
            ->get();
      //return View('lista_proyecto_issue', ['issues' => $issues]);

      $comentarios = DB::table('issues')
            ->join('comentarios', 'issues.id', '=', 'comentarios.issue_id')
            ->select('comentarios.*')->where('issue_id', $id)
            ->get();
      //return View('lista_comentario', ['comentarios' => $comentarios]);
      return view("lista_issue_comentario")
         ->with("issues", $issues)
         ->with("comentarios", $comentarios);
    }*/

    public function issues()
    {

      $issues = DB::table('issues')
      ->select('issues.*')
      ->where('impacto',3)
      ->get()
      ->count();

      $issues1 = DB::table('issues')
      ->select('issues.*')
      ->where('urgencia',3)
      ->get()
      ->count();

      $issues2 = DB::table('issues')
      ->select('issues.*')
      ->get()
      ->count();

      $issues3 = DB::table('issues')
      ->select('issues.*')
      ->where('urgencia',3)
      ->where('impacto',3)
      ->get()
      ->count();

      return view("adminlte::home")
         ->with("issues", $issues)
         ->with("issues1", $issues1)
         ->with("issues2", $issues2)
         ->with("issues3", $issues3);

      //return View('adminlte::home',['issues' => $issues]);

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
        //
    }
}
