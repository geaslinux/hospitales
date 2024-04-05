<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Parametros extends Migration
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
            'dia_semana'       => [
                'type'       => 'INT',
                'constraint'     => '1',
				'null'  	 => false,
            ],
            'm_hora_desde'          => [
                'type'           => 'TIME',
				'null'  	   	 => true,
            ],
            'm_hora_hasta'       => [
                'type'           => 'TIME',
				'null'  	   	 => true,
            ],
            't_hora_desde'          => [
                'type'           => 'TIME',
				'null'  	   	 => true,
            ],
            't_hora_hasta'       => [
                'type'           => 'TIME',
				'null'  	   	 => true,
            ],            
            'tiempo'       => [
                'type'           => 'TIME',
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
        $this->forge->addForeignKey('id_medico', 'users', 'id', 'CASCADE', 'SET NULL');//SET NULL
        $this->forge->createTable('parametros');
		$this->db->enableForeignKeyChecks();        
    }

    public function down()
    {
        $this->forge->dropTable('parametros');
    }
}
