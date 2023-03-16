<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class questions extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'questions_id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            
            'iq_id' => [
                'type' => 'INT',
                'constraint' => '2' 
            ],
            'question' => [
                'type' => 'text',
                'constraint' => '255'
                
            ],
            
            'choice1' => [
                'type' => 'text',
                'constraint' => '255'
                
            ],

            'choice2' => [
                'type' => 'text',
                'constraint' => '255'
                
            ],
            'choice3' => [
                'type' => 'text',
                'constraint' => '255'
                
            ],
            'choice4' => [
                'type' => 'text',
                'constraint' => '255'
                
            ],
            'answer' => [
                'type' => 'varchar',
                'constraint' => '255'
                
            ],
        ]);
        $this->forge->addPrimaryKey('questions_id');
        $this->forge->createTable('questions');
    }

    public function down()
    {
        $this->forge->dropTable('questions');
    }
}
?>