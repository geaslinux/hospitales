<?php

namespace App\Models;

use CodeIgniter\Model;
use Hashids\Hashids;

//use App\Entities\Detenido;
use App\Entities\Direccion;

class DireccionModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'direccion';
    protected $primaryKey       = 'id_direccion';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = Persona::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['barrio','nro','piso','apartamento','manzana','lote','entre_calle_1','entre_calle_2','codigo_postal','longuitud','latitud','id_persona','id_pais','id_provincia','id_localidades'];
  
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

	 