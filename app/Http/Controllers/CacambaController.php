<?php

namespace Cacamba_System\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Cacamba_System\Cacamba;
use Validator;

class CacambaController extends Controller
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

        $table = Cacamba::paginate(10);

        if ($request->ajax()) {
            return view('cb_table', compact('table'));
        }

        return view('Gerenciar_Cacamba', compact('table'));
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
        return view('registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // -- Cadastro sem Ajax --

        //$validator = Validator::make($request->all(),[
            //'numb' => 'required',    
        //]); 

        //if ($validator->passes()){

            //$table = Cacamba::getInstance();
            //$table->numero = $request->input('numb');
            //$table->status = $request->input('status');
            //$table->save();

            //return redirect()->back()->with('message', 'Caçamba Registrada com Sucesso!');

        //} else {

          //  return response()->json(['error'=>$validator->errors()->all()]);
            
        //}

        // -- Cadastro com Ajax --

            $table = Cacamba::getInstance();
            $table->numero = $request->numb;
            $table->status = $request->status;

            $val = $table->numero;
            $query = $table->where('numero', '=', $val);
            $cod = $query->count();


            if($cod > 0){

                return response()->json(['message'=>'error']);

            }  

            if($cod < 1){

                $table->save();
                return response()->json(['message'=>'ok']);

            }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $table = Cacamba::getInstance();
        $query = $table->where('numero' , '=', $id)->get();
        $cod = $query->count();

        if($cod > 0){

            foreach ($query as $key) {
            
            return response()->json(['id' => $key->id, 
                'numero' => $key->numero, 
                'status' => $key->status]); }

        } 

        if ($cod < 1){

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
        $table = Cacamba::find($id);
        $table->numero = $request->numb;
        $table->status = $request->status;

        $val = $table->numero;
        $query = $table->where('numero', '=', $val);
        $cod = $query->count();


        if($cod > 0){

            return response()->json(['message'=>'error']);

        }  

        if($cod < 1){

            $table->update();
            return response()->json(['message'=>'ok']);

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        
        $table = Cacamba::find($id);
        $table->delete();
        return response()->json(['message'=>'ok']);

    }

    public function Teste($var = null){
        return 'Testando '.$var;
    }

}
