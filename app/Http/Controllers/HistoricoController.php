<?php

namespace Cacamba_System\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Cacamba_System\Cacamba;
use Cacamba_System\Funcionario;
use Cacamba_System\Locacao;
use Cacamba_System\Facade;
use Validator;

class HistoricoController extends Controller
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

    public function index(Request $request)
    {
        
        $table = Locacao::where('status' ,'=', 'Fechado')->paginate(10);

        if($request->ajax()) {

         return view('lc_hist', compact('table'));

        }

        return view('historico', compact('table'));

    }

    public function pagination(){

        $table = Locacao::where('status' ,'=', 'Fechado')->latest()->paginate(10);
        return response()->json($table);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $table = Locacao::where('id', '=', $id)
        ->where('status' ,'=', 'Fechado')
        ->get(); 
        $row = $table->count();

        if ($row > 0){

        foreach ($table as $t) {
            
            $id = $t->id;
            $cliente = $t->cliente;
            $endereco = $t->endereco;
            $cep = $t->cep;
            $cidade = $t->cidade;
            $uf = $t->uf;
            $valor_unit = $t->valor_unit;
            $dias = $t->dias;
            $total = $t->total;
            $inicio = $t->inicio;
            $fim = $t->fim;
            $cacamba = $t->id_cacamba;
            $m_ida = $t->motorista_ida;
            $m_volta = $t->motorista_volta;    

        }

        $table1 = Funcionario::where('id', '=', $m_ida)->get();

        foreach ($table1 as $t1) {
            $motorista_ida = $t1->nome;
        }

        $table2 = Funcionario::where('id', '=', $m_volta)->get();

        foreach ($table2 as $t2) {
            $motorista_volta = $t2->nome;
        }

        return response()->json([
            'id' => $t->id,
            'cliente' => $t->cliente,
            'endereco' => $t->endereco,
            'cep' => $t->cep,
            'cidade' => $t->cidade,
            'uf' => $t->uf,
            'valor_unit' => $t->valor_unit,
            'dias' => $t->dias,
            'total' => $t->total,
            'inicio' => $t->inicio,
            'fim' => $t->fim,
            'cacamba' => $t->id_cacamba,
            'm_ida' => $motorista_ida,
            'm_volta' => $motorista_volta
        ]);  

    } else {

        return response()->json(['message' => 'error']);

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
        $table = Locacao::find($id);
        $table->delete();

        return response()->json(['message' => 'ok']);
    }
}
