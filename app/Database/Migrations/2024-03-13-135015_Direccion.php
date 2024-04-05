<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Direccion extends Migration
{
    public function up()
    {
		$this->db->disableForeignKeyChecks();
		$this->forge->addField([
            'id_direccion'          => [
                'type'           => 'INT',
                'constraint'     => '12',
                'unsigned'       => true,
                'auto_increment' => true,
				'null'  	   	 => false,
            ],
          
            'barrio'          => [
                'type'           => 'TEXT',
				'null'  	   	 => true,
            ],
            'calle'          => [
                'type'           => 'TEXT',
				'null'  	   	 => true,
            ],
            
            'nro'          => [
                'type'           => 'TEXT',
				'null'  	   	 => true,
            
            ],
            'piso'          => [
                'type'           => 'TEXT',
				'null'  	   	 => true,
            
            ],
            'apartamento'          => [
                'type'           => 'TEXT',
				'null'  	   	 => true,
            
            ],
            'manzana'          => [
                'type'           => 'TEXT',
				'null'  	   	 => true,
            
            ],
            'lote'          => [
                'type'           => 'TEXT',
				'null'  	   	 => true,
            
            ],
            'entre_calle_1'          => [
                'type'           => 'TEXT',
				'null'  	   	 => true,
            
            ],
            'entre_calle_2'          => [
                'type'           => 'TEXT',
				'null'  	   	 => true,
            
            ],
            'codigo_postal'          => [
                'type'           => 'TEXT',
				'null'  	   	 => true,
            
            ],
            'longuitud'          => [
                'type'           => 'TEXT',
				'null'  	   	 => true,
            
            ],
            'latitud'          => [
                'type'           => 'TEXT',
				'null'  	   	 => true,
            
            ],
            'id_persona'          => [
                'type'           => 'INT',
                'constraint'     => '12',
                'unsigned'       => true,
				'null'  	   	 => true,
            
            ],      
            'id_pais'          => [
                'type'           => 'INT',
                'constraint'     => '12',
                'unsigned'       => true,
				'null'  	   	 => true,
            
            ],       
            'id_provincia'          => [
                'type'           => 'INT',
                'constraint'     => '12',
                'unsigned'       => true,
				'null'  	   	 => true,
            
            ],    
            'id_localidades'          => [
                'type'           => 'INT',
                'constraint'     => '12',
                'unsigned'       => true,
				'null'  	   	 => true,
            
            ],     

            'created_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],			
        ]);
        $this->forge->addKey('id_direccion', true);
        $this->forge->addForeignKey('id_persona', 'persona', 'id_persona', 'CASCADE', 'SET NULL');//SET NULL
        $this->forge->addForeignKey('id_pais', 'paises', 'id_pais', 'CASCADE', 'SET NULL');//SET NULL
        $this->forge->addForeignKey('id_provincia', 'provincias', 'id_provincias', 'CASCADE', 'SET NULL');//SET NULL
        $this->forge->addForeignKey('id_localidades', 'localidades', 'id_localidades', 'CASCADE', 'SET NULL');//SET NULL
        $this->forge->createTable('direccion');
		$this->db->enableForeignKeyChecks();	        
    }

    public function down()
    {
        $this->forge->dropTable('direccion');
    }
}
