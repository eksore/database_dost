<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Events extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Events_id' => [
                'type' => 'int',
                'auto_increment' => true
            ],
            
            'date_start' => [
                'type' => 'datetime',
           
            ],
            'date_end' => [
                'type' => 'datetime',
           
            ],
            
            'event_name' => [
                'type' => 'varchar',
                'constraint' => '255'
                
            ],
            'Events_description' => [
                'type' => 'varchar',
                'constraint' => '255'
                
            ],
            'Venue' => [
                'type' => 'varchar',
                'constraint' => '255'
            
            ],
            'banner_img' => [
                'type' => 'varchar',
                'constraint' => '255'
            ],
            'qr_code' => [
                'type' => 'varchar',
                'constraint' => '255'
            ],
            

        ]);
        $this->forge->addPrimaryKey('Events_id');
        $this->forge->createTable('Events');
    }

    public function down()
    {
        $this->forge->dropTable('Events');
    }
}
?>