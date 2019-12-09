<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\Request;
use App\Aula;
use App\Edificio;
use App\Http\Requests\AulaRequest;
class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $aulas = Aula::all();
      return view('aulas.index',compact('aulas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view("aulas.create");

        $edificios = Edificio::all();
        return view ('aulas.create',compact('edificios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AulaRequest $request)
    {
      $aula=Aula::create($request->all());
      return redirect()->route('aulas.index');
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
    public function edit(Aula $aula)
    {
        //dd($aula)

        return view('aulas.edit',compact('aula'));
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AulaRequest $request, Aula $aula)
    {
        //dd($request,$aula);

        $aula->update($request->all());
        return redirect()->route('aulas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aula $aula)
    {
      try{
        $aula->delete();
        return redirect()->route('aulas.index');

      }catch(Exception $e){
        return $e->get_message();
      }
    }
}
