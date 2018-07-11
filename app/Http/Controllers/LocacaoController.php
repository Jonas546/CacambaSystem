<?php

namespace Cacamba_System\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Cacamba_System\Cacamba;
use Cacamba_System\Funcionario;
use Cacamba_System\Locacao;
use Cacamba_System\Facade;
use Validator;

class LocacaoController extends Controller
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
        $table = Locacao::where('status' ,'=', 'Aberto')->paginate(10);

        if($request->ajax()) {

         return view('lc_table', compact('table'));

        }

        return view('Gerenciar_locacao', compact('table'));
    }

    public function pagination(){

        $table = Locacao::where('status' ,'=', 'Aberto')->latest()->paginate(10);
        return response()->json($table);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $motorista = Funcionario::where('cargo' , '=', 'Motorista')->
        where('status' ,'=', 'Ativo')->get();

        $cacamba = Cacamba::where('status', '=', 'Livre')->get();

        return view('nova_locacao', compact('motorista','cacamba'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        
        $table = Facade::getInstance();
        $query = $table->efetuar_locacao($r->cb, $r->fci, $r->fcr, $r->cliente, $r->end, $r->cep, $r->cidade, $r->uf, $r->unit, $r->dia, $r->total, $r->saida, $r->volta, $r->status);

            return response()->json(['message' => 'ok', 'cod' => $r->cb]);

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
        ->where('status' ,'=', 'Aberto')
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

    public function show_nota($name)
    {
        return Locacao::gerar_nota($name);
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
    public function update(Request $request, $id = null)
    {

        if($request->type = 'prorrogar'){

            $table = Locacao::find($request->id);
            $table->dias = $request->dias;
            $table->fim = $table->date_converter($request->volta);
            $table->total = $request->total;

            $table->update();

            return response()->json(['message' => 'ok']);

        }
    }

    public function update_fin(Request $request, $id = null){

        $table = Facade::getInstance();
        $table->fechar_locacao($request->id);

        return response()->json(['message' => 'ok']);

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

    public function getNota($aux){
    
    $query = Locacao::where('id_cacamba', '=', $aux)->get();

    foreach ($query as $aux) {
        $numero = $aux->id;
    }
 
    return \PDF::loadView('locacao_nota', compact('query'))
                // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
                ->stream("Nota_de_locacao_pedido".$numero.".pdf");
    }

    public function getNota_id($id){
    
    $query = Locacao::where('id', '=', $id)->get();

    foreach ($query as $aux) {
        $numero = $aux->id;
    }
 
    return \PDF::loadView('locacao_nota', compact('query'))
                // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
                ->stream("Nota_de_locacao_pedido".$numero.".pdf");
    }

    public function Teste(){

        return view('locacao_nota');

    }

}
