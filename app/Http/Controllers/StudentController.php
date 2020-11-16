<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\Student;
use Illuminate\Http\Request;
use Redirect;
use Session;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instructors = Instructor::all();
        return view('students.create', compact('instructors'));
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

        $created = Student::create($input);

        if ($created)
        {
            DB::commit();
            Session::flash('success', 'Aluno cadastrado com sucesso!');
        }
        else
        {
            DB::rollBack();
            Session::flash('error', 'Falha ao cadastrar o aluno!');
        }

        return Redirect::route('alunos.index');
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
        $student = Student::findOrFail($id);
        $instructors = Instructor::all();
        return view('students.edit', compact('student', 'instructors'));
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

        $student = Student::findOrFail($id);

        $input = $request->all();

        $update = $student->update($input);

        if ($update)
        {
            DB::commit();
            Session::flash('success', 'Aluno editado com sucesso!');
        }
        else
        {
            DB::rollBack();
            Session::flash('error', 'Erro ao editar aluno!');
        }

        return Redirect::route('alunos.index');
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

        $student = Student::findOrFail($id);

        $deleted = $student->delete();

        if ($deleted)
        {
            DB::commit();
            Session::flash('success', 'Aluno excluído com sucesso!');
        }
        else
        {
            DB::rollBack();
            Session::flash('error', 'Erro ao excluir aluno!');
        }

        return Redirect::route('alunos.index');
    }
}
