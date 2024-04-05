<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pacientes extends Migration
{
    public function up()
    {
		$this->db->disableForeignKeyChecks();
		$this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 12,
                'unsigned'       => true,
                'auto_increment' => true,
				'null'  	   	 => false,
            ],
            'dni'       => [
                'type'       => 'INT',
                'constraint' => '8',
				'null'  	 => false,
            ],
            'paciente_apellido'       => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
				'null'  	 => false,
            ],
            'paciente_nombre'       => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
				'null'  	 => false,
            ], 
            'genero'       => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
				'null'  	 => false,
            ], 
            'edad'       => [
                'type'       => 'INT',
                'constraint' => '3',
				'null'  	 => false,
            ], 
          
            'domicilio'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
				'null'  	 => false,
            ], 
            'telefono'       => [
                'type'       => 'INT',
                'constraint' => '30',
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
        $this->forge->addKey('id', true);
        $this->forge->createTable('pacientes');
		$this->db->enableForeignKeyChecks();		                        
    }

    public function down()
    {
        $this->forge->dropTable('pacientes');
    }
}
