<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Attendance extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Attendance_id' => [
                'type' => 'int',
                'auto_increment' => true
            ],
            
            'attendee_id' => [
                'type' => 'int',
                'constraint' => '255'
                
            ],
            'ea_id' => [
                'type' => 'int',
                'constraint' => '255'
                
            ],
            
           
            'event_id' => [
                'type' => 'int',
                'constraint' => '255'
                
            ],
            
            'date_time' => [
                'type' => 'datetime',
           
            ],
            

        ]);
        $this->forge->addPrimaryKey('Attendance_id');
        $this->forge->createTable('Attendance');
    
    }

    public function down()
    {
        $this->forge->dropTable('Attendance');
    }
}
?>