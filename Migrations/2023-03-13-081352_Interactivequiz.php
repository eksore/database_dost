<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class iq extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'iq_id' => [
                'type' => 'int',
                'auto_increment' => true
            ],
            
            'ea_id' => [
                'type' => 'int',
                'constraint' => '255' 
            ],
           
            'title' => [
                'type' => 'varchar',
                'constraint' => '255'
                
            ],
            'description' => [
                'type' => 'text',
                'constraint' => '255'
                
            ],
            'time_limit' => [
                'type' => 'int',
                'constraint' => '255'
            ],

        ]);
        $this->forge->addPrimaryKey('iq_id');
        $this->forge->createTable('iq');
    }

    public function down()
    {
        $this->forge->dropTable('iq');
    }
}
?>