<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEducationsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'institution' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'degree' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
            ],
            'start_year' => [
                'type'       => 'YEAR',
            ],
            'end_year' => [
                'type'       => 'YEAR',
            ],
            'description' => [
                'type'       => 'TEXT',
                'null' => true,
            ],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('educations');
    }

    public function down()
    {
        $this->forge->dropTable('educations');
    }
}
