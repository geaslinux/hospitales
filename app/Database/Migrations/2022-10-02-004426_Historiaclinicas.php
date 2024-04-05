<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HistoriaClinica extends Migration
{
    public function up()
    {
		$this->db->disableForeignKeyChecks();
		$this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => '12',
                'unsigned'       => true,
                'auto_increment' => true,
				'null'  	   	 => false,
            ],
            'fecha_historia_clinica'       => [
                'type'       => 'DATE',
				'null'  	 => false,
            ],
            'historia_clinica'          => [
                'type'           => 'TEXT',
				'null'  	   	 => true,
            ],
            'motivo'          => [
                'type'           => 'TEXT',
				'null'  	   	 => true,
            ],
            'tratamiento'          => [
                'type'           => 'TEXT',
				'null'  	   	 => true,
            ],
            'prespuesto'          => [
                'type'           => 'TEXT',
				'null'  	   	 => true,
            ],
            'medicacion'          => [
                'type'           => 'TEXT',
				'null'  	   	 => true,
            ],
            
            'observaciones'          => [
                'type'           => 'TEXT',
				'null'  	   	 => true,
            
            ],
            'id_medico'          => [
                'type'           => 'INT',
                'constraint'     => '11',
                'unsigned'       => true,
				'null'  	   	 => true,
            ],
            'id_paciente'          => [
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
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_paciente', 'pacientes', 'id', 'CASCADE', 'SET NULL');//SET NULL
        $this->forge->addForeignKey('id_medico', 'users', 'id', 'CASCADE', 'SET NULL');//SET NULL
        $this->forge->createTable('historia_clinicas');
		$this->db->enableForeignKeyChecks();	        
    }

    public function down()
    {
        $this->forge->dropTable('historia_clinicas');
    }
}
