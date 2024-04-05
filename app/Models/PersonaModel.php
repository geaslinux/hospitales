<?php

namespace App\Models;

use CodeIgniter\Model;
use Hashids\Hashids;

//use App\Entities\Detenido;
use App\Entities\Persona;

class PersonaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'persona';
    protected $primaryKey       = 'id_persona';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = Persona::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nombre_persona','apellido_persona','tipo_identificacion_persona','nro_identificacion_persona','sexo_persona','fecha_nacimiento_persona', ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = ['code'];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

	protected function code($data){
		$hash = new Hashids();
        if(!empty($data['data'])){
            if(is_array($data['data'])){
                foreach($data['data'] as $d){

                    $d->id = $hash->encode($d->id);
                    //d($d->id);
                }
            }else{
                $data['data']->id = $hash->encode($data['data']->id);
            }
        }		
		return $data;		
	}	    
}

	 


