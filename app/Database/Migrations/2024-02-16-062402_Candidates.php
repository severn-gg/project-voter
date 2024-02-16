<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Candidates extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'candidate_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'candidate_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'picture_url' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addPrimaryKey('candidate_id');
        $this->forge->createTable('candidates');
    }

    public function down()
    {
        $this->forge->dropTable('candidates');
    }
}
