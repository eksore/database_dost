<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class scores extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'scores_id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'attendance_id' => [
                'type' => 'INT',
                
            ],
            'iq_id' => [
                'type' => 'INT',
                'constraint' => '2' 
            ],
            'datetime_start' => [
                'type' => 'datetime',
                
            ],
            'datetime_end' => [
                'type' => 'datetime',
                
            ],
            'scores' => [
                'type' => 'int',
                'constraint' => '255'
            ],
            'details' => [
                'type' => 'text',
                'constraint' => '255'
            ],
            
        ]);
        $this->forge->addPrimaryKey('scores_id');
        $this->forge->createTable('scores');
    }

    public function down()
    {
        $this->forge->dropTable('scores');
    }
}
?>