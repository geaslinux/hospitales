<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Citas extends Migration
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
            'dia_hora'       => [
                'type'       => 'DATETIME',
				'null'  	 => false,
            ],
            'obra_social'       => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
				'null'  	 => false,
            ], 
            'nº_afiliado'       => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
				'null'  	 => false,
            ], 
            'nº_tarjeta'       => [
                'type'       => 'INT',
                'constraint' => '30',
				'null'  	 => false,
            ], 
            'monto_requerido'       => [
                'type'       => 'INT',
                'constraint' => '30',
				'null'  	 => false,
            ], 
            'monto_abonado'       => [
                'type'       => 'INT',
                'constraint' => '30',
				'null'  	 => false,
            ], 
            'cancelacion'       => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
				'null'  	 => false,
            ], 
            'id_paciente'          => [
                'type'           => 'INT',
                'constraint'     => '12',
                'unsigned'       => true,
				'null'  	   	 => true,
            ],
            'id_tratamiento'          => [
                'type'           => 'INT',
                'constraint'     => '12',
                'unsigned'       => true,
				'null'  	   	 => true,
            ],
            'id_medico'          => [
                'type'           => 'INT',
                'constraint'     => '11',
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
        $this->forge->addForeignKey('id_tratamiento', 'tratamientos', 'id', 'CASCADE', 'SET NULL');//SET NULL
        $this->forge->addForeignKey('id_medico', 'users', 'id', 'CASCADE', 'SET NULL');//SET NULL
        $this->forge->createTable('citas');
		$this->db->enableForeignKeyChecks();	        
    }

    public function down()
    {
        $this->forge->dropTable('citas');
    }
}