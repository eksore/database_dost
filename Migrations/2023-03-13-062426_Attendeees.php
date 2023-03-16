<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Attendees extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'attendee_id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'affiliation' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'first_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'middle_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            
            ],
            'last_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'sex' => [
                'type' => 'TEXT',
                'constraint' => '255'
            ],
            'uname' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'qr_code' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
                
            ],
            'contact_number' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'address' => [
                'type' => 'text',
                'constraint' => '255'
                
            ],
            'age' => [
                'type' => 'int',
                'constraint' => '2'
            ],
           
            
        ]);
        $this->forge->addPrimaryKey('attendee_id');
        $this->forge->createTable('attendees');
    }

    public function down()
    {
        $this->forge->dropTable('attendees');
    }
}
?>