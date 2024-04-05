<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Persona extends Migration
{
    public function up()
    {
        //
        $this->db->disableForeignKeyChecks();
		$this->forge->addField([
            'id_persona'          => [
                'type'           => 'INT',
                'constraint'     => 12,
                'unsigned'       => true,
                'auto_increment' => true,
				'null'  	   	 => false,
            ],
            'nombre_persona'       => [
                'type'       => 'VARCHAR',
                'constraint' => '40',
				'null'  	 => false,
            ],
            'apellido_persona'       => [
                'type'       => 'VARCHAR',
                'constraint' => '40',
				'null'  	 => false,
            ],
            'tipo_identificacion_persona'       => [
                'type'       => 'VARCHAR',
                'constraint' => '40',
				'null'  	 => false,
            ],
            'nro_identificacion_persona'       => [
                'type'       => 'VARCHAR',
                'constraint' => '40',
				'null'  	 => false,
            ],
            'sexo_persona'       => [
                'type'       => 'VARCHAR',
                'constraint' => '40',
				'null'  	 => false,
            ],
            'fecha_nacimiento_persona'       => [
                'type'       => 'DATE',
                
				'null'  	 => false,
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
        $this->forge->addKey('id_persona', true);
      
        $this->forge->createTable('Persona');
		$this->db->enableForeignKeyChecks();		                
    }

    public function down()
    {
        $this->forge->dropTable('Persona');
    }
}
