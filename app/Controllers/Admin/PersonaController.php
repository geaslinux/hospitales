<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use Hashids\Hashids;

use Myth\Auth\Models\useModel;


use Config\Services;

//use App\Entities\Detenido;

use App\Entities\Persona;
use App\Models\LocalidadesModel;


class PersonaController extends BaseController
{
public function index()
{

	helper('auth');

	$searchData = $this->request->getGet();

	$search = "";
	if(isset($searchData) && isset($searchData['search'])){
	   $search = strtoupper($searchData['search']);
	}		

	$model = model('PersonaModel');

	$model->select('nombre_persona,apellido_persona,tipo_identificacion_persona,nro_identificacion_persona,sexo_persona,fecha_nacimiento_persona')
		->orderBy('persona.created_at','ASC');
		
		

		
		
		

		

		if($search != ''){
			$model->Like('nro_identificacion_persona', $search)
				->orLike('UPPER(apellido_persona)', $search);
			}                                
		
		                           
	
	
	return view('admin/persona_list',[
		'persona' => $model->paginate('10'),//config('detenido')->regPerPage
						
		'pager' => $model->pager,
		'search' => $search,			
	]);				
}
    
    
public function create()
{
    helper('form');
    $modelPais = model('PaisModel');
    $optionPais = $modelPais->findAll();  // Obtener todos los países directamente
	$modelProvincia = model('ProvinciaModel');
    $optionProvincia = $modelProvincia->findAll();  // Obtener todos los países directamente
	$modelLocalidades = model('LocalidadesModel');
    $optionLocalidades = $modelLocalidades->findAll();  // Obtener todos los países directamente
	
    return view('admin/persona_create', [
        'pais' => $optionPais,
		'provincia' => $optionProvincia,
		'localidades' => $optionLocalidades,
		
    ]);
}
public function por_provincia($id_provincia)
{
    $modelLocalidades = new LocalidadesModel();
    $localidades = $modelLocalidades->where('id_provincia', $id_provincia)->findAll();

    return $this->response->setJSON($localidades);
}



	public function store()
	{

		if(!$this->valida()){
			return redirect()->back()->withInput()
				->with('msg', [
					'type' => 'danger',
					'body' => 'Tienes campos incorrectos o incompletos verifique!',
				])
				->with('errors', $this->validator->getErrors());
		}
		
		$persona = new Persona($this->request->getPost());
       
		$model = model('PersonaModel');
		
		$model->save($persona);
		
		if($this->request->getVar('iframe')){
			Services::session()->setFlashdata('msg', [
				'type' => 'success',
				'body' => 'La Persona fue guardada correctamente',
			
			]);
			echo "<script>var soyTuPadre = window.parent; soyTuPadre.postMessage('reload', '*');</script>";
		}else{		
			return redirect()->to(base_url(route_to('persona_list', $this->request->getVar('id_persona'))))->with('msg',[
				'type' => 'success',
				'body' => 'La Persona fue guardada correctamente',
			]);
		}
		
	}	
    public function valida(){
		return $this->validate([
			
            'nombre_persona'=>'required',
			'apellido_persona'=>'required',
			'tipo_identificacion_persona'=>'required',
			'nro_identificacion_persona'=>'is_unique[persona.nro_identificacion_persona,nro_identificacion_persona,ignore_value]',
			'sexo_persona'=>'required',
			'fecha_nacimiento_persona'=>'required',
		]);
	}

}
	
   
            
       
   


