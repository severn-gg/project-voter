<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserSelections extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'selection_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'candidate_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'selection_time' => [
                'type' => 'TIMESTAMP',
                'default' => 'CURRENT_TIMESTAMP',
            ],
        ]);
        $this->forge->addPrimaryKey('selection_id');
        $this->forge->addForeignKey('user_id', 'users', 'user_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('candidate_id', 'candidates', 'candidate_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('user_selections');
    }

    public function down()
    {
        $this->forge->dropTable('user_selections');
    }
}
