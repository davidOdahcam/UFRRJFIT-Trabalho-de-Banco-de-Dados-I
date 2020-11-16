<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;
use Redirect;
use Session;
use DB;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructors = Instructor::all();
        return view('instructors.index', compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instructors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Inicia o Database Transaction
        DB::beginTransaction();

        $input = $request->all();

        $created = Instructor::create($input);

        if ($created)
        {
            DB::commit();
            Session::flash('success', 'Instrutor cadastrado com sucesso!');
        }
        else
        {
            DB::rollBack();
            Session::flash('error', 'Falha ao cadastrar o instrutor!');
        }

        return Redirect::route('instrutores.index');
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
        $instructor = Instructor::findOrFail($id);
        return view('instructors.edit', compact('instructor'));
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
        //Inicia o Database Transaction
        DB::beginTransaction();

        $instructor = Instructor::findOrFail($id);

        $input = $request->all();

        $update = $instructor->update($input);

        if ($update)
        {
            DB::commit();
            Session::flash('success', 'Instrutor editado com sucesso!');
        }
        else
        {
            DB::rollBack();
            Session::flash('error', 'Erro ao editar instrutor!');
        }

        return Redirect::route('instrutores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Inicia o Database Transaction
        DB::beginTransaction();

        $instructor = Instructor::findOrFail($id);

        $deleted = $instructor->delete();

        if ($deleted)
        {
            DB::commit();
            Session::flash('success', 'Instrutor excluído com sucesso!');
        }
        else
        {
            DB::rollBack();
            Session::flash('error', 'Erro ao excluir instrutor!');
        }

        return Redirect::route('instrutores.index');
    }
}
