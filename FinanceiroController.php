<?php

namespace Cacamba_System\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Cacamba_System\Gastos;
use Cacamba_System\Locacao;
use Cacamba_System\Funcionario;
use Validator;
use DB;

class FinanceiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth.role');
    }

    public function index()
    {
        //
    }

    public function despesas()
    {
        return view('Relatorio_Gastos');
    }

    public function receitas()
    {
        return view('Relatorio_Receitas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $table = Funcionario::where('status', '=', 'Ativo')->get();
        return view('registrar_gasto', compact('table'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $table = Gastos::getInstance();
        $table->user_id = $request->func;
        $table->nome = $request->nome;
        $table->descricao = $request->tipo;
        $table->qtde = $request->qtde;
        $table->valor = $request->valor;
        $table->data = $table->date_converter($request->data_dia);
        $table->save();

        return response()->json(['message' => 'ok']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_gastos(Request $request)
    {

        $t = Gastos::getInstance();

		$inicio = $request->data_inicio;
		$fim = $request->data_fim;	
		
        $table = DB::table('gastos')
        ->join('funcionarios' ,'funcionarios.id', '=', 'gastos.user_id')
        ->select('gastos.*', 'funcionarios.nome as func')
        ->whereBetween('gastos.data', array($t->date_converter($inicio), $t->date_converter($fim)))
        ->get();

        $row = $table->count();

        if($row > 0){

            return view('dp_table', compact('table', 'row', 'inicio', 'fim'));

        } else {

            $error = 'Dados não Encontrados';
            return view('dp_table', compact('error', 'row'));

        }

    }

    public function show_receitas(Request $request)
    {

        $t = Locacao::getInstance();
			
		$inicio = $request->data_inicio;
		$fim = $request->data_fim;	
			
		$table = Locacao::whereBetween('inicio', array($t->date_converter($inicio), $t->date_converter($fim)))
		->get();

		$row = $table->count();

		if($row > 0){

			return view('rc_table', compact('table', 'row', 'inicio', 'fim'));

		} else {

            $error = 'Dados não Encontrados';
            return view('rc_table', compact('error', 'row'));

		}
	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $table = Gastos::find($id);
        $table->delete();

        return view('dp_del_confirm');
    }

    public function getRelGastos(Request $request){

        $data_inicio = $request->d_inicio;
        $data_fim = $request->d_volta;

        $t = Gastos::getInstance();

        $table = DB::table('gastos')
        ->join('funcionarios' ,'funcionarios.id', '=', 'gastos.user_id')
        ->select('gastos.*', 'funcionarios.nome as func')
        ->whereBetween('gastos.data', array($t->date_converter($request->d_inicio), $t->date_converter($request->d_volta)))
        ->get();

        $sum = DB::table('gastos')
        ->whereBetween('gastos.data', array($t->date_converter($request->d_inicio), $t->date_converter($request->d_volta)))
        ->sum('valor');

 
    return \PDF::loadView('relatorio_gastos_pdf', compact('table', 'data_inicio', 'data_fim', 'sum'))
                // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
                ->stream("Relatorio_Gastos.pdf");
    }

    public function getRelReceitas(Request $request){

        $data_inicio = $request->d_inicio;
        $data_fim = $request->d_volta;

        $t = Locacao::getInstance();

        $table = Locacao::whereBetween('inicio', array($t->date_converter($request->d_inicio), $t->date_converter($request->d_volta)))
        ->get();

        $sum = Locacao::whereBetween('inicio', array($t->date_converter($request->d_inicio), $t->date_converter($request->d_volta)))
        ->sum('total');

 
    return \PDF::loadView('relatorio_receitas_pdf', compact('table', 'data_inicio', 'data_fim', 'sum'))
                // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
                ->stream("Relatorio_Receitas.pdf");
    }

    public function Teste(){

        return view('relatorio_gastos_pdf');

    }

}
