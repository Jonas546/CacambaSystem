<?php

namespace Cacamba_System;

use Illuminate\Database\Eloquent\Model;
use Cacamba_System\Cacamba;
use Cacamba_System\Funcionario;
use Cacamba_System\Locacao;

class Facade extends Model
{
    
	static private $instance;

	static public function getInstance(){
		if(!isset(self::$instance)){
			self::$instance = new Facade(); 
		}

		return self::$instance;
	}

	public function efetuar_locacao($id_cacamba, $id_m_ida, $id_m_volta, $cliente, $end, $cep, $cid, $uf, $unit, $dias, $total, $data_inicio, $data_fim, $status){

		$l = Locacao::getInstance();
		$c = Cacamba::find($id_cacamba);

		$l->motorista_ida = $id_m_ida;
                $l->motorista_volta = $id_m_volta;
                $l->id_cacamba = $id_cacamba;
                $l->cliente = $cliente;
                $l->endereco = $end;
                $l->cep = $cep; 
                $l->cidade = $cid;
                $l->uf = $uf; 
                $l->valor_unit = $unit;
                $l->dias = $dias;
                $l->total = $total;
                $l->inicio = $l->date_converter($data_inicio);
                $l->fim = $l->date_converter($data_fim);  
                $l->status = $status; 

                $l->save();

                $c->status = 'Alugada';
                $c->update();

	}

        public function fechar_locacao($id){

                $l = Locacao::find($id);
                $table = Locacao::find($id)->get();

                $l->status = "Fechado";
                $l->update();

                foreach ($table as $key) {
        
                     $cid = $key->id_cacamba;        

                }

                $c = Cacamba::find($cid);

                $c->status = "Livre";
                $c->update();

        }

}

?>
