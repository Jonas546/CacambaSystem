<?php

namespace Cacamba_System\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Cacamba_System\Funcionario;
use Validator;

class FuncionarioController extends Controller
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

        $table = Funcionario::paginate(10);

        if($request->ajax()) {
            return view('fc_table', compact('table'));
        }

        return view('Gerenciar_Funcionario', compact('table'));
    }

    public function pagination(){

        $table = Cacamba::latest()->paginate(10);
        return response()->json($table);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registrar_fc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $table = Funcionario::getInstance();
        $table->nome = $request->nome;
        $table->rg = $request->rg;
        $table->cpf = $request->cpf;
        $table->tel = $request->tel;
        $table->email = $request->email;
        $table->nascimento = $table->date_converter($request->nasc);
        $table->endereco = $request->end;
        $table->cep = $request->cep;
        $table->cidade = $request->cidade;
        $table->uf = $request->uf;
        $table->admissao = $table->date_converter($request->adm);
        $table->demissao = $table->admissao;
        $table->salario = $request->salario;
        $table->cargo = $request->cargo;
        $table->status = "Ativo";

        $table->save();

        return response()->json(['message'=>'ok']);

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

    public function find($id)
    {

        $t = Funcionario::find($id);

        return response()->json(['nome' => $t->nome,
        'rg' => $t->rg,
        'cpf' => $t->cpf,
        'email' => $t->email,
        'tel' => $t->tel,
        'nasc' => $t->nascimento,
        'end' => $t->endereco,
        'cep' => $t->cep,
        'cidade' => $t->cidade,
        'uf' => $t->uf,
        'cargo' => $t->cargo,
        'admissao' => $t->admissao,
        'demissao' => $t->demissao,
        'salario' => $t->salario,
        'status' => $t->status
    ]);
    }

    public function find_name($name)
    {

        $table = Funcionario::where('nome', 'like', $name.'%')->get();
        $val = $table->count();

        if ($val > 0){

        foreach ($table as $t) {  

        return response()->json([
        'ids' => $t->id,    
        'nome' => $t->nome,
        'rg' => $t->rg,
        'cpf' => $t->cpf,
        'email' => $t->email,
        'tel' => $t->tel,
        'nasc' => $t->nascimento,
        'end' => $t->endereco,
        'cep' => $t->cep,
        'cidade' => $t->cidade,
        'uf' => $t->uf,
        'cargo' => $t->cargo,
        'admissao' => $t->admissao,
        'demissao' => $t->demissao,
        'salario' => $t->salario,
        'status' => $t->status
        ]);

        }

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
    public function update(Request $request, $id = null)
    {

        $id = $request->id;
        $table = Funcionario::find($id);
        $table->nome = $request->nome;
        $table->rg = $request->rg;
        $table->cpf = $request->cpf;
        $table->tel = $request->tel;
        $table->email = $request->email;
        $table->nascimento = $table->date_converter($request->nasc);
        $table->endereco = $request->end;
        $table->cep = $request->cep;
        $table->cidade = $request->cidade;
        $table->uf = $request->uf;
        $table->admissao = $table->date_converter($request->adm);
        $table->salario = $request->salario;
        $table->cargo = $request->cargo;


        $table->update();
        return response()->json(['message'=>'ok']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id = null)
    {
        
        $id = $request->id;

        $table = Funcionario::find($id);
        $table->demissao = $table->date_converter($request->dem);
        $table->status = "Desligado";

        $table->update();

        return response()->json(['message'=>'ok']);

    }
}
