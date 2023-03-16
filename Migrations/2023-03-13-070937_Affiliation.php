<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class affiliation extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'affiliation_id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'affiliation' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'affiliation_type' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            
        ]);
        $this->forge->addPrimaryKey('affiliation_id');
        $this->forge->createTable('affiliation');
    }

    public function down()
    {
        $this->forge->dropTable('affiliation');
    }
}
?>