<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EA extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'EA_id' => [
                'type' => 'int',
                'auto_increment' => true
            ],
            
            'event_id' => [
                'type' => 'int',
                'constraint' => '255' 
            ],
            'date_start' => [
                'type' => 'datetime',
                
                
            ],
            'date_end' => [
                'type' => 'datetime',
              
                
            ],
           
            'ea_name' => [
                'type' => 'varchar',
                'constraint' => '255'
                
            ],
            'ea_description' => [
                'type' => 'text',
                'constraint' => '255'
                
            ],
            'venue' => [
                'type' => 'varchar',
                'constraint' => '255'
                
            ],
            
            'banner' => [
                'type' => 'varchar',
                'constraint' => '255'
                
            ],
            'qr_code' => [
                'type' => 'varchar',
                'constraint' => '255'
                
            ],

        ]);
        $this->forge->addPrimaryKey('EA_id');
        $this->forge->createTable('EA');
    }

    public function down()
    {
        $this->forge->dropTable('EA');
    }
}
?>